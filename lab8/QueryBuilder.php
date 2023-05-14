<?php

interface QueryBuilder {
  public function select(string $table, array $columns): QueryBuilder;
  public function where(string $condition): QueryBuilder;
  public function limit(int $limit): QueryBuilder;
  public function getSQL(): string;
}

class PostgresqlQueryBuilder implements QueryBuilder {
  private $query;

  public function select(string $table, array $columns): QueryBuilder {
    $this->query = "SELECT " . implode(",", $columns) . " FROM " . $table;
    return $this;
  }

  public function where(string $condition): QueryBuilder {
    $this->query .= " WHERE " . $condition;
    return $this;
  }

  public function limit(int $limit): QueryBuilder {
    $this->query .= " LIMIT " . $limit;
    return $this;
  }

  public function getSQL(): string {
    return $this->query;
  }
}

class MysqlQueryBuilder implements QueryBuilder {
  private $query;

  public function select(string $table, array $columns): QueryBuilder {
    $this->query = "SELECT " . implode(",", $columns) . " FROM " . $table;
    return $this;
  }

  public function where(string $condition): QueryBuilder {
    $this->query .= " WHERE " . $condition;
    return $this;
  }

  public function limit(int $limit): QueryBuilder {
    $this->query .= " LIMIT " . $limit;
    return $this;
  }

  public function getSQL(): string {
    return $this->query;
  }
}
