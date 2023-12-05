<div class="row">
    <div class="col-xl-8 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-md font-weight-bold text-primary text-uppercase mb-1">DATOS REQUERIDOS</div>
                        <!--  -->
                        <div id="promoLote" class="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingPromos">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIni"  aria-controls="collapsePromos" >
                                        INICIO
                                    </button>
                                </h2>
                                <div id="collapseIni" class="accordion-collapse collapse" aria-labelledby="headingPromos" data-bs-parent="#accordionExample">
                                    <form>
                                        <div class="accordion-body">
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label class="col form-label" for="typeSoc">¿Que tipo de sociedad desea constituir?</label>
                                                </div>
                                                <div class="col-auto">
                                                    <select class="form-select" id="typeSoc">
                                                        <option selected>Seleccionar...</option>
                                                        <option value="1">Limitada</option>
                                                        <option value="2">Anónima</option>
                                                        <option value="3">Colectiva</option>
                                                        <option value="4">Unipersonal</option>
                                                        <option value="5">Por acciones simplificadas</option>
                                                        <option value="6">De trabajo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label class="col form-label"><h5>3 Posibles nombres para su sociedad</h5></label>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label class="col form-label" for="nSoc1">1. </label>
                                                </div>
                                                <div class="col-auto">
                                                    <input id="nSoc1" />
                                                </div>
                                            </div>
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label class="col form-label" for="nSoc2">2. </label>
                                                </div>
                                                <div class="col-auto">
                                                    <input id="nSoc2" />
                                                </div>
                                            </div>
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label class="col form-label" for="nSoc3">3. </label>
                                                </div>
                                                <div class="col-auto">
                                                    <input id="nSoc3" />
                                                </div>
                                            </div>
                                            <div class="row g-3 align-items-left">
                                                <h5>La Secretaria de Economía otorgará la autorización para el uso de la denominación o razón social, siempre y cuando no se encuentre reservada o sea de regulación restringida, coincida o sea similar en grado de confusión a una marca registrada en el IMPI o contenga palabras cuyo uso no este autorizado conforme al artículo 9º del Reglamento para la Autorización de Uso de Denominaciones y Razones Sociales.</h5>
                                            </div>
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label class="col form-label" for="domSoc">Domicilio: </label>
                                                </div>
                                                <div class="col-auto">
                                                    <input id="docSoc" />
                                                </div>
                                            </div>
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label class="col form-label" for="yearsSoc">Duración (en años): </label>
                                                </div>
                                                <div class="col-auto">
                                                    <input id="yearsSoc" />
                                                </div>
                                            </div>
                                            <div class="row g-3 align-items-center">
                                                <div>
                                                    <h5>¿Se aceptarán extranjeros?</h5>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="checkExtrY" name="radioExt" />
                                                    <label class="form-check-label" for="checkExtrY">SI </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="checkExtrN" name="radioExt"/>
                                                    <label class="form-check-label" for="checkExtrN">NO </label>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </form>
        
                                </div>
                            </div>
                        </div>

                        <div id="promoLote" class="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingPromos">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSecond"  aria-controls="collapsePromos" >
                                        LOS SOCIOS
                                    </button>
                                </h2>
                                <div id="collapseSecond" class="accordion-collapse collapse" aria-labelledby="headingPromos" data-bs-parent="#accordionExample">
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

                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>
