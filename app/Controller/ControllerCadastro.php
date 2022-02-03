<?php

namespace App\Controller;

use App\Model\ClassCadastro;
use Src\Classes\ClassRender;

class ControllerCadastro extends ClassCadastro
{
  protected $nome;
  protected $sexo;
  protected $cidade;
  public function __construct()
  {
    $Render = new ClassRender();
    $Render->setTitle("Pagina de Cadastro");
    $Render->setDescri("Faça seu cadastro");
    $Render->setKeywords("contato,telefone,email");
    $Render->setDir("cadastro");
    $Render->renderLayout();
  }
  public function recVariaveis()
  {
    if (isset($_POST['nome'])) {
      $this->nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if (isset($_POST['sexo'])) {
      $this->sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if (isset($_POST['cidade'])) {
      $this->cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
    }
  }
  public function cadastrar()
  {
    $this->recVariaveis();
    $this->cadastroClientes($this->nome,$this->sexo,$this->cidade);
    echo "Cadastro efetuado";
  }
}
