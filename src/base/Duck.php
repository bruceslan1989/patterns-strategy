<?php
/**
 * Created by PhpStorm.
 * User: Ruslans
 * Date: 8/19/2017
 * Time: 7:37 PM
 */

namespace Acme\Base;

use Acme\Base\Modules\Fly\NormalFly;
use Acme\Base\Modules\Quack\NormalQuack;

/**
 * Class Duck
 *
 * @package Base
 */
abstract class Duck
{
    /**
     * @var NormalFly
     */
    protected $flyBehaviour;

    /**
     * @var NormalQuack
     */
    protected $quackBehaviour;

    /**
     * Duck constructor.
     */
    public function __construct()
    {
        $this->flyBehaviour   = new NormalFly();
        $this->quackBehaviour = new NormalQuack();
    }

    /**
     *
     */
    public function fly()
    {
        $this->flyBehaviour->fly();
    }

    /**
     *
     */
    public function quack()
    {
        $this->quackBehaviour->quack();
    }

    /**
     *
     */
    public function swim()
    {
        echo "Duck can swim!<br />";
    }

    abstract public function display();
}