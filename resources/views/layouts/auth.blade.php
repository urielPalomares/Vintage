<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>

    <link rel="stylesheet" href="{{mix('css/auth.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <div class="main-auth">
        <div class="banner"></div>

        <div class="form-container">
            <div class="wrapper">
                <div class="logo">
                    <img src="/img/logo.png" alt="Logo" >
                </div>
                
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>

