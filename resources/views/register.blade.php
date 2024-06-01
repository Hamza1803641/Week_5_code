<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-group {
            margin-bottom: 20px;
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>


    <div class="container mt-5">
             @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

       
        <h2>Register</h2>
        <form method="POST" action="{{ route('register') }}"enctype="multipart/form-data">
            @csrf
        
            <div class="form-group">
               <b><label for="name">Name</label></b> 
                <input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
           <b>  <label for="email">Email</label></b>   
                <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
            <b><label for="password">Password</label></b>
                <input id="password" type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
               <b><label for="password_confirmation">Confirm Password</label></b> 
                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
            </div>
                       
            <div class="form-group">
                <b><label for="age">Age</label></b>
                <input id="age" type="text" name="age" class="form-control" value="{{ old('age') }}" required>
            </div>

            <div class="form-group">
              <b>  <label for="picture">Profile Picture</label></b>
                <input id="picture" type="file" name="picture" class="form-control" value="{{ old('picture') }}" required>
            </div>

            
            <div class="form-group">
               <b> <label for="bio">Bio</label><br></b>
                <textarea name="bio" id="bio" cols="80" rows="4"></textarea>
         </div>
             
               <div class="form-group">
              <b> <label for="interest">Interest</label><br></b> 
                <input type="checkbox" id="interest1" name="interest1" value="sports">
                <label for="interest">Sports</label>

                <input type="checkbox" id="interest2" name="interest2" value="music">
                <label for="interest">Music</label>

                <input type="checkbox" id="interest3" name="interest3" value="movies">
                <label for="interest">Movies</label>
             </div>
             <div class="form-group">
               <b> <label for="email">Gender</label><br></b>
                <input type="radio" id="gender" name="gender" value="Male">
                <label for="interest">Male</label>

                <input type="radio" id="gender" name="gender" value="Female">
                <label for="interest">Female</label>


            </div>
                    
                
            <div class="form-group">
                <b><label for="birthdate">Birthdate</label></b>
               <input id="birthdate" type="date" name="birthdate" class="form-control" required>
            </div>

            <div class="form-group">
               <b> <label for="phone">Phone</label></b>
                <input id="phone" type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
            </div>
            <div class="form-group">
               <b> <label for="address">Address</label></b>
                <input id="address" type="text" name="address" class="form-control" value="{{ old('address') }}" required>
            </div>
            <div class="form-group">
               <b> <label for="city">City</label></b>
                <input id="city" type="text" name="city" class="form-control" value="{{ old('city') }}" required>
            </div>
            <div class="form-group">
               <b> <label for="zip_code">ZIP Code</label></b>
                <input id="zip_code" type="text" name="zip_code" class="form-control" value="{{ old('zip_code') }}" required>
            </div>
            <div class="form-group">
                <b><label for="country">Country</label></b>
                <input id="country" type="text" name="country" class="form-control" value="{{ old('country') }}" required>
            </div>

            <div class="form-group">
                <b><label for="url">Website URL</label></b>
                <input id="url" type="text" name="url" class="form-control" value="{{ old('url') }}" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" name="terms_and_conditions" class="form-check-input" id="terms_and_conditions" required>
                <label class="form-check-label" for="terms_and_conditions">I accept the terms and conditions</label>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>
</html>
