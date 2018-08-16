<?php

namespace Core;

final class Manager 
{
    /**
     * @var \PDO|null
     */
    private $pdo = null;

    // This method should be public has is gonna been used by the repository.
    public function getDb() 
    {    
        $config = $this->loadConfiguration('database.php');
        
        return $this->pdo = new \PDO($config['driver'].':host='.$config['host'].';dbname='.$config['dbname'].';charset=utf8', $config['username'], $config['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    
    private function loadConfiguration(filename)
    {
        // Maybe we can load the database credentials from a file ? 
        // This class should be placed under the etc folder as it a "core" class.
        return require_once __DIR__.'/../config/'.$filename;
    }
}
