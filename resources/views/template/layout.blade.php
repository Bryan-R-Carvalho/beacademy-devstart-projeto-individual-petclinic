<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body  style="background-color: #fff">
    <header class="container-fluid header p-0 pb-3">
        <nav class="navbar navbar-expand-sm navbar-light bg-success">
            <a class="navbar-brand" href="/"><img src="{{ asset('icon.png') }}" alt="logo" width="30px" height="30px"></a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link" href="/users">Usuarios</a>
                <a class="nav-item nav-link" href="/owners">Tutores</a>
                <a class="nav-item nav-link" href="/vaccines">Vacinas</a>

                </div>
            </div>
        </nav>
    </header>
    </div>
    @yield('body')
</body>
</html>