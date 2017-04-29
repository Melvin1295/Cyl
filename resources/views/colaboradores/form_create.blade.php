 <section class="content-header">
          <h1>
            Colaboradores
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="/colaboradores"><a href="/colaboradores">Colaboradores</a></li>
            <li class="active">Crear</li>
          </ol>

          
        </section>

        <section class="content">
        <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
              
                <!-- form start -->
                <form >
                  <div class="box-body">
                  <div class="callout callout-danger" ng-show="errors">
                                                  <ul>
                                              <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                                              </ul>
                                            </div>

              <div class="panel panel-warning" >
                <div class="panel-heading"><label class="box-title"><b>Registro Usuario</b></label></div>
                 <div class="panel-body">

                    <div class="form-group" ng-class="{true: 'has-error'}[ colaboradorCreateForm.nombres.$error.required && colaboradorCreateForm.$submitted || colaboradorCreateForm.nombres.$dirty && colaboradorCreateForm.nombres.$invalid]">
                      <label for="nombres">Nombre</label>
                      <input type="text" class="form-control" name="nombres" placeholder="Nombre" ng-model="user.name" required>
                      
                    </div>
                    <div class="form-group" ng-class="{true: 'has-error'}[ colaboradorCreateForm.apellidos.$error.required && colaboradorCreateForm.$submitted || colaboradorCreateForm.apellidos.$dirty && colaboradorCreateForm.apellidos.$invalid]">
                      <label for="apellidos">Apellidos</label>
                      <input type="text" class="form-control" name="apellidos" placeholder="Apellidos"</ ng-model="user.apellido" required>
                      
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group" ng-class="{true: 'has-error'}[ colaboradorCreateForm.cargo.$error.required && colaboradorCreateForm.$submitted || colaboradorCreateForm.cargo.$dirty && colaboradorCreateForm.cargo.$invalid]">
                      <label for="cargo">Usuario</label>
                      <input type="text" class="form-control" name="cargo" placeholder="Cargo"</ ng-model="user.email" required>
                      
                    </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <label>Contraseña:</label>
                          <input type="password" class="form-control" name="cargo" placeholder="Cargo" ng-model="user.password" required>
                      </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
                    <div class="box-footer">
                    <button  class="btn btn-primary" ng-click="registerUser()">Registrar</button>
                   
                   
                    <button  class="btn btn-danger" ng-click="registerUserCaselar()">Cancelar</button>
                  </div>
                </form>
              </div><!-- /.box -->

              </div>
              </div><!-- /.row -->
              </section><!-- /.content -->