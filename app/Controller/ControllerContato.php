<?php
namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
class ControllerContato extends ClassRender implements InterfaceView{
    public function __construct()
    {
      $this->setTitle("Pagina Contato");
      $this->setDescri("Faça contato conosco");
      $this->setKeywords("contato,telefone,email");
      $this->setDir("contato");
      $this->renderLayout();
    }
}