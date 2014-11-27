<?php
class userTest{
  //Singleton
  protected static $objInstance;

  public static function get(){
    if(!isset(self::$objInstance)){
      $class=__CLASS__;
      self::$objInstance=new $class;
    }
    return self::$objInstance;
  }
  
  public function getUserTestList($options=array())
  {
    $sql = "SELECT *
            FROM user_test";
    
    $result = database::doSelect($sql);
    return $result;
  }
  
  public function getUserTestDetail($userTestId, $options=array())
  {
    $sql = "SELECT *
            FROM user_test
            WHERE user_test_id=".$userTestId;
    
    $result = database::doSelectOne($sql);
    return $result;
  }
  
  public function insertUserTest($options=array())
  {
    $sql = "INSERT INTO user_test SET "; 
    foreach($options as $key=>$value){
      $sql .= $key."='".$value."', ";
    }    
    $sql = rtrim($sql, ", ");
	  
    $result = database::doInsert($sql);
    return $result;
  }
  
  public function updateUserTest($userTestId, $options=array())
  {
    $sql = "UPDATE user_test SET "; 
    foreach($options as $key=>$value){
      $sql .= $key."='".$value."', ";
    }    
    $sql = rtrim($sql, ", ");
    $sql .= "WHERE user_test_id =".$userTestId;
	  
    $result = database::doUpdate($sql);
    return $result;
  }
  
  public function deleteUserTest($userTestId, $options=array())
  {
    $sql = "DELETE FROM user_test
            WHERE user_test_id = ".$userTestId; 
    
	  $result = database::doDelete($sql);
    return $result;
  }
}