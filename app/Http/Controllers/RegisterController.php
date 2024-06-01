<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'age' => 'required|min:2',
            'picture' => 'required|image',
            'bio' => 'required|string',
            'interest.*' => 'required|string|in:Sports,Music,Movies',
            'gender' => 'required|string|in:Male,Female',
            'birthdate' => 'required|date|before:today',
            'phone' => 'required|string|min:11',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'zip_code' => 'required|min:5',
            'country' => 'required|string|max:255',
            'url' => 'required|string',
            'terms_and_conditions' => 'accepted',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Handle file upload
        $picturePath = '';
        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('profile_pictures');
        }

        // Prepare data for insertion
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'age' => $request->age,
            'picture' => $picturePath,
            'bio' => $request->bio,
            'interest' => $request->interest,
            'gender' => $request->gender,
            'birthdate' => $request->birthdate,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'country' => $request->country,
            'url' => $request->url,
        ];

        // Insert data into the database
        DB::table('user')->insert($userData);

        return redirect('/register')->with('success', 'Registration successful!');
    }
}
