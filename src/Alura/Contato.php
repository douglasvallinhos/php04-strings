<?php

namespace Alura;

class Contato{
    private $email;
    private $endereco;
    private $cep;

    public function __construct(string $email, string $endereco, string $cep){

        if ($this->validaEmail($email)){
            $this->email = $email;
        }else{
            $this->email = "Email Invalido";
        }
        $this->endereco = $endereco;
        $this->cep = $cep;
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

    public function  getEmail(): string{
        return $this->email;
    }

    public function getEndereco(): string{
        return $this->endereco;
    }

    public function  getCep(): string {
        return $this->cep;
    }
}
