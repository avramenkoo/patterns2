<?php

abstract class RestApi {
  protected $data;
  protected $status;
  protected $message;
  protected $response;

  public function __construct() {
    $this->data = null;
    $this->status = null;
    $this->message = null;
    $this->response = null;
  }

  public function update(string $id, array $nextData): void {
    $this->data = $this->getData($id);

    if ($this->validate($nextData)) {
      $this->notify();
    }

    $this->hook1();
    $this->response();
  }

  public function saveData($response) {
    return $response;
  }

  public function getData(string $id) {
    return $this->data;
  }

  public function response() {
    $this->response = [
      'status' => $this->status,
      'message' => $this->message
    ];

    return $this->saveData($this->response);
  }

  abstract protected function validate($nextData);
  abstract protected function notify();

  protected function hook1() {}
}

class Product extends RestApi {
  protected function validate($nextData) {}
  protected function notify() {}
}

class User extends RestApi {
  protected function validate($nextData) {}
  protected function notify() {}
}

class Order extends RestApi {
  protected function validate($nextData) {}
  protected function notify() {}

  public function response() {}
}
