<?php
class DB extends PDO
{
    public function __construct($file = "config/db.ini")
	{
        if (!$config = parse_ini_file($file, true)) throw new exception('Unable to open ' . $file . '.');

        $dsn = "{$config['database']['engine']}:host={$config['database']['host']};dbname={$config['database']['name']}";
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        parent::__construct($dsn, $config['database']['user'], $config['database']['pass'], $options);
    }
}
?>
