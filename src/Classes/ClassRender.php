<?php
namespace Src\Classes;
class ClassRender{
    //Atributos
    private $Dir;
    private $Title;
    private $Descri;
    private $Keywords;

    function getDir(){return $this->Dir;}
    function getTitle(){return $this->Title;}
    function getDescri(){return $this->Descri;}
    function getKeywords(){return $this->Keywords;}
    function setDir($Dir){$this->Dir = $Dir;}
    function setTitle($Title){$this->Title = $Title;}
    function setDescri($Descri){$this->Descri = $Descri;}
    function setKeywords($Keywords){$this->Keywords = $Keywords;}

    //Metodo que renderiza o layout
    function renderLayout(){
            include_once(DIRREQ."app/view/layout.php");
    }
    //Metodo que renderiza o head
    function addHead(){
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Head.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Head.php");
        }
    }
    //Metodo que renderiza o header
    function addHeader(){
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/header.php")){
            include(DIRREQ."app/view/{$this->getDir()}/header.php");
        }
    }
    //Metodo que renderiza a main
    function addMain(){
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Main.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Main.php");
        }
    }
    //Metodo que renderiza o footer
    function addFooter(){
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Footer.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Footer.php");
        }
    }
}
