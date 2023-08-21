<?php

class AgenceBancaire{
    private $name;
    private $adress;
    private $account = array();

    public function __construct($name , $adress){
        $this ->name = $name;
        $this ->adress =$adress;
    }
        public function addAccount($account){
            array_push($this ->account,$account);

        }
        public function getAccount(){
            return $this ->account;
        }
    }

class co
  