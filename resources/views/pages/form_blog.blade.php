<section class="content-header">
          <h1>
            Colaboradores
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb" style="  height: 40px;">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="/colaboradores"><a href="/colaboradores">Mis Postulaciones</a></li>
            <li class="active">Ver</li>
          </ol>

          
</section>
<section class="content">

<body>

    <div class="content">
    <br>
        <div class="row">
        <div class="col-lg-1">             
            </div>
            <div class="col-lg-4">
                <h3>Mis postulaciones</h3>
            </div>
            
            <div class="col-lg-2">             
            </div>
            <div class="col-lg-2">             
            </div>
            <div class="col-lg-2" style="text-align: right;">
                    <select class="form-control" ng-model="estadoPostulacion"  name="micombo" ng-change="filtroPostulaciones()">
                        <option value="10">Todas Las Postulaciones</option>
                        <option value="1">Todas Las Postuladas</option>
                        <option value="2">Postuladas Vistas</option>
                        <option value="3">Postuladas en Proceso</option>
                        <option value="4">Postuladas Finalista</option>
                    </select>
                </div>
                <script>
                    function enviar()
                    {
                        document.forms.miformulario.submit();
                    }
                </script>


        </div><br>
        <style>
            .progress1 li{
                text-decoration: none;
                list-style: none;
                float: left;
                text-align:center;
            }

        </style>
        <div class="row">
             <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="panel panel-success" ng-repeat="row in postulaciones" >
                    
                        <div class="panel-body" >
                            <div class="row">
                                <div class="col-lg-4" style="text-align: left;">
                                    <label>@{{row.titulo}}</label><br>
                                    <span>@{{row.nombre}}</span>
                                </div>
                                <div class="col-lg-6">
                                  <ul class="progress1" ng-if="row.estado==1">
                                    <li><button class="btn btn-warning" type="button">
                                            Postulada <span class="badge"><i class="glyphicon glyphicon-ok"></i></span>
                                        </button><br><small>@{{row.fecha_postula}}</small></li>
                                    <li><button class="btn btn-default" type="button">
                                            CV Visto <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>@{{row.fecha_visto}}</spam></li>
                                    </li>
                                    <li><button class="btn btn-default" type="button">
                                            En Proceso <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>@{{row.$item.fecha_proceso}}</spam></li>
                                    </li>
                                    <li><button class="btn btn-default" type="button">
                                            Finalista <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>@{{row.fecha_finalista}}</spam></li>
                                    </li>
                              </ul>
                              <ul class="progress1"  ng-if="row.estado==2">
                                    <li><button class="btn btn-default" type="button">
                                            Postulada <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>@{{row.fecha_postula}}</spam></li>
                                    <li><button class="btn btn-warning" type="button">
                                            CV Visto <span class="badge"><i class="glyphicon glyphicon-ok"></i></span>
                                        </button><br><spam>@{{row.fecha_visto}}</spam></li>
                                    </li>
                                    <li><button class="btn btn-default" type="button">
                                            En Proceso <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>@{{row.fecha_proceso}}</spam></li>
                                    </li>
                                    <li><button class="btn btn-default" type="button">
                                            Finalista <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>@{{row.fecha_finalista}}</spam></li>
                                    </li>
                                </ul>
                                   
                                    <ul class="progress1" ng-if="row.estado == 3">
                                    <li><button class="btn btn-default" type="button">
                                            Postulada <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>@{{row.fecha_postula}}</spam></li>
                                    <li><button class="btn btn-default" type="button">
                                            CV Visto <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>@{{row.fecha_visto}}</spam></li>
                                    </li>
                                    <li><button class="btn btn-warning" type="button">
                                            En Proceso <span class="badge"><i class="glyphicon glyphicon-ok"></i></span>
                                        </button><br><spam>@{{row.fecha_proceso}}</spam></li>
                                    </li>
                                    <li><button class="btn btn-default" type="button">
                                            Finalista <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>@{{row.fecha_finalista}}</spam></li>
                                    </li>
                               </ul>
                                    <ul class="progress1" ng-if="row.estado == 4">
                                    <li><button class="btn btn-default" type="button">
                                            Postulada <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>@{{row.fecha_postula}}</spam></li>
                                    <li><button class="btn btn-default" type="button">
                                            CV Visto <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>@{{row.fecha_visto}}</spam></li>
                                    </li>
                                    <li><button class="btn btn-default" type="button">
                                            En Proceso <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>@{{row.fecha_proceso}}</spam></li>
                                    </li>
                                    <li><button class="btn btn-warning" type="button">
                                            Finalista <span class="badge"><i class="glyphicon glyphicon-ok"></i></span>
                                        </button><br><spam>@{{row.fecha_finalista}}</spam></li>
                                    </li>
                                </ul>
                                 <span class="triangulo"></span>
                                    
                                </div>
                                <div class="col-lg-2" style="text-align: right;">
                                    <button class="btn btn-primary"><small>26 Postulantes</small><br><b>Ver Comprativa</b></button>
                                </div>
                            </div><hr style="margin-bottom: -20px; ">
                        </div>

                    
                    
                </div>
                <div class="row justify-content-md-center" >  
                        <div class="col col-lg-12" style="text-align: right;">
                            <div class="box-footer clearfix">  
                                <pagination total-items="totalItems" ng-model="currentPage" max-size="maxSize" class="pagination-sm" boundary-links="true" items-per-page="itemsPerPage"></pagination>
                            </div>
                        </div>
                    </div>
            </div> 

        </div>
    </div>
</body>



</section>