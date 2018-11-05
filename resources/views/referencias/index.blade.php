@extends('layouts.app') @section('content')
<script src="{{ asset('js/anexos.js') }}" defer></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="container-fluid">
    <div class="breadcrumb-holder">
        <h1 class="main-title float-left"> Registro de Anexos Técnicos </h1>
        <ol class="breadcrumb float-right">
            <a href="{{url('home')}}">
                <li class="breadcrumb-item">Inicio</li>
            </a>
            <li class="breadcrumb-item active"></li>
            <li class="breadcrumb-item active">Registrar Anexo</li>
        </ol>
        <div class="clearfix"></div>
    </div>
</div>
<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-header white-text text-center py-2" style="background-color:#5797af">
                    <h3><i class="fa fa-user"></i> Para registrar el anexo se required que el usuario exista en nuestra base de datos</h3>
                </div>

                <div class="card-body">
                    <form class="was-validated" method="POST" action="newreferencia">
                        @csrf
                        <div class="form-row justify-content-center">
                            <div class="col-sm-4">
                                <!-- First name -->
                                <div class="md-form">
                                    <input type="text" class="form-control text-center" id="funcionario" value="{{ Auth::user()->name }}" readonly>
                                    <label for="funcionario">Nombre del funcionario</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <!-- Género -->
                                <div class="md-form">
                                    <input type="text" id="cc" class="form-control text-center" value="1020493954" required autofocus>
                                    <label for="cc">Ingrese la Cédula del Paciente</label>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-footer small text-muted">Sumimedical.com</div>
            </div>
            <!-- end card-->
        </div>
        <div id="result_anexo">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-header white-text text-center py-2" style="background-color:#5797af">
                        <h3><i class="fa fa-users"></i> Información del Paciente </h3>
                    </div>

                    <div class="card-body">
                        <!-- Form -->
                        <form class="text-center" style="color: #757575;">

                            <div class="form-row">
                                <div class="col-sm-2">
                                    <!-- First name -->
                                    <div class="md-form">
                                        <input type="text" id="num_id" name="num_id" class="form-control  font-weight-bold" style="color:#898989" value="#num_id" readonly>
                                        <label for="num_id">Indentificación</label>
                                    </div>
                                </div>
                                <input type="text" id="id_paci" name="id_paci">
                                <input type="text" id="id_prestador" name="id_prestador">
                                <div class="col-sm-2">
                                    <!-- Género -->
                                    <div class="md-form">
                                        <input type="text" id="tipo_id" name="tipo_id" value="#tipo_id" class="form-control  font-weight-bold" style="color:#898989" readonly readonly>
                                        <label for="tipo_id">Tipo Identificación</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <!-- Género -->
                                    <div class="md-form">
                                        <input type="text" id="primer_nom" name="primer_nom" value="#primer_nom" class="form-control  font-weight-bold" style="color:#898989" readonly>
                                        <label for="primer_nom">Primer Nombre</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <!-- Género -->
                                    <div class="md-form">
                                        <input type="text" id="segundo_nom" name="segundo_nom"  value="#segundo_nombre" class="form-control  font-weight-bold" style="color:#898989" readonly>
                                        <label for="segundo_nom">Segundo Nombre</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <!-- Género -->
                                    <div class="md-form">
                                        <input type="text" id="primer_ape" name="primer_ape" value="#primer_ape" class="form-control  font-weight-bold" style="color:#898989" readonly>
                                        <label for="primer_ape">Primer Apellido</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <!-- Género -->
                                    <div class="md-form">
                                        <input type="text" id="segundo_ape" name="segundo_ape" value="#segundo_ape" class="form-control  font-weight-bold" style="color:#898989" readonly>
                                        <label for="segundo_ape">Segundo Apellido</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- Género -->
                                    <div class="md-form">
                                        <input type="text" id="fecha_naci" name="fecha_naci" value="#fecha_naci" class="form-control  font-weight-bold" style="color:#898989" readonly>
                                        <label for="materialRegisterFormLastName">Fecha nacimiento</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- Género -->
                                    <div class="md-form">
                                        <input type="text" id="sexo" name="sexo" value="#sexo" class="form-control  font-weight-bold" style="color:#898989" readonly>
                                        <label for="sexo">Género</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- Departamento -->
                                    <div class="md-form">
                                        <input type="text" id="nom_dpto" name="nom_dpto" value="#nom_dpto" class="form-control  font-weight-bold" style="color:#898989" readonly>
                                        <label for="nom_dpto">Departamento</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- Municipio -->
                                    <div class="md-form">
                                        <input type="text" id="nom_muni" name="nom_muni" value="#nom_muni" class="form-control font-weight-bold" style="color:#898989" readonly>
                                        <label for="nom_muni">Municipio</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- Dirección -->
                                    <div class="md-form">
                                        <input type="text" id="direccion" name="direccion" value="#direccion" class="form-control font-weight-bold" style="color:#898989" readonly>
                                        <label for="direccion">Dirección</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <!-- Teléfono Fijo -->
                                    <div class="md-form">
                                        <input type="text" id="telefono" name="telefono" value="#telefono" class="form-control font-weight-bold" style="color:#898989" readonly>
                                        <label for="telefono">Teléfono Fijo</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <!-- Teléfono Celular -->
                                    <div class="md-form">
                                        <input type="text" id="celular" name="celular" value="#celular" class="form-control font-weight-bold" style="color:#898989" readonly>
                                        <label for="celular">Teléfono Celular</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- Correo Electrónico -->
                                    <div class="md-form">
                                        <input type="text" id="email" name="email" value="#email" class="form-control font-weight-bold" style="color:#898989" readonly>
                                        <label for="email">Correo Electrónico</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <!-- Tipo Usuario -->
                                    <div class="md-form">
                                        <input type="text" id="tipo_usuario" name="tipo_usuario" value="#tipo_usuario" class="form-control font-weight-bold" style="color:#898989" readonly>
                                        <label for="tipo_usuario">Tipo Usuario</label>
                                    </div>
                                </div>
                            </div>
                    </div>

                </div>
                <!-----*****************    FIN INFORMAACIÓN DEL USUARIO  **************** -->
                <div id="informacion_solicitud">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-header white-text text-center py-2" style="background-color:#5797af">
                                    <h3><i class="fa fa-users"></i> Información Solicitud </h3>
                                </div>
                                <div class="card-body">
                                    <!-- Default inline 1-->
                                    <div class="form-row justify-content-center">
                                        <!-- Default inline 1-->
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="anexo2" name="inlineDefaultRadiosExample">
                                            <label class="custom-control-label" for="anexo2">Urgencias (Anexo 2)</label>
                                        </div>

                                        <!-- Default inline 2-->
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="anexo3" name="inlineDefaultRadiosExample">
                                            <label class="custom-control-label" for="anexo3">Solicitud de Autorización (Anexo 3)</label>
                                        </div>

                                        <!-- Default inline 3-->
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="anexo9" name="inlineDefaultRadiosExample">
                                            <label class="custom-control-label" for="anexo9">Remisiones (Anexo 9)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="padres">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-header white-text text-center py-2" style="background-color:#5797af">
                                    <h3><i class="fa fa-users"></i> Información padres </h3>
                                </div>
                                <div class="card-body">
                                    <!-- Default inline 1-->
                                    <div class="form-row">
                                        <div class="col-sm-3">
                                            <!-- cedula_madre -->
                                            <div class="md-form">
                                                <input type="text" id="cedula_madre" name="cedula_madre" class="form-control font-weight-bold" style="color:#898989">
                                                <label for="cedula_madre">Identificación madre</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- cedula_madre -->
                                            <div class="md-form">
                                                <input type="text" id="nombre_madre" name="nombre_madre" class="form-control font-weight-bold" style="color:#898989">
                                                <label for="nombre_madre">Nombre madre</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- cedula_padre -->
                                            <div class="md-form">
                                                <input type="text" id="cedula_padre" name="cedula_padre" class="form-control font-weight-bold" style="color:#898989">
                                                <label for="cedula_padre">Identificación padre</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- cedula_padre -->
                                            <div class="md-form">
                                                <input type="text" id="nombre_padre" name="nombre_padre" class="form-control font-weight-bold" style="color:#898989">
                                                <label for="nombre_padre">Nombre padre</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-----*****************    FIN INFORMAACIÓN SOLICITUD  **************** -->
                <div id="resul_anexo2">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-header white-text text-center py-2" style="background-color:#5797af">
                                    <h3><i class="fa fa-users"></i> Información Solicitud </h3>
                                </div>
                                <div class="card-body">
                                    <!-- Default inline 1-->
                                    <div class="form-row">
                                        <div class="col-sm-2">
                                            <!-- Clasificación Triage -->
                                            <label class="my-1 mr-2" for="triage">Clasificación Triage</label>
                                            <select class="custom-select my-1 mr-sm-2 text-center font-weight-bold" style="color:#898989" id="triage" name="triage">
                                                <option selected>Selecciona...</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="3">4</option>
                                                <option value="3">5</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- fecha_urgencia -->
                                            <label class="my-1 mr-2" for="fecha_urgencia">Fecha Ingreso a Urgencias</label>
                                            <input type="date" id="fecha_urgencia" class="my-1 mr-sm-2 form-control text-center font-weight-bold" style="color:#898989">
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- hora_urgencia -->
                                            <label class="my-1 mr-2" for="hora_urgencia">Hora Ingreso a Urgencias</label>
                                            <input type="time" id="hora_urgencia" name="hora_urgencia" class="my-1 mr-sm-2 form-control text-center font-weight-bold" style="color:#898989">
                                        </div>
                                        <div id="remitido">
                                            <div class="col-sm-8 text-center">
                                                <label class="my-1 mr-2" for="fecha_urgencia">Usuario viene Remitido</label>
                                                <!-- Default inline 1-->
                                                <div class="custom-control custom-radio custom-control-inline text-left" style="margin-top:10px">
                                                    <input type="radio" class="custom-control-input my-1 mr-sm-2 form-control text-center font-weight-bold" style="color:#898989" id="rsi" name="inlineDefaultRadiosExample1">
                                                    <label class="custom-control-label" for="rsi">SI</label>
                                                </div>

                                                <!-- Default inline 2-->
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input my-1 mr-sm-2 form-control text-center font-weight-bold" style="color:#898989" id="rno" name="inlineDefaultRadiosExample1">
                                                    <label class="custom-control-label" for="rno">NO</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="resul_remitido">
                                            <div class="form-row">
                                                <div class="col-sm-3">
                                                    <label class="my-1 mr-2" for="triage">Nombre del Prestador Remitente</label>
                                                    <select class="custom-select text-center font-weight-bold" style="color:#898989" id="nom_prest" name="nom_prest">
                                                        <option selected></option>
                                                        <option>A.R.P. AGRICOLA DE SEGUROS SURATEP</option>
                                                        <option>A.R.P. COLMENA</option>
                                                        <option>A.R.P. SURATEP</option>
                                                        <option>ADMINISTRADORA DE LOS RECURSOS DEL SGSSS - ADRES</option>
                                                        <option>AEROPUERTO OLAYA HERRERA</option>
                                                        <option>AGROINDUSTRIAS LOS ROBLES</option>
                                                        <option>AGROPECUARIA CIENFUEGOS S.A</option>
                                                        <option>ALIANSALUD E.P.S</option>
                                                        <option>ALIANZA MEDELLIN ANTIOQUIA EPS S.A.S.</option>
                                                        <option>ALLIANZ SEGUROS DE VIDA S.A</option>
                                                        <option>ALLIANZ SEGUROS S.A</option>
                                                        <option>ALPHA SEGURIDAD PRIVADA LTDA </option>
                                                        <option>AMELISSA</option>
                                                        <option>ANAS WAYUU E.P.S.I</option>
                                                        <option>ANGIOGRAFIA DE OCCIDENTE S.A</option>
                                                        <option>AREA METROPOLITANA VALLE DE ABURRA</option>
                                                        <option>ART MEDICA S.A.S</option>
                                                        <option>ASEGURADORA SOLIDARIA DE SEGUROS</option>
                                                        <option>ASMET SALUD EPS SAS</option>
                                                        <option>ASOCIACION DE PROFESORES DE LA UNIVERSIDAD DE ANTIOQUIA</option>
                                                        <option>ASOCIACION GREMIAL DE TRABAJADORES DE LA SALUD - SER SANO</option>
                                                        <option>ASOCIACION INDIGENA DEL CAUCA</option>
                                                        <option>ASOCIACION MUTUAL BARRIOS UNIDOS DE QUIBDO AMBUQ A.R.S</option>
                                                        <option>ASOCIACION MUTUAL EL SOCORRO</option>
                                                        <option>AUDIFARMA (INVESTIGACION)</option>
                                                        <option>AUDIFARMA S.A</option>
                                                        <option>AXA ASISTENCIA COLOMBIA S.A</option>
                                                        <option>AXA COLPATRIA MEDICINA PREPAGADA S.A</option>
                                                        <option>AXA COLPATRIA SEGUROS S.A</option>
                                                        <option>AXACOLPATRIA SEGUROS DE VIDA S.A</option>
                                                        <option>BANCORNEA</option>
                                                        <option>C.C.C CLINICA SANTA MARIA</option>
                                                        <option>CAJA DE COMPENSACIÓN FAMILIAR DE NARIÑO "COMFAMILIAR NARIÑO"</option>
                                                        <option>CAJA DE PREVISION SOCIAL DE LA UNIVERSIDAD INDUSTRIAL SANTAN</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <!-- Código Habitacion -->
                                                    <div class="md-form">
                                                        <input type="text" id="habi_remitido" name="habi_remitido" class="form-control text-center font-weight-bold" style="color:#898989">
                                                        <label for="habi_remitido">Código Habitacion</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <!-- departamento -->
                                                    <div class="md-form">
                                                        <input type="text" id="dpto_remitido" name="dpto_remitido" class="form-control text-center font-weight-bold" style="color:#898989">
                                                        <label for="dpto_remitido">Departamento</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <!-- Municipio -->
                                                    <div class="md-form">
                                                        <input type="text" id="muni_remitido" name="muni_remitido" class="form-control text-center font-weight-bold" style="color:#898989">
                                                        <label for="muni_remitido">Municipio</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Origen de la Atención -->
                                            <div class="md-form">
                                                <input type="text" id="origen_atencion" name="origen_atencion" class="form-control text-center font-weight-bold" style="color:#898989">
                                                <label for="origen_atencion">Origen de la Atención</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Entidad a la que se le solicita (Asegurador) -->
                                            <div class="md-form">
                                                <input type="text" id="enti_solicita" name="enti_solicita" class="form-control text-center font-weight-bold" style="color:#898989">
                                                <label for="enti_solicita">Entidad solicita (Asegurador)</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Destino del Paciente -->
                                            <div class="md-form">
                                                <input type="text" id="des_paci" name="des_paci" class="form-control text-center font-weight-bold" style="color:#898989">
                                                <label for="des_paci">Destino del Paciente</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                                <label for="validationTooltip03"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" style="background-color: #5797af; color:white" id="text1">Motivo de Consulta</span>
                                                        
                                                    </div>
                                                    <textarea class="form-control" rows="8" id="text" name="text1"></textarea>
                                                    <div class="col-md-12">
                                                            <label for="LeyendaDatosMedicos" style="font-size:9px; font-weight:normal;">
                                                                Describa los datos médicos teniendo en cuenta los siguientes datos:
                                                                <br> 1) Datos Psicosociales.
                                                                <br> 2) Motivo de consulta(MC), Evolución.
                                                                <br> 3) Narración técnica del Estado actual(EA).
                                                                <br> 4) Antecedentes personales (AP), Quirúrgicos (AQ), Ginecobstetricos (AG), Hábitos, Alérgicos, Psicosociales, Familiares, Vacunas, Medicamentos.
                                                                <br> 5) Revisión por sistemas:  Síntomas generales, Sistema respiratorio, Sistema cardiovascular, Sistema gastrointestinal, Sistema genitourinario, Sistema endocrino, Sistema neurológico.
                                                                <br> 6) Laboratorios, Ayudas dx, Manejo actual, Pronóstico, Motivo de remisión, Nombre acompañante, Numero acompañante.
                                                            </label>
                                                        </div>
                                                </div>
                                            </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-----*****************    FIN ANEXO 2  **************** -->
                <div id="resul_anexo3">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-header white-text text-center py-2" style="background-color:#5797af">
                                    <h3><i class="fa fa-users"></i> Información Solicitud </h3>
                                </div>
                                <div class="card-body">
                                    <!-- Selec del anexo 3-->
                                    <div id="ubipaciente">
                                        <div class="col-sm-8 text-center">
                                            <label class="my-1 mr-2" for="fecha_urgencia">Ubicación del paciente:</label>
                                            <!-- Consulta externa-->
                                            <div class="custom-control custom-radio custom-control-inline text-left" style="margin-top:10px">
                                                <input type="radio" class="custom-control-input my-1 mr-sm-2 form-control text-center font-weight-bold" style="color:#898989" id="cexterna" name="Consulta Externa" value="Consulta Externa">
                                                <label class="custom-control-label" for="cexterna">Consulta Externa</label>
                                            </div>

                                            <!-- Hospitalización-->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input my-1 mr-sm-2 form-control text-center font-weight-bold" style="color:#898989" id="hosp" name="Consulta Externa" value="Hospitalización">
                                                <label class="custom-control-label" for="hosp">Hospitalización</label>
                                            </div>
                                            <!-- Urgencias-->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input my-1 mr-sm-2 form-control text-center font-weight-bold" style="color:#898989" id="urge" name="Consulta Externa" value="Urgencias">
                                                <label class="custom-control-label" for="urge">Urgencias</label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div id="resul_ubipaci">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <!-- Servicios de Hospitalización -->
                                                <div class="md-form">
                                                    <input type="text" id="servi_hosp" name="servi_hosp" value="Hospitalización" class="form-control font-weight-bold" style="color:#898989" readonly>
                                                    <label for="servi_hosp">Servicios de Hospitalización</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <!-- Cama ubi paciente -->
                                                <div class="md-form">
                                                    <input type="text" id="cama_ubipaci" name="cama_ubipaci" class="form-control font-weight-bold" style="color:#898989">
                                                    <label for="cama_ubipaci">Cama</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <!-- Código Habilitación -->
                                            <div class="md-form">
                                                <input type="text" id="cod_habi" name="cod_habi" class="form-control font-weight-bold" style="color:#898989">
                                                <label for="cod_habi">Código Habilitación</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- Departamento -->
                                            <div class="md-form">
                                                <input type="text" id="dpto_hospitalizacion" name="dpto_hospitalizacion" class="form-control font-weight-bold" style="color:#898989">
                                                <label for="dpto_hospitalizacion">Departamento</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- Municipio -->
                                            <div class="md-form">
                                                <input type="text" id="muni_hospitalizacion" name="muni_hospitalizacion" class="form-control font-weight-bold" style="color:#898989">
                                                <label for="muni_hospitalizacion">Municipio</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- Origen de la Atención -->
                                            <div class="md-form">
                                                <input type="text" id="ori_atencion" name="ori_atencion" value="Enfermedad General" class="form-control font-weight-bold" style="color:#898989">
                                                <label for="ori_atencion">Origen de la Atención</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Diagnóstico -->
                                            <div class="md-form">
                                                <input type="text" id="giagnostico_hospi" name="giagnostico_hospi" value="Enfermedad General" class="form-control font-weight-bold" style="color:#898989">
                                                <label for="giagnostico_hospi">Diagnóstico</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Prioridad de la Atención -->
                                            <label class="my-1 mr-2" for="triage">Prioridad de la Atención</label>
                                            <select class="custom-select my-1 mr-sm-2 text-center font-weight-bold" style="color:#898989" id="priori_atencion" name="priori_atencion">
                                                <option selected>Selecciona...</option>
                                                <option value="Prioritaria">Prioritaria</option>
                                                <option value="No Prioritaria">No Prioritaria</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Tipo de Servicio Solicitado -->
                                            <label class="my-1 mr-2" for="triage">Tipo de Servicio Solicitado</label>
                                            <select class="custom-select my-1 mr-sm-2 text-center font-weight-bold" style="color:#898989" id="tipo_servicio" name="tipo_servicio">
                                                <option selected>Selecciona...</option>
                                                <option value="Posterior a la Atención Inicial de Urgencias">Posterior a la Atención Inicial de Urgencias</option>
                                                <option value="Servicios Electivos">Servicios Electivos</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Cantidad -->
                                            <div class="md-form">
                                                <input type="text" id="cantidad" name="cantidad" class="form-control font-weight-bold" style="color:#898989">
                                                <label for="cantidad">Cantidad</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Actividad (CUPS) -->
                                            <label class="my-1 mr-2" for="cup">Actividad (CUPS)</label>
                                            <select class="custom-select my-1 mr-sm-2 text-center font-weight-bold" style="color:#898989" id="cup" name="cup">
                                                <option selected>Selecciona...</option>
                                                <option value="Prioritaria">Prioritaria</option>
                                                <option value="No Prioritaria">No Prioritaria</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Cantidad -->
                                            <div class="md-form">
                                                <input type="text" id="cantidad" name="cantidad" value="REDVITAL" class="form-control font-weight-bold" style="color:#898989">
                                                <label for="cantidad">Entidad solicita (Asegurador) </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                                <label for="validationTooltip03"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" style="background-color: #5797af; color:white" id="text1">Justificación Clínica</span>
                                                        
                                                    </div>
                                                    <textarea class="form-control" rows="8" id="text" name="text2"></textarea>
                                                    <div class="col-md-12">
                                                            <label for="LeyendaDatosMedicos" style="font-size:9px; font-weight:normal;">
                                                                Describa los datos médicos teniendo en cuenta los siguientes datos:
                                                                <br> 1) Datos Psicosociales.
                                                                <br> 2) Motivo de consulta(MC), Evolución.
                                                                <br> 3) Narración técnica del Estado actual(EA).
                                                                <br> 4) Antecedentes personales (AP), Quirúrgicos (AQ), Ginecobstetricos (AG), Hábitos, Alérgicos, Psicosociales, Familiares, Vacunas, Medicamentos.
                                                                <br> 5) Revisión por sistemas:  Síntomas generales, Sistema respiratorio, Sistema cardiovascular, Sistema gastrointestinal, Sistema genitourinario, Sistema endocrino, Sistema neurológico.
                                                                <br> 6) Laboratorios, Ayudas dx, Manejo actual, Pronóstico, Motivo de remisión, Nombre acompañante, Numero acompañante.
                                                            </label>
                                                        </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-----*****************    FIN ANEXO 3  **************** -->
                <div id="resul_anexo9">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-header white-text text-center py-2" style="background-color:#5797af">
                                    <h3><i class="fa fa-users"></i> Información Solicitud </h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col-sm-3">
                                            <label class="my-1 mr-2" for="ubi_paci_remi">Ubicación del Paciente</label>
                                            <select class="custom-select text-center font-weight-bold" style="color:#898989" id="ubi_paci_remi" name="ubi_paci_remi">
                                                <option selected></option>
                                                <option>A.R.P. AGRICOLA DE SEGUROS SURATEP</option>
                                                <option>A.R.P. COLMENA</option>
                                                <option>A.R.P. SURATEP</option>
                                                <option>ADMINISTRADORA DE LOS RECURSOS DEL SGSSS - ADRES</option>
                                                <option>AEROPUERTO OLAYA HERRERA</option>
                                                <option>AGROINDUSTRIAS LOS ROBLES</option>
                                                <option>AGROPECUARIA CIENFUEGOS S.A</option>
                                                <option>ALIANSALUD E.P.S</option>
                                                <option>ALIANZA MEDELLIN ANTIOQUIA EPS S.A.S.</option>
                                                <option>ALLIANZ SEGUROS DE VIDA S.A</option>
                                                <option>ALLIANZ SEGUROS S.A</option>
                                                <option>ALPHA SEGURIDAD PRIVADA LTDA </option>
                                                <option>AMELISSA</option>
                                                <option>ANAS WAYUU E.P.S.I</option>
                                                <option>ANGIOGRAFIA DE OCCIDENTE S.A</option>
                                                <option>AREA METROPOLITANA VALLE DE ABURRA</option>
                                                <option>ART MEDICA S.A.S</option>
                                                <option>ASEGURADORA SOLIDARIA DE SEGUROS</option>
                                                <option>ASMET SALUD EPS SAS</option>
                                                <option>ASOCIACION DE PROFESORES DE LA UNIVERSIDAD DE ANTIOQUIA</option>
                                                <option>ASOCIACION GREMIAL DE TRABAJADORES DE LA SALUD - SER SANO</option>
                                                <option>ASOCIACION INDIGENA DEL CAUCA</option>
                                                <option>ASOCIACION MUTUAL BARRIOS UNIDOS DE QUIBDO AMBUQ A.R.S</option>
                                                <option>ASOCIACION MUTUAL EL SOCORRO</option>
                                                <option>AUDIFARMA (INVESTIGACION)</option>
                                                <option>AUDIFARMA S.A</option>
                                                <option>AXA ASISTENCIA COLOMBIA S.A</option>
                                                <option>AXA COLPATRIA MEDICINA PREPAGADA S.A</option>
                                                <option>AXA COLPATRIA SEGUROS S.A</option>
                                                <option>AXACOLPATRIA SEGUROS DE VIDA S.A</option>
                                                <option>BANCORNEA</option>
                                                <option>C.C.C CLINICA SANTA MARIA</option>
                                                <option>CAJA DE COMPENSACIÓN FAMILIAR DE NARIÑO "COMFAMILIAR NARIÑO"</option>
                                                <option>CAJA DE PREVISION SOCIAL DE LA UNIVERSIDAD INDUSTRIAL SANTAN</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Diagnostico -->
                                            <div class="md-form">
                                                <input type="text" id="diag_remi" class="form-control font-weight-bold" style="color:#898989">
                                                <label for="diag_remi">Diagnóstico</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Prioridad_remi -->
                                            <label class="my-1 mr-2" for="Prioridad_remi">Prioridad</label>
                                            <select class="custom-select my-1 mr-sm-2 text-center font-weight-bold" style="color:#898989" id="Prioridad_remi" name="Prioridad_remi">
                                                <option selected>Selecciona...</option>
                                                <option value="Alta">Alta</option>
                                                <option value="Media">Media</option>
                                                <option value="Baja">Baja</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Complejidad_remi -->
                                            <label class="my-1 mr-2" for="Complejidad_remi">Complejidad</label>
                                            <select class="custom-select my-1 mr-sm-2 text-center font-weight-bold" style="color:#898989" id="Complejidad_remi" name="Complejidad_remi">
                                                <option selected>Selecciona...</option>
                                                <option value="Alta">Alta</option>
                                                <option value="Media">Media</option>
                                                <option value="Baja">Baja</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Complejidad_remi -->
                                            <label class="my-1 mr-2" for="Complejidad_remi">Modalidad apoyo</label>
                                            <select class="custom-select my-1 mr-sm-2 text-center font-weight-bold" style="color:#898989" id="Complejidad_remi" name="Complejidad_remi">
                                                <option selected></option>
                                                <option>Remisión</option>
                                                <option>Remisión apoyo diagnóstico</option>
                                                <option>Remisión Interconsulta</option>
                                                <option>Remisión Procedimientos</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Especialidad_remi -->
                                            <label class="my-1 mr-2" for="Especialidad_remi">Especialidad</label>
                                            <select class="custom-select my-1 mr-sm-2 text-center font-weight-bold" style="color:#898989" id="Especialidad_remi" name="Especialidad_remi">
                                                <option selected></option>
                                                <option>Alergologia</option>
                                                <option>Anestesia de Trasplante</option>
                                                <option>Anestesiologia</option>
                                                <option>Anestesiologia Cardiovascular</option>
                                                <option>Anestesiologia hemodinamia</option>
                                                <option>Auxiliar de Enfermeria</option>
                                                <option>Auxiliar de vigilancia de Salud Publica</option>
                                                <option>Ayuda Diagnostica</option>
                                                <option>Cardiologia</option>
                                                <option>Cardiologia Pediatrica</option>
                                                <option>Cirugia Bariatrica</option>
                                                <option>Cirugia Cardiovascular</option>
                                                <option>Cirugia de tejidos blandos</option>
                                                <option>Cirugia de Trasplante</option>
                                                <option>Cirugia Endoscopia</option>
                                                <option>Cirugia Endoscopista</option>
                                                <option>Cirugia General</option>
                                                <option>Cirugía General con funciones en transplantes</option>
                                                <option>Cirugia General Grupo 1</option>
                                                <option>Cirugia General Grupo 2</option>
                                                <option>Cirugia General Grupo 3</option>
                                                <option>Cirugia Hepatobiliopancreatica</option>
                                                <option>Cirugia Infantil</option>
                                                <option>Cirugia Maxilofacial</option>
                                                <option>Círugia Plastica Facial y reconstructiva</option>
                                                <option>Cirugia Plastica, Maxilofacial y de la Mano</option>
                                                <option>Cirugia Torax</option>
                                                <option>Cirugia Vascular</option>
                                                <option>Coloproctologia</option>
                                                <option>Consulta de medicina del adolescente</option>
                                                <option>Consulta Pretrasplante</option>
                                                <option>Coordinador CX</option>
                                                <option>CoordinadorOperativo de Trasplantes</option>
                                                <option>Cuidado Integral de Piel</option>
                                                <option>Cx Cabeza y Cuello</option>
                                                <option>Cx Via Aerea</option>
                                                <option>Dermatologia</option>
                                                <option>Electrofisiologia</option>
                                                <option>Endocrinologia</option>
                                                <option>Endocrinologia Pediatrica</option>
                                                <option>Enfermera</option>
                                                <option>Enfermera de vigilancia de Salud Publica</option>
                                                <option>Especialista en Radiologia</option>
                                                <option>Fisiatria</option>
                                                <option>Fisioterapia</option>
                                                <option>FonoAudiologia</option>
                                                <option>Gastroenterologia</option>
                                                <option>Gastroenterologia Infantil</option>
                                                <option>Gastroenterología y Hepatología</option>
                                                <option>Genetica Humana</option>
                                                <option>Gineco ARO</option>
                                                <option>Gineco Oncologia</option>
                                                <option>Ginecologia</option>
                                                <option>Ginecologia Mama</option>
                                                <option>GinecoObstetricia</option>
                                                <option>Grupo Uso de Antibióticos - Infectólogo</option>
                                                <option>Hemato Oncologia</option>
                                                <option>Hematología</option>
                                                <option>Hematología Pediatrica</option>
                                                <option>Hemodiálisis</option>
                                                <option>Hemodinamia</option>
                                                <option>Hepatología</option>
                                                <option>Hepatología Infantil</option>
                                                <option>Infectologia</option>
                                                <option>Infectología Infantil</option>
                                                <option>Inmunologia</option>
                                                <option>Intensivista</option>
                                                <option>Junta Medica</option>
                                                <option>Medicina del Adolescente</option>
                                                <option>Medicina del dolor y cuidado paleativo</option>
                                                <option>Medicina Deportiva</option>
                                                <option>Medicina Especializada</option>
                                                <option>Medicina General</option>
                                                <option>Medicina Interna</option>
                                                <option>Microbiologia</option>
                                                <option>Nefrologia</option>
                                                <option>Nefrologia con funciones en transplantes</option>
                                                <option>Nefrologia Pediatrica</option>
                                                <option>Neonatologia</option>
                                                <option>Neumologia</option>
                                                <option>Neumologia Infantil</option>
                                                <option>Neumologia-Infectologia</option>
                                                <option>Neurocirugia</option>
                                                <option>Neurocirugia Epilepsia</option>
                                                <option>Neurologia</option>
                                                <option>Neurologia Infantil</option>
                                                <option>Neurologia Urgencias</option>
                                                <option>Neuropsicologia</option>
                                                <option>Neuroradiologo</option>
                                                <option>Neurovascular</option>
                                                <option>Nutricion</option>
                                                <option>Observación</option>
                                                <option>Odontologia</option>
                                                <option>Odontopediatria</option>
                                                <option>Oftalmologia</option>
                                                <option>Oncologia</option>
                                                <option>Oncología Infantil</option>
                                                <option>Optometria</option>
                                                <option>Ortopedia</option>
                                                <option>Ortopedia Oncológica</option>
                                                <option>Otorrino- Cx Cabeza y Cuello</option>
                                                <option>Otorrinolaringologia</option>
                                                <option>Patologia</option>
                                                <option>Pediatría</option>
                                                <option>Programa Anticoagulados</option>
                                                <option>Psiquiatria</option>
                                                <option>Psiquiatria Infantil</option>
                                                <option>Radiologia Intervencionista</option>
                                                <option>Radioterapia</option>
                                                <option>Retinologia</option>
                                                <option>Reumatologia</option>
                                                <option>Reumatologia Infantil</option>
                                                <option>Sala de Dolor Torácico</option>
                                                <option>Salud Ocupacional y Medicina Laboral</option>
                                                <option>Sicologia</option>
                                                <option>Tecnologa Vascular</option>
                                                <option>Terapia de Lenguaje</option>
                                                <option>Terapia Ocupacional</option>
                                                <option>Terapia Respiratoria</option>
                                                <option>Toxicologia</option>
                                                <option>Trabajo Social</option>
                                                <option>Traumatologia</option>
                                                <option>Urgentologia</option>
                                                <option>Urologia</option>
                                                <option>Vascular Periferico (Med Interna)</option>
                                                <option>Vigilancia de Salud Publica y Control Infecciones</option>
                                            </select>
                                        </div>
                                        <div id="TBC">
                                            <div class="col-sm-8 text-center">
                                                <label class="my-1 mr-2" for="fecha_urgencia">Antecedentes de TBC</label>
                                                <!-- Default inline 1-->
                                                <div class="custom-control custom-radio custom-control-inline text-left" style="margin-top:10px">
                                                    <input type="radio" class="custom-control-input my-1 mr-sm-2 form-control text-center font-weight-bold" style="color:#898989" id="tbcsi" value="si" name="tbc">
                                                    <label class="custom-control-label" for="tbcsi">SI</label>
                                                </div>

                                                <!-- Default inline 2-->
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input my-1 mr-sm-2 form-control text-center font-weight-bold" style="color:#898989" id="tbcno" value="no" name="tbc">
                                                    <label class="custom-control-label" for="tbcno">NO</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="resultado_tbc">
                                                <div class="col-sm-8">
                                                        <!-- Clasificación TBC_remi -->
                                                        <label class="my-1 mr-2" for="TBC_remi">Antecedentes de TBC</label>
                                                        <select class="custom-select my-1 mr-sm-2 text-center font-weight-bold" style="color:#898989" id="TBC_remi" name="TBC_remi">
                                                            <option selected>Selecciona...</option>
                                                            <option>El paciente se encuentra actualmente en tratamiento.</option>
                                                            <option>El paciente no se encuentra actualmente en tratamiento.</option>
                                                        </select>
                                                    </div>
                                        </div>
                                        <div class="col-sm-3">
                                                <label class="my-1 mr-2" for="Aislamiento">Aislamiento</label>
                                                <select class="custom-select text-center font-weight-bold" style="color:#898989" id="Aislamiento" name="Aislamiento">
                                                    <option selected></option>
                                                    <option>SI</option>
                                                    <option>NO</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                    <label class="my-1 mr-2" for="Glasglow">Glasglow</label>
                                                    <select class="custom-select text-center font-weight-bold" style="color:#898989" id="Glasglow" name="Glasglow">
                                                            <option selected></option>
                                                            <option>Alerta</option>
                                                            <option>Obnubilación</option>
                                                            <option>Estupor</option>
                                                            <option>Coma</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                        <!-- Número glasglow -->
                                                        <div class="md-form">
                                                            <input type="text" id="num_glasglow" name="num_glasglow" class="form-control font-weight-bold" style="color:#898989">
                                                            <label for="num_glasglow">Número glasglow</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                            <!-- Presión arterial sistólica -->
                                                            <div class="md-form">
                                                                <input type="text" id="presion_sistolica" name="presion_sistolica" class="form-control font-weight-bold" style="color:#898989">
                                                                <label for="presion_sistolica">Presión arterial sistólica</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                                <!-- Presión arterial diastólica -->
                                                                <div class="md-form">
                                                                    <input type="text" id="presion_diastolica" name="presion_diastolica" class="form-control font-weight-bold" style="color:#898989">
                                                                    <label for="presion_diastolica">Presión arterial diastólica</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                    <!-- Frecuencia cardiaca -->
                                                                    <div class="md-form">
                                                                        <input type="text" id="fre_cardiaca" name="fre_cardiaca" class="form-control font-weight-bold" style="color:#898989">
                                                                        <label for="fre_cardiaca">Frecuencia cardiaca</label>
                                                                    </div>
                                                                </div>
                                                <div class="col-sm-3">
                                                        <!-- Frecuencia respiratoria -->
                                                        <div class="md-form">
                                                            <input type="text" id="fre_respiratoria" name="fre_respiratoria" class="form-control font-weight-bold" style="color:#898989">
                                                            <label for="fre_respiratoria">Frecuencia respiratoria</label>
                                                        </div>
                                                    </div>
                                                    <div id="ambulancia">
                                                            <div class="col-sm-8 text-center">
                                                                <label class="my-1 mr-2" for="fecha_urgencia">Requiere ambulancia</label>
                                                                <!-- Default inline 1-->
                                                                <div class="custom-control custom-radio custom-control-inline text-left" style="margin-top:10px">
                                                                    <input type="radio" class="custom-control-input my-1 mr-sm-2 form-control text-center font-weight-bold" style="color:#898989" id="ambulanciasi" value="si" name="ambulancia">
                                                                    <label class="custom-control-label" for="ambulanciasi">SI</label>
                                                                </div>
                
                                                                <!-- Default inline 2-->
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input my-1 mr-sm-2 form-control text-center font-weight-bold" style="color:#898989" id="ambulanciano" value="no" name="ambulancia">
                                                                    <label class="custom-control-label" for="ambulanciano">NO</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="resultado_ambulancia">
                                                            <div class="row">
                                                                    <div class="col-sm-8">
                                                                            <!-- Clasificación ambulancia_remi -->
                                                                            <label class="my-1 mr-2" for="ambulancia_remi">Servicio ambulancia</label>
                                                                            <select class="custom-select my-1 mr-sm-2 text-center font-weight-bold" style="color:#898989" id="ambulancia_remi" value="ambulancia_remi">
                                                                                    <option selected></option>
                                                                                    <option>Basico(TAB)-Terrestre</option>
                                                                                    <option>Basico(TAB)-Aereo</option>
                                                                                    <option>Medicalizado(TAM)-Terrestre</option>
                                                                                    <option>Medicalizado(TAM)-Aereo</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                                <!-- OXIGENO -->
                                                                                <label class="my-1 mr-2" for="req_oxigeno">Requiere oxigeno</label>
                                                                                <select class="custom-select my-1 mr-sm-2 text-center font-weight-bold" style="color:#898989" id="req_oxigeno" name="req_oxigeno">
                                                                                        <option selected></option>
                                                                                        <option>SI</option>
                                                                                        <option>NO</option>
                                                                                </select>
                                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-1">
                                                                <label for="validationTooltip03"></label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" style="background-color: #5797af; color:white" id="text1">Datos Médicos</span>
                                                                        
                                                                    </div>
                                                                    <textarea class="form-control" rows="8" id="text" name="text3"></textarea>
                                                                    <div class="col-md-12">
                                                                            <label for="LeyendaDatosMedicos" style="font-size:9px; font-weight:normal;">
                                                                                Describa los datos médicos teniendo en cuenta los siguientes datos:
                                                                                <br> 1) Datos Psicosociales.
                                                                                <br> 2) Motivo de consulta(MC), Evolución.
                                                                                <br> 3) Narración técnica del Estado actual(EA).
                                                                                <br> 4) Antecedentes personales (AP), Quirúrgicos (AQ), Ginecobstetricos (AG), Hábitos, Alérgicos, Psicosociales, Familiares, Vacunas, Medicamentos.
                                                                                <br> 5) Revisión por sistemas:  Síntomas generales, Sistema respiratorio, Sistema cardiovascular, Sistema gastrointestinal, Sistema genitourinario, Sistema endocrino, Sistema neurológico.
                                                                                <br> 6) Laboratorios, Ayudas dx, Manejo actual, Pronóstico, Motivo de remisión, Nombre acompañante, Numero acompañante.
                                                                            </label>
                                                                        </div>
                                                                </div>
                                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-----*****************    FIN ANEXO 9  **************** -->

                </div>
            </div>
        </div>
    </div>
    <div id="info_usereporta">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-header white-text text-center py-2" style="background-color:#5797af">
                    <h3><i class="fa fa-users"></i> Información del Solicitante y del Usuario Reportante </h3>
                </div>
                <div class="card-body">
                    <!-- Default inline 1-->
                    <div class="form-row">
                        <div class="col-sm-3">
                            <!-- Médico Solicitante -->
                            <div class="md-form">
                                <input type="text" id="medico_Soli"  name="medico_Soli" class="form-control text-center font-weight-bold" style="color:#898989">
                                <label for="medico_Soli">Médico Solicitante</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- Especialidad Médico Solicitante -->
                            <div class="md-form">
                                <input type="text" id="Espe_Médico_Soli" name="Espe_Médico_Soli" class="form-control text-center font-weight-bold" style="color:#898989">
                                <label for="Espe_Médico_Soli">Especialidad Médico Solicitante</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- Identificación Médico Solicitante -->
                            <div class="md-form">
                                <input type="text" id="Id_medico_Soli" name="Id_medico_Soli" class="form-control text-center font-weight-bold" style="color:#898989">
                                <label for="Id_medico_Soli">Identificación Médico Solicitante</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- Registro Médico Solicitante -->
                            <div class="md-form">
                                <input type="text" id="Re_medico_Soli" name="Re_medico_Soli" class="form-control text-center font-weight-bold" style="color:#898989">
                                <label for="Re_medico_Soli">Registro Médico Solicitante</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- Tipo Documento Usuario Reporta -->
                            <div class="md-form">
                                <input type="text" id="tipoid_User_Repo" name="tipoid_User_Repo" class="form-control text-center font-weight-bold" style="color:#898989">
                                <label for="tipoid_User_Repo">Tipo Documento Usuario Reporta</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- Médico Solicitante -->
                            <div class="md-form">
                                <input type="text" id="idusers_reporta" name="idusers_reporta" class="form-control text-center font-weight-bold" style="color:#898989">
                                <label for="idusers_reporta">Identificación Usuario Reporta</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- Especialidad Médico Solicitante -->
                            <div class="md-form">
                                <input type="text" id="nom_user_report" name="nom_user_report" class="form-control text-center font-weight-bold" style="color:#898989">
                                <label for="nom_user_report">Nombre Usuario Reporta</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- Identificación Médico Solicitante -->
                            <div class="md-form">
                                <input type="text" id="cargo_user_report" name="cargo_user_report" class="form-control text-center font-weight-bold" style="color:#898989">
                                <label for="cargo_user_report">Cargo Usuario Reporta</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- Registro Médico Solicitante -->
                            <div class="md-form">
                                <input type="text" id="tel_user_report" name="tel_user_report" class="form-control text-center font-weight-bold" style="color:#898989">
                                <label for="tel_user_report">Teléfono Usuario Reporta</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- Tipo Documento Usuario Reporta -->
                            <div class="md-form">
                                <input type="text" id="cel_user_report" name="cel_user_report" class="form-control text-center font-weight-bold" style="color:#898989">
                                <label for="cel_user_report">Celular Usuario Reporta</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-header white-text text-center py-2" style="background-color:#5797af">
                    <h3><i class="fa fa-users"></i> Adjuntar archivos </h3>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-sm-6">
                            <!-- Archivo adjunto -->
                            <div class="form-group">
                                <label for="adjunto">Archivo Adjunto</label>
                                <input type="file" style="height: calc(2.19rem + -7px); background-color: #5797af8a;" class="form-control-file" id="adjunto" name="adjunto">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Descripción de adjunto -->
                            <div class="md-form">
                                <input type="text" id="des_adjunto" name="des_adjunto" class="form-control text-center font-weight-bold" style="color:#898989">
                                <label for="des_adjunto">Descripción de Adjunto</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <p>By clicking
                            <em>Sign up</em> you agree to our
                            <a href="" target="_blank">terms of service</a> and
                            <a href="" target="_blank">terms of service</a>. </p>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- Form -->
    </div>

    @endsection

