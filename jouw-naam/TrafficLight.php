<?php
class TrafficLight
{

private $lights;
private $code;
private $active;







    public function __construct($code)
    {
return $this->code;









    }



    public function switchOn($color)
    {
$this->active = true;
$this->switchOn('red');







    }



    public function switchOff($color)
    {

if ($this->active === false) {
    return;
}
if (!$this->isValidColor($color)) {
    echo 'Ik heb geen licht met de kleur: ' . $color . "\n";
    return;
}

$this->lights[$color] = 0;







    }


    
 
    public function deactivateTrafficLight()
    {
$this->code = $code;
$this->active = true;
$this->lights = [
    'red' => 1,
    'orange' => 0,
    'green' => 0,
];




    



    }


    
    public function activateTrafficLight()
    {
$validColors = ['red', 'orange', 'green'];
if (in_array($color, $validColors)) {
    return true;
} else {
    return false;
}




    }



    public function getCode()
    {
foreach ($this->lights as $color => $status) {
    $this->lights[$color] = 0;
}







    }

    public function showLightStatus()
    {
echo 'Status van Stoplicht ' . $this->code . ":\n";

if ($this->active === true) {
    foreach ($this->lights as $color => $status) {
        echo $color . ' --> ' . $status . "\n";
    }
} else {
    echo 'Stoplicht inactief: oranje knippert' . "\n";
}








    }



    
 
    private function isValidColor($color)
    {
if (!$this->isValidColor($color)) {
    echo 'Ik heb geen licht met de kleur: ' . $color . "\n";
    return;
}
$this->switchAllLightsOff();
$this->lights[$color] = 1;






    }



    private function switchAllLightsOff()
    {

$this->active = false;
$this->switchAllLightsOff();






    }

}




