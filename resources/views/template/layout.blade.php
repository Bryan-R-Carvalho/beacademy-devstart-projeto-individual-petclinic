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
<body  style="background-color: #fefefe">
    <header class="container-fluid header p-0">
        <nav class="navbar navbar-expand-sm navbar-light bg-success py-3">
            <a class="navbar-brand p-0" href="/"><img src="{{ asset('icon.png') }}" alt="logo" width="30px" height="30px"></a>
            <div class="nav-navbar collapse navbar-collapse " id="navbarSupportedContent">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link text-white" href="/users">Usuarios</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link text-white" href="/owners">Tutores</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link text-white" href="/vaccines">Vacinas</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-9">
                            <ul class="navbar-nav mr-auto">
                                @if(Auth::user())
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="#">{{Auth::user()->name}}</a>
                                    </li>
                                    @if(Auth::user()->is_admin == 1)
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="#">Dashboard</a>
                                        </li>
                                    @endif
                                    <li class="nav-item">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <x-responsive-nav-link class="nav-link text-white" :href="route('logout')"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();" >
                                                {{ __('Sair')}}
                                            </x-responsive-nav-link>
                                        </form>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('login')}}">Entrar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('register')}}">Cadastrar</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    @yield('body')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>