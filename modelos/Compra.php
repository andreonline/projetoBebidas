<!DOCTYPE html>
<?php

class Compra{
    private $id;
    private $usuario;
    private $fornecedor;
    private $data;
    
    public Compra($id, $usuario, $fornecedor, $data){
        $this.id = $id;
        $this.usuario = $usuario;
        $this.fornecedor = $fornecedor;
        $this.data = $data;
    }
}
?>