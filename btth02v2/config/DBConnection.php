<?php
class DBConnection
{
    private $pdo = null;
    public function __construct()
    {
        $type     = 'mysql';                 // Type of database
        $server   = 'localhost';             // Server the database is on
        $db       = 'btth02_cse485';                 // Name of the database
        $port     = '';                      // Port is usually 8889 in MAMP and 3306 in XAMPP
        $charset  = 'utf8mb4';               // UTF-8 encoding using 4 bytes of data per character

        $username = 'root';                  // Enter YOUR username here
        $password = '';                      // Enter YOUR password here

        $options  = [                        // Options for how PDO works
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];                                                                  // Set PDO options

        $dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset"; // Create DSN
        try {                                                               // Try following code
            $this->pdo = new PDO($dsn, $username, $password, $options);           // Create PDO object
        } catch (PDOException $e) {                                         // If exception thrown
            throw new PDOException($e->getMessage(), $e->getCode());        // Re-throw exception
        }
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}
?>