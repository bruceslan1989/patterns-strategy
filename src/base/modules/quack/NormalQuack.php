<?php
/**
 * Created by PhpStorm.
 * User: Ruslans
 * Date: 8/19/2017
 * Time: 7:41 PM
 */

namespace Acme\Base\Modules\Quack;

use Acme\Base\Modules\Quack\Interfaces\IQuackable;

/**
 * Class NormalQuack
 *
 * @package Amce\Base\Modules\Quack
 */
class NormalQuack implements IQuackable
{
    /**
     *
     */
    public function quack()
    {
        echo "Normal quack behaviour!<br />";
    }
}