<?php
   
   class producto {
    public $nombre;
    public $precio;


    function set_nombre($nombre) {
        return $this -> nombre = $nombre;
    }


    function get_nombre(){
        return $this -> nombre;
    }

    function set_precio($precio) {
        return $this -> precio = $precio;
    }


    function get_precio(){
        return $this -> precio;
    }

   }


   $Lista = array();
   $producto = new producto();
   $producto -> set_nombre("Manga");
   $producto -> set_precio("$10");
   
   $Lista[0] = $producto;

   $producto = new producto();
   $producto -> set_nombre("Disco");
   $producto -> set_precio("$15");

   $Lista[1] = $producto;

   $array_num = count($Lista); 
   
   for ($i = 0; $i < $array_num; ++$i){
     echo $Lista[$i] -> get_nombre();
     echo $Lista[$i] -> get_precio(); 
     echo "<br>";
    }
