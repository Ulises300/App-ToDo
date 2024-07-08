<div id="nav">
    <a href="{{route('inicio')}}"><h1>App-ToDo</h1></a>
    <div>
        @auth
            <a class="btn" href="{{route('logout')}}">Cerrar Sesión</a>
            
        @endauth
        @guest
            <a class="btn" href="{{route('login')}}">Iniciar Sesión</a>
            <a class="btn" href="{{route('register')}}">Registrarme</a>    
        @endguest
        
    </div>
</div>