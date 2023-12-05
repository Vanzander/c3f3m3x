
<div class="row">
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-md font-weight-bold text-primary text-uppercase mb-1">DATOS</div>
                        <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div> -->
                        <div id="promoLote" class="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingPromos">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePromos"  aria-controls="collapsePromos" >
                                        PROMOCIONES
                                    </button>
                                </h2>
                                <div id="collapsePromos" class="accordion-collapse collapse" aria-labelledby="headingPromos" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="checkbox1" value="option1" onclick="func1()">
                                            <label class="form-check-label" for="inlineCheckbox1">PROMO. DEL MES</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="checkbox2" value="option2" onclick="func2()" onfocusout="verificaDescMonto()">
                                            <label class="form-check-label" for="inlineCheckbox2">DESC. POR PORCENTAJE</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="checkbox3" value="option3" onclick="func3()">
                                            <label class="form-check-label" for="inlineCheckbox3">DESC. POR MONTO</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="checkbox4" value="option4" onclick="func4()">
                                            <label class="form-check-label" for="inlineCheckbox4">PROMO. ESPECIAL GH</label>
                                        </div>
                                    </div>
                                        
                                        <div class="text-xs col-xl-8 col-md-4 font-weight-bold text-primary text-uppercase mb-1" id="promoMes">
                                            PROMOCIÓN DEL MES :
                                            <select class="form-select" placeholder="Selecciona un cliente...">
                                                <option value="1">Promo uno</option>
                                                <option value="2">Promo dos</option>
                                                <option value="3">Promo tres</option>
                                                <option value="4">Promo cuatro</option>
                                                <option value="5">Promo cinco</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="text-xs col-xl-6 col-md-4 font-weight-bold text-primary text-uppercase mb-1" id="promoPorc">
                                            POR PORCENTAJE:
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">%</span>
                                                <input type="text" name="porcDesc" id="porcDesc" class="form-control"  placeholder="porcentaje a descontar x mt2.." aria-describedby="basic-addon1" onfocusout="descPorc()">
                                            </div>
                                        </div>
                                        
                                        <div class="text-xs col-xl-6 col-md-4 font-weight-bold text-primary text-uppercase mb-1" id="promoMonto">
                                            POR MONTO:
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon2">$</span>
                                                <input type="text" name="montoDesc" id="montoDesc" class="form-control"  placeholder="monto a descontar x mt2.." aria-describedby="basic-addon2" onfocusout="descMonto()">
                                            </div>
                                        </div>
                                        <div class="text-xs col-xl-6 col-md-4 font-weight-bold text-primary text-uppercase mb-1" id="promoEsp">
                                            PROMOCIÓN ESPECIAL GH:
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon2">$</span>
                                                <input type="text" name="montoDescGH" id="montoDescGH" class="form-control"  placeholder="monto a descontar x mt2.." aria-describedby="basic-addon2" onfocusout="descMonto()">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">%</span>
                                                <input type="text" name="porcDescGH" id="porcDescGH" class="form-control"  placeholder="porcentaje a descontar x mt2.." aria-describedby="basic-addon1" onfocusout="descPorc()">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                           
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEnganche">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEnganche" aria-expanded="true" aria-controls="collapseEnganche" >
                                        ENGANCHE
                                    </button>
                                </h2>
                                <div id="collapseEnganche" class="accordion-collapse collapse show" aria-labelledby="headingEnganche" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" id="tabEng">
                                        <br>
                                        <div class="row" id="montoEnganche" >
                                            <div class="text-xs col-xl-4 col-md-4 font-weight-bold text-primary text-uppercase mb-1" id="promoMonto" >
                                                MONTO: 
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon2">$</span>
                                                    <input type="text" class="form-control" name="montoApartado" id="montoApartado" placeholder="Ingrese monto..." aria-describedby="basic-addon2" >
                                                </div>
                                            </div>
                                            <div class="text-xs col-xl-4 col-md-4 font-weight-bold text-primary text-uppercase mb-1" id="fechaEng" >
                                                Fecha:
                                                <div class="col-12">
                                                    <div class="input-group date">
                                                        <input type="date" class="form-control datepickerEng" id="fecApartado" name="fecApartado"  placeholder="Selecciona fecha..." onfocusout="countEng()">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-xs col-xl-4 col-md-2 mb-1 d-flex align-content-end" id="promoMonto" style="align-items:center;">
                                                <div class="col-12">
                                                    <button type="buton" class="btn btn-md" onclick="addEng()">
                                                        <i class="fa-regular fa-square-plus fa-xl   "></i>
                                                    </button>
                                                
                                                    <button type="buton" class="btn btn-md" onclick="delEng()">
                                                        <i class="fa-regular fa-square-minus fa-xl   "></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingAnualidad">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAnualidad" aria-expanded="false" aria-controls="collapseAnualidad" >
                                        ANUALIDAD
                                    </button>
                                </h2>
                                <div id="collapseAnualidad" class="accordion-collapse collapse" aria-labelledby="headingAnualidad" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" id="tabAnu">
                                        <br>
                                        <div class="row rowAnualidad" id="montoAnualidad">
                                            <div class="text-xs col-xl-4 col-md-4 font-weight-bold text-primary text-uppercase mb-1" id="promoAnualidad" >
                                                MONTO: 
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon2">$</span>
                                                    <input type="text" class="form-control" name="montoAnu" id="montoAnu"  placeholder="Ingrese monto..." aria-describedby="basic-addon2">
                                                </div>
                                            </div>
                                            <div class="text-xs col-xl-4 col-md-4 font-weight-bold text-primary text-uppercase mb-1">
                                                Fecha:
                                                <div class="col-12">
                                                    <div class="input-group date">
                                                        <input type="date" class="form-control " name="fechaAnualidad" id="fechaAnualidad" onfocusout="anualidad()">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-xs col-xl-4 col-md-2 mb-1 d-flex align-content-end" id="promoAnualidad" style="align-items:center;">
                                                <div class="col-12">
                                                    <button type="buton" class="btn btn-md" onclick="addAnu()">
                                                        <i class="fa-regular fa-square-plus fa-xl   "></i>
                                                    </button>
                                                
                                                    <button type="buton" class="btn btn-md" onclick="delAnu()">
                                                        <i class="fa-regular fa-square-minus fa-xl   "></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSaldoCon">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSaldoCon" aria-expanded="true" aria-controls="collapseSaldoCon" >
                                        SALDO CONTRAENTREGA
                                    </button>
                                </h2>
                                <div id="collapseSaldoCon" class="accordion-collapse collapse" aria-labelledby="headingSaldoCon" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" id="tabSaldoCon">
                                        <br>
                                        <div class="row rowSaldoCon" id="montoSaldoCon">
                                            <div class="text-xs col-xl-4 col-md-4 font-weight-bold text-primary text-uppercase mb-1" >
                                                MONTO: 
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon2">$</span>
                                                    <input type="text" class="form-control" id="montoSldCon"  placeholder="Ingrese monto..." aria-describedby="basic-addon2">
                                                </div>
                                            </div>
                                            <div class="text-xs col-xl-4 col-md-4 font-weight-bold text-primary text-uppercase mb-1" id="fechaSaldoCon" >
                                                Fecha:
                                                <div class="col-12">
                                                    <div class="input-group date" >
                                                        <input type="date" class="form-control" id="datepickerSaldo" onfocusout="countSaldoC()">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-xs col-xl-4 col-md-2 mb-1 d-flex align-content-end" id="saldoCon" style="align-items:center;">
                                                <div class="col-12">
                                                    <button type="buton" class="btn btn-md" onclick="addSldC()">
                                                        <i class="fa-regular fa-square-plus fa-xl   "></i>
                                                    </button>
                                                
                                                    <button type="buton" class="btn btn-md" onclick="delSldC()">
                                                        <i class="fa-regular fa-square-minus fa-xl"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEnganche">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEnganche" aria-expanded="true" aria-controls="collapseEnganche" >
                                        TOTAL A FINANCIAR
                                    </button>
                                </h2>
                                <div id="collapseEnganche" class="accordion-collapse collapse show" aria-labelledby="headingEnganche" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <br>
                                        <div class="row" id="rowTotalFinanciar" >
                                            <div class="text-xs col-xl-4 col-md-4 font-weight-bold text-primary text-uppercase mb-1" id="montoTotalFinanciar" >
                                                MONTO: 
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon2">$</span>
                                                    <input type="text" class="form-control"  placeholder="Ingrese monto..." aria-describedby="basic-addon2" name="totalFinanciar" id="totalFinanciar" disabled >
                                                </div>
                                            </div>
                                            <div class="text-xs col-xl-4 col-md-4 font-weight-bold text-primary text-uppercase mb-1" id="numMesesFinanciar" >
                                                MENSUALIDADES: 
                                                <div class="input-group mb-3">
                                                    <input type="number" class="form-control" name="mesesFinanciar" id="mesesFinanciar" aria-describedby="basic-addon2">
                                                </div>
                                            </div>
                                            <div class="text-xs col-xl-4 col-md-4 font-weight-bold text-primary text-uppercase mb-1" id="mesIniFinanciar" >
                                                1 al 5 del Mes: 
                                                <div class="col-12">
                                                    <div class="input-group date">
                                                        <input type="month" class="form-control" name="fechaTotalFinanciar" id="fechaTotalFinanciar" min="<?php echo date('Y');?>-<?php echo date('m');?>" onfocusout="leyenda()">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="align-items:center">
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col d-flex justify-content-center">
                            <div class="text-md font-weight-bold text-success text-uppercase mb-1">
                                COTIZACIÓN
                            </div>
                            <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div> -->
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="row" id="showTipoLote">
                        <div class="col-2 d-flex justify-content-end edoCta">
                        </div>
                        <div class="col-8 d-flex justify-content-center edoCta">
                            TIPO DE LOTE: &nbsp; <label id="tipoLote"> </label>
                        </div>
                        <div class="col-2 d-flex justify-content-end edoCta">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 d-flex justify-content-center edoCta">
                            <label>SUPERFICIE Mts2</label>    
                        </div>
                        <div class="col-4 d-flex justify-content-center edoCta">
                            <label>PRECIO Mt2</label>
                        </div>
                        <div class="col-4 d-flex justify-content-center edoCta">
                            <label>PRECIO LOTE MXN</label>
                        </div>
                    </div>
                    <div class="row">
                        <input id='premt2' hidden />
                        <div class="col-4 d-flex justify-content-center edoCta">
                            <input class="form-control" type="text" name="superficie" id="superficie" disabled />
                        </div>
                        <input id='superf' hidden/>
                        <div class="input-group mb-3 col-4 d-flex justify-content-center edoCta" >
                            <!-- <input class="form-control" name="precioMt2" id="precioMt2" type="text" disabled /> -->
                            <span class="input-group-text" id="basic-addon2">
                                <i class="fa-solid fa-dollar-sign"></i>
                            </span>
                            <input class="form-control" name="precioMt2" id="precioMt2" type="text" disabled />
                        </div>
                        <div class="input-group mb-3 col-4 d-flex justify-content-center edoCta">
                            <span class="input-group-text" id="basic-addon2">
                                <i class="fa-solid fa-dollar-sign"></i>
                            </span>                    
                            <input class="form-control" type="text" name="precioFinal" id="precioFinal" disabled/>
                        </div>
                    </div>
                
                    <!-- ROW DESCUENTO POR PORCENTAJE -->
                    <div class="row" id="rowDescPorc">
                        <div class="col-4 d-flex justify-content-end edoCta">
                        </div>
                        <div class="input-group mb-3 col-4 d-flex justify-content-end edoCta">
                            <span class="input-group-text" id="basic-addon2">
                                <i class="fa-solid fa-minus"></i>
                            </span>
                            <input class="form-control"  type="text" name="descMt" id="descMt" disabled/>
                        </div>
                        <div class="input-group mb-3 col-4 d-flex justify-content-end edoCta">
                            <span class="input-group-text" id="basic-addon2">
                                <i class="fa-solid fa-minus"></i>
                            </span>
                            <input class="form-control" type="text" name="porcentajeDesc" id="porcentajeDesc" disabled/>
                        </div>
                    </div>
                    <!-- ROW DESCUENTO POR MONTO -->
                    <div class="row" id="rowDescMonto">
                        <div class="col-4 d-flex justify-content-end edoCta">
                        </div>
                        <div class="input-group mb-3 col-4 d-flex justify-content-end edoCta">
                            <span class="input-group-text" id="basic-addon2">
                                <i class="fa-solid fa-minus"></i>
                            </span>
                            <input class="form-control"  type="text" name="descMontoMt2" id="descMontoMt2" disabled/>
                        </div>
                        <div class="input-group mb-3 col-4 d-flex justify-content-end edoCta">
                            <span class="input-group-text" id="basic-addon2">
                                <i class="fa-solid fa-minus"></i>
                            </span>
                            <input class="form-control" type="text" name="precDescMonto" id="precDescMonto" disabled/>
                        </div>
                    </div>
                    <!-- ROW DESCUENTO POR ENGANCHE -->
                    <div class="row" id="rowEnganche">
                        <div class="col-4 d-flex justify-content-end edoCta">
                        </div>
                        <div class="col-4 d-flex justify-content-end edoCta">
                        </div>
                        <div class="input-group mb-3 col-4 d-flex justify-content-end edoCta">
                        <span class="input-group-text" id="basic-addon2">
                                <i class="fa-solid fa-minus"></i>
                            </span>
                            <input class="form-control" type="text" name="montoDescEnganche" id="montoDescEnganche" disabled/>
                        </div>
                    </div>
                    <!-- ROW DESCUENTO POR ANUALIDAD -->
                    <div class="row" id="rowAnualidad">
                        <div class="col-4 d-flex justify-content-end edoCta">
                        </div>
                        <div class="col-4 d-flex justify-content-end edoCta">
                        </div>
                        <div class="col-4 d-flex justify-content-end edoCta">
                            <input class="form-control" type="text" name="montoDescAnualidad" id="montoDescAnualidad" disabled/>
                        </div>
                    </div>
                    <!-- ROW SALDO CONTRA ENTREGA --> 
                    <div class="row" id="rowSldC">
                        <div class="col-4 d-flex justify-content-end edoCta">
                        </div>
                        <div class="col-4 d-flex justify-content-end edoCta">
                        </div>
                        <div class="col-4 d-flex justify-content-end edoCta">
                            <input class="form-control" type="text" name="montoSldC" id="montoSldC" disabled/>
                        </div>
                    </div>
                    <!-- ROW TOTAL FINAL --> 
                    <div class="row">
                        <div class="col-4 d-flex justify-content-end edoCta">
                        </div>
                        <div class="input-group col-4 d-flex justify-content-end edoCta">
                            <span class="input-group-text" id="basic-addon2">
                                <i class="fa-solid fa-dollar-sign"></i>
                            </span>
                            <input class="form-control" type="text" name="precioMtFinal" id="precioMtFinal" disabled/>    
                        </div>
                        <div class="input-group col-4 d-flex justify-content-end edoCta">
                            <span class="input-group-text" id="basic-addon2">
                                <i class="fa-solid fa-dollar-sign"></i>
                            </span>
                            <!-- <label id="monto">- MONTO</label> -->
                            <input class="form-control" type="text" name="totalFinal" id="totalFinal" disabled/>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-12 d-flex">
                            <div id="leyenda">
                                <p> Se realiza la siguiente cotización a nombre de <!-- var --> </br> correspondiente al lote <!-- var --> tipo <!-- var --> del Desarrollo <!-- var -->
                                    <p id="privada"> en la privada <!-- var --></p> el cual tiene un valor por de <!-- var --> por mt2, con una superficie de <!-- var --> 
                                    mts2 teniendo un costo aproximado de <!-- var --> pesos mxn, de acuerdo a los datos mencionados por el asesor se debe cubrir la cantidad de <!-- var -->
                                    pesos mxn, correspondientes al "apartado" siendo parte del enganche con un costo de <!-- var --> pesos mxn, dividido en <!-- var --> 
                                    pago(s) y con un saldo de <!-- var --> pesos mxn total a cubrir en <!-- var --> mensualidades.
                                </p>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-4 d-flex justify-content-end edoCta">
                        </div>
                        <div class="col-4 d-flex justify-content-end edoCta">
                            
                        </div>
                        <div class="col-4 d-flex justify-content-end edoCta">
                            <button class="btn btn-primary me-md-2" type="button" onclick="saveCotizacion()">
                                <i class="fa-regular fa-floppy-disk"></i>
                            </button>
                            <button class="btn btn-primary me-md-2" type="button" onclick="mailCotizacion()">
                                <i class="fa-regular fa-paper-plane"></i>
                            </button>
                            <button class="btn btn-primary me-md-2" type="button" onclick="printCotizacion()">
                                <i class="fa-solid fa-print"></i>
                            </button>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
    
</div>


