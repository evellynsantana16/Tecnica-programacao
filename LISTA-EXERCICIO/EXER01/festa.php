<?php
class Festa {
    public function __construct(
       private string $data_contrato = "",
       private  string $data_festa = "",
       private float $valor = 0,

  private ?Cliente $cliente = null,
    private ?Contratado $contratado = null,
    private ?Decoracao $decoracao = null

    ){}

    // GETS

public function getDataContrato(): string{
    return $this->data_contrato;
}

public function getDataFesta(): string{
    return $this->data_festa;
}

public function getValor(): float{
    return $this->valor;
}

public function getCliente(): ?Cliente{
    return $this->cliente;
}

public function getContratado(): ?Contratado{
    return $this->contratado;
}

public function getDecoracao(): ?Decoracao{
    return $this->decoracao;
}


// SETS

public function setDataContrato(string $data_contrato): void{
    $this->data_contrato = $data_contrato;
}

public function setDataFesta(string $data_festa): void{
    $this->data_festa = $data_festa;
}

public function setValor(float $valor): void{
    $this->valor = $valor;
}

public function setCliente(?Cliente $cliente): void{
    $this->cliente = $cliente;
}

public function setContratado(?Contratado $contratado): void{
    $this->contratado = $contratado;
}

public function setDecoracao(?Decoracao $decoracao): void{
    $this->decoracao = $decoracao;
}

    // GETS de objetos que compoem a festa, facilita o acesso a esses objetos 

    public function getCliente(): ?Cliente{
        return $this->cliente;
    }

    public function getContratado(): ?Contratado{
        return $this->contratado;
    }

    public function getDecoracao(): ?Decoracao{
        return $this->decoracao;
    }

    // SETS 

    public function setCliente(?Cliente $cliente): void{
        $this->cliente = $cliente;
    }

    public function setContratado(?Contratado $contratado): void{
        $this->contratado = $contratado;
    }

    public function setDecoracao(?Decoracao $decoracao): void{
        $this->decoracao = $decoracao;
    }
}