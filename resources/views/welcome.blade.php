<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponto Convê Bebidas</title>
    <link rel="stylesheet" href="css/home.css">
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
    <main>
        <section class="introduction">
            <div class="video">
                <div class="video-content">
                    <iframe width="400" height="300" src="https://www.youtube.com/embed/zc9kzKwzWdA?si=X5vP82DsggaqocH-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h2>Nos conheça melhor!</h2>
                    <p>Lorem lorem lorem lorem lorem lorem<br>
                        lorem lorem lorem lorem lorem lorem lorem <br>
                        lorem lorem lorem lorem lorem lorem lorem lorem...</p>
                </div>
            </div>
        </section>
        <section class="drinks">
            <h2>A melhor forma de beber está aqui</h2>
            <div class="drink-container">
                <div class="drink-item">
                    <img src="{{ asset('css/image/sunset.png') }}" />
                    <p>Confira algumas formas de preparar drinks com as melhores bebidas que oferecemos</p>
                </div>
                <div class="drink-item">
                <img src="{{ asset('css/image/quentao.png') }}" />
                    <p>Confira algumas formas de preparar drinks com as melhores bebidas que oferecemos</p>
                </div>
                <div class="drink-item">
                <img src="{{ asset('css/image/mimosa.png') }}" />
                    <p>Confira algumas formas de preparar drinks com as melhores bebidas que oferecemos</p>
                </div>
            </div>
        </section>
    </main>
</body>

</html>