<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\ApiValidation;
use App\Http\Controllers\Controller;
use App\Models\TBLUsuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Inicia sesión con las credenciales de un usuario
     */
    public function loggin(Request $request)
    {
        $validator = Validator::make($request, [
            'login' => ['required', 'string', 'exists:tbl_usuarios,login'],
            'password' => ['required', 'string'],
            'remember_me' => ['nullable', 'boolean']
        ]);

        if ($validator->fails()) {
            return ApiValidation::sendErrors($validator->errors());
        }

        $usuario = TBLUsuarios::where('login', $request->login)->first();
        Auth::login($usuario);
    }
}
