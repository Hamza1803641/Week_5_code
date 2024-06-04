<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL user list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Update User</h1>
                <form method="POST" action="{{ route('update.user', $data->first()->email) }}">
                    @csrf

                    <div class="form-group">
                        <b><label for="name">Name</label></b>
                        <input id="name" type="text" name="name" class="form-control" value="{{ $data->first()->name }}"
                            required>
                    </div>
                    <div class="form-group">
                        <b><label for="email">Email</label></b>
                        <input id="email" type="email" name="email" class="form-control"
                            value="{{ $data->first()->email }}" required>
                    </div>
                    <div class="form-group">
                        <b><label for="password">Password</label></b>
                        <input id="password" type="password" name="password" class="form-control"
                            value="{{ $data->first()->password }}" required>
                    </div>
                    <div class="form-group">
                        <b><label for="age">Age</label></b>
                        <input id="age" type="text" name="age" class="form-control" value="{{ $data->first()->age }}"
                            required>
                    </div>
                    <div class="form-group">
                        <b><label for="age">Country</label></b>
                        <input id="country" type="text" name="country" class="form-control" value="{{ $data->first()->country }}"
                            required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>

                </form>

                </form>


            </div>
</body>

</html>