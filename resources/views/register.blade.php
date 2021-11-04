<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
</head>
<body>
    <h1>Register Page</h1>
    <form action="{{url('/register/addNewUser')}}" method="POST">
        @csrf
        Nama &emsp;: <input type="text" name="Nama" id="Nama"> <br>
        {!!$errors->first("Nama", "<span style='color: red'>:message</span><br><br>")!!}

        Usia&emsp;&emsp;: <input type="text" name="Usia" id="Usia"> <br>
        {!!$errors->first("Usia", "<span style='color: red'>:message</span><br><br>")!!}

        Email &emsp;: <input type="text" name="Email" id="Email"> <br>
        {!!$errors->first("Email", "<span style='color: red'>:message</span><br><br>")!!}

        Password&emsp;: <input type="password" name="Password" id="Password"> <br>
        {!!$errors->first("Password", "<span style='color: red'>:message</span><br><br>")!!}
        <br>
        <button type="submit">REGISTER</button>

    </form>
</body>
</html>