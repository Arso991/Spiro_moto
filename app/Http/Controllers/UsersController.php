<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class UsersController extends Controller
{
    public function signup (){
        return view("signup");
    }

    public function signin(){
        return view("signin");
    }

    public function registerstore(Request $request){
        $data = $request->all();

        $request->validate([
            "lastName" => "required|min:3",
            "firstName" => "required|min:3",
            "picture" => "required|mimes:png,jpeg,jpg",
            "email" => "required|email|unique:users|regex:/^[\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}$/",
            "password" => "required|confirmed:password_confirmation|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z])(?=.*[@$!%*?&#^_;:,])[A-Za-z\d@$!%*?&#^_;:,].{8,}$/"
        ]);

        $image = null;
        
        if($request->hasFile("picture")){
            $image = $request->file("picture")->store("picture");
        }

        User::create([
            "lastname" => $data["lastName"],
            "firstname" => $data["firstName"],
            "picture" => $image,
            "email" => $data["email"],
            "password" => Hash::make($data["password"])
        ]);

        $host = URL::temporarySignedRoute("verifyEmail", now()->addMinute(30), ["email" => $data["email"]]);

        Mail::send("mailconfirmation", ["host" => $host, "name" => $data["firstName"]], function($message) use ($data){
            $config = config("mail");
            $name = $data["firstName"];

            $message->subject("Vérification de votre inscription")
                    ->from($config["from"]["address"], $config["from"]["name"])
                    ->to($data["email"], $name);
        });

        return redirect()->back()->with("message", "Consulter votre boite mail pour confirmer votre inscription");
    
    }

    public function verify(Request $request, $email){
        $user = User::where("email", $email)->first();
        if(!$user){
            abort(404);
        }
        if(!$request->hasValidSignature()){
            abort(404);
        }
        $user->update([
            "email_verified_at" => now(),
            "email_verified" => true
        ]);

        return redirect()->route("home");
    }

    public function authenticate(Request $request){
        $data = $request->all();

        $user = Auth::attempt([
            "email" => $data["email"],
            "password" => $data["password"],
            "email_verified" => true
        ]);

        if($user){
            return redirect()->route("home");
        }else{
            return redirect()->back()->with("error", "[Email et ou mot de passe incorrect]");
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route("signIn");
    }
}
