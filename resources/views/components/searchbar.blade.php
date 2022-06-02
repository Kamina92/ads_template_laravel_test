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