<!-- sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- sidebar brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>index.php/Dashboard/index">
        <div class="sidebar-brand-icon">
            <i class="fa-ligh fa-house-building"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CATÁLOGOS <sup>2</sup></div>
    </a>
    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Dashboard/index">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- <hr class="sidebar-divider">

    <div class="sidebar-heading">
       INTERFAZ
    </div>-->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>ADMINISTRAR</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo base_url();?>index.php/Dashboard/prospectos">PROSPECTOS</a>
                <a class="collapse-item" href="<?php echo base_url();?>index.php/Dashboard/usuarios">REGISTRADOS</a>
            </div>
        </div>
    </li>

    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-cog"></i>
            <span>MODULOS</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php //echo base_url();?>index.php/Cotizador">COTIZADOR</a>
                <a class="collapse-item" href="#">CONTABILIDAD</a>--> <!-- agregar dos módulos extra, ingresos y egresos para contabilidad... -->
                <!-- <a class="collapse-item" href="#">RH</a>
                <a class="collapse-item" href="#">MKT</a>
                <a class="collapse-item" href="#">POSTVENTA</a>
            </div>
        </div>
    </li> -->

</ul>






