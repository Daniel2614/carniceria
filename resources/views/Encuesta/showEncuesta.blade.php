<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Evaluación Docente por parte de Jefaturas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" type="text/css" media="screen" href="main.css">-->
    <link href="{{ asset('plugins/Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">    
    <!--<script src="main.js"></script>-->
    
</head>
<body>
<form class="needs-validation" novalidate method="POST" action="{{ route('evaluacion.store')}}" id="formEncuesta">
@csrf
    <div class="container-flex ocultar" id="vista2">
        <nav class="navbar navbarh navbar-expand-lg navbar-light bg-light" id="navbar-principal">
            <ul class="navbar-nav mr-auto"> 
                <li class="nav-item active">
                    <img src="https://i0.wp.com/ux.edu.mx/wp-content/uploads/207x140-blanco-3.png" width="30" height="30" class="d-inline-block mt-2" alt="">
                </li> 
            </ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <h4>Universidad Xalapa</h4>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto pr-4">
                    <li>Universidad Xalapa</li>
                </ul>
                <span class="navbar-text">
                    Proyecto de inversión
                </span>
            </div>
        </nav>
        <hr>
        <div class="flex-center position-ref full-height2 confondo" id="contenedor-seleccionar">
            <div class="content">

                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <h5>Evaluación Docente por parte de Jefaturas</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <a href="#" style="color: rgb(52, 58, 64) !important;">
                                                    <h5 class="mb-0">
                                                        DESEMPEÑO ADMINISTRATIVO
                                                    </h5>
                                                </a>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <!--<div class="card">-->
                                                    <div class="list-group list-group-flush" id="list-tab" role="tablist">
                                                        <a class="list-group-item list-group-item-action" id="list-dap1-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">PREGUNTA 1</a>
                                                        <a class="list-group-item list-group-item-action" id="list-dap2-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">PREGUNTA 2</a>
                                                        <a class="list-group-item list-group-item-action" id="list-dap3-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">PREGUNTA 3</a>
                                                        <a class="list-group-item list-group-item-action" id="list-dap4-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">PREGUNTA 4</a>
                                                    </div>
                                                <!--</div>-->
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <a href="#" style="color: rgb(52, 58, 64) !important;">
                                                    <h5 class="mb-0">
                                                        COMPROMISO ACADÉMICO
                                                    </h5>
                                                </a>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <!--<div class="card">-->
                                                    <div class="list-group list-group-flush" id="list-tab" role="tablist">
                                                        <a class="list-group-item list-group-item-action" id="list-cap1-list" data-toggle="list" href="#list-one" role="tab" aria-controls="home">PREGUNTA 1</a>
                                                        <a class="list-group-item list-group-item-action" id="list-cap2-list" data-toggle="list" href="#list-two" role="tab" aria-controls="profile">PREGUNTA 2</a>
                                                        <a class="list-group-item list-group-item-action" id="list-cap3-list" data-toggle="list" href="#list-tres" role="tab" aria-controls="messages">PREGUNTA 3</a>
                                                        <!--<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-four" role="tab" aria-controls="settings">PDF4</a>-->
                                                    </div>
                                                <!--</div>-->
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <a href="#" style="color: rgb(52, 58, 64) !important;">
                                                    <h5 class="mb-0">
                                                        VINCULACIÓN EXTERNA
                                                    </h5>
                                                </a>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                <!--<div class="card">-->
                                                    <div class="list-group list-group-flush" id="list-tab" role="tablist">
                                                        <a class="list-group-item list-group-item-action" id="list-vep1-list" data-toggle="list" href="#list-vep1" role="tab" aria-controls="home">PREGUNTA 1</a>
                                                        <a class="list-group-item list-group-item-action" id="list-vep2-list" data-toggle="list" href="#list-vep2" role="tab" aria-controls="profile">PREGUNTA 2</a>
                                                        <a class="list-group-item list-group-item-action" id="list-vep3-list" data-toggle="list" href="#list-vep3" role="tab" aria-controls="messages">PREGUNTA 3</a>
                                                        <!--<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-four" role="tab" aria-controls="settings">PDF4</a>-->
                                                    </div>
                                                <!--</div>-->
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                                <a href="#" style="color: rgb(52, 58, 64) !important;">
                                                    <h5 class="mb-0">
                                                        ACTITUD
                                                    </h5>
                                                </a>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                                <!--<div class="card">-->
                                                    <div class="list-group list-group-flush" id="list-tab" role="tablist">
                                                        <a class="list-group-item list-group-item-action" id="list-ap1-list" data-toggle="list" href="#list-ap1" role="tab" aria-controls="home">PREGUNTA 1</a>
                                                        <a class="list-group-item list-group-item-action" id="list-ap2-list" data-toggle="list" href="#list-ap2" role="tab" aria-controls="profile">PREGUNTA 2</a>
                                                        <!--<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-tres" role="tab" aria-controls="messages">PDF3</a>-->
                                                        <!--<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-four" role="tab" aria-controls="settings">PDF4</a>-->
                                                    </div>
                                                <!--</div>-->
                                            </div>
                                        </div>
                                        <div class="card">
                                            <input type="submit" value="Guardar" id="guardarEncuesta" class="btn btn-secondary btn-lg">
                                        </div>
                                    </div>
                                </div>
                                <!------------------------------------------------------------------------------------------------------------>
                                
                                <div class="col-sm-9">
                                
                                    <div class="card">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list"><!-- despues del fade: show active -->
                                                <div class="card-header">
                                                ¿Cumplió con los requerimientos del plan de clase con respecto a la entrega, el formato y el contenido?
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="dap1">Frecuencia:</label>
                                                            <select value="{{old('dap1')}}" class="form-control select2 {{ $errors->has('dap1') ? ' is-invalid' : '' }}" id="dap1" name="dap1" title="Pregunta 1" required>
                                                                <option value="">SELECCIONE UNA OPCIÓN</option>
                                                                <option value="SI">SI</option>
                                                                <option value="PARCIALMENTE">PARCIALMENTE</option>
                                                                <option value="NO">NO</option>
                                                                <option value="N/A">N/A</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="calificacion_dap1">Calificación:</label>
                                                            <input class="form-control" type="text" id="calificacion_dap1" name="calificacion_dap1" readonly required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                                <div class="card-header">
                                                Al inicio del semestre, desglosó los criterios de evaluación con los correspondientes porcentajes, recabando la firma de los estudiantes y entregando el formato a la Jefatura.
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="dap2">Frecuencia:</label>
                                                            <select value="{{old('dap2')}}" class="form-control select2 {{ $errors->has('dap2') ? ' is-invalid' : '' }}" id="dap2" name="dap2" title="Pregunta 2" required>
                                                                <option value="">SELECCIONE UNA OPCIÓN</option>
                                                                <option value="SI">SI</option>
                                                                <option value="PARCIALMENTE">PARCIALMENTE</option>
                                                                <option value="NO">NO</option>
                                                                <option value="N/A">N/A</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="calificacion_dap2">Calificación:</label>
                                                            <input class="form-control" type="text" id="calificacion_dap2" name="calificacion_dap2" readonly required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                                <div class="card-header">
                                                    Durante el periodo, proporcionó información sobre la conducta, la asistencia y/o el desempeño académico de sus alumnos.
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="dap3">Frecuencia:</label>
                                                            <select value="{{old('dap3')}}" class="form-control select2 {{ $errors->has('p3') ? ' is-invalid' : '' }}" id="dap3" name="dap3" title="Pregunta 3" required>
                                                                <option value="">SELECCIONE UNA OPCIÓN</option>
                                                                <option value="SI">SI</option>
                                                                <option value="PARCIALMENTE">PARCIALMENTE</option>
                                                                <option value="NO">NO</option>
                                                                <option value="N/A">N/A</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="calificacion_dap3">Calificación:</label>
                                                            <input class="form-control" type="text" id="calificacion_dap3" name="calificacion_dap3" readonly required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                                <div class="card-header">
                                                    Asistió a las juntas y a los eventos académicos convocados por la Jefatura.
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="dap4">Frecuencia:</label>
                                                            <select value="{{old('dap4')}}" class="form-control select2 {{ $errors->has('dap4') ? ' is-invalid' : '' }}" id="dap4" name="dap4" title="Pregunta 4" required>
                                                                <option value="">SELECCIONE UNA OPCIÓN</option>
                                                                <option value="SI">SI</option>
                                                                <option value="PARCIALMENTE">PARCIALMENTE</option>
                                                                <option value="NO">NO</option>
                                                                <option value="N/A">N/A</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="calificacion_dap4">Calificación:</label>
                                                            <input class="form-control" type="text" id="calificacion_dap4" name="calificacion_dap4" readonly required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Compromiso Académico -->
                                            <div class="tab-pane fade" id="list-one" role="tabpanel" aria-labelledby="list-settings-list">
                                                <div class="card-header">
                                                    En caso de haber sido convocado, participó en actividades de titulación tales como Direcciones de Tesis, Sinodalías y/o impartición de la materia de  Seminario de Titulación.
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="cap1">Frecuencia:</label>
                                                            <select value="{{old('cap1')}}" class="form-control select2 {{ $errors->has('cap1') ? ' is-invalid' : '' }}" id="cap1" name="cap1" title="Pregunta 1" required>
                                                                <option value="">SELECCIONE UNA OPCIÓN</option>
                                                                <option value="SI">SI</option>
                                                                <option value="PARCIALMENTE">PARCIALMENTE</option>
                                                                <option value="NO">NO</option>
                                                                <option value="N/A">N/A</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="calificacion_cap1">Calificación:</label>
                                                            <input class="form-control" type="text" id="calificacion_cap1" name="calificacion_cap1" readonly required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="list-two" role="tabpanel" aria-labelledby="list-settings-list">
                                                <div class="card-header">
                                                    En caso de haber sido convocado, impartió asesorías académicas para regularizar a alumnos que lo requerían y/o alumnos en status de Equivalencia.
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="cap2">Frecuencia:</label>
                                                            <select value="{{old('cap2')}}" class="form-control select2 {{ $errors->has('cap2') ? ' is-invalid' : '' }}" id="cap2" name="cap2" title="Pregunta 2" required>
                                                                <option value="">SELECCIONE UNA OPCIÓN</option>
                                                                <option value="SI">SI</option>
                                                                <option value="PARCIALMENTE">PARCIALMENTE</option>
                                                                <option value="NO">NO</option>
                                                                <option value="N/A">N/A</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="calificacion_cap2">Calificación:</label>
                                                            <input class="form-control" type="text" id="calificacion_cap2" name="calificacion_cap2" readonly required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="list-tres" role="tabpanel" aria-labelledby="list-settings-list">
                                                <div class="card-header">
                                                    En caso de haber sido convocado, participó en la revisión de programas de estudio para la reestructuración y/o actualización de la Licenciatura.
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="cap3">Frecuencia:</label>
                                                            <select value="{{old('cap3')}}" class="form-control select2 {{ $errors->has('cap3') ? ' is-invalid' : '' }}" id="cap3" name="cap3" title="Pregunta 3" required>
                                                                <option value="">SELECCIONE UNA OPCIÓN</option>
                                                                <option value="SI">SI</option>
                                                                <option value="PARCIALMENTE">PARCIALMENTE</option>
                                                                <option value="NO">NO</option>
                                                                <option value="N/A">N/A</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="calificacion_cap3">Calificación:</label>
                                                            <input class="form-control" type="text" id="calificacion_cap3" name="calificacion_cap3" readonly required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Vinculación Externa -->
                                            <div class="tab-pane fade" id="list-vep1" role="tabpanel" aria-labelledby="list-settings-list">
                                                <div class="card-header">
                                                    Realizó viajes o visitas de estudio a empresas, a congresos y/o a instituciones gubernamentales.
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="vep1">Frecuencia:</label>
                                                            <select value="{{old('vep1')}}" class="form-control select2 {{ $errors->has('vep1') ? ' is-invalid' : '' }}" id="vep1" name="vep1" title="Pregunta 1" required>
                                                                <option value="">SELECCIONE UNA OPCIÓN</option>
                                                                <option value="SI">SI</option>
                                                                <option value="PARCIALMENTE">PARCIALMENTE</option>
                                                                <option value="NO">NO</option>
                                                                <option value="N/A">N/A</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="calificacion_vep1">Calificación:</label>
                                                            <input class="form-control" type="text" id="calificacion_vep1" name="calificacion_vep1" readonly required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="list-vep2" role="tabpanel" aria-labelledby="list-settings-list">
                                                <div class="card-header">
                                                    Organizó conferencias, mesas redondas y/o entrevistas, con personas externas a la Universidad.
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="vep2">Frecuencia:</label>
                                                            <select value="{{old('vep2')}}" class="form-control select2 {{ $errors->has('vep2') ? ' is-invalid' : '' }}" id="vep2" name="vep2" title="Pregunta 2" required>
                                                                <option value="">SELECCIONE UNA OPCIÓN</option>
                                                                <option value="SI">SI</option>
                                                                <option value="PARCIALMENTE">PARCIALMENTE</option>
                                                                <option value="NO">NO</option>
                                                                <option value="N/A">N/A</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="calificacion_vep2">Calificación:</label>
                                                            <input class="form-control" type="text" id="calificacion_vep2" name="calificacion_vep2" readonly required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="list-vep3" role="tabpanel" aria-labelledby="list-settings-list">
                                                <div class="card-header">
                                                    Contactó a los alumnos con instituciones para la realización de actividades académicas, prácticas, servicio social o trabajo.
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="vep3">Frecuencia:</label>
                                                            <select value="{{old('vep3')}}" class="form-control select2 {{ $errors->has('vep3') ? ' is-invalid' : '' }}" id="vep3" name="vep3" title="Pregunta 3" required>
                                                                <option value="">SELECCIONE UNA OPCIÓN</option>
                                                                <option value="SI">SI</option>
                                                                <option value="PARCIALMENTE">PARCIALMENTE</option>
                                                                <option value="NO">NO</option>
                                                                <option value="N/A">N/A</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="calificacion_vep3">Calificación:</label>
                                                            <input class="form-control" type="text" id="calificacion_vep3" name="calificacion_vep3" readonly required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Actitud -->
                                            <div class="tab-pane fade" id="list-ap1" role="tabpanel" aria-labelledby="list-settings-list">
                                                <div class="card-header">
                                                    Tiene apertura para aceptar sugerencias de parte de la Jefatura  y corregir actitudes respecto a su desempeño docente.
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="ap1">Frecuencia:</label>
                                                            <select value="{{old('ap1')}}" class="form-control select2 {{ $errors->has('ap1') ? ' is-invalid' : '' }}" id="ap1" name="ap1" title="Pregunta 1" required>
                                                                <option value="">SELECCIONE UNA OPCIÓN</option>
                                                                <option value="SI">SI</option>
                                                                <option value="PARCIALMENTE">PARCIALMENTE</option>
                                                                <option value="NO">NO</option>
                                                                <option value="N/A">N/A</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="calificacion_ap1">Calificación:</label>
                                                            <input class="form-control" type="text" id="calificacion_ap1" name="calificacion_ap1" readonly required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="list-ap2" role="tabpanel" aria-labelledby="list-settings-list">
                                                <div class="card-header">
                                                    Mostró capacidad en el manejo de conflictos con los alumnos.
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="ap2">Frecuencia:</label>
                                                            <select value="{{old('ap2')}}" class="form-control select2 {{ $errors->has('ap2') ? ' is-invalid' : '' }}" id="ap2" name="ap2" title="Pregunta 2" required>
                                                                <option value="">SELECCIONE UNA OPCIÓN</option>
                                                                <option value="SI">SI</option>
                                                                <option value="PARCIALMENTE">PARCIALMENTE</option>
                                                                <option value="NO">NO</option>
                                                                <option value="N/A">N/A</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="calificacion_ap2">Calificación:</label>
                                                            <input class="form-control" type="text" id="calificacion_ap2" name="calificacion_ap2" readonly required>
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
            </div>
        </div>
    </div>
</form>


</body>
<script src="{{ asset('plugins/jQuery/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('plugins/Bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('plugins/Bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/Font_awesome/js/all.js') }}"></script>
<script type="text/javascript">
(function() {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('form-control');
        
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('focusout', function(event) {
                //console.log( $(form).attr("name") );
                if( $(form).val() == '' ){
                    $( '#'+$(form).attr("id") ).removeClass('is-valid');
                    $( '#'+$(form).attr("id") ).addClass('is-invalid');
                    $( '#error_'+$(form).attr("id") ).show();
                }else{
                    $( '#'+$(form).attr("id") ).removeClass('is-invalid');
                    $( '#'+$(form).attr("id") ).addClass('is-valid');
                    $( '#error_'+$(form).attr("id") ).hide();
                }
            }, false);
        });
    }, false);
})();
var forms = document.getElementsByClassName('select2');
    var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('change', function(event) {
            /*if( $(form).attr("aria-expanded") == "true" ){
                var numIdPartida = $(form).attr("id").replace("select2-idPartida_", "");
            }*/
            console.log($(form).attr("id"))
            switch ( $('#'+$(form).attr("id") ).val() ) {
                case "SI":
                    $('#calificacion_'+$(form).attr("id")).val('3');
                    $('#calificacion_'+$(form).attr("id")).removeClass('is-invalid');
                    $('#calificacion_'+$(form).attr("id")).addClass('is-valid');
                    break;
                case "PARCIALMENTE":
                    $('#calificacion_'+$(form).attr("id")).val('2');
                    $('#calificacion_'+$(form).attr("id")).removeClass('is-invalid');
                    $('#calificacion_'+$(form).attr("id")).addClass('is-valid');
                    break;
                case "NO":
                    $('#calificacion_'+$(form).attr("id")).val('1');
                    $('#calificacion_'+$(form).attr("id")).removeClass('is-invalid');
                    $('#calificacion_'+$(form).attr("id")).addClass('is-valid');
                    break;
                case "N/A":
                    $('#calificacion_'+$(form).attr("id")).val('0');
                    $('#calificacion_'+$(form).attr("id")).removeClass('is-invalid');
                    $('#calificacion_'+$(form).attr("id")).addClass('is-valid');
                    break;
                case "":
                    $('#calificacion_'+$(form).attr("id")).val('');
                    $('#calificacion_'+$(form).attr("id")).removeClass('is-valid');
                    $('#calificacion_'+$(form).attr("id")).addClass('is-invalid');
                    break;
                default:
                    break;
            }
        });
    });
</script>
</html>