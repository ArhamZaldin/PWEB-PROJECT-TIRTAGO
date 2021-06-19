<?php    
    class DB {
        private static $connect = NULL;
        private function __construct() {}
        public static function connectDB() {
            if (!isset(self::$connect)) {
                $DBhostname = 'mysql:host=localhost; dbname=tirtaGO';
                $userDB = 'root';
                $passDB = '';
                $pdoOptions[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                try {
                    self::$connect = new PDO($DBhostname, $userDB, $passDB, $pdoOptions);
                } catch (\Throwable $e) {
                    $e->getMessage();
                }
            }
            if (empty($e)) {
                return self::$connect;
            } else {
                setcookie('error', $e, time() + 30);
                header("Location: ../views/fail.php");
            }
        }
    }

?>