<?php

class Usuario{
private int $id_usuario; 
private string $nome;
private string $email;
private string $senha;
private string $perfil;


public function getIdUsuario(): int {
    return $this->id_usuario;
}

public function setIdUsuario(int $id): void {
  $this->id_usuario = $id;
}



public function getNome(): string {
    return $this->nome;
}

public function setNome(string $nome): void {
     $this->nome = $nome;
}



public function getEmail(): string {
    return $this->email;
}

public function setEmail(string $email): void {
     $this->email = $email;
}



public function getSenha(): string {
    return $this->senha;
}

public function setSenha(string $senha): void {
     $this->senha = $senha;
}


public function getPerfil(): string {
    return $this->perfil;
}

public function setPerfil(string $perfil): void {
     $this->perfil = $perfil;
}





}