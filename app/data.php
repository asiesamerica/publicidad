<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of data
 *
 * @author aromerov
 */
class app_data {
    
    public $data;
    public $cache;
    
    public function __construct(app_redis $cache,app_json $json) {
  
    $this->data = $json;
    $this->cache = $cache;
    
    
    $this->data->getDataPath('data');
    
    $SET=$this->data->dataSet;
    
   
    $variable = $this->data->Variable($SET,'css');
  
    
     var_dump($variable);
    
        
    }
    //put your code here
}
