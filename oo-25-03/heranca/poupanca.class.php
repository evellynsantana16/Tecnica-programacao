<?php
class Poupanca extends Conta
// levam parametros, n atributos, nem private/public, só 
 {
    public function __construct(
        private int $aniversario = 0, 
        int $banco,
        string $agencia,
        string $conta,
        float $saldo
        )

        
        
        {
            parent:: __construct(
            $banco,
            $agencia,
            $conta,
            $saldo
            );
        }
}