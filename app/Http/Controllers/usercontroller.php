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

   public function singleuser(string $email)
   {
      $users = DB::table('user')->where('email', $email)->get();
      //  return $users;
      return view('singleuser', ['data' => $users]);
   }
 
public function deleteuser(string $email)
{
   $users = DB::table('user')->where('email',$email)->delete();
   return redirect('/show');                                        
}


}
