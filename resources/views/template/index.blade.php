<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    @vite('resources/css/app.css')

    <title>Inidica Evydencia - Página: @yield('title') </title>
</head>
<body>

    <header class="header">
        <x-logo />

        <nav class="header-nav">
            <div class="links">
                @yield('links')
            </div>

            <div class="links-mobile h-0" id="links_mobile">
                <div class="profile-mobile">
                    <i class="bi bi-person-circle text-3xl"></i>
                    <span>(Nome da Pessoa)</span>
                </div>

                <hr>

                @yield('links')
            </div>

            @isset($connection)
                @foreach ($connection as $connection)
                    <div class="profile">
                        @isset ($connection->imgUrl)
                            <img src="{{ $connection->imgUrl }}" alt="{{ $connection->name }}">
                        @endisset

                        <span>({{ $connection->phone }})</span>
                    </div>
                @endforeach

                <button class="btn-mobile" id="btn_mobile">
                    <i class="bi bi-menu-button-wide text-4xl" id="btn_mobile_icon"></i>
                </button>
            @endisset
        </nav>
    </header>

    <main class="main">
        <section class="content">
            @yield('content')
        </section>
    </main>

    <footer class="footer">
        <div class="footer-txt">
            <div class="footer-txt-copy">
                &copy;2022 Evydencia todos direitos reservados.
            </div>

            <div class="footer-social">
                <span class="footer-social-txt">
                    Nossas redes sociais.
                </span>

                <div class="footer-social-icons">
                    <a href="#"><i class="bi bi-whatsapp"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-signature">
            BY: <a href="https://api.whatsapp.com/send?phone=5519983272338" target="_blank" rel="noopener noreferrer">Gutemberg Pimenta</a>
        </div>
    </footer>
    <script>
        const route_name = '{{ Route::currentRouteName() }}'
    </script>

    @vite('resources/js/app.js')

</body>
</html>
