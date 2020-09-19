<?php
# This is MyController

class MyController extends DController{
    
    public function __construct()
    {
        //parent::__construct();
    }
    
    public function jahan($param){
        echo "I am form jahan $param";
    }

}
