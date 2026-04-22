<?php

class Cliente{
    public $clientes = array(
        array("Silvio Paulo", "555.666.444-11", "silviopaulogmail.com"),

        array("Maria Lurdes", "777.999.333-23", "marialurdesgmail.com"),

        array("Taina Souza", "456.768.234-09", "tainasouzagmail.com")
    
        
    );

    public function buscarPorId($id) {
        $sql = "SELECT * FROM clientes WHERE id = $id";
        return $this->conn->query($sql)->fetch_assoc();
    }
}


?>