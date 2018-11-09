<?php
	
	// Namespace serve para evitar conflitos com nomes repetidos de classes
	// As barras separam os diretorios
	namespace SON\Xpto;

	class Exemplo {

	}

	// Pode ser utilizado dest a forma
	// As barras separa os diretorios
	$exemplo = new \SON\Xpto\Exemplo;





	//Também pode ser utilizado desta forma em outro arquivo
	//"use" instancia a namespace
	use SON\Xptoz\Exemplo;

	//Instancia a classe
	$exemplo2 = new Exemplo;