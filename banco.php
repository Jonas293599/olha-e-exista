<?php

class Banco
{
    private static $dbNome = 'aula_3009';
    private static $dbHost = 'localhost';
    private static $dbUsuario = 'root';
    private static $dbSenha = '';
    private static $cont = null;

    public function __construct()
    {
        die('A funçao Init nao e permitido!');
    }
    public static function conectar ()
    {
        if(null == self::$cont)
        {
            try
            {
                self::$cont = new PDO( "mysql:host=". self::$dbHost.";". "dbname=".self::$dbNome, self::$dbUsuario,self::$dbSenha);
            }
            catch(PDOExeption $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }
    public static function desconectar()
    {
        self::$cont = null;
    }
}
?>