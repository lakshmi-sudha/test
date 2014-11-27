<?php
/**
 * Author : Abhijth Shetty
 * Date   : 26-11-2014
 * Desc   : This is a controller file for testCode Action 
 */
class testCodeAction extends baseAction{
  
  public function execute()
  {
    //$anyLib = autoload::loadLibrary('queryLib', 'any');
    $result = array();
    
    $this->setResponse('SUCCESS');
    return $result;
  }  
}