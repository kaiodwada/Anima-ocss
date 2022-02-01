<?php
//rgb(59, 59, 65)
namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
class ControllerHome extends ClassRender implements InterfaceView{
    public function __construct()
    {
      $this->setTitle("Pagina Inicial");
      $this->setDescri("Esse eo site mvc");
      $this->setKeywords("Bananinha, curso mvc");
      $this->setDir("home");
      $this->renderLayout();
    }
}