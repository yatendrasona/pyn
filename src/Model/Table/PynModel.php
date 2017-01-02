<?php

namespace App\Model\Table;

/* class PynModel extends MongoBaseConnectionManger {

  public function saveForm($data = array()) {
  $this->insert("pyn", $data);
  }

  }
 */
define("MONGO_DATABASE_NAME", "pyn");

class PynModel {

  var $conn;

  function __construct($d) {
    $this->conn = NULL;
    if (!defined("MONGO_DATABASE_NAME")) {
      define("MONGO_DATABASE_NAME", "pyn");
    }
    try {
      $host = array_key_exists('host', $d) ? $d['host'] : 'localhost';
      $port = array_key_exists('port', $d) ? $d['port'] : '27017';
      $user = array_key_exists('username', $d) ? $d['username'] : '';
      $password = array_key_exists('password', $d) ? $d['password'] : '';
      $database = array_key_exists('database', $d) ? $d['database'] : 'pyn';
      //$uri = "mongodb://myuser:mypass@host:port/mydb";
      $server = 'mongodb://';
      if (!empty($user) && !empty($password)) {
        $server .=$user . ':' . $password . "@";
      }
      if (!empty($host) && !empty($port)) {
        $server .=$host . ':' . $port . "";
      }
      if (!empty($database)) {
        $server .='/' . $database;
      }
      if (class_exists("MongoClient")) {
        $this->conn = new MongoClient($server);
      } elseif (class_exists("Mongo")) {
        $this->conn = new Mongo($server);
      }
      return $this->conn->selectDB($database);
    } catch (MongoConnectionException $e) {
      echo $e->getMessage();
      exit();
    }
  }

  function go($d) {
    if (is_null($this->conn)) {
      $this->conn = new PynModel($d);
    }

    return $this->conn;
  }

  function getCursorObject($r) {
    if (is_object($r)) {
      $d = array();
      foreach ($r as $b => $v) {
        $d['__id'] = $b;
        foreach ($v as $m => $k) {
          $d[$m] = $k;
        }
      }
      return $d;
    } else {
      return $r;
    }
  }

  function insert($collection_name, $row = array()) {
    if (count($row) > 0 && !empty($collection_name)) {
      $db = $this->go(array("database" => MONGO_DATABASE_NAME));
      $collection = $db->conn->selectCollection(MONGO_DATABASE_NAME, $collection_name);
      return $collection->insert($row);
    } else {
      return false;
    }
  }

  function update($collection_name, $where = array(), $row = array()) {
    if (count($row) > 0 && !empty($collection_name)) {
      $db = $this->go(array("database" => MONGO_DATABASE_NAME));
      $collection = $db->conn->selectCollection(MONGO_DATABASE_NAME, $collection_name);
      return $collection->update($where, $row);
    } else {
      return false;
    }
  }

  function find($collection_name, $row = array()) {
    if (!empty($collection_name)) {
      $db = $this->go(array("database" => MONGO_DATABASE_NAME));
      $collection = $db->conn->selectCollection(MONGO_DATABASE_NAME, $collection_name);
      $cursor = $collection->find($row);
      return $this->getCursorObject($cursor);
    } else {
      return false;
    }
  }

  public function __destruct() {
    if (is_resource($this->conn)) {
      $this->conn->close();
    }
  }

}

Class MYclass extends PynModel {

  function __construct() {
    
  }

  function doit($g) {
    $this->insert("dfgdgdf", $g);
  }

  function flist($g) {
    print_r($this->find("dfgdgdf", $g));
  }

}

$n = new MYclass();

$n->flist(array());
