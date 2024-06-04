<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponto Convê Bebidas</title>
    <link rel="stylesheet" href="css/produtos.css">
    <script src="https://kit.fontawesome.com/d49ccb3aeb.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <a href="/">
                <img src="{{ asset('css/image/logo_conve.png') }}" />
            </a>
        </div>
        <div class="navbar-links">
            <a href="adicionar"><i class="fas fa-shopping-cart"></i> Adicionar Produtos</a>
            <a href="produtos"><i class="fas fa-box"></i> Produtos</a>
            <a href="editar"><i class="fas fa-edit"></i> Editar Produtos</a>
        </div>
        @auth
        <li class="navbar-user">
            <form id="logout-form" action="/logout" method="POST">
                @csrf
                <input type="hidden" name="redirect" value="/">
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="navbar-button signup-button">Sair</a>
            </form>
        </li>
        @endauth
        @guest
        <li class="navbar-user">
            <a href="/login" class="navbar-button login-button">Entrar</a>
        </li>
        @endguest
    </nav>

    <div class="container">
        <div class="card-container">
            @foreach($produtos as $produto)
            <div class="card">
                <div class="card__wrapper">
                    <div class="card__title">{{ $produto->nome }}</div>
                </div>
                <div class="card__menu">
                    <svg>...</svg>
                </div>
                <div class="card__img">
                    <img src="{{ asset('css/image/logo_conve.png') }}" />
                </div>
                <div class="card__subtitle">{{ $produto->descricao }}</div>
                <div class="card__price">R$ {{ $produto->valor }}</div>
                <div class="card__counter">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>
