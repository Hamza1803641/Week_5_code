<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usercontroller extends Controller
{
   public function showuser()
   {
      $users = DB::table('user')->get();

        // return $users;


      /*  foreach ($users as $use) {
         echo $use->email."<br>";
        }*/

      return view('allusers', ['data' => $users]);

      //dd( $users);



   }

      public function singleuser(){
         $users = DB::table('user')->where('email', )->get();
         
      }
}
