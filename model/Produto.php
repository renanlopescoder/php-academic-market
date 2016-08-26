<?php 
	class Produto{
		public $id;
		public $nome;
		public $preco;
		public $descricao;
		public $quantidade;
		public $estoque_minimo;
		public $categoria_id;
		public $usado;

		public function valorComDesconto($desconto){
			if($desconto > 0 && $desconto < 0.5){
				$this->preco = $this->preco - ($this->preco * $desconto);
				return $this->preco;
			}else{
				return $this->preco;
			}
		}
	}
?>
