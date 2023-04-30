<?php

// Design pattern: Singleton

require_once 'DatabaseConnector.php';

$mongodbConnector1 = MongoDbConnector::getConnectorInstance();
$mongodbConnector1->executeQuery("...");

$mongodbConnector2 = MongoDbConnector::getConnectorInstance();
$mongodbConnector2->executeQuery("...");

$postgresConnector1 = PostgreSqlConnector::getConnectorInstance();
$postgresConnector1->executeQuery("...");

$postgresConnector2 = PostgreSqlConnector::getConnectorInstance();
$postgresConnector2->executeQuery("...");
