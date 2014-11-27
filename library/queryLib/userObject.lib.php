<?php
class userObject{
  //Singleton
  protected static $objInstance;

  public static function get(){
    if(!isset(self::$objInstance)){
      $class=__CLASS__;
      self::$objInstance=new $class;
    }
    return self::$objInstance;
  }
  
  public function getUserObjectList($options=array())
  {
    $sql = "SELECT *
            FROM user_object";
    
    $result = database::doSelect($sql);
    return $result;
  }
  
  public function getUserObjectDetail($userObjectId, $options=array())
  {
    $sql = "SELECT *
            FROM user_object
            WHERE user_object_id=".$userObjectId;
    
    $result = database::doSelectOne($sql);
    return $result;
  }
  
  public function insertUserObject($options=array())
  {
    $sql = "INSERT INTO user_object SET "; 
    foreach($options as $key=>$value){
      $sql .= $key."='".$value."', ";
    }    
    $sql = rtrim($sql, ", ");
	  
    $result = database::doInsert($sql);
    return $result;
  }
  
  public function updateUserObject($userObjectId, $options=array())
  {
    $sql = "UPDATE user_object SET "; 
    foreach($options as $key=>$value){
      $sql .= $key."='".$value."', ";
    }    
    $sql = rtrim($sql, ", ");
    $sql .= "WHERE user_object_id =".$userObjectId;
	  
    $result = database::doUpdate($sql);
    return $result;
  }
  
  public function deleteUserObject($userObjectId, $options=array())
  {
    $sql = "DELETE FROM user_object
            WHERE user_object_id = ".$userObjectId; 
    
	  $result = database::doDelete($sql);
    return $result;
  }
}