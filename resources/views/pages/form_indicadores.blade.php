<style>
<style type="text/css">
    .example-animate-container {
        background:white;
        border:1px solid black;
        list-style:none;
        margin:0;
        padding:0 10px;
    }

    .animate-repeat {
        line-height:30px;
        list-style:none;
        box-sizing:border-box;
    }

    .animate-repeat.ng-move,
    .animate-repeat.ng-enter,
    .animate-repeat.ng-leave {
        transition:all linear 0.5s;
    }

    .animate-repeat.ng-leave.ng-leave-active,
    .animate-repeat.ng-move,
    .animate-repeat.ng-enter {
        opacity:0;
        max-height:0;
    }

    .animate-repeat.ng-leave,
    .animate-repeat.ng-move.ng-move-active,
    .animate-repeat.ng-enter.ng-enter-active {
        opacity:1;
        max-height:30px;
    }
    .previous a{
        margin-left: 20px;
    }
    .next a{
        margin-right: 20px;
    }
    .prueb .panel-body{
        height: 180px;
        overflow-y: scroll;
        overflow-x: no-content;
    }
    -webkit-scrollbar-thumb {
        border: 2px solid #fff;
        background-color: rgba(152, 31, 31, 0.5);
        border-radius: 8px;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
    }
    .container-fluid
    {
            margin-top: -22px;
    }
</style>


<div style="height:10px;"></div>
<div >
    <div class="row ">
    
        <div class="col col-lg-3 prueb" >
            <div class="row justify-content-md-center" >

                <div class="col col-lg-11" style="margin-left:4%;">
            
                    <div class="panel panel-warning">
                        <!-- Default panel contents -->

                        <div class="panel-heading">Filtros</div>
                        <div class="panel-body">
                            <div class="">

                                <ul class="list-group" ng-repeat="i in filtros" >
                                 <div>
                                   <li class="animate-repeat" >                                          
                                            
                                        <button class="btn  btn-success btn-sm" ng-click="quitarFiltro($index,i)" style="width:100%;"  >@{{i.value}}</button>
                                    </li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-footer">
                           <label>Buscar</label>
                        </div>
                        <div class="panel-body">
                            <div class="">
                                
                                    <input type="text" name="agregar" ng-model="palabra" class="form-control"> <br>
                                    <button type="button" class="btn btn-warning" ng-click="palabraClave(palabra)" style="width: 100%;">Buscar</button>
                               
                            </div>
                        </div>
                        <div class="panel-footer">
                            <label>Ciudad</label>
                        </div>

                        <div class="panel-body">
                            <div class="">
                                <ul class="list-group">
                                    <li class="animate-repeat" ng-repeat="i in departamento">
                                          
                                          
                                            <button ng-if="i.estado==1" class="btn btn-warning btn-sm" ng-click="depratamentoFiltro($index,i)" style="width:100%; margin-bottom: 5px;" >
                                                @{{i.nombre}}
                                            </button>
                                        </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <label>Profesion</label>
                        </div>
                        <div class="panel-body">
                            <div class="">
                                <ul class="list-group">
                                  
                                   <li class="animate-repeat" ng-repeat="i in profesiones" >
                                           <button ng-if="i.estado==1"  class="btn btn-warning btn-sm" ng-click="profesionFiltro($index,i)"
                                           style="width:100%; margin-bottom: 5px;">@{{i.nombre}}</button>
                                    </li>
                                  

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <style>
            .link_depo:hover{
                background: #284c6b;
                color: #FFF;
                cursor: pointer;
            }
        </style>

        <div class="col col-lg-9">
            <div class="row">
                
            </div>
            
                <div class="row justify-content-md-center" >
                    <div class="col col-lg-11">
                        <a href="/cyl_final/proyecto_postulante/postulante/verAnuncio.php?id=' . $item->id . '" class="" style="color: #777;">
                        <div class="panel panel-info link_depo">
                            <!-- Default panel contents -->

                            <div class="panel-body" ng-repeat="row in anuncios">
                                <p><h4 style="color: black;">@{{row.titulo}}-@{{row.empresa_id}}</h4></p><hr>
                                <p><span>@{{row.localizacion}}</span></p>
                                <p><label style="color: black;">@{{row.descripcion_corta}}</label></p>
                                <p><span>Ayer, 09:45 p.m.</span></p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
          
            <div class="row">
                
            </div>

        </div>
    </div>

</div>


</section>