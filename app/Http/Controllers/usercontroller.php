<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usercontroller extends Controller
{
   public function showuser()
   {
           $users = DB::table('user')->get();

      return view('allusers', ['data' => $users]);

      //dd( $users);



   }

   public function singleuser(string $email)
   {
      $users = DB::table('user')->where('email', $email)->get();
      //  return $users;
      return view('singleuser', ['data' => $users]);
   }

   public function deleteuser(string $email)
   {
      $users = DB::table('user')->where('email', $email)->delete();
      return redirect('/show')->with('success', 'User Delete successfully');
   }


   public function updateuser(string $email)
   {
      $users = DB::table('user')->where('email', $email)->get();

      //  $users = DB::table('user')->find($email);//   work only in id
      return view('updateuser', ['data' => $users]);

   }
   public function updatepage(Request $request, $email)
   {


      $users = DB::table('user')->where('email', $email)->update([

         'name' => $request->name,
         'email' => $request->email,
         'password' => $request->password,
         'age' => $request->age,
         'country'=>$request->country,

      ]);
      $users = DB::table('user')->where('email', $request->email)->get();

      return redirect('/show')->with('success', 'User updated successfully');

   }
}

