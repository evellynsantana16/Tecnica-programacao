<?
class Fornecedor {
    

   


public function __construct( private string $razaoSocial, private string $CNPJ, private string $celular ,private string $email ){


}

public function Exibir(){
      echo "Razão Social" . $this->razaoSocial  . "<br>";
    echo "CNPJ" . $this->CNPJ  ."<br>";
     echo "Celular"  .$this->celular  ."<br>";
    echo "Email" . $this->email;
}

}