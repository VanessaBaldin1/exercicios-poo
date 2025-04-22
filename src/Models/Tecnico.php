<?php 
class Tecnico extends Livro{
  private Formato $formato;

  //Método Construtor
  public function __construct(string $titulo, string $autor, Formato $formato)
  {
    parent::__construct($titulo, $autor);


    $this->setFormato($formato);
  }
  private function setFormato(Formato $formato): void
  {
    $this->formato = $formato;
  }


  public function getFormato(): Formato
  {
    return $this->formato;
  }


}


