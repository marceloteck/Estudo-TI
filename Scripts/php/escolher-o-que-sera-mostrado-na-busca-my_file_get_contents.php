<!--starthtml--> function ApiScript($Url, $tipo){ //tipo: css, js, html, php
	$Script = my_file_get_contents($Url);
		switch ($tipo) {
			case 'css':
				$Script = explode('CONTEUDO', $Script);
				$Script = explode('CONTEUDO', $Script[1]);
				$Script = $Script[0];
				return $Script;
				break;
			case 'js':
				$Script = explode('CONTEUDO', $Script);
				$Script = explode('CONTEUDO', $Script[1]);
				$Script = $Script[0];
				return $Script;
				break;
			case 'html':
				$Script = explode('CONTEUDO', $Script);
				$Script = explode('CONTEUDO', $Script[1]);
				$Script = $Script[0];
				return $Script;
				break;
			default:
				return $Script;
				break;
			
		}
	} <!--endhtml--><!-- /** --TITULO--:escolher o que sera mostrado na busca my_file_get_contents| --LINK--:./Scripts/php/escolher-o-que-sera-mostrado-na-busca-my_file_get_contents.php| **/ -->