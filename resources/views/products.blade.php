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
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center" id="pageWrap">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                     
                        </ul>
                      </nav>
                </div>
            </div>
        </section>
    </x-layout>