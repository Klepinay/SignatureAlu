<?php 
class Database {
    private static $dbName = 'signature';
    private static $dbHost = 'localhost';
    private static $dbUserName = 'root';
    private static $dbUserPassword = '';
    private static $cont = null;

    public function __construct() {
        die('Init fucntion is not allowed');
    }
    
    public static function connect() {
        if ( null == self::$cont ) {
            try {
                self::$cont = new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUserName, self::$dbUserPassword);             
            } catch(PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$cont;
    }

    public static function disconnect()
    {
        self::$cont = null;
    }
}
