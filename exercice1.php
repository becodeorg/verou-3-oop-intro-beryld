<?php
declare(strict_types=1);


$beverage1 = new beverage('black', 2, 'cold');

 class beverage  
{
    public string $color;
    public float $price;
    public string $temperature;

    public function _construc($color, $price, $temperature)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    public function getInfo()
    {
        echo "This beverage is $this->temperature and $this->color !";
    }
    $beverage1->getInfo();
}







/* EXERCISE 1
 Create a class beverage.
 Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.

Remember for now we will use properties and methods that can be accessed from everywhere.
 Make a getInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
TODO: Print the temperature on the screen.

USE TYPEHINTING EVERYWHERE!
*/

?>