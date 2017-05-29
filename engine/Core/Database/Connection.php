<?php

/**
 * Created by PhpStorm.
 * User: Ra
 * Date: 28.05.2017
 * Time: 21:54
 */

namespace Engine\Core\Database;

use \PDO;

class Connection
{
    private $link;

    /**
     * Connection constructor.
     */
    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $config = [
            'driver' => 'mysql',
            'host' => 'localhost',
            'db_name' => 'phpcms',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ];
        $dsn = 'mysql:driver='.$config['driver'].':host='.$config['host'].':dbname='.$config['db_name'].':charset='.$config['charset'];
        $this->link = new PDO($dsn, $config['username'], $config['password']);
        return $this;
    }

    /**
     * @param $sql
     * @return mixed
     */
    public function execute($sql)
    {
        $sth = $this->link->prepare($sql);
        return $sth->execute();
    }

    public function query($sql)
    {
        $sth = $this->link->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        if($result === false) {
            return [];
        }
        return $result;
    }
}