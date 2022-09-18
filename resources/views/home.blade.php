<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Prelim Project</title>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="text-center">
        <nav class="nav justify-content-center">
            <a href="{{url('/')}}" class="nav-link">Home</a>
            <a href="{{url('/about')}}" class="nav-link">About Us</a>
            <a href="{{url('/profile')}}" class="nav-link">Company Profile</a>
        </nav>

        <h1>My Prelim Project Page</h1>

        <div class="card shadow-sm mx-auto" style="width: 500px">
            <div class="card-body">
                <div class="card-title">Welcome To The Company</div>
                <p>
                    Thank You to all of You For Visiting Our Company.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
