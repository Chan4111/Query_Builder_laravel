<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
  ///All Users
  public function showUsers()
  {
    $user = DB::table('students')->get();

    return view("allusers", ['data' => $user]);

    //Method4
    // foreach($user as $users){
    //     echo $users->name ."<br>";
    // }
    //Method3//dump($user);
    //Method2//dd($user);
    //Method1// return $user;
  }

  //Signal User
  public function singleUser(string $id)
  {
    $user = DB::table('students')->where('id', $id)->get();
    return view('user', ['data' => $user]);

  }
  //Add user
  public function addUser()
  {
    $user = DB::table('students')
      ->insert([
        [
          'name' => 'Mohan Kumar',
          'email' => 'Mohan@gmail.com',
          'age' => 29,
          'city' => 'Patna',
          'created_at' => now(),
          'updated_at' => now()

        ],
        [
          'name' => 'Binayak Kumar',
          'email' => 'Binayak@gmail.com',
          'age' => 19,
          'city' => 'Patna',
          'created_at' => now(),
          'updated_at' => now()

        ],
        [
          'name' => 'Ram Kumar',
          'email' => 'Ram@gmail.com',
          'age' => 19,
          'city' => 'Patna',
          'created_at' => now(),
          'updated_at' => now()

        ]
      ]);
    if ($user) {
      echo "<h1>Data Insert is Successful</h1>";
    }
  }

  ///Updated User
  public function updatedUser(){
    $user = DB::table('students')
              ->where('id',3)
              ->update([
                'city' => "Darbhanga",
                'age' =>17
              ]);


              // ->where('id',2)
              // ->update([
              //   'city' => "Mumbai"
              // ]);
   if($user){
     echo "<h1>Updated data</h1>";
   }
  }


  ///Delete User
  public function deleteUser(string $id){
    $user = DB::table('students')
          ->where('id',$id)
          ->delete();

    if($user){
      return redirect()->route('home');
    }

    // if($user){
    //     echo "<h1>Delete Exist data</h1>";
    // }
  }
  
 
}
