<?php
class connectionClass extends mysqli{
    public $db="localhost",$dbname="visitors",$dbpass="",$dbuser="root";
    public $con;
    
    public function __construct() {
        if($this->connect($this->db, $this->dbuser, $this->dbpass, $this->dbname)){}
        else
        {
            return "<h1>Error while connecting database</h1>";
        }
    }
}
