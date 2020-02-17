<?php
namespace App\Utility;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class db_connector
{
    private $servername = "34.68.177.186";
    private $username = "root";
    private $password = "root";
    private $dbname = "cst323activity";
    
    /**
     * getConnection method connecting to the database.
     * @return $connection after executing the mysqli_connect.
     */
    function getConnection()
    {
        $connection = mysqli_connect(null, $username, $password, $dbname, null, '/cloudsql/shod-268016:us-central1:shod');
        
        if($connection->connect_error)
        {
            echo "Connection Failed " . $connection->connect_error . "<br>";
        }
        else
        {
            return $connection;
        }
    }
}