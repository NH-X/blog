<?php
    class Conn extends mysqli{
        private static $instance;
        private static $servername;
        private static $port;
        private static $dbUser;
        private static $dbPassword;
        private static $dbName;

        private function __construct() {
            // 私有构造方法，防止直接实例化
            // 读取配置文件
            $configFile = file_get_contents(__DIR__."/config.json");
            $config = json_decode($configFile, true);

            // 从配置文件中获取数据库连接信息
            self::$servername = $config["servername"];
            self::$port = $config["port"];
            self::$dbUser = $config["dbUser"];
            self::$dbPassword = $config["dbPassword"];
            self::$dbName = $config["dbName"];

            parent::__construct(
                self::$servername,
                self::$dbUser,
                self::$dbPassword,
                self::$dbName
            );
        }

        public static function getInstance() {
            if (self::$instance === null) {
                self::$instance = new self();
            }
            return self::$instance;
        }
    }
?>