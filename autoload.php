<?php

spl_autoload_register(
    function (string $namespaceClasse): void{
        $diretorio = "/src";
        $diretorio_classe = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClasse);
        @include_once getcwd() . $diretorio . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php";
    }
);
