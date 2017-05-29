<?php
/**
 * Created by PhpStorm.
 * User: Ra
 * Date: 29.05.2017
 * Time: 21:20
 */

namespace Engine\Service\Database;

use Engine\Service\AbstractProvider;
use Engine\Core\Database\Connection;

class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public $serviceName = 'db';
    /**
     * @return \Engine\DI\DI
     */
    public function getDi()
    {
        return $this->di;
    }

    /**
     * @param \Engine\DI\DI $di
     */
    public function setDi($di)
    {
        $this->di = $di;
    }

    /**
     *
     */
    function init()
    {
        $db = new Connection();
        $this->di->set($this->serviceName, $db);
    }
}