<?php
class database{
    private static $host = 'localhost';
    private static $user = 'root';
    private static $password = '';
    protected static $conn;
    function __construct(...$data){
        self::$host = $data[0] ?? $host;
        self::$user = $data[1] ?? $user;
        self::$password = $data[2] ?? $password;
    }

    public static function connect(...$data){
        #use values if given otherwise use existing values
        database::$host = $data[0] ?? database::$host;
        database::$user = $data[1] ?? database::$user;
        database::$password = $data[2] ?? database::$password;
        #create connection
        database::$conn = new mysqli(database::$host, database::$user, database::$password);
        #check for connection error (supported in all mysqli versions of PHP)
        mysqli_connect_error() || database::$conn->connect_error ? die('Database connection failed'): false;
    }

    public static function close_connection(){
        #close connection
        database::$conn->close();
    }

    public static function create_db($db){
        #check is connection avalable
        mysqli_connect_error() || database::$conn->connect_error ? die('Connection is not avalable first connection required'): false;
        #create database is not exists
        $sql = "CREATE DATABASE IF NOT EXISTS $db";
        database::$conn->query($sql);
    }

    public static function select_db($db){
        #select database
        database::$conn->select_db($db);

        #check is database selected
        if ($result = database::$conn->query("SELECT DATABASE()")) {
            $row = $result->fetch_row();
            #display that database error if not / optional instead of false can be a success message
            !$row[0] ? die('Unfortunately database is not selected as it may not exists'):false;
            #colose query fetch
            $result->close();
        }

    }

    public static function delete_db($db){
        #delete table it is avalable only with admin access to database
        $sql = "DROP DATABASE IF EXISTS $db";
        database::$conn->query($sql);
    }


}
