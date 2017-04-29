<section class="content-header">
          <h1>
            Colaboradores
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb" style="  height: 40px;">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="/colaboradores"><a href="/colaboradores">Curriculumn</a></li>
            <li class="active">Crear</li>
          </ol>

          
</section>
<section class="content">
<br>
<style type="text/css">
	p{
		margin-left: 20px;
		margin-right: 20px;
	}
</style>
  <div class="row">
       <div class="col col-sm-1"></div>
  	   <div class="col col-sm-10">
  	       <div class="panel panel-primary">
           <div class="panel-heading">Sube tu Curriculum <button class="btn btn-danger" style="margin-left: 70%;" data-toggle="modal" data-target="#exampleModalLong">Sube tu Curriculum</button></div>
           <div class="panel-body">
              <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr ng-repeat="item in curriculums">
        <td width="80px;"><input type="checkbox" class="form-control" ></td>
        <td width="50%">@{{item.nombre}}</td>
        <td>@{{item.created_at}}</td>
        <td width="40px;"><button class="btn btn-info">Eliminar</button></td>
      </tr>      
    </tbody>
  </table>
           </div>
           
       </div>
  	  </div>
  </div>
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Selecciona un Archivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="row">
                            <div class="col-sm-4" style="text-align:right;">
                                <label>Selecciona un archivo PDF/DOCX:</label>
                            </div>
                            <input type="file" name="file_archivo" uploader-model="file_archivo" />         
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" ng-click="subirCurriculum()">Guardar</button>
      </div>
    </div>
  </div>
</div>
    
</section>