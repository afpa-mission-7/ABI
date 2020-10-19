<?php 
/**
 * @author Doryan
 * date 19/10/20
 */

abstract class Repository
{
    protected PDO $pdo;
    private string $table;
    private string $classname;

}