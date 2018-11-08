<?php
	
	// Namespace serve para evitar conflitos com nomes repetidos de classes
	namespace SON\Xpto\Exemplo;

	class Exemplo {

	}

	// Pode ser utilizado desta forma
	$exemplo = new \SON\Xpto\Exemplo;




	//Também pode ser utilizado desta forma em outro arquivo
	//"use" instancia a namespace
	use SON\Xptoz\Exemplo;

	//Instancia a classe
	$exemplo2 = new Exemplo;