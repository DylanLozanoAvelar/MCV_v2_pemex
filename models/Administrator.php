<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class Administrator extends db{
	
	private function view_bomba(){
		try {
			$SQL = "SELECT * FROM tbl_bomba";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
			return $result->fetchAll(PDO::FETCH_OBJ);	
		} catch (Exception $e) {
			die('Error Administrator(view_bomba) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function get_view_bomba(){
		return $this->view_bomba();
	}

	private function register_bomba($data){
		try {
			$SQL = 'INSERT INTO tbl_bomba (tipoBomba, tipoCombustible, estado, capacidad, ubicacion, numEmpleados, fechaRegistro) VALUES (?,?,?,?,?,?,?)';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
									$data['tipoBomba'],
									$data['tipoCombustible'],
									$data['estado'],
									$data['capacidad'],
									$data['ubicacion'],
									$data['numEmpleados'],
									$data['fechaRegistro']
								)
							);			
		} catch (Exception $e) {
			die('Error Administrator(set_register_bomba) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_register_bomba($data){
		$this->register_bomba($data);
	}

	private function update_bomba($data){
		try {
			$SQL = 'UPDATE tbl_bomba SET tipoBomba = ?, tipoCombustible = ?, estado = ?, capacidad = ?, ubicacion = ?, numEmpleados = ?, fechaRegistro = ? WHERE idBomba = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
									$data['tipoBomba'],
									$data['tipoCombustible'],
									$data['estado'],
									$data['capacidad'],
									$data['ubicacion'],
									$data['numEmpleados'],
									$data['fechaRegistro'],
									$data['idBomba']
								)
							);			
		} catch (Exception $e) {
			console.log($e->getMessage);
			die('Error Administrator(update_bomba) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_update_bomba($data){
		$this->update_bomba($data);
	}

	private function delete_bomba($idBomba){
		try {
			$SQL = 'DELETE FROM tbl_bomba WHERE idBomba = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array($idBomba));			
		} catch (Exception $e) {
			die('Error Administrator(delete_bomba) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_delete_bomba($idBomba){
		$this->delete_bomba($idBomba);
	}	
}
?>