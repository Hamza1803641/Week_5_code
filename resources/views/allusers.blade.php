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
                <h1>All users data list></h1>

                <table class="table table-bordered table-striped">
                    <tr>
                        <td>
                            <h2> Email </h2>
                        </td>
                        <td>
                            <h2> Name </h2>
                        </td>
                        <td>
                            <h2> Age </h2>
                        </td>
                        <td>
                            <h2> Gender </h2>
                        </td>
                        <td>
                            <h2> Country</h2>
                        </td>
                        <td>
                            <h2> View</h2>
                        </td>
                        <td>
                            <h2> Delete</h2>
                        </td>
                        <td>
                            <h2> Update</h2>
                        </td>
                    </tr>
                    @foreach ($data as $id => $user)

                        <tr>
                            <td> {{$user->email }}</td>
                            <td> {{$user->name }}</td>
                            <td> {{$user->age }}</td>
                            <td> {{$user->gender }}</td>
                            <td> {{$user->country }}</td>
                            <td> <a href="{{route('view.user',$user->email)}}" class="btn btn-primary btn-sm">View</a></td>
                            <td> <a href="{{route('update.user',$user->email)}}" class="btn btn-danger btn-sm">Update</a></td>

                            <td> <a href="{{route('delete.user',$user->email)}}" class="btn btn-warning btn-sm">Delete</a></td>

                        </tr>
                    @endforeach
                </table>


            </div>
        </div>
    </div>
</body>

</html>