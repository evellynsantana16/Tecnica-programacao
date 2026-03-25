<?php 
class Corrente extends Conta {
    public function __construct(
        private float $limite = 0.00,
        private int $aniversario = 0,
        int $banco = 0,
        string $agencia = "",
        string $conta = "",
        float $saldo = 0.00
    ) {
        parent::__construct(
            $banco,
            $agencia,
            $conta,
            $saldo
        );
    }

    public function getLimite(): float {
        return $this->limite;
    }

    public function setLimite(float $limite): void {
        $this->limite = $limite;
    }

    public function sacar($valor){
        if($this->saldo + $this->limite >= $valor){
            parent :: sacar($valor);

        }
    }
}// fim classe