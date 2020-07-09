<?php

namespace Alura;

class Contato{
    private $email;
    private $endereco;
    private $cep;
    private $telefone;

    public function __construct(string $email, string $endereco, string $cep, string $telefone){

        if ($this->validaEmail($email)){
            $this->email = $email;
        }else{
            $this->email = "Email Invalido";
        }
        $this->endereco = $endereco;
        $this->cep = $cep;

        if($this->validaTelefone($telefone)){
            $this->telefone = $telefone;
        }else{
            $this->telefone = "Telefone invalido";
        }

    }

    public function getUsuario(): string {
        $posicaoArroba = strpos($this->email, "@");

        if ($posicaoArroba === false){
            return "Usuario Inválido";
        }
        return substr($this->email, 0, $posicaoArroba);
    }
    private function validaEmail(string $email){
        return filter_var($email,FILTER_VALIDATE_EMAIL);
    }
    private function validaTelefone(string $telefone): int{
        return preg_match('/^[0-9]{4}-[0-9]{4}$/',$telefone,$saidaEncontrados);
    }

    public function  getEmail(): string{
        return $this->email;
    }

    public function getEndereco(): string{
        return $this->endereco;
    }

    public function  getCep(): string {
        return $this->cep;
    }
    public function getTelefone(): string{
        return $this->telefone;
    }
}
