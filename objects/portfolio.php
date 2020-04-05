<?php

function getProjects($tbl){
    $pdo = Database::getInstance()->getConnection();

    $queryAll = 'SELECT * FROM '.$tbl;
    $results = $pdo->query($queryAll);

    if($results){
        return $results;
    }else{
        return 'There was a problem accessing the info';
    }
}

function getCS($tbl_cs) {
    $pdo = Database::getInstance()->getConnection();

    $queryAll = 'SELECT * FROM '.$tbl_cs;
    $results = $pdo->query($queryAll);

    if($results){
        return $results;
    }else{
        return 'There was a problem accessing the info';
    }
}

function getProjByID($id){
    $pdo = Database::getInstance()->getConnection();

    $query = 'SELECT * FROM `tbl_projects` WHERE ID =:id';
    $single_project = $pdo->prepare($query);
    $single_project->execute(
        array(
            ':id'=>$id
        )
    );

    if($single_project){
        return $single_project;
    }else{
        return '<p>There was a problem accessing the info</p>';
    }
}

function getOneCS($id){
    $pdo = Database::getInstance()->getConnection();

    $query = 'SELECT * FROM `tbl_case_study` WHERE cs_id =:id';
    $single_cs = $pdo->prepare($query);
    $single_cs->execute(
        array(
            ':id'=>$id
        )
    );

    if($single_cs){
        return $single_cs;
    }else{
        return '<p>There was a problem accessing the info</p>';
    }
}