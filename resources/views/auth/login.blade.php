<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #fce4ec;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    form {
        background-color: white;
        padding: 30px;
        width: 300px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(233, 30, 99, 0.15);
    }

    h1 {
        text-align: center;
        color: #d81b60;
        margin-bottom: 25px;
    }

    .form-action {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 6px;
        color: #555;
    }

    input {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #f3b6ca;
        border-radius: 7px;
        outline: none;
    }

    input:focus {
        border-color: #ec407a;
    }

    button {
        width: 100%;
        padding: 11px;
        border: none;
        border-radius: 7px;
        background-color: #ec407a;
        color: white;
        font-weight: bold;
        cursor: pointer;
    }

    button:hover {
        background-color: #d81b60;
    }
</style>
</head>

<body>
    <form action="/login" method="post">
        <h1>Login</h1>

        <div class="form-action">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="form-action">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <button type="submit">Login</button>
    </form>
</body>
</html>