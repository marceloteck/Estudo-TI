<!--starthtml--> <! -- // O código fonte no navegador está correto
//retirar os traços da segunda opção com o replace do editor
function corrigirAcentos($text){
$ltrsAcnts = array("á","à","ã","â","ä","Á","À","Ã","Â","Ä","é","è","ê","ë","É","È","Ê","Ë","í","ì","î","ï","Í","Ì","Î","Ï","ó","ò","õ","ô","ö","Ó","Ò","Õ","Ô","Ö","ú","ù","û","ü","Ú","Ù","Û","Ü","ñ","Ñ","ç","Ç");
$ltrsSnAcnts = array("&-aacute;","&-agrave;","&-atilde;","&-acirc;","&-auml;","&-Aacute;","&-Agrave;","&-Atilde;","&-Acirc;","&-Auml;","&-eacute;","&-egrave;","&-ecirc;","&-euml;","&-Eacute;","&-Egrave;","&-Ecirc;","&-Euml;","&-iacute;","&-igrave;","&-icirc;","&-iuml;","&-Iacute;","&-Igrave;","&-Icirc;","&-Iuml;","&-oacute;","&-ograve;","&-otilde;","&-ocirc;","&-ouml;","&-Oacute;","&-Ograve;","&-Otilde;","&-Ocirc;","&-Ouml;","&-uacute;","&-ugrave;","&-ucirc;","&-uuml;","&-Uacute;","&-Ugrave;","&-Ucirc;","&-Uuml;","&-ntilde;","&-Ntilde;","&-ccedil;","&-Ccedil;");
$novoconteudo = strtr($text, array_combine($ltrsAcnts, $ltrsSnAcnts));
echo $novoconteudo;
}
corrigirAcentos('é testé do amãnhecê aquí é pontó de átênção');


 --> <!--endhtml--><!-- /** --TITULO--:funcao corrigir acentos em php| --LINK--:./Scripts/php/funcao-corrigir-acentos-em-php.php| **/ -->