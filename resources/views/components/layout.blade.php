<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Fonawsome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' integrity='sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==' crossorigin='anonymous'/>
    
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- FAVICON -->
    
    <link rel="shortcut icon" href="./media/favicon.ico" type="image/x-icon">
    
    <!-- SWIPER -->
    
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    
    
    <!-- myStyle -->
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <title>Presto.IT</title>
</head>
<body>
    <div class="wrapper">
        <!-- NAVBARs -->
        
        <!-- BARRA LOGIN A SCOMPARSA -->
        <div class="container mt-3 d-none d-lg-block contLogIn" id="logIn">
            <div class="row justify-content-center align-items-center">
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-3">
                    <button type="button" class="btn c-white bgc-main btn-logIn">Accedi</button>
                </div>
            </div>
        </div>
        <!-- NAVBAR DESKTOP -->
        <nav class="container mt-3 d-none d-lg-block fixed-top" id="navDesk">
            <div class="row navCont h-100 py-2">
                <div class="col-4 d-flex justify-content-start align-items-center">
                    <i class="fa-solid fa-person-running fa-3x c-main me-1"></i>
                    <a href="/" class="text-decoration-none fs-1 fw-bold c-main navLogo">
                        Presto . IT
                    </a>
                </div>
                <div class="col-5 text-end d-flex align-items-center justify-content-end flex-wrap mx-0 px-0" >
                    <div>
                        <a href="" class=" fs-6 fw-bold c-black-v navLink" id="navSign">
                            Accedi
                        </a>
                    </div>
                    <div class="ms-4 me-0">
                        <a href="" class="navLink fs-6 c-black-v">
                            Registrati
                        </a>
                    </div>
                </div>
                <div class="col-3 d-flex align-items-center justify-content-center ms-0 ps-0">
                    <button class="btn btNav fw-bold c-red">
                        <i class="fa-solid fa-plus fw-bold"></i> 
                        inserisci annuncio 
                    </button>
                </div>
            </div>
        </nav>
        <!-- NAVBAR MOBILE -->
        <nav class="container mt-3 d-block d-lg-none fixed-top" id="navMobile">
            <div class="row h-100 justify-content-around align-items-center navCont py-3">
                <div class="col-3 d-flex flex-column justify-content-center align-items-center c-main">
                    <i class="fa-solid fa-person-running fa-2x c-main">
                    </i>
                    <small>Home</small>
                </div>
                <div class="col-3 d-flex flex-column justify-content-center align-items-center c-main">
                    <i class="fa-solid fa-arrow-right-to-bracket fa-2x"></i>
                    <small>Accedi</small>
                </div>
                <div class="col-3 d-flex flex-column justify-content-center align-items-center c-main">
                    <i class="fa-solid fa-user-plus fa-2x"></i>
                    <small>Registrati</small>
                </div>
                <div class="col-3 d-flex flex-column justify-content-center align-items-center c-main">
                    <i class="fa-solid fa-plus fa-2x"></i>
                    <small>Annuncio</small>
                </div>
            </div>
        </nav>
        
        
        {{$slot}}
        
        
        
        
        
        <!-- FOOTER -->
        <div class="container pt-5 mt-5">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 pt-5 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center ">
                    <i class="fa-solid fa-person-running fa-2x c-main me-1"></i>
                    <a href="/" class="mb-3 me-2 mb-md-0 c-main  fw-bold text-decoration-none lh-1">
                        Presto . IT
                    </a>
                    <span class="mb-3 mb-md-0 text-muted fs-6">© 2022 Company, Inc</span>
                </div>
                
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="c-main" href="#">
                        <i class="fa-brands mx-2 fa-facebook-f"></i>
                    </a></li>
                    <li class="ms-3"><a class="c-main" href="#">
                        <i class="fa-brands mx-2 fa-instagram"></i>
                    </a></li>
                    <li class="ms-3"><a class="c-main" href="#">
                        <i class="fa-brands mx-2 fa-twitter"></i>
                    </a></li>
                </ul>
            </footer>
            
        </div>
        
        
    </div>    


    <!-- SCRIPT SWIPER -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    {{-- APP.js --}}
    
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
