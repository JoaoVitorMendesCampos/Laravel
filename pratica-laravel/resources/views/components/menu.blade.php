
<nav>

    <div>

        <a href="/">

            <h2>Home</h2>

        </a>

    </div>

    <div>

        <h2>Clientes</h2>

        <ul>

            <li><a href="/livros">Lista</a></li>

            <li><a href="/livros/criar">Novo</a></li>

        </ul>

    </div>

    <div>

        @auth

            <h2>Olá, {{ Auth::user()->name }}</h2>

            <a href="/logout">Logout</a>

        @else

            <a href="/login">Login</a>

        @endauth

    </div>

</nav>

