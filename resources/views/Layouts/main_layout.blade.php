<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- fonts google -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&display=swap"
        rel="stylesheet">
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- css aplication -->
    <link rel="stylesheet" href="{{ asset('assets/css/estilo.css') }}">

    <title>@yield('title')</title>
</head>

<body>

    <header class="header">
        <div class="logo">
            <img src="{{ asset('assets/imgs/logo.png') }}" alt="Logo da Coop service">
            <span>Coop Service</span>
        </div>

        <div id="btnMenu" data-bs-toggle="collapse" data-bs-target="#menu">
            <div class="hamburguer">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="collapse" id="menu">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('servicos') }}">Serviços</a>
            <a href="{{ route('sobre') }}">Sobre</a>
            <a href="{{ route('fale-conosco') }}">Fale Conosco</a>
            <a href="{{route('perfil')}}">Meu Perfil</a>
        </div>

        @guest
            <a href="{{ route('login') }}"class="login">Entrar</a>
        @endguest

        @auth
            <a href="{{route('logout')}}"class="logout">Logout</a>
        @endauth

    </header>

    <div class="video">
        <video src="{{ asset('assets/videos/video-home.mp4') }}" muted autoplay loop></video>
        <div class="mascara"></div>
    </div>


    @yield('content')



    <footer class="footer">
        <div class="icones">
            <a href="https://wa.me/14998988070" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#25d366"
                    class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path
                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                </svg>
            </a>

            <a href="https://www.facebook.com/share/12KgmzMdWQm/?mibextid=wwXIfr" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#0866ff"
                    class="bi bi-facebook" viewBox="0 0 16 16">
                    <path
                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                </svg>
            </a>

            <a href="https://www.instagram.com/coop.service25/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ff005e"
                    class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                </svg>
            </a>
            <a href="mailto:coop.service25@gmail.com" target="_blank">

                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                    <path fill="#03A9F4"
                        d="M21,31c0,1.104,0.896,2,2,2h17c1.104,0,2-0.896,2-2V16c0-1.104-0.896-2-2-2H23c-1.104,0-2,0.896-2,2V31z">
                    </path>
                    <path fill="#B3E5FC"
                        d="M42,16.975V16c0-0.428-0.137-0.823-0.367-1.148l-11.264,6.932l-7.542-4.656L22.125,19l8.459,5L42,16.975z">
                    </path>
                    <path fill="#0277BD" d="M27 41.46L6 37.46 6 9.46 27 5.46z"></path>
                    <path fill="#FFF"
                        d="M21.216,18.311c-1.098-1.275-2.546-1.913-4.328-1.913c-1.892,0-3.408,0.669-4.554,2.003c-1.144,1.337-1.719,3.088-1.719,5.246c0,2.045,0.564,3.714,1.69,4.986c1.126,1.273,2.592,1.91,4.378,1.91c1.84,0,3.331-0.652,4.474-1.975c1.143-1.313,1.712-3.043,1.712-5.199C22.869,21.281,22.318,19.595,21.216,18.311z M19.049,26.735c-0.568,0.769-1.339,1.152-2.313,1.152c-0.939,0-1.699-0.394-2.285-1.187c-0.581-0.785-0.87-1.861-0.87-3.211c0-1.336,0.289-2.414,0.87-3.225c0.586-0.81,1.368-1.211,2.355-1.211c0.962,0,1.718,0.393,2.267,1.178c0.555,0.795,0.833,1.895,0.833,3.31C19.907,24.906,19.618,25.968,19.049,26.735z">
                    </path>
                </svg>
            </a>

            <a href="https://www.linkedin.com/in/coop-service-terceiriza%C3%A7%C3%A3o-de-m%C3%A3o-de-obra-490b29365/"
                target="_blank" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#0a66c2"
                    class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path
                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                </svg>
            </a>
        </div>
        <p class="cnpj">CNPJ: 52.112.783/0001-07</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
