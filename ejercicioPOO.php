<?php


    class Libro {

        public $titulo;
        public $autor;
        public $yearPublicacion;
        public $disponible;

        public function __construct($titulo,$autor,$yearPublicacion,$disponible=true){

            $this->titulo=$titulo;
            $this->autor=$autor;
            $this->yearPublicacion=$yearPublicacion;
            $this->disponible=$disponible;

        }

        /**este es el metodo para prestar un libro,
         * al crear un objeto libro siempre se pone en disponible
         * no se que explicar creo que es muy obvio */
        public function prestar()  {
            if ($this->disponible) {
                $this->disponible=false;
                echo'prestado correctamente <br>';
            }else {
                echo 'libro ya prestado<br>';
            }        
        }

        public function devolver(){
            if ($this->disponible) {
                echo 'el libro no ha sido prestado<br>';
            } else {
                $this->disponible=true;
                echo 'devuelto correctamente<br>';
            }
            
        }

        /**aca use el op ternario para que me dijera si o no ya que me mostraba 1 o 0  */
        public function info()  {

            echo 
            '<br>'.'titulo:'.$this->titulo."<br>",
            'autor:'.$this->autor.'<br>',
            'año:'.$this->yearPublicacion.'<br>',
            "disponible:".($this->disponible? "si":"no").'<br>';
            
        }


    }
    $l1= new Libro("potaxie","jiafei",2024);
    $l2= new Libro('coldrama','juan',2023);
    $l3= new Libro('TSOA','madeline miller',2011);

    /**aca presto el libro uno y lo vuelvo a prestar */
    $l1->prestar();
    $l1->prestar();

    echo '<br>';
    /**aca lo devuelvo y miro su info */
    $l1->devolver();
    $l1->info();
    echo '<br>';
    /**en caso de querer devolver uno que no se a prestado */
    $l2->devolver()


?>