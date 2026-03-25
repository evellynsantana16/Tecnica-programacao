<?php
class Conta {
    public function __construct(
        protected int $banco = 0,
        protected string $agencia = "",
        protected string $conta = "",
        protected float $saldo = 0.00 ){}

        public function getBanco(): int {
            return $this->banco;
        }
    
        public function setBanco(int $banco): void {
                $this->banco = $banco;
            }



            public function getAgencia(): string {
                return $this->agencia;
            }
        
            public function setAgencia(string $agencia): void {
                    $this->agencia = $agencia;
                }

        
                public function getConta(): string {
                    return $this->conta;
                }
            
                public function setConta(string $conta): void {
                        $this->conta = $conta;
                    }
    


                    public function getSaldo(): string {
                        return $this->saldo;
                    }
                
                    public function setSaldo(string $saldo): void {
                            $this->saldo = $saldo;
                        }



                        public function Depositar(float $valor){
                            if ($valor <= 0)
                            {
                                echo "Ta pobrinho pra depositar algo";
                                return;
                            }
        
                            $this -> saldo =+ $valor; 
                            return $this->getSaldo();
                        }//fi depositar

                        public function sacar($valor){
                            $this->saldo -= $valor;
                        }
                }//fim classe
    
                





?>