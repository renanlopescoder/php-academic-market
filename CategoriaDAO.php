<?php
  function listaCategorias ($conexao) {
    $categorias       = array();
    $resultado        = mysqli_query($conexao,"select * from categorias");
    while ($categoria = mysqli_fetch_assoc($resultado)) {
    array_push ($categorias, $categoria);
    }
    return $categorias;
  };

  function insereCategoria ($conexao, $categoria) {
    $query = "insert into categorias set nome='{$categoria}'";
    return mysqli_query ($conexao,$query);
  };
