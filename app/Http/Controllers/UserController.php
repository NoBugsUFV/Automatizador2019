<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

//Importando Model de usuários
use JWTAuth;
use Whoops\Exception\ErrorException;

class UserController extends Controller
{
    public function index(Request $req)
    {
        return response()->json(User::all()->first->get()->verified);
    }
    public function register(Request $req)
    {
        if (!$req->has(["name", "username", "email", "password"])) {
            return response("Você não forneceu todos os dados necessários para registro. Preencha-os corretamente e tente novamente", 400);
        } else {
            try {
                $user = User::create([
                    "name" => $req->input("name"),
                    "username" => $req->input("username"),
                    "email" => $req->input("email"),
                    "password" => hash("sha256", $req->input("password")),
                ]);
                return response($user, 200);
            } catch (ErrorException $err) {

            }
        }
    }
    // Método para autenticação
    public function login(Request $req)
    {
        if (!$req->has(["user", "password"])) {
            return response("Você não preencheu todos os campos necessários. Preencha-os e tente novamente", 400);
        } else {
            $user = $req->input("user");
            $pswd = hash("sha256", $req->input("password"));
            $query = User::whereRaw("email='{$user}' OR username='{$user}' AND password='{$pswd}'");
            $data = $query->first();
            $token = array("data" => JWTAuth::fromUser($data), "expires" => "Wed");
            $data["token"] = $token;
            return response()->json($data);
        }
    }
    // Método pra testar a gereção de token
    public function getToken(Request $req, $id)
    {
        return response()->json(JWTAuth::fromUser(User::where("id", $id)->first()),200);
    }
}
