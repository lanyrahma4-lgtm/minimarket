@php 
    use Illuminate\Support\Facades\Auth; 
@endphp 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Welcome</title> 

    <style>
        *{
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #fce4ec, #f8bbd0);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .welcome {
            background: white;
            width: 500px;
            padding: 55px 40px;
            text-align: center;
            border-radius: 25px;
            box-shadow: 0 10px 30px rgba(216, 27, 96, 0.15);
        }
        .icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: #fce4ec;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
        }
        h1 {
            font-size: 38px;
            color: #d81b60;
            margin: 0 0 10px;
        }
        p {
            font-size: 18px;
            color: #777;
            margin: 0;
        }
        .role {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 22px;
            border-radius: 20px;
            background-color: #ec407a;
            color: white;
            font-weight: bold;
        }
    </style>
</head> 

<body> 

    <div class="welcome">

    @if (auth()->check() && auth()->user()->isAdmin())
        <h1>Welcome, Admin!</h1>
        <p>Selamat datang di halaman admin.</p>
    @else
        <h1>Welcome, User!</h1>
        <p>Selamat datang di halaman kami.</p>
    @endif

    </div>

</body> 
</html>