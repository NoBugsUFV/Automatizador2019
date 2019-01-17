<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;


//Importando Model de usuários
use JWTAuth;
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
        if (!$req->json()->has("user","password")) {
            return response("Você não preencheu todos os campos necessários. Preencha-os e tente novamente", 400);
        } else {
            try {
                $json = $req->json()->all();
                $user = $json["user"];
                $pswd = hash("sha256", $json["password"]);
                $query = User::whereRaw("(email='{$user}' OR username='{$user}') AND password='{$pswd}'");
                $user = $query->first();
                if (!$user){
                    return response()->json("Verifique os dados novamente",400);
                }
                $user->setHidden(["id","created_at","updated_at","password", "remember_token"]);
                $token = ["data" => JWTAuth::fromUser($user), "expires" => 300];
                $data = [ "user" => $user, "token" => $token ];
                return response()->json($data);
            }
            catch(QueryException $e) {
                return response()->json($e,400);
            }
        }
    }
    // Método pra testar a gereção de token
    public function byToken(Request $req, $token)
    {
        try {
            $user = JWTAuth::toUser($token);
            return response()->json($user,200);
        }
        catch(TokenInvalidException $e){
            return response()->json("O token fornecido é inválido",400);
        }
        catch(JWTException $e){

        }
    }
}
