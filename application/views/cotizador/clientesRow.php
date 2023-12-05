<div class="row">
    <?php if($this->session->flashdata('status_err')){ ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong><?php echo $this->session->flashdata('status_err'); ?></strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>
    
    <div class="d-flex mb-3" id="imgHTML">
       <img id="imagen" width="150" src="<?php echo base_url('/assets/img/nikte/logo_nikte.jpg');?>" />
       <!-- <img src="https://images.unsplash.com/photo-1666919643134-d97687c1826c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" /> -->
    </div>
        
</div>

  <div class="row">
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters d-flex align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Cliente :
                            <select class="form-select" placeholder="Selecciona un cliente..." name="selCli" id="selCli">
                            <option selected="">Selecciona...</option>
                                <?php foreach ($clientes as $k => $v) { ?>
                                    <option value="<?php echo $v['nombre'].'_'.$v['ape_pat'];?>"><?php echo $v['nombre'].' '.$v['ape_pat'];?></option>
                                <?php  } ?>
                            </select>
                        </div>
                        <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div> -->
                    </div>
                    <div class="col-auto">
                        <button type="buton" class="btn btn-md" data-toggle="modal" data-target="#modalAltaCliente">
                            <i class="fa-regular fa-square-plus fa-xl   "></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            LOTE :
                            <select class="form-select" placeholder="Selecciona lote..." id="loteSelect" onchange="getSuperficie()">
                                <option selected="">Selecciona...</option>
                                <?php foreach ($lotes as $key => $value) { ?>
                                    <option value="<?php echo $value['lote_id'];?>">
                                        <?php echo $value['desNombre']; ?>&nbsp;<?php echo $value['privNombre'];?>&nbsp;<?php echo $value['identificador'];?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div> -->
                    </div>
                    <div class="col-auto">
                        <button type="buton" class="btn btn-md" data-toggle="modal" data-target="#modalAltaLote">
                            <i class="fa-regular fa-square-plus fa-xl   "></i>
                        </button>
                    </div>
                </div>
                                
                <!-- <div class="row d-flex justify-content-center">
                        <div class="col-3 d-flex justify-content-center edoCta mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                DESARROLLO :
                                <select class="form-select" placeholder="Selecciona Desarrollo..." id="desaSelect" onchange="getPrivada()">
                                    <option selected="">Selecciona...</option>
                                    <?php foreach ($desarrollos as $key => $value) { ?>
                                    <option value="<?php echo $value['id'];?>">
                                        <?php echo $value['nombre']; ?>
                                    </option>
                                <?php  } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 d-flex justify-content-center edoCta mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                PRIVADA :
                                <select class="form-select" placeholder="Selecciona Privada..." id="privSelect" onchange="getSuperficie()">
                                    <option selected="">Selecciona...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 d-flex justify-content-center edoCta mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                LOTE :
                                <select class="form-select" placeholder="Selecciona lote..." id="loteSelect" onchange="getSuperficie()">
                                    <option selected="">Selecciona...</option>
                                </select>
                            </div>
                        </div>
                </div> -->
            </div>
        </div>
    </div>
</div>