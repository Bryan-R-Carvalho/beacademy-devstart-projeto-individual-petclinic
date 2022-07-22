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
<body>
    <header class="container-fluid header bg-dark">

        <nav class="navbar navbar-expand-md navbar navbar-dark bg-success">
                <ul class="navbar-nav mr-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/"><img src="{{ asset('icon.png') }}" alt="logo" width="30px" height="30px"></a>
                    <li class="nav-item ">
                        <a class="nav-item nav-link" href="/users">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="/users/create">Novo usuario</a>
                    </li>
                </ul>
        </nav>
    </header>
    </div>
    @yield('body')
    
</body>
</html>