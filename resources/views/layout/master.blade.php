<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css
    ">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body class="">
    <header id="header" >
        <div class="container">
            <div class="header">
                <a href="{{route('home')}}" class="">
                    <img src="{{asset('image/JC Logo.png')}}"  alt="" height="85" width="85">
                </a>
                <div id="header-right">
                    <div class="menu actif"><a href="{{route('home')}}">Accueil</a></div>
                    <div class="menu"><a href="{{route('home')}}#mission">A propos</a></div>
                    <div class="menu"><a href="{{route('home')}}#service">Services</a></div>
                    <div class="menu"><a href="{{route('home')}}">Blog</a></div>
                    <div class="menu"><a href="{{route('home')}}#contact">Contacts</a></div>
                </div>

                <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
                <a
                    href="javascript:void(0);"
                    class="icon"
                    onclick="myFunction()"
                    id="barre"
                >
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>
    </header>
    <section id="banner">
        <div class="container">
            <div class="banner">
            <div id="banner-left">
                <div id="text">
                <div class="barre mb-2 mt-5"></div>
                <h4 class="text-center ">
                    Le cabinet JC Consulting se veut être un pilier dans l’appui et l’accompagnement des micros, petites
                    et moyennes entreprises mais également pour les structures privées et publiques.
                </h4>
                <div class="barre mt-2"></div>
                </div>
                <div id="link2" class="d-flex justify-content-center align-center mt-5">
                <a href="http://wa.me/22944223596" target="_blank" class="link-succes mb-3">Demander un devis!</a>
                </div>
            </div>
            </div>
        </div>
    </section>
    
    @if (session('errors'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                    <li>{{session('errors')}}</li><br/>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <ul>
                    <li>{{session('success')}}</li><br/>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif

    @yield('content')
      

    <footer id="footer">
      <p>Tous droits réservés,@ 2024.</p>
    </footer>
    <script>
      function userName(){
        console.log("javaScript")
      }
      userName()
    </script>
    <script src="{{asset('js/index.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js
    ">
    </script>
</body>
</html>