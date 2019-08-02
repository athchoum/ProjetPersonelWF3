<?php
class Database
{
private static $dbName = 'nom_de_la_base_de_données';
private static $dbHost = 'localhost';
private static $dbUsername = 'nom_d’utilisateur';
private static $dbUserPassword = 'mot_de_passe';

private static $cont = null;

public function __construct() {
die('Fonction Init non autorisée');
}

public static function connect() {
// Autoriser une seule connexion pour toute la durée de l’accès
if ( null == self::$cont )
{
  try
  {
    self::$cont = new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
  }
  catch(PDOException $e)
  {
    die($e->getMessage());
  }
}
return self::$cont;
}

public static function disconnect()
{
self::$cont = null;
}
}
