<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   public function showUsers(){
    $user =DB::table('students')->get();

    return view("allusers",['data'=> $user]);

    //Method4
    // foreach($user as $users){
    //     echo $users->name ."<br>";
    // }
    //Method3//dump($user);
    //Method2//dd($user);
    //Method1// return $user;
   }

   public function singleUser(string $id){
     $user =DB::table('students')->where('id',$id)->get();
     return view('user',['data' => $user ]);

   }
}
