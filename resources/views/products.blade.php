<x-layout>

    <x-searchbar/>
        <!-- PRODOTTI -->
        <section class="container mt-5">
            <div class="row justify-content-end prodFiltBar">
                <div class="col-4">
                    <select class="form-select mb-2" aria-label="Default select example" id="select">
                        <option disabled selected ></option>
                        <option value="cheaper" >Prezzo Crescente</option>
                        <option value="expensive">Prezzo Descrecente</option>
                      </select>
                </div>
            </div>
            <div class="row justify-content-evenly" id="secProd">
                @foreach ($prodotti as $prodotto)
                <div class="cardProduct my-5">
                    <img src="/media/car.png" alt=""class="img-fluid mx-0">
                    <h6 class="mt-2 ms-2">{{$prodotto['product']}}</h6>
                    <p class="mt-2 ms-2 fs-6 d-block mb-0">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    {{$prodotto['category']}}
                    </p>
                    <small class="mt-2 ms-2 d-block">
                    <i class="fa-solid fa-location-dot"></i>
                    {{$prodotto['position']}}
                    </small>
                    <small class="mt-2 ms-2 d-block">
                        {{$prodotto['date']}}
                    </small>
                    {{-- <small class=${el.stat=="vendo"? 'tagSell' : 'tagSearch'}>${el.stat=="vendo"? 'VENDO' : 'CERCO'}</small>
                    <small class=${el.premium=="1"?'tagPrem':''}>${el.premium=="1"? 'PREMIUM' : ''}</small> --}}
                    <small class="mt-2 ms-auto me-2 pb-3 text-end d-block fw-bold fs-4 c-green-2">
                        {{$prodotto['price']}}
                    </small>
                  </div>   
                @endforeach
            </div>
        </section>
    </x-layout>