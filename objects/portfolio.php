<?php
class Projects{
    private $conn;

    // setting variables for table names (found in database)
    public $proj_table = 'tbl_projects';

    public function __construct($db){
        $this->conn = $db;
    }

    public function getProjects(){

        $query = 'SELECT * FROM tbl_projects';

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    public function getProjByID($id){

        $query = 'SELECT * FROM `tbl_projects` WHERE `ID` ='.$id;

        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        
        return $stmt;
    }
}