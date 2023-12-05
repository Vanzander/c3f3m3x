<?php
//foreach($proyectos as $k => $j){ var_dump($j); } die();
//var_dump("> ",$usr);
?>
<!-- inicio page container-->
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2 class="h3 mb-0 text-gray-800">DASHBOARD</h2>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i>&nbsp;GENERAR REPORTE
        </a> -->
    </div>
    <div>
        <table id="myTable" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Procedimiento</th>
                    <th>Descripcion</th>
                    <th>Cotización</th>
                    <th>Abono</th>
                    <th>Saldo</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($proyectos as $k => $j){ ?>
                    <tr>
                        <td><?php print_r($j['nombreProyecto']); ?></td>
                        <td><?php print_r($j['descripcionProyecto']); ?></td>
                        <td><?php print_r('$ '.number_format((float)$j['precioCotizacion'],2,'.','')); ?></td>
                        <td><?php print_r('$ '.number_format((float)$j['totalAbonado'],2,'.','')); ?></td>
                        <td><?php print_r('$ '.number_format((float)$j['precioCotizacion']-$j['totalAbonado'],2,'.','')); ?></td>
                        <td><?php print_r($j['idEstatusProyecto']); ?></td>
                    </tr>
                <?php
                    }
                ?>               
            </tbody>
        </table>
    </div>
</div>

