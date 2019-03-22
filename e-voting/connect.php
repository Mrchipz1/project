<?php //  this is a class for making the connection 
class dbConnect {
    // a vairable where the connection would exist on 
    private $conn;
    function __construct() {}
    // this function connect would we called in any file that needs a connection to the database
    function connect() {
        // this reaquired the config file and fetch the details that we configured in the config.php file the rest are just initiating the connection 
        require_once('config.php');
        $server=DB_HOST;
        $user=DB_USERNAME;
        $db=DB_DATABASE;
        $pass=DB_PASSWORD;
        try {
            $this->conn=new PDO("mysql:host=$server;dbname=$db", $user, $pass);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO: : ATTR_ERRMODE, PDO: : ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        // $server = DB_HOST;
        // $user = DB_USERNAME;
        // $db = DB_DATABASE;
        // $pass = DB_PASSWORD;
        // try {
        //     $this->conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
        //     // set the PDO error mode to exception
        //     $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //     }
        // catch(PDOException $e)
        //     {
        //     echo "Connection failed: " . $e->getMessage();
        //     }
        return $this->conn;
    }
}