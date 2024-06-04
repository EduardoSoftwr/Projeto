<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponto Convê Bebidas</title>
    <link rel="stylesheet" href="css/adicionar.css">
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
    <div class="form-container">
        <form class="form" method="POST" action="{{ route('produtos.store') }}">
            @csrf
            <img src="{{ asset('css/image/logo_conve.png') }}" class="form-logo" alt="Logo do formulário">
            <p class="title">Adicionar um Produto</p>
            <label>
                <input class="input" type="text" name="nome" placeholder="" required="">
                <span>Nome</span>
            </label>
            <label>
                <input class="input" type="text" name="descricao" placeholder="" required="">
                <span>Descrição</span>
            </label>
            <label>
                <input class="input" type="text" name="tipo" placeholder="" required="">
                <span>Tipo</span>
            </label>
            <label>
                <input class="input" type="number" step="0.01" name="valor" placeholder="" required="">
                <span>Preço</span>
            </label>
            <button type="submit" class="submit">Cadastrar o Produto</button>
        </form>
    </div>
</body>

</html>