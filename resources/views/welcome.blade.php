<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
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
    
    <link rel="stylesheet" href="/css/style.css">
    
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
        <!-- HEADER -->
        <header class="container-fluid mastHead">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 fw-bold fs-3 fs-lg-1 d-flex flex-column flex-wrap justify-content-center align-items-center  text-center">
                    <div class="fw-bold fs-3 fs-lg-1" id="counterTitle"></div>
                    <h2 class="fw-bold fs-3 fs-lg-1">ANNUNCI</h2>
                </div>
            </div>
        </header>
        <!-- SEARCHBAR -->
        <div class="container srcCont">
            <div class="row  pt-4 scrRow justify-content-evenly align-items-center">
                <div class="col-12 h-120 col-lg-4">
                    <p class="p-0 m-0 mb-1 fw-medBold">Cosa cerchi ?</p>
                    <div class="input-group">
                        <span class="input-group-text bg-white c-gray" id="basic-addon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <input  type="text" class="form-control srcBoxes" placeholder="Vespa,Iphone,Bilocale" aria-label="parola da cercare" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-12 h-120 col-lg-3">
                    <p class="p-0 m-0 mb-1 fw-medBold">In quale categoria ?</p>
                    <div class="input-group">
                        <span class="input-group-text bg-white c-gray" id="basic-addon1">
                            <i class="fa-solid fa-boxes-stacked"></i>
                        </span>
                        <select class="form-select srcBoxes" aria-label="categorie" id="catSrc">
                            <option value="all" selected>Tutte le categorie</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 h-120 col-lg-3 ">
                    <p class="p-0 m-0 mb-1 fw-medBold">Dove ?</p>
                    <div class="input-group">
                        <span class="input-group-text bg-white c-gray" id="basic-addon2">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <select class="form-select srcBoxes" id="placeSrc" aria-label="luogo">
                            <option value="all" selected>Tutta Italia</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 h-120 col-lg-1 d-flex flex-column justify-content-center mb-3">
                    <button class="btn srcBtn">
                        <i class="fa-solid fa-magnifying-glass fa-2x"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- CARD CATEGORIE -->
        <section class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-12 text-center mt-5">
                    <h2 class="c-main fw-bold">
                        Categorie
                    </h2>
                </div>
                <div class="col-6 col-lg-3 cardCat">
                    <div>
                        <h4 class="fw-bold fs-4 text-center d-flex flex-column align-items-center justify-content-center d-xl-block"><i class="fa-solid fa-person-running fa-2x me-1"></i>ELETTRONICA</h4>
                    </div>
                    <a href="/products" class="btn btnCat">
                        VAI
                    </a>
                </div>
                <div class="col-6 col-lg-3 cardCat1">
                    <div>
                        <h4 class="fw-bold fs-4 text-center d-flex flex-column align-items-center justify-content-center d-xl-block"><i class="fa-solid fa-person-running fa-2x my-1 me-md-1"></i>MOTORI</h4>
                    </div>
                    <a href="/products" class="btn btnCat">
                        VAI
                    </a>
                    
                </div>
                <div class="col-6 col-lg-3 cardCat2">
                    <div>
                        <h4 class="fw-bold fs-4 text-center d-flex flex-column align-items-center justify-content-center d-xl-block"><i class="fa-solid fa-person-running fa-2x me-1"></i>IMMOBILI</h4>
                    </div>
                    <a href="/products" class="btn btnCat">
                        VAI
                    </a>
                </div>
                <div class="col-6 col-lg-3 cardCat3">
                    <div>
                        <h4 class="fw-bold fs-4 text-center d-flex flex-column align-items-center justify-content-center d-xl-block"><i class="fa-solid fa-person-running fa-2x me-1"></i>MARKET</h4>
                    </div>
                    <a href="/products" class="btn btnCat">
                        VAI
                    </a>
                </div>
            </div>
        </section>
        <!-- ULTIMI PRODOTTI CARICATI -->
        <section class="container mt-5 mb-5">
            <div class="row">
                <div class="col-12 text-center mt-5 mb-5">
                    <h2 class="c-main fw-bold">
                        Ultimi annunci
                    </h2>
                </div>
            </div>
            <!-- CAROSELLO E SLIDE -->
            <div class="row">
                <div class="col-12">
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper" id="swiperWrap">
                          <!-- Slides -->
                          <!-- <div class="swiper-slide py-5">
                            <div class="cardProd">
                                <img src="./mediaProdotti/car.png" alt="" class="img-fluid mx-0">
                                <h6 class="mt-2 ms-2">Volvo V50 1.6 D cat Momentum</h6>
                                <p class="mt-2 ms-2 fs-6 d-block mb-0">
                                    <i class="fa-solid fa-boxes-stacked"></i>
                                    MOTORI
                                </p>
                                <small class="mt-2 ms-2 d-block">
                                    <i class="fa-solid fa-location-dot"></i>
                                    MARCHE
                                </small>
                                <small class="mt-2 ms-2 d-block">
                                    22/05/2022
                                </small>
                                <small class="tagVendo">VENDO</small>
                                <small class="tagPremium">PREMIUM</small>
                                <small class="mt-2 ms-auto me-2 pb-3 text-end d-block fw-bold fs-4 c-green-2">
                                    4000 €
                                </small>
                            </div>
                          </div>
                          <div class="swiper-slide py-5">
                            <div class="cardProd">
                                <img src="./mediaProdotti/car.png" alt="" class="img-fluid mx-0">
                                <h6 class="mt-2 ms-2">Volvo V50 1.6 D cat Momentum</h6>
                                <p class="mt-2 ms-2 fs-6 d-block mb-0">
                                    <i class="fa-solid fa-boxes-stacked"></i>
                                    MOTORI
                                </p>
                                <small class="mt-2 ms-2 d-block">
                                    <i class="fa-solid fa-location-dot"></i>
                                    MARCHE
                                </small>
                                <small class="mt-2 ms-2 d-block">
                                    22/05/2022
                                </small>
                                <small class="tagVendo">VENDO</small>
                                <small class="tagPremium">PREMIUM</small>
                                <small class="mt-2 ms-auto me-2 pb-3 text-end d-block fw-bold fs-4 c-green-2">
                                    4000 €
                                </small>
                            </div>
                          </div>
                          <div class="swiper-slide py-5">
                            <div class="cardProd">
                                <img src="./mediaProdotti/car.png" alt="" class="img-fluid mx-0">
                                <h6 class="mt-2 ms-2">Volvo V50 1.6 D cat Momentum</h6>
                                <p class="mt-2 ms-2 fs-6 d-block mb-0">
                                    <i class="fa-solid fa-boxes-stacked"></i>
                                    MOTORI
                                </p>
                                <small class="mt-2 ms-2 d-block">
                                    <i class="fa-solid fa-location-dot"></i>
                                    MARCHE
                                </small>
                                <small class="mt-2 ms-2 d-block">
                                    22/05/2022
                                </small>
                                <small class="tagCerco">CERCO</small>
                                <small class="mt-2 ms-auto me-2 pb-3 text-end d-block fw-bold fs-4 c-green-2">
                                    4000 €
                                </small>
                            </div>
                          </div>
                          <div class="swiper-slide py-5">
                            <div class="cardProd">
                                <img src="./mediaProdotti/car.png" alt="" class="img-fluid mx-0">
                                <h6 class="mt-2 ms-2">Volvo V50 1.6 D cat Momentum</h6>
                                <p class="mt-2 ms-2 fs-6 d-block mb-0">
                                    <i class="fa-solid fa-boxes-stacked"></i>
                                    MOTORI
                                </p>
                                <small class="mt-2 ms-2 d-block">
                                    <i class="fa-solid fa-location-dot"></i>
                                    MARCHE
                                </small>
                                <small class="mt-2 ms-2 d-block">
                                    22/05/2022
                                </small>
                                <small class="tagCerco">CERCO</small>
                                <small class="mt-2 ms-auto me-2 pb-3 text-end d-block fw-bold fs-4 c-green-2">
                                    4000 €
                                </small>
                            </div>
                          </div>
                          <div class="swiper-slide py-5">
                            <div class="cardProd">
                                <img src="./mediaProdotti/car.png" alt="" class="img-fluid mx-0">
                                <h6 class="mt-2 ms-2">Volvo V50 1.6 D cat Momentum</h6>
                                <p class="mt-2 ms-2 fs-6 d-block mb-0">
                                    <i class="fa-solid fa-boxes-stacked"></i>
                                    MOTORI
                                </p>
                                <small class="mt-2 ms-2 d-block">
                                    <i class="fa-solid fa-location-dot"></i>
                                    MARCHE
                                </small>
                                <small class="mt-2 ms-2 d-block">
                                    22/05/2022
                                </small>
                                <small class="tagVendo">VENDO</small>
                                <small class="mt-2 ms-auto me-2 pb-3 text-end d-block fw-bold fs-4 c-green-2">
                                    4000 €
                                </small>
                            </div>
                          </div>
                          <div class="swiper-slide py-5">
                            <div class="cardProd">
                                <img src="./mediaProdotti/car.png" alt="" class="img-fluid mx-0">
                                <h6 class="mt-2 ms-2">Volvo V50 1.6 D cat Momentum</h6>
                                <p class="mt-2 ms-2 fs-6 d-block mb-0">
                                    <i class="fa-solid fa-boxes-stacked"></i>
                                    MOTORI
                                </p>
                                <small class="mt-2 ms-2 d-block">
                                    <i class="fa-solid fa-location-dot"></i>
                                    MARCHE
                                </small>
                                <small class="mt-2 ms-2 d-block">
                                    22/05/2022
                                </small>
                                <small class="tagCerco">CERCO</small>
                                <small class="mt-2 ms-auto me-2 pb-3 text-end d-block fw-bold fs-4 c-green-2">
                                    4000 €
                                </small>
                            </div>
                          </div> -->
                          
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination pt-5"></div>
                      
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev c-main d-none d-md-flex"></div>
                        <div class="swiper-button-next c-main d-none d-md-flex"></div>
                      </div>
                </div>
            </div>        
        </section>
        <!-- ISCRIZIONE PREMIUM -->
        <aside class="container mt-5 mb-5">
            <div class="row mt-5">
              <div class="col-12 mt-5 mb-5">
                  <h2 class="c-main fw-bold display-5 text-center">
                      Vuoi Vendere Prima ?
                  </h2>
                  <h4 class="c-black-v text-center">
                      Con l'account premium i tuoi annunci saranno sempre i primi ad essere visualizzati !
                  </h4>
              </div>
              <div class="row mt-5 mb-5 justify-content-center justify-content-lg-between flex-wrap align-items-center">
                  <div class="col-12 col-lg-3 contPrem m-auto my-3 text-center" id="middleIco">
                    <i class="fa-solid fa-rectangle-ad fa-6x icoPrem"></i>
                  </div>
                  <div class="col-12 col-lg-3 contPrem m-auto my-3" id="middleIco">
                    <i class="fa-solid fa-bullhorn fa-6x icoPrem"></i>
                  </div>
                  <div class="col-12 col-lg-3 contPrem m-auto my-3">
                    <i class="fa-solid fa-money-bill-1-wave fa-6x icoPrem"></i>
                  </div>
              </div>
              <div class="row mb-5 justify-content-center justify-content-lg-between flex-wrap align-items-center d-none d-lg-flex">
                  <div class="col-12 col-md-3 text-center m-auto">
                      <h4 class="c-main fw-bold">PUBBLICA</h4>
                  </div>
                  <div class="col-12 col-md-3 text-center m-auto">
                      <h4 class="c-main fw-bold">PROMUOVI</h4>
                  </div>
                  <div class="col-12 col-md-3 text-center m-auto">
                      <h4 class="c-main fw-bold">VENDI</h4>
                  </div>
              </div>    
            </div>
        </aside>
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
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- SCRIPT SWIPER -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    
    <!-- my JS -->
    
    <script src="/js/script.js"></script>
</body>
</html>
