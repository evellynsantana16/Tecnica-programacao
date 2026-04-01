<?php

class CategoriaDao extends Conexao {
    public function __construct(){
        parent :: __construct();
    }

    public function Inserir (){

     }

     public function Alterar(){

     }

     public function Excluir(){
        
     }

     public function BuscarTodas(){
      $sql = "SELECT * FROM categorias"; 

      try{
        //preparar a frase sql para evitar injeção SQL
    $stm = $this->db->prepare($sql);
    //executar
    $stm->execute();
    //fechar a conexão
    $this->db = null;
    return "PROBLEMA AO BUSCAR AS CATEGORIAS";;
        
        }
        catch(PDOException $e)
        {

      
        }
     
    }

     public function BuscarUma(){
        
     }



}