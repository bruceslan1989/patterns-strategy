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
 * Class NoQuack
 *
 * @package Acme\Base\Modules\Quack
 */
class NoQuack implements IQuackable
{
    /**
     *
     */
    public function quack()
    {

    }
}