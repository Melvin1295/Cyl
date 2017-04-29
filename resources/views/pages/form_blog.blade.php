<section class="content">

<body>

    <div class="content">
        <div class="row">
            <div class="col-lg-4">
                <h3>Mis postulaciones</h3>
            </div>
            <div class="col-lg-2">             
            </div>
            <div class="col-lg-2">             
            </div>
            <div class="col-lg-2">             
            </div>
            <form name="miformulario" action="misPostulaciones.php" method="POST">
                <div class="col-lg-2" style="text-align: right;">
                    <select class="form-control"  name="micombo" onchange="enviar()">
                        <option value="8">Todas Las Postulaciones</option>
                        <option value="0">Todas Las Postuladas</option>
                        <option value="1">Postuladas Vistas</option>
                        <option value="2">Postuladas en Proceso</option>
                        <option value="3">Postuladas Finalista</option>
                    </select>
                </div>
                <script>
                    function enviar()
                    {
                        document.forms.miformulario.submit();
                    }
                </script>

            </form>

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
                <div class="panel panel-success" ng-app="myApp2" ng-controller="myCtrl2">
                    
                        <div class="panel-body" >
                            <div class="row">
                                <div class="col-lg-5" style="text-align: left;">
                                    <span>Lima</span>
                                </div>
                                <div class="col-lg-5">
                                  <ul class="progress1" >
                                    <li><button class="btn btn-warning" type="button">
                                            Postulada <span class="badge"><i class="glyphicon glyphicon-ok"></i></span>
                                        </button><br><small>' . $item->fecha_postula . '</small></li>
                                    <li><button class="btn btn-default" type="button">
                                            CV Visto <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>' . $item->fecha_visto . '</spam></li>
                                    </li>
                                    <li><button class="btn btn-default" type="button">
                                            En Proceso <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>' . $item->fecha_proceso . '</spam></li>
                                    </li>
                                    <li><button class="btn btn-default" type="button">
                                            Finalista <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>' . $item->fecha_finalista . '</spam></li>
                                    </li>
                              </ul>
                              <ul class="progress1" >
                                    <li><button class="btn btn-default" type="button">
                                            Postulada <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>' . $item->fecha_postula . '</spam></li>
                                    <li><button class="btn btn-warning" type="button">
                                            CV Visto <span class="badge"><i class="glyphicon glyphicon-ok"></i></span>
                                        </button><br><spam>' . $item->fecha_visto . '</spam></li>
                                    </li>
                                    <li><button class="btn btn-default" type="button">
                                            En Proceso <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>' . $item->fecha_proceso . '</spam></li>
                                    </li>
                                    <li><button class="btn btn-default" type="button">
                                            Finalista <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>' . $item->fecha_finalista . '</spam></li>
                                    </li>
                                </ul>
                                   
                                    <ul class="progress1" ng-if="$item->estado == 2">
                                    <li><button class="btn btn-default" type="button">
                                            Postulada <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>' . $item->fecha_postula . '</spam></li>
                                    <li><button class="btn btn-default" type="button">
                                            CV Visto <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>' . $item->fecha_visto . '</spam></li>
                                    </li>
                                    <li><button class="btn btn-warning" type="button">
                                            En Proceso <span class="badge"><i class="glyphicon glyphicon-ok"></i></span>
                                        </button><br><spam>' . $item->fecha_proceso . '</spam></li>
                                    </li>
                                    <li><button class="btn btn-default" type="button">
                                            Finalista <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>' . $item->fecha_finalista . '</spam></li>
                                    </li>
                               </ul>
                                    <ul class="progress1" ng-if="item->estado == 3">
                                    <li><button class="btn btn-default" type="button">
                                            Postulada <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>' . $item->fecha_postula . '</spam></li>
                                    <li><button class="btn btn-default" type="button">
                                            CV Visto <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>' . $item->fecha_visto . '</spam></li>
                                    </li>
                                    <li><button class="btn btn-default" type="button">
                                            En Proceso <span class="badge"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        </button><br><spam>' . $item->fecha_proceso . '</spam></li>
                                    </li>
                                    <li><button class="btn btn-warning" type="button">
                                            Finalista <span class="badge"><i class="glyphicon glyphicon-ok"></i></span>
                                        </button><br><spam>' . $item->fecha_finalista . '</spam></li>
                                    </li>
                                </ul>
                                 <span class="triangulo"></span>
                                    
                                </div>
                                <div class="col-lg-2" style="text-align: right;">
                                    <button class="btn btn-warning"><p><small>26 Postulantes</small></p><p><b>Ver Comprativa</b></p></button>
                                </div>
                            </div><hr style="margin-bottom: -20px; ">
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
    </div>
</body>



</section>