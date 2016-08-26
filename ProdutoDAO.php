<?php
  require_once("connection.php");
  require_once("model/Produto.php");
  require_once("model/Categoria.php");
  
  function insereProduto($conexao,Produto $produto){
    $nome = mysqli_real_escape_string($conexao,$produto->nome);
    $descricao = mysqli_real_escape_string($conexao,$produto->descricao);
    $query = "insert into produtos (nome,preco,descricao,quantidade,estoque_minimo,categoria_id,usado) values('{$produto->nome}',{$produto->preco},'{$produto->descricao}','{$produto->quantidade}','{$produto->estoque_minimo}',{$produto->categoria->id},{$produto->usado});";
    return mysqli_query($conexao,$query);
  };

  function listaProdutos($conexao){
    $produtos      = array();
    $resultado     = mysqli_query($conexao,"select p.*,c.nome as categoria from produtos as p join categorias as c on c.id=p.categoria_id");
    while($produto_atual = mysqli_fetch_assoc($resultado)){
      $produto = new Produto();
      $categoria = new Categoria();
      $categoria->nome         = $produto_atual['categoria'];
      $produto->id             = $produto_atual['id'];
      $produto->nome           = $produto_atual['nome'];
      $produto->preco          = $produto_atual['preco'];
      $produto->descricao      = $produto_atual['descricao'];
      $produto->quantidade     = $produto_atual['quantidade'];
      $produto->estoque_minimo = $produto_atual['estoque_minimo'];
      $produto->categoria      = $categoria;
      $produto->usado          = $produto_atual['usado'];
        array_push($produtos, $produto);
    }
    return $produtos;
  };

  function alteraProduto($conexao,Produto $produto){
    $nome = mysqli_real_escape_string($conexao,$produto->nome);
    $descricao = mysqli_real_escape_string($conexao,$produto->descricao);
    $query = "update produtos set nome='{$produto->nome}',preco={$produto->preco},descricao='{$produto->descricao}',quantidade='{$produto->quantidade}',estoque_minimo='{$produto->estoque_minimo}',categoria_id={$produto->categoria->id},usado={$produto->usado} where id={$produto->id}";
    return mysqli_query($conexao,$query);
  };

  function buscaProduto($conexao,$produto){
    $produtos      = array();
    $resultado     = mysqli_query($conexao,"select * from produtos where id='{$produto->id}'");
    $produto_atual   = mysqli_fetch_assoc($resultado);
      $produto = new Produto();
      $categoria = new Categoria();
      $categoria->nome         = $produto_atual['categoria'];
      $produto->id             = $produto_atual['id'];
      $produto->nome           = $produto_atual['nome'];
      $produto->preco          = $produto_atual['preco'];
      $produto->descricao      = $produto_atual['descricao'];
      $produto->quantidade     = $produto_atual['quantidade'];
      $produto->estoque_minimo = $produto_atual['estoque_minimo'];
      $produto->categoria      = $categoria;
      $produto->usado          = $produto_atual['usado'];

    return $produto;
  };

  function removeProduto($conexao,$id){
    $query = "delete from produtos where id={$id}";
    return mysqli_query($conexao,$query);
  }
