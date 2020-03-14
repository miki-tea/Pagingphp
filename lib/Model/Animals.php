<?php

namespace MyApp\Model;

class Animals extends \MyApp\Model{

  public function findAll(){
    $stmt = $this->db->query("select * from animals order by id");
    $res = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    debug(print_r($res));
    return $res;
  }
  //   public function findAll() {
  //   $stmt = $this->db->query("select * from users order by id");
  //   $stmt->setFetchMode(\PDO::FETCH_CLASS, 'stdClass');
  //   return $stmt->fetchAll();
  // }
}