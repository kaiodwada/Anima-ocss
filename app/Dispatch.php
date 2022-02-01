<?php

namespace App;

use Src\Classes\ClassRoutes;

class Dispatch extends ClassRoutes
{

    #Atributos
    private $Method;
    private $Param = [];
    private $Obj;

    protected function getMethod()
    {
        return $this->Method;
    }
    public function setMethod($Method)
    {
        return $this->Method = $Method;
    }
    protected  function getParam()
    {
        return $this->Param;
    }
    public function setParam($Param)
    {
        return $this->Param = $Param;
    }


    #Método Construtor
    public function __construct()
    {
        self::addController();
    }

    #Método de adição de controller
    public function addController()
    {
        $RotaController = $this->getRota();
        $NameS = "App\\Controller\\{$RotaController}";
        $this->Obj = new $NameS;
        if (isset($this->parseUrl()[1])) {
            self::addMethod();
        }
    }

    #Método de adição de método do controller
    private function addMethod()
    {
        if (method_exists($this->Obj, $this->parseUrl()[1])) {
            $this->setMethod("{$this->parseurl()[1]}");
            self::addParam();
            call_user_func_array([$this->Obj, $this->getMethod()], $this->getParam());
        }
    }

    #Método de adição de parâmetros do controller
    private function addParam()
    {
        $CountArray = count($this->parseUrl());
        if($CountArray > 2){
           foreach($this->parseUrl() as $key => $Value){
            if($key > 1){
                $this->setParam($this->Param += [$key => $Value]);
            }
           }
        }
    }
}
