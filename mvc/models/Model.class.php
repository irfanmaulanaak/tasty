<?php class Model {
    protected $mysqli;

    public function __construct(){
        $dbhostname = 'localhost';
        $dbusername = 'root';
        $dbpassword = '';
        $dbname = 'restaurant';

        $this->mysqli = new mysqli($dbhostname, $dbusername, $dbpassword, $dbname);

        if($this->mysqli->connect_errno){
            die('Database connection error!');
        }
    }
    function selectRestaurant(){
        $sql = "select * from restaurant";
        return $this->mysqli->query($sql);
    }
}