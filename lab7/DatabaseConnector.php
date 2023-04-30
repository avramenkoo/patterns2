<?php

interface IConnector {
  public function executeQuery(string $query): void;
}

class PostgreSqlConnector implements IConnector {
  private static $connectorInstance;

  private function __construct() {}

  public function executeQuery(string $query): void {}

  public static function getConnectorInstance(): IConnector {}
}

class MongoDbConnector implements IConnector {
  private static $connectorInstance;

  private function __construct() {}

  public function executeQuery(string $query): void {}

  public static function getConnectorInstance(): IConnector {}
}
