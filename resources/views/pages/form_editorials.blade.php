<section class="content-header">
          <h1>
            Colaboradores
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb" style="  height: 40px;">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="/colaboradores"><a href="/colaboradores">Registro</a></li>
            <li class="active">Crear</li>
          </ol>

          
</section>
<section class="content">

<div style="height:10px;"></div>

    <form name="form" name="registroCreateForm">
        <div class="row justify-content-md-center">
            <div class="col col-lg-11" style="margin-left:4%;">
                <div class="panel panel-warning" >
                    <div class="panel-heading">Datos Personales</div>
                    <div class="panel-body">
                        <div class="callout callout-danger" ng-show="registroCreateForm.$invalid">
                            <strong >Los campos(*) son requeridos</strong>
                        </div>
                        <br>
                        <div class="row" class="form-group" ng-class="{'has-error': registroCreateForm.nombres.$invalid,'has-success':registroCreateForm.nombres.$invalid}">
                            <div class="col-sm-3" style="text-align:right;">
                                <label>Nombres *:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="nombres" placeholder="Nombres" name="nombres" ng-model="postulante.nombres" required >
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3" style="text-align:right;">
                                <label>Apellidos*:</label>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="apellido_paterno" placeholder="Apellido Paterno" ng-model="postulante.apellido_paterno" ng-required="false" maxlength="11">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="apellido_materno" placeholder="Apellido Materno" ng-model="postulante.apellido_materno" ng-required="false" maxlength="11">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3" style="text-align:right;">
                                <label>Tipo de Identificación*:</label>
                            </div>
                            <div class="col-sm-3">
                                <select ng-model="postulante.tipo_documento_id" name="tipo_documento_id" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="1">DNI</option>
                                    <option value="2">RUC</option>
                                    <option value="3">Carnet de Extrangeria</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="nro_documento" placeholder="" ng-model="postulante.nro_documento" ng-required="false" maxlength="11">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3" style="text-align:right;">
                                <label>Fecha de Nacimiento*:</label>
                            </div>
                            <div class="col-sm-2">
                                <select ng-model="postulante.dia" name="estad_civil_id" class="form-control">
                                    <option value="">Seleccione Dia </option>
                                    <option ng-repeat="r in dia" value="@{{r.id}}">@{{r.dia}}</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select ng-model="postulante.mes" name="estad_civil_id" class="form-control">
                                    <option value="">Seleccione Mes </option>
                                    <option ng-repeat="i in mes" value="@{{i.id}}">@{{i.mes}}</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select ng-model="postulante.anio" name="estad_civil_id" class="form-control">
                                    <option value="">Seleccione Año </option>
                                    <option ng-repeat="i in anio" value="@{{i.id}}">@{{i.anio}}</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3" style="text-align:right;">
                                <label>Estado Civil*:</label>
                            </div>
                            <div class="col-sm-6">
                                <select ng-model="postulante.estado_civil_id" name="estad_civil_id" class="form-control">
                                    <option value="">Seleccione Estado Civil </option>
                                    <option value="1">Casado</option>
                                    <option value="2">Soltero</option>
                                    <option value="3">Divorsiado</option>
                                    <option value="4">Viudo</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3" style="text-align:right;">
                                <label>Teléfono*:</label>
                            </div>
                            <div class="col-sm-2">
                                <select ng-model="postulante.tipo_telefono_id" name="tipo_telefono_id" class="form-control">
                                    <option value="">Selección</option>
                                    <option value="1">Fijo</option>
                                    <option value="2">Movil</option>
                                </select>
                            </div>
                            <div class="col-sm-1">
                                <input type="text" class="form-control" name="cod_telefono" ng-model="postulante.cod_telefono" ng-required="false" >
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="telefono" ng-model="postulante.telefono" ng-required="false" >
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3" style="text-align:right;">
                                <label>Teléfono 2:</label>
                            </div>
                            <div class="col-sm-2">
                                <select ng-model="postulante.tipo_telefono_id2" name="tipo_telefono_id2" class="form-control">
                                    <option value="">Selección</option>
                                    <option value="1">Fijo</option>
                                    <option value="2">Movil</option>
                                </select>
                            </div>
                            <div class="col-sm-1">
                                <input type="text" class="form-control" name="cod_telefono2" ng-model="postulante.cod_telefono2" ng-required="false" >
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="telefono2" ng-model="postulante.telefono2" ng-required="false" >
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3" style="text-align:right;">
                                <label>País*:</label>
                            </div>
                            <div class="col-sm-6">
                                <select ng-model="postulante.pais_id" name="pais_id" class="form-control">
                                    <option value="">Sleccione Pais</option>
                                    <option value="1">Peru</option>
                                    <option value="2">Chile</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3" style="text-align:right;">
                                <label>Departamento*:</label>
                            </div>
                            <div class="col-sm-6">
                                <select ng-model="postulante.departamento_id" name="departamento_id" class="form-control">
                                    <option value="">Seleccione Departamento</option>
                                    <option ng-repeat="i in departamento" value="@{{i.id}}">@{{i.nombre}}</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3" style="text-align:right;">
                                <label>Provincia*:</label>
                            </div>
                            <div class="col-sm-6">
                                <select ng-model="postulante.provincia_id" name="provincia_id" class="form-control">
                                    <option value="">Seleccione Provincia</option>
                                    <option ng-repeat="i in provincia" value="@{{i.id}}">@{{i.nombre}}</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3" style="text-align:right;">
                                <label>Distrito*:</label>
                            </div>
                            <div class="col-sm-6">
                                <select ng-model="postulante.distrito_id" name="distrito_id" class="form-control">
                                    <option value="">Seleccione Distrito</option>
                                    <option ng-repeat="i in distrito" value="@{{i.id}}">@{{i.nombre}}</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <!--<div class="row">
                           <div class="col-sm-3" style="text-align:right;">
                               <label>Ciudad*:</label>
                           </div>
                           <div class="col-sm-6">
                               <select ng-model="postulante.ciudad" name="cuidad" class="form-control">
                                   <option value="">Seleccione Ciudad</option>
                                   <option value="1">Lima</option>
                                   <option value="2">Callao</option>
                               </select>
                           </div>                 
                           </div><br>-->
                        <div class="row">
                            <div class="col-sm-3" style="text-align:right;">
                                <label>Codigo Postal*:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="" name="cod_postal" ng-model="postulante.cod_postal" ng-required="false" >
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3" style="text-align:right;">
                                <label>Direccion*:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="" name="direccion" ng-model="postulante.direccion" ng-required="false" >
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3" style="text-align:right;">
                                <label>Nacionalidad*:</label>
                            </div>
                            <div class="col-sm-6">
                                <select ng-model="postulante.nacionalidad" name="nacionalidad" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="1">Peruano</option>
                                    <option value="2">Arjentino</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3" style="text-align:right;">
                                <label>Licencia de Conducir*:</label>
                            </div>
                            <style>
                                li {
                                    float: left;
                                    margin-left: 20px;
                                    text-decoration: none;
                                    list-style: none;
                                }
                            </style>
                            <div class="col-sm-6">
                                <div class="btn-group" role="group" aria-label="...">
                                    <ul>
                                        <li><input ng-model="postulante.licencia_conducir" style="width: 41px;" class="form-control" value="A-I" type="radio" >A-I  </li>
                                        <li><input ng-model="postulante.licencia_conducir" style="width: 41px;" class="form-control" value="A-II-A" type="radio" >A-II-A</li>
                                        <li><input ng-model="postulante.licencia_conducir" style="width: 41px;" class="form-control" value="A-II-B" type="radio" >A-II-B</li>
                                        <li><input ng-model="postulante.licencia_conducir" style="width: 41px;" class="form-control" value="A-III-A" type="radio" >A-III-A</li>
                                        <li><input ng-model="postulante.licencia_conducir" style="width: 41px;" class="form-control" value="A-III-B" type="radio" >A-III-B</li>
                                        <li><input ng-model="postulante.licencia_conducir" style="width: 41px;" class="form-control" value="A-III-C" type="radio" >A-III-C</li>
                                        <li><input ng-model="postulante.licencia_conducir" style="width: 41px;" class="form-control" value="No Tengo" type="radio" >No Tengo</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3" style="text-align:right;">
                                <label>Dispone de Vehiculo Propio*:</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="btn-group" role="group" aria-label="...">
                                    <input type="checkbox" style="width: 30px;" class="form-control" ng-model="postulante.flag_vehiculo_propio">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3" style="text-align:right;">
                                <label>Discapacidad:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="checkbox" style="width: 30px;" class="form-control" ng-model="postulante.flag_discapacidad">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3" style="text-align:right;">
                                <label>Inserta tu foto:</label>
                            </div>
                            <input type="file" name="file_archivo" uploader-model="file_archivo" />         
                        </div>
                        <br>
                        <div class="panel-footer" style="color:black;">Perfil Profesional</div>
                        <br>
                        <div class="row justify-content-md-center" >
                            <div class="col col-lg-12">
                                <label>Cargo o Titulo breve del Curriculum*:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Ejm: Analista de sistemas" ng-model="perfil.cargo" ng-required="false">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-md-center" >
                            <div class="col col-lg-12">
                                <label>Descripcion Breve de tu Perfil Profesional*:</label>
                                <div class="form-group">
                                    <textarea class="form-control" ng-model="perfil.descripcion" rows="3">
                                    </textarea>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <!-- Experiencia -->
                            <div class="panel-footer" style="color:black;">Experiencias Profesionales</div>
                            <br>
                            <div class="row justify-content-md-center">
                                <div class="col col-lg-12" style="text-align:center;">
                                    <div class="form-group">
                                        <input type="checkbox" ng-model="experiencia"><samp>No tengo ninguna experiencia</samp><br>
                                        <a ng-click="experieciaActive()" href="#"><i class="glyphicon glyphicon-plus"></i >Añadir Experiencia Laboral</a>
                                    </div>
                                </div>
                            </div>

                            <!--Empiesa Registro Experiencia -->
                            <content ng-show="mostraVentanaExperiencia">
                                <!---Inicio Form Experiencia Create-->
                                   <!--Empiesa Registro Experiencia -->

    <div class="row justify-content-md-center">
        <div class="col col-lg-4" style="text-align:right;">   
            <label>Empresa* :</label>
        </div>
        <div class="col col-lg-4">   
            <div class="form-group">
                <input type="text" class="form-control"  placeholder="Empresa" ng-model="experiencia.empresa" ng-required="false">
            </div>
        </div>
    </div>

    <div class="row justify-content-md-center">
        <div class="col col-lg-4" style="text-align:right;">   
            <label>Región*:</label>
        </div>
        <div class="col col-lg-4" >   
            <div class="form-group">
                <select ng-model="experiencia.departamento_id" class="form-control">
                    <option value="">Seleccione Departamento</option>
                    
                      <option ng-repeat="i in departamento" value="@{{i.id}}">@{{i.nombre}}</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row justify-content-md-center">
        <div class="col col-lg-4" style="text-align:right;">   
            <label>Sector de la Empresa*:</label>
        </div>
        <div class="col col-lg-4" >   
            <div class="form-group">
                <select ng-model="experiencia.sector_id" class="form-control">
                    <option value="">Seleccione Sector</option>
                    <option ng-repeat="i in sector" value="@{{i.id}}">@{{i.nombre}}</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-lg-4" style="text-align:right;">   
            <label>Cargo*:</label>
        </div>
        <div class="col col-lg-4">   
            <div class="form-group">
                <input type="text" class="form-control"  placeholder="Empresa" ng-model="experiencia.cargo" ng-required="false">
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-lg-4" style="text-align:right;">   
            <label>Area*:</label>
        </div>
        <div class="col col-lg-4">   
            <div class="form-group">
                <select ng-model="experiencia.area_id" class="form-control">
                    <option value="">Seleccione Area</option>
                    <option ng-repeat="i in area" value="@{{i.id}}">@{{i.nombre}}</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-lg-4" style="text-align:right;">   
            <label>Periodo*:</label>
        </div>
        <div class="col col-lg-2">   
            <div class="form-group">

                <select ng-model="experiencia.mes_ini" name="mes_ini" class="form-control">
                    <option value="">Mes Desde</option>
                    <option ng-repeat="i in mes" value="@{{i.id}}">@{{i.mes}}</option>
                </select>
            </div>
        </div>
        <div class="col col-lg-2">   
            <div class="form-group">

                <select ng-model="experiencia.anio_ini" name="mes_ini" class="form-control">
                    <option value="">Año Desde</option>
                   <option ng-repeat="i in anio" value="@{{i.anio}}">@{{i.anio}}</option>
                </select>
            </div>
        </div>
        <div class="col col-lg-2">   
            <div class="form-group">

                <select ng-model="experiencia.mes_fin" name="mes_ini" class="form-control">
                    <option value="">Mes Hasta</option>
                    <option ng-repeat="i in mes" value="@{{i.id}}">@{{i.mes}}</option>
                </select>
            </div>
        </div>
        <div class="col col-lg-2">   
            <div class="form-group">
                <select ng-model="experiencia.anio_fin" name="mes_ini" class="form-control">
                    <option value="">Año Hasta</option>
                    <option ng-repeat="i in anio" value="@{{i.anio}}">@{{i.anio}}</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center" >                          

        <div class="col col-lg-4" style="text-align:right;">
            <label>Funciones y Logros del Cargo*:</label>
        </div>
        <div class="col col-lg-7">
            <div class="form-group">
                <textarea class="form-control" ng-model="experiencia.funciones" rows="2">
                                
                </textarea>
            </div>
        </div>

    </div>

    



<!--Fin Registro Experiencia -->
                                <!--Fin  form Experiencias Create -->
                                <div class="row justify-content-md-center">
                                    <div class="col col-lg-4">   

                                    </div>
                                    <div class="col col-lg-4">   
                                        <div class="form-group">
                                            <a ng-click="agregaExperiencia()" href="#" type="button" class="btn btn-primary">Agregar</a>
                                            <a  ng-click="experieciaDesactive()" href="#">Cancelar</a>

                                        </div>
                                    </div>
                                </div>
                            </content>
                            <!--Fin Registro Experiencia -->

                            <div class="row justify-content-md-center">
                                <div class="col col-lg-12" >

                                    <div class="panel panel-info" ng-repeat="expe in experiencias">
                                        <div class="panel-body">
                                            <div class="row justify-content-md-center">
                                                <div class="col col-lg-7" >
                                                    <div  style="color:black;">@{{expe.cargo}}</div>
                                                </div>
                                                <div class="col col-lg-5" style="text-align:right;"> 
                                                    <a ng-click="deleteExperiencia($index)"  href="#"><label class="glyphicon glyphicon-remove"></label></a>
                                                    <a ng-click="editExperiencia($index)" href="#"style="margin-left:5px;"><label class="glyphicon glyphicon-pencil"></label></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer" >
                                            <div class="row justify-content-md-center" ng-show="expe.opcion == 0">
                                                <div class="col col-lg-7" > 
                                                    <label >@{{expe.empresa}}</label>
                                                </div>
                                                <div class="col col-lg-5" style="text-align:right;"> 
                                                    <label >@{{expe.anio_ini}}-@{{expe.anio_fin}}</label>
                                                </div>
                                            </div>
                                            <content ng-if="expe.opcion == 1">
                                                <!-- Inicio Form Edit Experiencia-->
                                                    <!--Empiesa Registro Experiencia -->

    <div class="row justify-content-md-center">
        <div class="col col-lg-4" style="text-align:right;">   
            <label>Empresa* :</label>
        </div>
        <div class="col col-lg-4">   
            <div class="form-group">
                <input type="text" class="form-control"  placeholder="Empresa" ng-model="experiencia.empresa" ng-required="false">
            </div>
        </div>
    </div>

    <div class="row justify-content-md-center">
        <div class="col col-lg-4" style="text-align:right;">   
            <label>Región*:</label>
        </div>
        <div class="col col-lg-4" >   
            <div class="form-group">
                <select ng-model="experiencia.departamento_id" class="form-control">
                    <option value="">Seleccione Departamento</option>
                    <option ng-repeat="i in departamento" value="@{{i.id}}">@{{i.nombre}}</option>

                </select>
            </div>
        </div>
    </div>

    <div class="row justify-content-md-center">
        <div class="col col-lg-4" style="text-align:right;">   
            <label>Sector de la Empresa*:</label>
        </div>
        <div class="col col-lg-4" >   
            <div class="form-group">
                <select ng-model="experiencia.sector_id" class="form-control">
                    <option value="">Seleccione Sector</option>
                    <option ng-repeat="i in sector" value="@{{i.id}}">@{{i.nombre}}</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-lg-4" style="text-align:right;">   
            <label>Cargo*:</label>
        </div>
        <div class="col col-lg-4">   
            <div class="form-group">
                <input type="text" class="form-control"  placeholder="Empresa" ng-model="experiencia.cargo" ng-required="false">
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-lg-4" style="text-align:right;">   
            <label>Area*:</label>
        </div>
        <div class="col col-lg-4">   
            <div class="form-group">
                <select ng-model="experiencia.area_id" class="form-control">
                    <option value="">Seleccione Area</option>
                    <option ng-repeat="i in area" value="@{{i.id}}">@{{i.nombre}}</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-lg-4" style="text-align:right;">   
            <label>Periodo*:</label>
        </div>
        <div class="col col-lg-2">   
            <div class="form-group">

                <select ng-model="experiencia.mes_ini" name="mes_ini" class="form-control">
                    <option value="">Mes Desde</option>
                    <option ng-repeat="i in mes" value="@{{i.id}}">@{{i.mes}}</option>
                </select>
            </div>
        </div>
        <div class="col col-lg-2">   
            <div class="form-group">

                <select ng-model="experiencia.anio_ini" name="mes_ini" class="form-control">
                    <option value="">Año Desde</option>
                   <option ng-repeat="i in anio" value="@{{i.anio}}">@{{i.anio}}</option>
                </select>
            </div>
        </div>
        <div class="col col-lg-2">   
            <div class="form-group">

                <select ng-model="experiencia.mes_fin" name="mes_ini" class="form-control">
                    <option value="">Mes Hasta</option>
                    <option ng-repeat="i in mes" value="@{{i.id}}">@{{i.mes}}</option>
                </select>
            </div>
        </div>
        <div class="col col-lg-2">   
            <div class="form-group">
                <select ng-model="experiencia.anio_fin" name="mes_ini" class="form-control">
                    <option value="">Año Hasta</option>
                    <option ng-repeat="i in anio" value="@{{i.anio}}">@{{i.mes}}</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center" >                          

        <div class="col col-lg-4" style="text-align:right;">
            <label>Funciones y Logros del Cargo*:</label>
        </div>
        <div class="col col-lg-7">
            <div class="form-group">
                <textarea class="form-control" ng-model="experiencia.funciones" rows="2">
                                
                </textarea>
            </div>
        </div>

    </div>
    



<!--Fin Registro Experiencia -->
                                                <!-- Fin Form Edit Experiencia -->
                                                <div class="row justify-content-md-center">
                                                    <div class="col col-lg-4">   
                                                    </div>
                                                    <div class="col col-lg-4">
                                                        <div class="form-group">
                                                            <a ng-click="actualizarExperiencia($index)" href="#"class="btn btn-primary">Actualizar</a>
                                                            <a  ng-click="canceleditExperiencia($index)" href="#">Cancelar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </content>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                            <!-- Formacion -->
                            <div class="panel-footer" style="color:black;" >Formación</div>
                            <br>
                            <div class="row justify-content-md-center">
                                <div class="col col-lg-12" style="text-align:center;">
                                    <div class="form-group">
                                        <a ng-click="estudioActive()" href="#"><i class="glyphicon glyphicon-plus"></i >Añadir Estudios</a>
                                    </div>
                                </div>
                            </div>
                            <content ng-show="estudioVentana">
                                <!--Inicio Form Estudios-->
                                <div class="row justify-content-md-center">
    <div class="col col-lg-4" style="text-align:right;">
        <label>Centro Educativo*:</label>
    </div>
    <div class="col col-lg-4">
        <input type="text" class="form-control" placeholder="" ng-model="estudio.centro_educativo" ng-required="false" >
    </div>
</div>
<br>
<div class="row justify-content-md-center">
    <div class="col col-lg-4" style="text-align:right;">
        <label>Nivel de Estudios*:</label>
    </div>
    <div class="col col-lg-4">
        <input type="text" class="form-control" placeholder="" ng-model="estudio.nivel_estudios" ng-required="false" >
    </div>
</div>
<br>
<div class="row justify-content-md-center">
    <div class="col col-lg-4" style="text-align:right;">
        <label>Area de Estudio*:</label>
    </div>
    <div class="col col-lg-4">
        <div class="form-group">
            <select ng-model="estudio.area_id" class="form-control">
                <option value="">Seleccione Area </option>
               <option ng-repeat="i in area" value="@{{i.id}}">@{{i.nombre}}</option>
            </select>
            </select>
        </div>
    </div>
</div>
<br>
<div class="row justify-content-md-center">
    <div class="col col-lg-4" style="text-align:right;">
        <label>Estado*:</label>
    </div>
    <div class="col col-lg-6">
        <input type="radio" name="gender" ng-model="estudio.estado" value="0"> Culminado
        <input type="radio" name="gender" ng-model="estudio.estado" value="1"> Cursando
        <input type="radio" name="gender" ng-model="estudio.estado" value="2"> Abandonado/aplazado
    </div>
</div>
<br>
<div class="row justify-content-md-center">
    <div class="col col-lg-3" style="text-align:right;">   
        <label>Periodo*:</label>
    </div>
    <div class="col col-lg-2">
        <div class="form-group">
            <select ng-model="estudio.mes_ini" name="mes_ini" class="form-control">
                <option value="">Mes Desde</option>
               <option ng-repeat="i in mes" value="@{{i.id}}">@{{i.mes}}</option>
            </select>
            </select>
        </div>
    </div>
    <div class="col col-lg-2">
        <div class="form-group">
            <select ng-model="estudio.anio_ini" name="mes_ini" class="form-control">
                <option value="">Año Desde</option>
                <option ng-repeat="i in anio" value="@{{i.anio}}">@{{i.anio}}</option>
            </select>
            </select>
        </div>
    </div>
    <div class="col col-lg-2">
        <div class="form-group">
            <select ng-model="estudio.mes_fin" name="mes_ini" class="form-control">
                <option value="">Mes Hasta</option>
                <option ng-repeat="i in mes" value="@{{i.id}}">@{{i.mes}}</option>
            </select>
            </select>
        </div>
    </div>
    <div class="col col-lg-2">
        <div class="form-group">
            <select ng-model="estudio.anio_fin" name="mes_ini" class="form-control">
                <option value="">Año Hasta</option>
                <option ng-repeat="i in anio" value="@{{i.anio}}">@{{i.anio}}</option>
            </select>
            </select>
        </div>
    </div>
</div>
                                <!-- Fin form Estudio-->
                                <div class="row justify-content-md-center">
                                    <div class="col col-lg-4">   
                                    </div>
                                    <div class="col col-lg-4">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="button" href="#" ng-click="agregaEstudio()">Agregar</button>
                                            <a  ng-click="estudioDesactive()" href="#">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </content> 

                            <div class="row justify-content-md-center">
                                <div class="col col-lg-12" >
                                    <div class="panel panel-info" ng-repeat="pan in estudios">
                                        <div class="panel-body">
                                            <div class="row justify-content-md-center">
                                                <div class="col col-lg-7" >
                                                    <div style="color:black;">@{{pan.nivel_estudios}}</div>
                                                </div>
                                                <div class="col col-lg-5" style="text-align:right;"> 
                                                    <a ng-click="deleteEstudio($index)" href="#"><label class="glyphicon glyphicon-remove"></label></a>
                                                    <a ng-click="estudioVentanaEditf($index)" href="#" style="margin-left:5px;"><label class="glyphicon glyphicon-pencil"></label></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="row justify-content-md-center" ng-if="pan.opcion == 0">
                                                <div class="col col-lg-7" > 
                                                    <label >@{{pan.centro_educativo}}</label>
                                                </div>
                                                <div class="col col-lg-5" style="text-align:right;"> 
                                                    <label >@{{pan.anio_ini}}-@{{pan.anio_fin}}</label>
                                                </div>
                                            </div>
                                            <content ng-if="pan.opcion == 1">
                                               <!-- Inicio form Edit Estudio-->
                                               <div class="row justify-content-md-center">
    <div class="col col-lg-4" style="text-align:right;">
        <label>Centro Educativo*:</label>
    </div>
    <div class="col col-lg-4">
        <input type="text" class="form-control" placeholder="" ng-model="estudio.centro_educativo" ng-required="false" >
    </div>
</div>
<br>
<div class="row justify-content-md-center">
    <div class="col col-lg-4" style="text-align:right;">
        <label>Nivel de Estudios*:</label>
    </div>
    <div class="col col-lg-4">
        <input type="text" class="form-control" placeholder="" ng-model="estudio.nivel_estudios" ng-required="false" >
    </div>
</div>
<br>
<div class="row justify-content-md-center">
    <div class="col col-lg-4" style="text-align:right;">
        <label>Area de Estudio*:</label>
    </div>
    <div class="col col-lg-4">
        <div class="form-group">
            <select ng-model="estudio.area_id" class="form-control">
                <option value="">Seleccione Area </option>
                <option ng-repeat="i in area" value="@{{i.id}}">@{{i.nombre}}</option>
            </select>
            </select>
        </div>
    </div>
</div>
<br>
<div class="row justify-content-md-center">
    <div class="col col-lg-4" style="text-align:right;">
        <label>Estado*:</label>
    </div>
    <div class="col col-lg-6">
        <input type="radio" name="gender" ng-model="estudio.estado" value="0"> Culminado
        <input type="radio" name="gender" ng-model="estudio.estado" value="1"> Cursando
        <input type="radio" name="gender" ng-model="estudio.estado" value="2"> Abandonado/aplazado
    </div>
</div>
<br>
<div class="row justify-content-md-center">
    <div class="col col-lg-3" style="text-align:right;">   
        <label>Periodo*:</label>
    </div>
    <div class="col col-lg-2">
        <div class="form-group">
            <select ng-model="estudio.mes_ini" name="mes_ini" class="form-control">
                <option value="">Mes Desde</option>
                <option ng-repeat="i in mes" value="@{{i.id}}">@{{i.mes}}</option>
              
            </select>
            </select>
        </div>
    </div>
    <div class="col col-lg-2">
        <div class="form-group">
            <select ng-model="estudio.anio_ini" name="mes_ini" class="form-control">
                <option value="">Año Desde</option>
                <option ng-repeat="i in anio" value="@{{i.anio}}">@{{i.anio}}</option>
                
            </select>
            </select>
        </div>
    </div>
    <div class="col col-lg-2">
        <div class="form-group">
            <select ng-model="estudio.mes_fin" name="mes_ini" class="form-control">
                <option value="">Mes Hasta</option>
                <option ng-repeat="i in mes" value="@{{i.id}}">@{{i.mes}}</option>
                
            </select>
            </select>
        </div>
    </div>
    <div class="col col-lg-2">
        <div class="form-group">
            <select ng-model="estudio.anio_fin" name="mes_ini" class="form-control">
                <option value="">Año Hasta</option>
                <option ng-repeat="i in anio" value="@{{i.anio}}">@{{i.anio}}</option>               
            </select>
            </select>
        </div>
    </div>
</div>
                                               <!-- Fin Form Estudio -->

                                                <div class="row justify-content-md-center" >
                                                    <div class="col col-lg-4">   
                                                    </div>
                                                    <div class="col col-lg-4">
                                                        <div class="form-group">
                                                            <a class="btn btn-primary" href="#" ng-click="actualizarEstudios($index)">Actualizar</a>
                                                            <a href="#" ng-click="cancelestudioVentanaEdit($index)">Cancelar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </content >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer" style="color:black;" >Idiomas</div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3" style="text-align:right;">
                                    <label>Idiomas*:</label>
                                </div>
                                <div class="col-sm-3">
                                    <select ng-model="idioma.idioma" class="form-control">
                                        <option value="">Idiomas</option>
                                        <option value="Español">Español</option>
                                        <option value="Ingles">Ingles</option>
                                        <option value="Frances">Frances</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select ng-model="idioma.nivel_idioma"  class="form-control">
                                        <option value="">Nivel</option>
                                        <option value="min">Muy Basico</option>
                                        <option value="basico">Basico</option>
                                        <option value="Intermedio">Intermedio</option>
                                        <option value="Avanzado">Avanzado</option>
                                        <option value="Nativo">Nativo</option>
                                    </select>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="form-group">                              
                                        <a ng-click="agregarIdioma()" href="#"><i class="glyphicon glyphicon-plus"></i >Añadir</a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-hover">
                                        <tr class="success" ng-repeat="i in idiomas">
                                            <td style="width:80%; margin-left:10px;">@{{i.idioma}}-@{{i.nivel_idioma}}</td>
                                            <td style="width:20%; text-align:right;"><a ng-click="removeIdioma($index)"><label style="margin-right:15px;" class="glyphicon glyphicon-remove"></label></a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <style type="text/css">
                                .form_inputs ul li {
                                    color: #fff;
                                    background: #4CAF50;
                                    padding: 6px;
                                    float: left;
                                    margin: 0 3% 10px 0;
                                    border-radius: 3px;
                                    -webkit-border-radius: 3px;
                                    -moz-border-radius: 3px;
                                }
                            </style>
                            <div class="panel-footer" style="color:black;" >Conocimientos Informaticos</div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3" style="text-align:right;">
                                    <label>Programas Informaticos*:</label>
                                </div>
                                <div class="col-sm-4">
                                    <select ng-model="programa.nombre" class="form-control">
                                        <option value="">Selecciona</option>
                                        <option value="Word">Word</option>
                                        <option value="Excel">Excel</option>
                                        <option value="Power BI">Power BI</option>
                                    </select>
                                </div>
                                <div class="col-sm-4" >
                                    <div class="form-group">                              
                                        <a ng-click="addPrograma()" href="#"><i class="glyphicon glyphicon-plus"></i >Añadir</a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12" style="text-align:center;">
                                    <label>Programas Informaticos</label>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3" style="text-align:right;">
                                </div>
                                <div class="col-sm-9 form_inputs">
                                    <ul>
                                        <li ng-repeat="item in programas">@{{item.nombre}}<a ng-click="quitarPrograma($index)" style="color:white;" class="glyphicon glyphicon-remove"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                            <div class="panel-footer" style="color:black;" >Conocimientos y habilidades</div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3" style="text-align:right;">
                                    <label>Escribe tus conocimientos*:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" ng-model="conocimiento.nombre" class="form-control">
                                </div>
                                <div class="col-sm-4" >
                                    <div class="form-group">                              
                                        <a ng-click="addConocimiento()" href="#"><i class="glyphicon glyphicon-plus"></i >Añadir</a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12" style="text-align:center;">
                                    <label>Conocimientos y habilidades</label>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3" style="text-align:right;">
                                </div>
                                <div class="col-sm-9 form_inputs">
                                    <ul>
                                        <li ng-repeat="row in conocimientos">@{{row.nombre}} <a ng-click="quitarConocimiento($index)" style="color:white;" class="glyphicon glyphicon-remove"></a></li>
                                </div>
                            </div>
                            <br>

                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-12" style="text-align: center;">
                                    <a type="button" class="btn btn-default"  href="index.php" >Regresar</a>
                                    <button ng-if="banderaRegistro" type="button" class="btn btn-info" ng-click="uploadFile()" >Registrar</button>
                                    <button ng-if="!banderaRegistro" type="button" class="btn btn-info" ng-click="uploadEditFile()" >Actualizar</button>
                                    <img ng-if="dataLoading" src="data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</section>