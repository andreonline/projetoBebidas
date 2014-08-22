<!DOCTYPE html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Fornecedor{
    
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $endereco;
    private $cnpj;
    private $descricao;
    
    public Fornecedor($id, $nome, $email, $senha, $endereco, $cnpj,  $descricao ){
        $this.id = $id;
        $this.nome = $nome;
        $this.email = $email;
        $this.senha = $senha;
        $this.endereco = $endereco;
        $this.cnpj = $cnpj;
        $this.descricao = $descricao;
    }
}
?>
