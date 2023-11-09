<div id="addUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar nueva bomba</h4>
      </div>
      <div class="modal-body">
		<form name="formUser" onsubmit="register(); return false">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-scale"></i></span>
		    <input id="tipoBomba" type="text" class="form-control" name="tipoBomba" placeholder="Tipo de bomba" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-tint"></i></span>
		    <input id="tipoCombustible" type="text" class="form-control" name="tipoCombustible" placeholder="Tipo de combustible" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
		    <input id="estado" type="text" class="form-control" name="estado" placeholder="Estado de la maquina" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-tasks"></i></span>
		    <input id="capacidad" type="number" step="0.01" class="form-control" name="capacidad" placeholder="Capacidad de la bomba" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
		    <input id="ubicacion" type="text" class="form-control" name="ubicacion" placeholder="Ubicacion de la bomba" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
		    <input id="numEmpleados" type="number" class="form-control" name="numEmpleados" placeholder="Numero de empleados" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		    <input id="fechaRegistro" type="date" class="form-control" name="fechaRegistro" required autocomplete="off">
		  </div>		  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Registrar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>


<div id="updateUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar informacion bomba </h4>        
      </div>
      <div class="modal-body">
		<form name="formUserUpdate" onsubmit="update(); return false">
			<input type="text" name="idBomba" id="idBomba" style="display: none;">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-scale"></i></span>
				<input id="tipoBomba" type="text" class="form-control" name="tipoBomba" placeholder="Tipo de bomba" required autocomplete="off">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-tint"></i></span>
				<input id="tipoCombustible" type="text" class="form-control" name="tipoCombustible" placeholder="Tipo de combustible" required autocomplete="off">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
				<input id="estado" type="text" class="form-control" name="estado" placeholder="Estado de la maquina" required autocomplete="off">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-tasks"></i></span>
				<input id="capacidad" type="number" step="0.01" class="form-control" name="capacidad" placeholder="Capacidad de la bomba" required autocomplete="off">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
				<input id="ubicacion" type="text" class="form-control" name="ubicacion" placeholder="Ubicacion de la bomba" required autocomplete="off">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
				<input id="numEmpleados" type="number" class="form-control" name="numEmpleados" placeholder="Numero de empleados" required autocomplete="off">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
				<input id="fechaRegistro" type="date" class="form-control" name="fechaRegistro" required autocomplete="off">
			</div> 		  
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-success">Actualizar</button>
			<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>