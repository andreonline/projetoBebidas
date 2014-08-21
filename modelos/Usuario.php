<!DOCTYPE html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Usuario{
    
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $endereco;
    
    public Usuario($id, $nome, $email, $senha, $endereco){
        $this.id = $id;
        $this.nome = $nome;
        $this.email = $email;
        $this.senha = $senha;
        $this.endereco = $endereco;
    }
    
}

