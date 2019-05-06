<?php

/**
 * Global PDO Config
 * @author Emmanuel Ketcha Bepa
 * @since 03.05.2019
 */

class Config extends PDO
{

    /**
     * @var string
     */
    private $host;

    /**
     * @var string
     */
    private $servername;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    public $dbh;

    /**
     * Config constructor.
     * @param $host
     * @param $servername
     * @param $username
     * @param $password
     */
    public function __construct($host, $servername, $username, $password)
    {
        $this->host = $host;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Connect to database
     */
    public function connect()
    {
        try {
            $opt = array(\PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
            $this->dbh = new \PDO("mysql:host={$this->host};dbname={$this->servername}", $this->username,$this->password, $opt);


        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->dbh;
    }

}




