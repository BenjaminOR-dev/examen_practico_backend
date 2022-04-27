<?php

namespace App\Http\Controllers\Api\Auth;

use App\Helpers\ApiValidation;
use App\Http\Controllers\Controller;
use App\Models\TBLUsuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request, [
            'login' => ['required', 'string', 'exists:tbl_usuarios,login'],
            'password' => ['required', 'string']
        ]);

        if ($validator->fails()) {
            return ApiValidation::sendErrors($validator->errors());
        }

        $user = TBLUsuarios::where('login', $request->login)->first();
        if (!password_verify($request->password, $user->password)) {
            return ApiValidation::sendErrors([
                'password' => 'La contraseña es incorrecta'
            ]);
        }

        if (!$user->activo) {
            return ApiValidation::sendErrors([
                'login' => "Usuario bloqueado del sistema"
            ]);
        }

        $token = auth()->login($user);
        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json([
            'message' => 'Se ha cerrado la sesión'
        ]);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
