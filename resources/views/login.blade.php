<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
    <h1>Login Page</h1>
    <form action="{{url('/login/checkExistingUser')}}" method="POST">
        @csrf

        Email &emsp;: <input type="text" name="Email" id="Email"> <br>
        {!!$errors->first("Email", "<span style='color: red'>:message</span><br><br>")!!}

        Password&emsp;: <input type="password" name="Password" id="Password"> <br>
        {!!$errors->first("Password", "<span style='color: red'>:message</span><br><br>")!!}
        <br>
        <button type="submit">LOGIN</button>

    </form>
</body>
</html>