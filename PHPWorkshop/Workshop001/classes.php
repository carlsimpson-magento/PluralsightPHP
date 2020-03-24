<?php

include 'header.php';

class Spaceship {
    // Properties
    public $name;
    public $ship_class;
    public $weapons;

    // Methods
    // Setters & Getters
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function set_ship_class($ship_class){
        $this->ship_class = $ship_class;
    }
    function get_ship_class(){
        return $this->ship_class;
    }
    function set_weapons($weapons){
        $this->weapons = $weapons;
    }
    function get_weapons(){
        return $this->weapons;
    }
}
// Display Differences
$apollo= new Spaceship();
$apollo->set_name("Apollo");
$apollo->set_ship_class("Moon Rocket");
$apollo->set_weapons("Unarmed");

$enterprise= new Spaceship();
$enterprise->set_name("Enterprise");
$enterprise->set_ship_class("Galaxy Explorer");
$enterprise->set_weapons("Laser");

// Extend the Parent class
class EscapePod extends Spaceship {
    // Properties
    public $name;
    public $ship_class;
}

$Pod12= new EscapePod();
$Pod12->set_name("EscapePod 12");
$Pod12->set_ship_class("EscapePod");

?>

<section>
    <header>
        <h1 class="page-title">
            <span class="sub-title">Classes</span>
        </h1>
    </header>
</section>
    <?php echo $apollo->get_name(); ?><br />
    <?php echo $apollo->get_ship_class(); ?><br />
    <?php echo $apollo->get_weapons(); ?><br />
    <br />
    <?php echo $enterprise->get_name(); ?><br />
    <?php echo $enterprise->get_ship_class(); ?><br />
    <?php echo $enterprise->get_weapons(); ?><br />
    <br />
    <?php echo $Pod12->get_name(); ?><br />
    <?php echo $Pod12->get_ship_class(); ?><br />
</body>
</html>