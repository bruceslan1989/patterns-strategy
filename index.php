<?php
/**
 * Created by PhpStorm.
 * User: Ruslans
 * Date: 8/19/2017
 * Time: 7:46 PM
 */

require 'vendor/autoload.php';

use Acme\Base\RealDuck;
use Acme\Base\ExoticDuck;
use Acme\Base\ToyDuck;
use Acme\Base\WoodDuck;

$ducks = [];

$ducks[] = new RealDuck();
$ducks[] = new ExoticDuck();
$ducks[] = new ToyDuck();
$ducks[] = new WoodDuck();

foreach ($ducks as $duck) {
    $duck->display();
    $duck->swim();
    $duck->fly();
    $duck->quack();
    echo "<hr />";
}