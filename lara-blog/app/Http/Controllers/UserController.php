<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUserAction($id) {

        $user = User::find($id);
        echo $user-> email."<br>";
        echo $user-> meno." ". $user-> priezvisko."<br>";
        echo $user-> vek."<br>";
        echo $user->updated_at;
    }
    public function showInsertFormAction(){
        return view('adduser');

    }

    public function insertUserAction(\Illuminate\Http\Request $request ) {
        $user = new User();
        $user->meno= $request->input('meno');
        $user->priezvisko = $request->input('heslo');
        $user->email= $user->meno. ".". $user->prezvisko. "@gmail.com";
        $user-> vek = mt_rand(1,80);
        $user->save();
        return response()->view('adduser');
    }

    public function updateUserAction($id,Request $request) {
        $user= User::find($id);
        $user->meno= $request->input('meno');
        $user->priezvisko = $request->input('heslo');
        $user->email= $user->meno. ".". $user->prezvisko. "@gmail.com";
        $user-> vek = mt_rand(1,80);
        $user->update();
    }
    public function deleteUserAction($id,Request $request) {
        $user= User::finf($id);
        $user->delete();

    }
    public function showAllUsers($id) {
        $user= User::all();
        return view('showAllUsers',['users'=> $user]);

    }
}
