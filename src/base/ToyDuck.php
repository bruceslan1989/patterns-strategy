<?php
/**
 * Created by PhpStorm.
 * User: Ruslans
 * Date: 8/19/2017
 * Time: 8:03 PM
 */

namespace Acme\Base;

use Acme\Base\Modules\Fly\NoFly;

/**
 * Class ToyDuck
 *
 * @package Acme\Base
 */
class ToyDuck extends Duck
{
    public function __construct()
    {
        parent::__construct();
        $this->flyBehaviour = new NoFly();
    }

    /**
     *
     */
    public function display()
    {
        echo "Showing toy duck!<br />";
    }
}