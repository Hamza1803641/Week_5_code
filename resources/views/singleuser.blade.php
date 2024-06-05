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
            <div class="col-6">

                <h1>User Details</h1>

                <table class="table table-bordered table-striped">
                    <tr>
                        <td>
                            <h2> Name </h2>
                        </td>
                        <td>
                            <h2> Email </h2>
                        </td>
                        <td>
                            <h2> Password </h2>
                        </td>
                        <td>
                            <h2> City </h2>
                        </td>
                        <td>
                            <h2> Country</h2>
                        </td>

                    </tr>
                    @foreach ($data as $mail => $users)

                        <td> {{$users->name}}</td>
                        <td> {{$users->email}}</td>
                        <td> {{$users->password}}</td>
                        <td> {{$users->city}}</td>
                        <td> {{$users->country}}</td>

                    @endforeach
                </table>


            </div>
        </div>
    </div>
</body>

</html>