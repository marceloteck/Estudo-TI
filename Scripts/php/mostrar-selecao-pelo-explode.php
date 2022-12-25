<!--starthtml--> //php
function ExplodeURL($buscaIn, $buscaFn, $N_in, $N_f, $URL)
{
   //ExplodeURL(Busca Inicial, Busca Final, numero inicial, numero final, link pra buscar)
   $buscando = explode($buscaIn, $URL);
   //buscar daqui pra frente na busca
   $buscando = $buscando[$N_in];
   //Buscar daqui pra trás
   $buscando = explode($buscaFn, $buscando);
   $buscando = $buscando[$N_f];
   return $buscando;
 // print_r($buscando);
} <!--endhtml--><!-- /** --TITULO--:mostrar seleção pelo explode| --LINK--:./Scripts/php/mostrar-selecao-pelo-explode.php| **/ -->