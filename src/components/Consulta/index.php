<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>empleados</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="sistema de reglas de programacion" />
        <meta name="author" content="Humberto Calleja Juarez" />

        <!-- ================== BEGIN core-css ================== -->
        <link href="../assets/css/vendor.min.css" rel="stylesheet" />
        <link href="../assets/css/app.min.css" rel="stylesheet" />
        <!-- ================== END core-css ================== -->
        <link href="../assets/plugins/toastr/toastr.min.css" rel="stylesheet" />
        <link href="../assets/plugins/sweetalert2/bulma.css" rel="stylesheet" />


        <link rel="stylesheet" type="text/css" href="../assets/plugins/bs5-datatables/DataTables-1.12.1/css/dataTables.bootstrap5.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/plugins/bs5-datatables/AutoFill-2.4.0/css/autoFill.bootstrap5.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/plugins/bs5-datatables/Buttons-2.2.3/css/buttons.bootstrap5.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/plugins/bs5-datatables/ColReorder-1.5.6/css/colReorder.bootstrap5.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/plugins/bs5-datatables/FixedColumns-4.1.0/css/fixedColumns.bootstrap5.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/plugins/bs5-datatables/FixedHeader-3.2.4/css/fixedHeader.bootstrap5.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/plugins/bs5-datatables/KeyTable-2.7.0/css/keyTable.bootstrap5.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/plugins/bs5-datatables/Responsive-2.3.0/css/responsive.bootstrap5.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/plugins/bs5-datatables/RowGroup-1.2.0/css/rowGroup.bootstrap5.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/plugins/bs5-datatables/RowReorder-1.2.8/css/rowReorder.bootstrap5.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/plugins/bs5-datatables/Scroller-2.0.7/css/scroller.bootstrap5.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/plugins/bs5-datatables/SearchBuilder-1.3.4/css/searchBuilder.bootstrap5.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/plugins/bs5-datatables/SearchPanes-2.0.2/css/searchPanes.bootstrap5.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/plugins/bs5-datatables/Select-1.4.0/css/select.bootstrap5.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/plugins/bs5-datatables/StateRestore-1.1.1/css/stateRestore.bootstrap5.min.css"/>

        <link href="../assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />

        <link rel="stylesheet" href="../assets/plugins/Select2/select2.min.css" />
        <link rel="stylesheet" href="../assets/plugins/Select2/select2-bootstrap-5-theme.min.css" />
    </head>
    <body>
        <!-- BEGIN #app -->
        <div id="app" class="app app-sidebar-minified">
            <!-- BEGIN #header -->
            <div id="header" class="app-header">
                <!-- BEGIN mobile-toggler -->
                <div class="mobile-toggler">
                    <button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </button>
                </div>
                <!-- END mobile-toggler -->

                <!-- BEGIN brand -->
                <div class="brand">
                    <div class="desktop-toggler">
                        <button type="button" class="menu-toggler" data-toggle="sidebar-minify">
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </button>
                    </div>
                    <a class="brand-logo">

                    </a>
                </div>
                <!-- END brand -->

                <!-- BEGIN menu -->
                <div class="menu"> 
                    <form class="menu-search" method="POST" name="header_search_form">
                        <h1 class="page-header mb-3" id="CargoDesp"></h1>
                    </form>
                    <div class="menu-item dropdown">
                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                            <div class="menu-img online">
                                <div class="d-flex align-items-center justify-content-center w-100 h-100 bg-gray-800 text-gray-300 rounded-circle overflow-hidden">
                                    <i class="fa fa-user fa-2x mb-n3"></i>
                                </div>
                            </div>
                            <div class="menu-text" id="userLogActDesp"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end me-lg-3">
                            <a class="dropdown-item d-flex align-items-center" id="editPerf" data-bs-toggle="modal" data-bs-target="#modal_User">Editar Perfil<i class="fa fa-user-circle fa-fw ms-auto text-gray-400 fs-16px"></i></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item d-flex align-items-center" href="">Salir<i class="fa fa-toggle-off fa-fw ms-auto text-gray-400 fs-16px"></i></a>
                        </div>
                    </div>
                </div>
                <!-- END menu -->
            </div>
            <!-- END #header -->

            <!-- BEGIN #sidebar -->
            <div id="sidebar" class="app-sidebar">
                <!-- BEGIN scrollbar -->
                <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
                    <!-- BEGIN menu -->
                    <div class="menu">
                        <div class="menu-header">Menú</div>
                        <div class="menu-item active">
                            <a href="index.php" class="menu-link">
                                <span class="menu-icon"><i class="fa fa-home"></i></span>
                                <span class="menu-text">Inicio</span>
                            </a>
                        </div>                      
                    </div>
                    <!-- END menu -->
                </div>
                <!-- END scrollbar -->
                <!-- BEGIN mobile-sidebar-backdrop -->
                <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
                <!-- END mobile-sidebar-backdrop -->
            </div>
            <!-- END #sidebar -->

            <!-- BEGIN #content -->
            <div id="content" class="app-content">
                <div style="text-align: center;">
                    <h1 class="page-header mb-3">
                        SISTEMA DE CONTROL DE EMPLEADOS
                    </h1>                   
                </div>

                <div class="card">
                    <!-- BEGIN card-body -->
                    <div class="card-body">                    
                        <div class="row g-3">
                            <div class="col-md-2">
                                <button type="button" class="btn btn-outline-purple" data-bs-toggle="modal" data-bs-target="#modal_New_Person">Nuevo Empleado</button>
                            </div>
                        </div>
                        <table id="tbl_Empleados" class="table table-sm table-striped nowrap" style="width:100%">
                            <thead>
                                <tr> 
                                    <th rowspan="2">info</th>
                                    <th rowspan="2">No.<br>Empleado</th>
                                    <th rowspan="2">Nombre</th>
                                    <th rowspan="2">Centro</th>
                                    <th rowspan="2">Puesto</th>
                                    <th colspan="5" style="text-align: center">DATOS PERSONALES</th>
                                    <th colspan="5" style="text-align: center">DATOS DOMICILIARIOS</th>

                                </tr>
                                <tr>                                    
                                    <th>CURP</th>
                                    <th>NSS</th> 
                                    <th>RFC</th> 
                                    <th>NO.<br>CUENTA BANCO</th>
                                    <th>EMAIL</th>
                                    <!-- DIV -->
                                    <th>PAIS</th>
                                    <th>ENTIDAD FEDERATIVA</th>
                                    <th>MUNICIPIO</th>
                                    <th>COLONIA</th>
                                    <th>DOMICILIO</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                            <tfoot>
                                <tr>

                                    <th>info</th>
                                    <th>No. Empleado</th>
                                    <th>Nombre</th>
                                    <th>Centro</th>
                                    <th>Puesto</th>
                                    <th>NSS</th>
                                    <th>RFC</th>
                                    <th>NO. CUENTA BANCO</th>
                                    <th>EMAIL</th>
                                    <!-- DIV -->
                                    <th>PAIS</th>
                                    <th>ENTIDAD FEDERATIVA</th>
                                    <th>MUNICIPIO</th>
                                    <th>COLONIA</th>
                                    <th>DOMICILIO</th>

                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- END card-body -->
                </div>

            </div>
            <!-- END #content -->
            <!-- BEGIN btn-scroll-top -->
            <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
            <!-- END btn-scroll-top -->
            <!-- BEGIN theme-panel -->
            <div class="theme-panel">
                <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
                <div class="theme-panel-content">
                    <ul class="theme-list clearfix">
                        <li><a href="javascript:;" class="bg-red" data-theme="theme-red" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-pink" data-theme="theme-pink" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-orange" data-theme="theme-orange" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-yellow" data-theme="theme-yellow" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-lime" data-theme="theme-lime" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-green" data-theme="theme-green" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-teal" data-theme="theme-teal" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Teal" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-cyan" data-theme="theme-cyan" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Aqua" data-original-title="" title="">&nbsp;</a></li>
                        <li class="active"><a href="javascript:;" class="bg-blue" data-theme="" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-purple" data-theme="theme-purple" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-indigo" data-theme="theme-indigo" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo" data-original-title="" title="">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-gray-600" data-theme="theme-gray-600" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Gray" data-original-title="" title="">&nbsp;</a></li>
                    </ul>
                    <hr class="mb-0" />
                    <div class="row mt-10px pt-3px">
                        <div class="col-9 control-label text-dark fw-bold">
                            <div>Modo Oscuro</div>
                        </div>
                        <div class="col-3 d-flex">
                            <div class="form-check form-switch ms-auto mb-0 mt-2px">
                                <input type="checkbox" class="form-check-input" name="app-theme-dark-mode" id="appThemeDarkMode" value="1" />
                                <label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END theme-panel -->
        </div>

        <!-- END #app -->
        <div class="modal fade" id="modal_New_Person">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titleEmpleado">Nuevo Empleado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body" >
                        <form class="row g-2 needs-validation" novalidate id="frmNuevoEmple" name="frmNuevoEmple">
                            <div class="fw-600 mb-0 text-muted">Datos Personales</div>
                            <div class="col-md-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="P_Nombre" name="P_Nombre" placeholder="Nombre del Empleado" required>
                                    <label for="P_Nombre">Nombre</label>
                                    <div class="invalid-feedback">
                                        Por favor ingrese el Nombre del empleado
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="P_ApelP" name="P_ApelP" placeholder="Apellido Paterno" required>
                                    <label for="P_ApelP">A. PATERNO:</label>
                                    <div class="invalid-feedback">
                                        Por favor ingrese el Apellido Paterno
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="P_ApelM" name="P_ApelM" placeholder="Apellido Materno" required>
                                    <label for="P_ApelM">A. MATERNO:</label>
                                    <div class="invalid-feedback">
                                        Por favor ingrese el Apellido Materno
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="P_fec_nac" name="P_fec_nac" placeholder="Apellido Materno" required>
                                    <label for="P_fec_nac">FECHA NACIMIENTO</label>
                                    <div class="invalid-feedback">
                                        Por favor ingrese la fecha de nacimiento
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-control">
                                    <select class="form-select" id="P_slctgenero" name="P_slctgenero" aria-label="P_slctgenero" ></select>                
                                    <div class="invalid-feedback">
                                        Por favor Seleccione su genero
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-floating">
                                    <select class="form-select" id="P_slctNacio" name="P_slctNacio" aria-label="P_slctNacio" ></select>
                                    <label for="P_slctNacio">NACIONALIDAD:</label>
                                    <div class="invalid-feedback">
                                        Por favor Seleccione su genero
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" style="text-transform: uppercase;" id="P_CURP" name="P_CURP" placeholder="CURP" minlength="18" maxlength="18" required>
                                    <label for="P_CURP">CURP:</label>
                                    <div class="invalid-feedback">
                                        Por favor su CURP
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="P_NSS" name="P_NSS" placeholder="NSS" minlength="11" maxlength="11" required>
                                    <label for="P_NSS">NSS:</label>
                                    <div class="invalid-feedback">
                                        Por favor su numero de seguro social
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="P_RFC" name="P_RFC" placeholder="RFC" minlength="3" maxlength="25" required>
                                    <label for="P_RFC">RFC:</label>
                                    <div class="invalid-feedback">
                                        Por favor su RFC
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="P_TEL" name="P_TEL" placeholder="TEl" minlength="10" maxlength="10" required>
                                    <label for="P_TEL">TEL:</label>
                                    <div class="invalid-feedback">
                                        Por favor su numero de telefono
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="P_TEL_acc" name="P_TEL_acc" placeholder="TEl" minlength="10" maxlength="10" required>
                                    <label for="P_TEL_acc">TEL EMERGENCIA:</label>
                                    <div class="invalid-feedback">
                                        Por favor ingrece un numero de contacto en casa de accidente
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="P_cta_banc" name="P_cta_banc" placeholder="CUENTA DE BANCO" required>
                                    <label for="P_cta_banc">CUENTA DE BANCO:</label>
                                    <div class="invalid-feedback">
                                        Por favor su numero de cuenta
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="P_email" name="P_email" placeholder="ejemplo@gmail.com" required>
                                    <label for="P_email">EMAIL:</label>
                                    <div class="invalid-feedback">
                                        Por favor su correo electronico
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-floating">
                                    <select class="form-select" id="P_slctSangre" name="P_slctSangre" aria-label="P_slctSangre" ></select>
                                    <label for="P_slctSangre">TIPO SANGINEO:</label>
                                    <div class="invalid-feedback">
                                        Por favor Seleccione su tipo de sangre
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-floating">
                                    <select class="form-select" id="P_slctNV_estudio" name="P_slctNV_estudio" aria-label="P_slctNV_estudio" required></select>
                                    <label for="P_slctNV_estudio">NIVEL DE ESTUDIOS:</label>
                                    <div class="invalid-feedback">
                                        Por favor Seleccione su grado máximo de estudios
                                    </div>
                                </div>
                            </div>

                            <div class="fw-600 mb-0 text-muted">Datos Domicilio</div>
                            <div class="col-md-4">
                                <div class="form-control">
                                    <select class="form-select" id="P_slctPais" name="P_slctPais" aria-label="P_slctPais" required></select>                                  
                                    <div class="invalid-feedback">
                                        Por favor Seleccione su pais
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-control">
                                    <select class="form-select" id="P_slctFedera" name="P_slctFedera" aria-label="P_slctFedera" required></select>                                    
                                    <div class="invalid-feedback">
                                        Por favor Seleccione su erntidad federativa
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-control">
                                    <select class="form-select" id="P_slctMuni" name="P_slctMuni" aria-label="P_slctMuni" required></select>
                                    <div class="invalid-feedback">
                                        Por favor Seleccione su municipio
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-control">
                                    <select class="form-select" id="P_slctColonia" name="P_slctColonia" aria-label="P_slctColonia" required></select>
                                    <div class="invalid-feedback">
                                        Por favor Seleccione la colonia
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="P_calle" name="P_calle" placeholder="..." required>
                                    <label for="P_calle">CALLE:</label>
                                    <div class="invalid-feedback">
                                        Por favor ingrese su calle de su domicialio
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="P_NoExt" name="P_NoExt" placeholder="..." required>
                                    <label for="P_NoExt">No. Exterior:</label>
                                    <div class="invalid-feedback">
                                        Por favor ingrese el numero exterior 
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-2">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="P_NoInt" name="P_NoInt" placeholder="..." required>
                                    <label for="P_NoInt">No. Interiro:</label>
                                    <div class="invalid-feedback">
                                        Por favor ingrese el numero interior 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="P_refere" name="P_refere" placeholder="..." required>
                                    <label for="P_refere">REFERENCIA DEL DOMICILIO:</label>
                                    <div class="invalid-feedback">
                                        Por favor ingrese alguna referencia de su domicilio
                                    </div>
                                </div>
                            </div>

                            <div class="fw-600 mb-0 text-muted">Datos Laborales</div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <select class="form-select" id="P_slctCentro" name="P_slctCentro" aria-label="P_slctCentro" required></select>
                                    <label for="P_slctCentro">CENTRO:</label>
                                    <div class="invalid-feedback">
                                        Por favor seleccione el centro al que pertenece
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-floating">
                                    <select class="form-select" id="P_slctPuesto" name="P_slctPuesto" aria-label="P_slctPuesto" required></select>
                                    <label for="P_slctPuesto">PUESTO:</label>
                                    <div class="invalid-feedback">
                                        Por favor seleccione el puesto 
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <input type="number" class="form-control" id="op" name="op"  value="1" readonly hidden>
                                <input type="text" class="form-control" name="key" id="key"  readonly hidden>
                                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-info">Guardar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>





        <!-- ================== BEGIN core-js ================== -->
        <script src="../assets/js/vendor.min.js"></script>
        <script src="../assets/js/app.min.js"></script>
        <!-- ================== END core-js ================== -->

        <script src="../assets/plugins/Select2/select2.min.js"></script>
        <script src="../../../js/captura/dm.js"></script>

        <script src="../assets/plugins/moment/min/moment.min.js"></script>
        <script src="../assets/plugins/moment/locale/es-mx.js"></script>
        <script src="../assets/plugins/bs5-datatables/JSZip-2.5.0/jszip.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/DataTables-1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/AutoFill-2.4.0/js/dataTables.autoFill.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/AutoFill-2.4.0/js/autoFill.bootstrap5.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/Buttons-2.2.3/js/dataTables.buttons.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/Buttons-2.2.3/js/buttons.bootstrap5.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/Buttons-2.2.3/js/buttons.colVis.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/Buttons-2.2.3/js/buttons.html5.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/Buttons-2.2.3/js/buttons.print.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/ColReorder-1.5.6/js/dataTables.colReorder.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/FixedColumns-4.1.0/js/dataTables.fixedColumns.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/FixedHeader-3.2.4/js/dataTables.fixedHeader.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/Responsive-2.3.0/js/dataTables.responsive.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/Responsive-2.3.0/js/responsive.bootstrap5.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/RowGroup-1.2.0/js/dataTables.rowGroup.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/RowReorder-1.2.8/js/dataTables.rowReorder.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/Scroller-2.0.7/js/dataTables.scroller.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/SearchBuilder-1.3.4/js/dataTables.searchBuilder.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/SearchBuilder-1.3.4/js/searchBuilder.bootstrap5.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/SearchPanes-2.0.2/js/dataTables.searchPanes.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/SearchPanes-2.0.2/js/searchPanes.bootstrap5.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/Select-1.4.0/js/dataTables.select.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/StateRestore-1.1.1/js/dataTables.stateRestore.min.js"></script>
        <script src="../assets/plugins/bs5-datatables/StateRestore-1.1.1/js/stateRestore.bootstrap5.min.js"></script>
        <script type="text/javascript" src="../assets/plugins/bs5-datatables/datatables-sorting/datetime-moment.js"></script>

        <script src="../assets/plugins/toastr/toastr.min.js"></script>
        <script src="../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
        <script src="../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

        <script src="../../../js/captura/captura.js"></script>


    </body>
</html>
