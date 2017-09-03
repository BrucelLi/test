<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
        #reg{}
        #reg td{

        }


    </style>
</head>
<body>
<form action="/login" method="get">
    <table id="reg">
        <tr>
            <td>用户名：</td>
            <td><input type="text" name="username" id="username" placeholder="请输入用户名，3~20"/></td>
        </tr>
        <tr>
            <td>密&nbsp;&nbsp;&nbsp;&nbsp;码：</td>
            <td><input type="password" name="password" /></td>
        </tr>
        <tr>
            <td><input type="submit" value="登录"></td>
        </tr>
    </table>
</form>
</body>
<script type="text/javascript">

</script>
</html>
