<?php

namespace Alura;

class Usuario{
    private $nome;
    private $sobrenome;
    private $senha;

    public function __construct(string $nome, string $senha){
        $nomeSobrenome = explode(" ", $nome, 2);

        if($nomeSobrenome[0] === ""){
            $this->nome = "Nome Inválido";
        }else{
            $this->nome = $nomeSobrenome[0];
        }

        if($nomeSobrenome[1] === null){
            $this->sobrenome = "Sobrenome Inválido";
        }else{
            $this->sobrenome = $nomeSobrenome[1];
        }

        $this->validaSenha($senha);

    }


    public function getNome():string{
        return $this->nome;
    }

    public function getSobrenome():string{
        return $this->sobrenome;
    }

    private function validaSenha(string $senha):void{
        $numeroCaractere = strlen(trim($senha));
        if ($numeroCaractere >= 6){
            $this->senha = $senha;
        }else{
            $this->senha = "Senha Invalida";
        }
    }

    public function getSenha(): string{
        return $this->senha;
    }




}
