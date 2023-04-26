<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PizzaVilla</title>
    <!--Font-->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> 
    <style>
    .pizzasWrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 100px;
}
   .welcomeWrapper {
    display: flex;
    margin-top: 200px;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    animation: welcomeWrapper 0.5s;
}
@keyframes welcomeWrapper {
0%{
    margin-top: 0;
}    
100%{
    margin-top: 200px;
}
}

.welcomeImg{
    width: 300px !important;
    height: 150px !important;
}
.welcomeOrder{
    color: dodgerblue;
    font-size: 20px;
    font-weight: 600px;
}
.welcomeOrder:hover{
    color: dodgerblue;
    font-size: 24px;
    font-weight: 600px;
}
.createForm-div {
    display: flex;
    margin-top: 100px;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.createForm{
    display: flex;
    flex-direction: column;
    line-height: 35px;
}
.createForm label{
  font-size: 20px;
}
.createName{
  font-size: 20px;
  border-radius: 5px;
  outline: none;
  border: 1px solid #d7d7d7;
}
.createForm input{
    padding-left: 10px;
}
.createSelect{
    font-size: 16px;
  border-radius: 5px;
  outline: none;
  border: 1px solid #d7d7d7;
}
.createCheck-boxes{
    padding: 2px;
}
.createBtn{
    background-color: dodgerblue;
    border-radius: 5px;
    color: #fff;
    border: 0;
}
.createBtn:hover{
    font-weight: 600;
}
#logoText, #loginText, #registerText {
    color: dodgerblue;
    font-size: 20px;
    font-weight: 600;
}
#loginWrapper,#registerWrapper, #resetWrapper, #homeWrapper{
    margin-top: 100px !important;
}
<!--index-css-->
.pizzaFlex{
    display: flex !important;
    flex-direction: column !important;
    align-items: center;
    margin-top: 100px;
}
.pizzaFlex2{
    display: flex;
    align-items: center;
    flex-direction: row;
}
.indexImg{
    width: 50px !important;
    height: 50px !important;
    border-radius: 10px;
    margin: 10px !important;
}
.pizzaBase{
    font-size: 18px;
}
.pizzaName{
    font-size: 16px;
    font-style: italic;
    
}

</style>
    <!-- Scripts-->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" id='logoText'>
                    PizzaVilla
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" id='loginText'>{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" id='registerText'>{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
