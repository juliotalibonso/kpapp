<?php

namespace App\Model;

use PDO ;

class DB
{
    protected $host = '127.0.0.1';
    protected $db   = 'kpapp';
    protected $user = 'root';
    protected $pass = 'secret';
    protected $charset = 'utf8mb4';

    protected $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    public $pdo = '';

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $this->options);
       } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
       }
    }
}
