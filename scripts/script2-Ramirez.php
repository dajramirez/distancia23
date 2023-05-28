<?php

/**
 * Clase Verdura
 * Esta clase representa una verdura y proporciona dos métodos para conocer su color y si es comestible.
 * 
 * @method string qué_color ()
 * @method bool es_comestible ()
 * 
 * @author Darío J. Ramírez
 * @version 1.1
 */

class Verdura {

    /**
     * @var bool Indica si la verdura es comestible.
     */
   var $comestible;

   /**
    * @var string Indica el color de la verdura.
    */
   var $color;

    /**
     * Constructor de la clase Verdura.
     * 
     * @param bool $comestible Indica si la verdura es comestible.
     * @param string $color Color de la verdura (por defecto: "verde").
     */
   function __construct($comestible, $color="verde")
   {
       $this->comestible = $comestible;
       $this->color = $color;
   }

   /**
    * Verfica si la verdura es comestible.
    * 
    * @return bool True si la verdura es comestible, false si no lo es.
    */
   function es_comestible()
   {
       return $this->comestible;
   }

   /**
    * Devuelve el color de la verdura.
    *
    * @return string Color de la verdura.
    */
   function qué_color()
   {
       return $this->color;
   }

}
