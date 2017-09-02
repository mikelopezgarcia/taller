<?php

	require_once 'General.php';

	/**
	* 
	*/
	class Consulta extends General {

		public  $json;
		
		public function __construct() {
	        echo $this->cargaDatos();
	    }
	    
	    private function cargaDatos() {
	        try {
	            if ($this->conectaBd()) {
	                $query = "SELECT * FROM CAsignatura WHERE id_asignatura = 1";
	                $cmd = $this->conexionBd->prepare($query); // Preparando nuestra sentencia para MySQL
	                //$cmd->bindValue(':id_solicitud', $idSolicitud, PDO::PARAM_INT);
	                $cmd->execute(); // Ejecutando query
	                $resultado = $cmd->fetchAll(PDO::FETCH_ASSOC); // Recibiendo todos los datos
	                
	                //return $this->json = json_encode($resultado);

	                foreach ($resultado as $key => $value) {
	                	foreach ($value as $key => $value) {
	                		echo $key.': '.$value.'<br>';
	                	}
	                }

	                /*if (isset($res->id_solicitud)) {
	                    foreach($this->secciones as $seccion => $value) {
	                        $json = json_decode($res->{$seccion});
	                        $this->formDinamico .= "<h2>$value</h2>".$this->reporteJSON(json_decode(constant(strtoupper($seccion))), $json);
	                    }
	                }*/
	            } else {
	                return "No hay acceso a la base de datos";
	                die();
	            }
	        } catch (Exception $ex) {
	            echo "Exception -> ";
	            var_dump($ex->getMessage());
	        }
	        
	        
	    }
	}