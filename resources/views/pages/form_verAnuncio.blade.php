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
           <div class="panel-heading">@{{anuncio.titulo}}-@{{anuncio.empresa_id}}</div>
           <div class="panel-body"><b>Monto Sueldo S/.</b></div>
           <div>
           	   <p>
           	   	  @{{anuncio.salario}}
           	   </p>
           </div>
           <div class="panel-body"><b>Descripcion del Puesto</b></div>
           <div>
           	   <p>
           	   	  @{{anuncio.descripcion}}
           	   </p>
           </div>
           <div class="panel-body"><b>Direccion</b></div>
           <div>
           	   <p>
           	   	  @{{anuncio.localizacion}}
           	   </p>
           </div>
           <div class="panel-body"><b>Ciudad</b></div>
           <div>
           	   <p>
           	   	  @{{anuncio.departNombre}}
           	   </p>
           </div>
           <div class="panel-footer" style="text-align:center;"><button class="btn btn-primary" ng-click="postularme()">Eviar CV</button></div>

       </div>
  	  </div>
  </div>
    
</section>