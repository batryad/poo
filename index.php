<?php

require_once 'Vehicle.php';
require_once 'Cars.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Skateboard.php';
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
$cars = new Vehicle("Rouge", 5, "Diesel");
$carsOptions = $truckEnergy = new Cars('Blue', '5', 'Electric');
$truck = new Truck('Green', '3');
// Moving bike
echo $bicycle->forward();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo "<br> <br> <br>";
echo $cars->forward();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed() . ' km/h ' . '<br>';
echo $cars->brake();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed() . ' km/h ' . '<br>';
echo $cars->brake();
echo $cars->setNbWheels(4);
echo '<br><br> Nombre de roues : ' . $cars->getNbWheels();
echo $carsOptions->setEnergyLevel(50);
echo '<br> Capacité du réservoir : ' . $carsOptions->getEnergyLevel() . '<br>';
echo '<br>' . 'Couleur de la voiture : ' . $carsOptions->getColor();
echo '<br>' . 'Nombre de siège : ' . $carsOptions->getNbSeats();
echo '<br>' . 'Type d\'énergie : ' . $carsOptions->getEnergy();
echo '<br><br>' . 'Truck :';
echo '<br>' . 'Couleur du camion : ' . $truck->getColor();
echo '<br>' . 'Nombre de siège : ' . $truck->getNbSeats();
echo '<br>' . 'Type d\'énergie : ' . $truckEnergy->getEnergy() . '<br>';
while ($truck->getStockageCapacity() < 30) {
    $truck->remplir();
    if ($truck->stockageMax() == true) {
        echo 'Full';
    } else {
        echo 'In filling, ';
    }
}
echo '<br> Stockage capacity : ' . $truck->getStockageCapacity() . '<br>';
echo '<br>';
echo '<br>';
$MotorWay1 = new MotorWay();
$Car1 = new Cars("blue", 4, "fuel");
$Car2 = new Cars("red", 6, "electric");
$MotorWay1->addVehicle($Car1);
$MotorWay1->addVehicle($Car2);
var_dump($MotorWay1->currentVehicles());
$ResidentialWay1 = new ResidentialWay();
$Bike2 = new Bicycle("brown", 8);
$Car2 = new Cars("yellow", 12, "sun");
$ResidentialWay1->addVehicle($Bike2);
$ResidentialWay1->addVehicle($Car2);
var_dump($ResidentialWay1);
$PedestrianWay1 = new PedestrianWay();
$Bike1 = new Bicycle("red", 3);
$Skate1 = new Skateboard("black", 1);
$PedestrianWay1->addVehicle($Bike1);
$PedestrianWay1->addVehicle($Skate1);
var_dump($PedestrianWay1);
