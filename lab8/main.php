<?php

// Design pattern: Builder

require_once 'QueryBuilder.php';

$postgresqlQueryBuilder = new PostgresqlQueryBuilder();
$sql = $postgresqlQueryBuilder
  ->select("users", ["id", "name", "email"])
  ->where("name=John")
  ->limit(10)
  ->getSQL();

echo $sql;
echo "\n";

$mysqlQueryBuilder = new MysqlQueryBuilder();
$sql = $mysqlQueryBuilder
  ->select("users", ["id", "name", "email"])
  ->where("email=johndoe@example.com")
  ->limit(10)
  ->getSQL();

echo $sql;
echo "\n";
