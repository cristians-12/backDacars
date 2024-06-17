<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests; // Importa el trait ValidatesRequests
use App\Models\User; // Importa el modelo User
use Illuminate\Support\Facades\Hash; // Importa Hash para la contraseña
use Illuminate\Support\Facades\Validator; // Importa Validator para la validación



class AuthController extends Controller
{
    public function login(Request $request)
    {
    }


    public function register(Request $request)
    {
        // Define las reglas de validación
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ];

        // Valida los datos de la solicitud
        $validator = Validator::make($request->all(), $rules);

        // Si la validación falla, redirige de vuelta con errores
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Crea un nuevo usuario
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Puedes redirigir o devolver una respuesta según tus necesidades
        return redirect()->route('home')->with('success', 'User registered successfully');
    }
    public function xd()
    {
        return view("hola");
    }
}
