<?php 

	/**
	* 
	* @Mike
	*/

	class General {
			
		protected $conexionBd = null;
	    
	    /**
	     * Crea una conexion a la base de datos especificada en 'config'
	     * @return boolean
	     */

	    protected function conectaBd(){
	        // Si ya esta abierta
	        if ($this->conexionBd != null) {
	            return true;
	        } else {
	            // Creamos la conexion a la base datos en base a config/config.php
	            try {
	                // Conexion a DB con PDO (para evitar locuras con la codificacion)
	                $this->conexionBd  = new PDO('mysql:host='. lugar_bd .';dbname='. nombre_bd . ';charset=utf8', usuario_bd, clave_bd); 

	                //Estas dos lineas son para cachar excepciones SQL
	                $this->conexionBd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	                $this->conexionBd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	    
	                return true;
	            } catch (PDOException $e) {
	                $this->errores[] = "Error en la conexión con la Base de Datos.";
	                return false;
	            }
	        }
	    }
    
			
	}