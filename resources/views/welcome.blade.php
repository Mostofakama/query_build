<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>curd project in laravel "get methid"</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="tb">
            <table class="table table-striped">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>view</th>
                    {{-- <th>update</th> --}}
                    <th>delete</th>
                  
                </tr>
                @foreach ($data as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td><a class="btn btn-primary btn-sm " href="{{route('one.users.detels',$user->id)}}">view</a></td>
                    {{-- <td><a class="btn btn-sm btn-success " href="#">Update</a></td> --}}
                    <td><a class="btn btn-sm btn-danger " href="{{route('delete.user',$user->id)}}">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>