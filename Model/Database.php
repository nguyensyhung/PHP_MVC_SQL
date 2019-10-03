<?php 
	/**
	 * summary
	 */
	class Database
	{
		private static $dsn      = 'mysql:host=localhost;dbname=shop_db';
    	private static $username = 'root';
    	private static $password = '';
    	private static $options  = array(
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    );
    	private static $db;
	    public function __construct()
	    {
	        
	    }
	     public static function getDB()
    {
        try {
            self::$db = new PDO(self::$dsn, self::$username, self::$password, self::$options);
            return self::$db;
        } catch (PDOException $ex) {
            echo "<p>Error connecting to database: " . $ex->getMessage() . "</p>";
            exit();
        }
    }

	}
 ?>