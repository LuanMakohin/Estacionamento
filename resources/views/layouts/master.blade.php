<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body>

    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--Login-->
            @guest
                <div class="row justify-content-end">
                    <div class="col">
                    @if (Route::has('login'))
                            <a class="nav-link" style="color: white" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                    </div>
                    @endif
                    <div class="col" >
                    @if (Route::has('register'))
                            <a class="nav-link" style="color: white" href="{{ route('register') }}">{{ __('Cadastro') }}</a>
                    @endif
                    </div>
                </div>

            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" style="color: white" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Sair') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
            <!--Fim Login-->

            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">

                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cartoes.index')}}">Cartões</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('vagas.index')}}">Vagas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Relatórios</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main class="container-md" style="min-height: 78vh; margin-top: 100px">
        @yield('content')
    </main>
    @include('layouts.footer')
<script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
