<?php

    Class MyName{

        public $a, $b, $c;//propertise


        // construtor
        public function __construct($x, $y){
            $this->a = $x;
            $this->b = $y;
        }

        //Access modifier - public, private, protected 
        public function addsum(){//methods
            $this->c = $this->a + $this->b;
            return "Result: " . $this->c;
        }

    }

// object

    $math = new MyName(200, 500);
    echo $math->addsum();

    
    echo "<br/>";


    $math = new MyName(500, 400);
    echo $math->addsum();

?>