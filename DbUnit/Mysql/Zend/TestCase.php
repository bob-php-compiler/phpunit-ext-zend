<?php

require_once 'Zend/Db/Adapter/Pdo/Mysql.php';
require_once 'Zend/Db/Table/Abstract.php';

abstract class PHPUnit_DbUnit_Mysql_Zend_TestCase extends PHPUnit_DbUnit_Mysql_TestCase
{
    protected static $db;

    public function getDb()
    {
        if (self::$db == null) {
            self::$db = new Zend_Db_Adapter_Pdo_Mysql(array(
                'host'     => $this->mysqlHost,
                'username' => $this->mysqlUsername,
                'password' => $this->mysqlPasswd,
                'port'     => $this->mysqlPort,
                'dbname'   => $this->mysqlDbname,
                'charset'  => $this->mysqlCharset
            ));
            Zend_Db_Table_Abstract::setDefaultAdapter(self::$db);
        }
        return self::$db;
    }

    public function getConnection()
    {
        if (self::$connection == null) {
            self::$pdo = $this->getDb()->getConnection();
            self::$connection = $this->createDefaultDBConnection(self::$pdo, $this->mysqlDbname);
        }
        return self::$connection;
    }
}
