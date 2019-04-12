<?php 

class Classroom {
    private $name;
    private $capacity;
    private $sittingArrangement;

    public static $SITTING_CIRCULAR = 'circular';
    public static $SITTING_ROWS = 'rows';

    public function __construct($n) {
        $this->name = $n;
    }

    public function __destruct(){
        echo '<br/> The classroom ' . $this->name . ' has been closed';
    }

    public function setCapacity($c) {
        if(is_int($c)){
            $this->capacity = $c;
        }
    }
    public function setSittingArrangement($a){
        $sa = ['rows', 'circular'];
        if(in_array($a, $sa)){
            $this->sittingArrangement = $a;
        }
    }

    public function getName() {
        return $this->name;
    }

    public function getCapacity(){
        return $this->capacity;
    }

    public function getSittingArrangement(){
        return $this->sittingArrangment;
    }
}


$c1 = new Classroom ('a1');
$c1->setCapacity(12);
$c1->setSittingArrangement(Classroom::$SITTING_ROWS);

echo '<br/>';

print_r($c1);

$c2 = new Classroom ('b1');
$c2->setCapacity('20');
$c2->setSittingArrangement(Classroom::$SITTING_CIRCULAR);

echo '<br/>';

print_r($c2);





?>