<!--starthtml--> function dividirUrl($busca, $valor, $url){
      $url = explode('?', $url);
      $url = $url[0];
      $urlF = explode($busca, $url);
      if($valor == 0){ $valortotal = $valor;}
      else{ $valortotal = count($urlF)-$valor;}
      $final_url = $urlF[$valortotal];
      $final_url = str_replace('%20', ' ', $final_url);
      return $final_url;
  }
  function dividirUrlGET($busca, $valor, $url){
    $urlF = explode($busca, $url);
    if($valor == 0){ $valortotal = $valor;}
    else{ $valortotal = count($urlF)-$valor;}
    $final_url = $urlF[$valortotal];
    $final_url = str_replace('%20', ' ', $final_url);
    return $final_url;
} <!--endhtml--><!-- /** --TITULO--:dividir url e dividir url GET| --LINK--:./Scripts/php/dividir-url-e-dividir-url-get.php| **/ -->