<?php
/**
 * Created by PhpStorm.
 * User: Ra
 * Date: 29.05.2017
 * Time: 21:16
 */

namespace Engine\Service;


abstract class AbstractProvider
{
    /**
     * @var \Engine\DI\DI;
     */
    protected $di;

    /**
     * AbstractProvider constructor.
     * @param \Engine\DI\DI $di
     */
    public function __construct(\Engine\DI\DI $di)
    {
        $this->di = $di;
    }

    /**
     * @return mixed
     */
    abstract function init();

}