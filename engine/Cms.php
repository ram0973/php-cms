<?php

/**
 * Created by PhpStorm.
 * User: Ra
 * Date: 28.05.2017
 * Time: 20:05
 */

namespace Engine;

use Engine\DI\DI;

class Cms
{
    /**
     * @var DI
     */
    private $di;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
    }

    /**
     * Run Cms
     */
    public function run()
    {
        print_r($this->di);
    }
}