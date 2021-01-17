<?php

  namespace Aylon\Database;

  abstract class Connection
  {

  	private static $conn;

    public static function getConn()
    {
        if (!self::$conn) {
        	self::$conn = new \PDO('mysql: host=localhost; dbname=video_login', 'aylon','123');
        }
       
        return self::$conn;

    }

  }