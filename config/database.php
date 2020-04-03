<?php

// this is an object
class Database{
//     private $host = 'us-cdbr-iron-east-05.cleardb.net';
//     private $db_name = 'heroku_972321abb42ab23';
//     private $username = 'bd567e7f319df0';
//     private $password = '15f7e4f7';
    private $host = "localhost";

    private $db_name = "db_portfolio";

    private $username = "root";

    private $password = "root";

    private static $instance = null;
    public $conn;

    private function __construct(){
        $db_dsn = array(
            'host'    => $this->host,
            'dbname'  => $this->db_name,
            'charset' => 'utf8',
        );

        if (getenv('SANDRA_PORTFOLIO') === 'docker') {
            $db_dsn['host'] = 'mysql';
            $this->username = 'docker_u';
            $this->password = 'docker_p';
        }

        try {
            $dsn        = 'mysql:' . http_build_query($db_dsn, '', ';');
            $this->conn = new PDO($dsn, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo json_encode(
                array(
                    'error'   => 'Database connection failed',
                    'message' => $exception->getMessage(),
                )
            );
            exit;
        }
    }

    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
