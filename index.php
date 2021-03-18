<?php
	
	header('Access-Control-Allow-Origin: *');

	$data = [

		[
			'imagem'=>'https://blog.dankicode.com/wp-content/uploads/2020/12/desenvolvedor-full-stack-em-2021.png',
			'conteudo'=>'Desde o início da era digital, mais e mais empresas e organizações estão criando sua presença online exclusiva por meio de seus sites.

			Naturalmente, o domínio do desenvolvimento web está testemunhando um crescimento como nunca antes, e com certeza a demanda por desenvolvedores Full Stack experientes e qualificados aumentou consideravelmente.'
		],

		[
			'imagem'=>'https://blog.dankicode.com/wp-content/uploads/2020/06/css-inteligente.jpg',
			'conteudo'=>'Desde o início da era digital, mais e mais empresas e organizações estão criando sua presença online exclusiva por meio de seus sites.

			Naturalmente, o domínio do desenvolvimento web está testemunhando um crescimento como nunca antes, e com certeza a demanda por desenvolvedores Full Stack experientes e qualificados aumentou consideravelmente.'
		],

		[
			'imagem'=>'https://blog.dankicode.com/wp-content/uploads/2020/06/monetiza%C3%A7%C3%A3o-de-sites.png',
			'conteudo'=>'Desde o início da era digital, mais e mais empresas e organizações estão criando sua presença online exclusiva por meio de seus sites.

			Naturalmente, o domínio do desenvolvimento web está testemunhando um crescimento como nunca antes, e com certeza a demanda por desenvolvedores Full Stack experientes e qualificados aumentou consideravelmente.'
		],

		[
			'imagem'=>'https://blog.dankicode.com/wp-content/uploads/2020/06/monetiza%C3%A7%C3%A3o-de-sites.png',
			'conteudo'=>'Desde o início da era digital, mais e mais empresas e organizações estão criando sua presença online exclusiva por meio de seus sites.

			Naturalmente, o domínio do desenvolvimento web está testemunhando um crescimento como nunca antes, e com certeza a demanda por desenvolvedores Full Stack experientes e qualificados aumentou consideravelmente.'
		]


	];

	die(json_encode($data));
?>