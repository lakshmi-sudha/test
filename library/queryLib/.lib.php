<?php
class {
  //Singleton
  protected static $objInstance;

  public static function get(){
    if(!isset(self::$objInstance)){
      $class=__CLASS__;
      self::$objInstance=new $class;
    }
    return self::$objInstance;
  }
  
  public function getList($options=array())
  {
    $sql = "SELECT *
            FROM ";
    
    $result = database::doSelect($sql);
    return $result;
  }
  
  public function getDetail($Id, $options=array())
  {
    $sql = "SELECT *
            FROM 
            WHERE _id=".$Id;
    
    $result = database::doSelectOne($sql);
    return $result;
  }
  
  public function insert($options=array())
  {
    $sql = "INSERT INTO  SET "; 
    foreach($options as $key=>$value){
      $sql .= $key."='".$value."', ";
    }    
    $sql = rtrim($sql, ", ");
	  
    $result = database::doInsert($sql);
    return $result;
  }
  
  public function update($Id, $options=array())
  {
    $sql = "UPDATE  SET "; 
    foreach($options as $key=>$value){
      $sql .= $key."='".$value."', ";
    }    
    $sql = rtrim($sql, ", ");
    $sql .= "WHERE _id =".$Id;
	  
    $result = database::doUpdate($sql);
    return $result;
  }
  
  public function delete($Id, $options=array())
  {
    $sql = "DELETE FROM 
            WHERE _id = ".$Id; 
    
	  $result = database::doDelete($sql);
    return $result;
  }
}