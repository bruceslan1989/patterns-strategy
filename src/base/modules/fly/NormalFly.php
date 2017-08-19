<?php
/**
 * Created by PhpStorm.
 * User: Ruslans
 * Date: 8/19/2017
 * Time: 7:40 PM
 */

namespace Acme\Base\Modules\Fly;

use Acme\Base\Modules\Fly\Interfaces\IFlyable;

/**
 * Class NormalFly
 *
 * @package Acme\Base\Modules\Fly
 */
class NormalFly implements IFlyable
{
    /**
     *
     */
    public function fly()
    {
        echo "Normal fly behaviour!<br />";
    }
}