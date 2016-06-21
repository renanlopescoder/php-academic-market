<?php
  function insereProduto($conexao, $nome,$preco,$descricao,$quantidade,$estoque_minimo,$categoria_id,$usado){
    $query = "insert into produtos (nome,preco,descricao,quantidade,estoque_minimo,categoria_id,usado) values('{$nome}',{$preco},'{$descricao}','{$quantidade}','{$estoque_minimo}',{$categoria_id},{$usado});";
    return mysqli_query($conexao,$query);
  };

  function listaProdutos($conexao){
    $produtos      = array();
    $resultado     = mysqli_query($conexao,"select p.*,c.nome as categoria from produtos as p join categorias as c on c.id=p.categoria_id");
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);
    }
    return $produtos;
  };

  function alteraProduto($conexao,$nome,$preco,$descricao,$quantidade,$estoque_minimo,$categoria_id,$usado,$id){
    $query = "update produtos set nome='{$nome}',preco={$preco},descricao='{$descricao}',quantidade='{$quantidade}',estoque_minimo='{$estoque_minimo}',categoria_id={$categoria_id},usado={$usado} where id={$id}";
    return mysqli_query($conexao,$query);
  };


  function buscaProduto($conexao,$id){
    $resultado = mysqli_query($conexao,"select * from produtos where id=${id}");
    $produto   = mysqli_fetch_assoc($resultado);
    return $produto;
  };

  function removeProduto($conexao,$id){
    $query = "delete from produtos where id={$id}";
    return mysqli_query($conexao,$query);
  }
