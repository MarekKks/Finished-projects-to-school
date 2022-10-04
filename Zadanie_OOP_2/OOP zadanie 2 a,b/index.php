<?php



require 'vendor/autoload.php';

use filp\whoops;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$whoops->addDataTableCallback('Details', function(\Whoops\Exception\Inspector $inspector) {
    $data = array();
    $exception = $inspector->getException();
    if ($exception instanceof SomeSpecificException) {
        $data['Important exception data'] = $exception->getSomeSpecificData();
    }
    $data['Exception class'] = get_class($exception);
    $data['Exception code'] = $exception->getCode();
    return $data;
});

$run->pushHandler($whoops);






class Dog {

    public $name;
    public $age;
    public $weight;

    public function __construct($name, $age, $weight)
    {
        $this->name     = $name;
        $this->age      = $age .' years';
        $this->weight   = $weight .' kg';
    }
    public function _bark(){
    echo 'HAF HAF';
    }
}

Class Wolf extends Dog {
    public function _attack(){
    echo 'Run for your life you idiot !!';
    }
}


$charlie = new Dog('Charlie', 8, 25);
    echo $charlie->name;
    echo '<br>';
    echo $charlie->age;
    echo '<br>';
    echo $charlie->weight;
    echo '<br>';
    $charlie->_bark();

echo '<br>';
echo '<br>';

$Rex = new Wolf('Rex',6, 40);
    echo $Rex->name;
    echo '<br>'; 
    echo $Rex->age;  
    echo '<br>';  
    echo $Rex->weight;  
    echo '<br>';
    $Rex->_attack();
?>
