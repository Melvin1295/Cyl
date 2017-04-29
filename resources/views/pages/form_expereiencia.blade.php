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

                </select>
            </div>
        </div>
        <div class="col col-lg-2">   
            <div class="form-group">

                <select ng-model="experiencia.anio_ini" name="mes_ini" class="form-control">
                    <option value="">Año Desde</option>
                    <?php
                    foreach ($anio as $p) {
                        echo '<option value="' . $p->id . '">' . $p->anio . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="col col-lg-2">   
            <div class="form-group">

                <select ng-model="experiencia.mes_fin" name="mes_ini" class="form-control">
                    <option value="">Mes Hasta</option>
                    
                </select>
            </div>
        </div>
        <div class="col col-lg-2">   
            <div class="form-group">
                <select ng-model="experiencia.anio_fin" name="mes_ini" class="form-control">
                    <option value="">Año Hasta</option>
                    
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