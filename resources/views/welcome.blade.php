<x-layout>
        <!-- HEADER -->
        <header class="container-fluid mastHead">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 fw-bold fs-3 fs-lg-1 d-flex flex-column flex-wrap justify-content-center align-items-center  text-center">
                    <div class="fw-bold fs-3 fs-lg-1" id="counterTitle"></div>
                    <h2 class="fw-bold fs-3 fs-lg-1">ANNUNCI</h2>
                </div>
            </div>
        </header>
        <x-searchbar/>
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
    </x-layout>