<?php

namespace Controller;



Class MessageController extends BaseController{
    public function  postMessage(){
    
        
        $this->show('message/message-composer');
    }
} 