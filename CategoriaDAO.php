<?php
  require_once("connection.php");
  require_once("model/Categoria.php");

  function listaCategorias ($conexao) {
    $categorias       = array();
    $resultado        = mysqli_query($conexao,"select * from categorias");
    while ($categoria_atual = mysqli_fetch_assoc($resultado)) {
      $categoria = new Categoria();
      $categoria->id = $categoria_atual['id'];
      $categoria->nome = $categoria_atual['nome'];
      array_push ($categorias, $categoria);
    }
    return $categorias;
  };

  function insereCategoria ($conexao, Categoria $categoria) {
    $categoria = mysqli_real_escape_string($conexao,$categoria);
    $query = "insert into categorias set nome='{$categoria->nome}'";
    return mysqli_query ($conexao,$query);
  };

  function alteraCategoria($conexao,Categoria $categoria){
    $nome = mysqli_real_escape_string($conexao,$categoria->nome);
    $query = "update categorias set nome='{$categoria->nome}' where id={$categoria->id}";
    return mysqli_query($conexao,$query);
  };

    function buscaCategoria($conexao, Categoria $categoria){
    $resultado = mysqli_query($conexao,"select * from categorias where id={$categoria->id}");
    $categoria_retorno   = mysqli_fetch_assoc($resultado);
    $categoria = new Categoria();
    $categoria->id = $categoria_retorno['id'];
    $categoria->nome = $categoria_retorno['nome'];

    return $categoria;
  };

function removeCategoria($conexao,$id){
    $query = "delete from categorias where id={$id}";
    return mysqli_query($conexao,$query);
  }
