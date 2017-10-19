<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');

require 'vendor/autoload.php';

use Medoo\Medoo;

final class DB {

    /**
     * @var Medoo
     */
    private $db;

    /**
     * @var static
     */
    static $instance = null;

    public static function getInstance () {
        if (static::$instance === null) {
            static::$instance = new static();
            static::$instance->db = new Medoo([
                'database_type' => 'mysql',
                'database_name' => 'sample',
                'server'        => 'sample-db',
                'username'      => 'sample',
                'password'      => 'trustme'
            ]);
        }
        return static::$instance;
    }

    public function get () {
        return $this->db;
    }

}

/**
 * @return Medoo
 */
function db () {
    return DB::getInstance()->get();
}
