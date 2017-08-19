<?php
/**
 * Created by PhpStorm.
 * User: Ruslans
 * Date: 8/19/2017
 * Time: 8:00 PM
 */

namespace Acme\Base;

use Acme\Base\Modules\Fly\NoFly;
use Acme\Base\Modules\Quack\NoQuack;

/**
 * Class WoodDuck
 *
 * @package Acme\Base
 */
class WoodDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehaviour   = new NoFly();
        $this->quackBehaviour = new NoQuack();
    }

    /**
     *
     */
    public function display()
    {
        echo "Showing wood duck!<br />";
    }
}