<!--starthtml--> //php
function my_file_get_contents( $site_url ){
	$ch = curl_init();
	$timeout = 5; // set to zero for no timeout
	curl_setopt ($ch, CURLOPT_URL, $site_url);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	ob_start();
	curl_exec($ch);
	curl_close($ch);
	$file_contents = ob_get_contents();
	ob_end_clean();
	return $file_contents;
	} <!--endhtml--><!-- /** --TITULO--:pegar conteudo de site ou pagina web my_file_get_contents| --LINK--:./Scripts/php/pegar-conteudo-de-site-ou-pagina-web-my_file_get_contents.php| **/ -->