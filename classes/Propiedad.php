<?php

namespace App;

class Propiedad {

    // Base de datos
    protected static $db;
    protected static $columnasDB = ['id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'estacionamiento', 'creado', 'vendedorId'];

    // Errores
    protected static $errores = [];

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedorId;

    //Definir la conexión a la BD
    public static function setDB($database) {
        self::$db = $database;
    }

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? '';
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->creado = date('Y/m/d');
        $this->vendedorId = $args['vendedorId'] ?? '';
    }

    public function guardar() {

        // Satinizar los datos 
        $atributos = $this->sanitizarAtributos();

       
         // Insertar en la base de datos
         $query = " INSERT INTO propiedades ( "; 
         $query .= join(', ', array_keys($atributos));
         $query .= " ) VALUES (' ";  
         $query .= join("', '", array_values($atributos));
         $query .= " ') ";

        
         
         $resultado = self::$db->query($query);
 
         return $resultado;

        
     
    }


    // Identificar y unir los atributos de la BD
    public function atributos() {
        $atributos = [];
        foreach(self::$columnasDB as $columna) {
            if($columna === 'id') continue;
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }

    public function sanitizarAtributos() {
       $atributos = $this->atributos();
       $sanitizado = [];
       

       foreach($atributos as $key => $value ) {
          $sanitizado[$key] = self::$db->escape_string($value);
       }

       return $sanitizado;

    }
    // Subida de archivos
    public function setImagen($imagen) {
        // Asignar al atributo de la imagen el nombre de la imagen
        if($imagen) {
            $this->imagen = $imagen;
        }
    }

    // Validación
    public static function getErrores() {
        return self::$errores;
    }
    
    public function validar() {
        if(!$this->titulo) {
            self::$errores[] = "Debes añadir un Titulo";
        }

        if(!$this->precio) {
            self::$errores[] = "El Precio es Obligatorio";
        }

        if( strlen( $this->descripcion ) < 50 ) {
            self::$errores[] = "La descripción es obligatoria y debe tener al menos 50 caracteres";
        }

        if(!$this->habitaciones) {
            self::$errores[] = "El Número de Habitaciones es Obligatorio";
        }

        if(!$this->wc) {
            self::$errores[] = "El Número de Baños es Obligatorio";
        }

        if(!$this->estacionamiento) {
            self::$errores[] = "El Número de lugares de Estacionamiento es Obligatorio";
        }

        if(!$this->vendedorId) {
            self::$errores[] = "Elige un Vendedor";
        }

        if(!$this->imagen ) {
           self::$errores[] = 'La Imagen es Obligatoria';
        }

       

        return self::$errores;
    }
}