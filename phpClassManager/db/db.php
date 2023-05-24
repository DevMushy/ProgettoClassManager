<?php

class Db
{
    private $host = "localhost:3306";
    private $db_name = "school";
    private $username = "root";
    private $password = "ferre";
    public $conn;

    public function getConnection()
    {
        $this->$conn = null;

        try {
            $this->$conn = new PDO("mysql:host=" . $this->$host . ";dbname=" . $this->$db_name . ";user=" . $this->$username . ";password=" . $this->$password);
        } catch (PDOException $exception) {
            echo "Database connection error: " . $exception->getMessage();
        }

        return $this->$conn;
    }

}

?>