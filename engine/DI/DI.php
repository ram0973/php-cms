<?php
/**
 * Created by PhpStorm.
 * User: Ra
 * Date: 28.05.2017
 * Time: 19:48
 */
namespace Engine\DI;
class DI
{
    /**
     * @var array
     */
    private $container = [];

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function set($key, $value)
    {
        $this->container[$key] = $value;
        return $this;
    }

    /**
     * @param $key
     * @return mixed
     */
    public function get($key)
    {
        return $this->container[$key];
    }

    /**
     * @param $key
     * @return bool
     */
    public function has($key)
    {
         return isset($this->container[$key]) ? $this->container[$key] : null;
    }

}