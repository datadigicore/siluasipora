<?php

#This code provided by:
#Yohanes Christomas Daimler(yohanes.christomas@gmail.com)
#Gunadarma University

class mysql_db extends config {
  protected $query;
  protected $result;
  protected $connect;
  protected $numRec;
  protected $url_rewrite;
  protected $path;

  public function __construct() {
    $this->connect = $this->open_connection();
  }

  public function where($data) {
    $parameter = "";
    $count     = 0;
    foreach ($data as $key => $value) {
      if ($count == 0) {
        $paramater = "WHERE $key='$value'";
        $count++;
      }
      else {
        $paramater.=" AND $key='$value'";
        $count++;
      }
    }
    return $paramater;
  }

  public function query($data) {
    $this->query = mysqli_query($this->connect,$data) or $this->error();
    return $this->query;
  }

  public function fetch_object($data) {
    $this->result = $data;
    $this->object = mysqli_fetch_object($this->result);
    return $this->object;
  }

  public function _fetch_object($data, $param) {
    $this->result = $this->query($data) or $this->error();
    if ($this->num_rows($this->result)) {
      if ($param == true) {
        while ($data = $this->fetch_object($this->result)) {
          $dataArray[] = $data;
        }
      }
      else {
        $data = $this->fetch_object($this->result);
        $dataArray[] = $data;
      }
      return $dataArray;
    }
  }

  public function _fetch_array($data, $param) {
    $this->result = $this->query($data) or $this->error();
    $row = $this->num_rows($this->result);
    if ($row) {
      if ($param == true) {
        while ($data = $this->fetch_array($this->result)) {
          $dataArray[] = $data;
        }
      }
      else {
        $data = $this->fetch_array($this->result);
        $dataArray = $data;
      }
      return $dataArray;
    }
  }

  public function fetch_array($data) {
    $this->result = $data;
    return mysqli_fetch_array($this->result);
  }

  public function fetch_field($data) {
    $this->result = $data;
    return mysqli_fetch_field($this->result);
  }

  public function num_rows($data) {
    if ($data != '') {
      $this->numRec = mysqli_num_rows($data);
      if ($this->numRec) {
        return $this->numRec;
      }
      else {
        return false;
      }
    }
  }

  public function insert_id($data) {
    return mysqli_insert_id($this->connect);
  }

  public function closeconn() {
    return mysqli_close($this->connect);
  }

  public function error() {
    switch ($this->debug) {
      case 1:
        $message = die(mysqli_error($this->connect));
      break;
      case 2:
        $message = die("Ada Kesalahan Query");
      break;
      default:
        $message = "";
      break;
    }
    return $message;
  }

  public function clear_var($data) {
    return $data = '';
  }
}

?>
