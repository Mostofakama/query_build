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
        <div class="m-4">
        <h1>New Users</h1>
        </div>
        <div class="m-2 w-100">
          <form action="{{route('insert')}}" method="post">
            @csrf
            <div class="my-2 w-100">
                <input class="px-4 py-1" type="text" placeholder="Name" name="name">
            </div>
            
            <div class="my-2 w-100">
                
                <input class="px-4 py-1" type="email" placeholder="Email" name="email">
            </div>
            <div class="my-2 w-100">
              
                <input class="px-4 py-1" type="password" placeholder="password" name="password">
            </div>
            <div class="my-2 w-100">
              
                <input class="px-4 py-1" type="submit" value="submit">
            </div>
          </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>