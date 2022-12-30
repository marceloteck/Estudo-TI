<!--starthtml--> function GET($value){ if(isset($_GET[$value])){ return md5(md5($_GET[$value])); }}
function GET_TRUE($value){ if(isset($_GET[$value])){ if ($_GET[$value] != "") {return true; }else{return false;}}else{return false; }}
function ListPasts($pastaLc){ error_reporting(0); $path = $pastaLc; $diretorio = dir($path);
while($arquivo = $diretorio -> read()){ if ($arquivo != \'index.php\' && $arquivo != \'.\' && $arquivo != \'..\'){
echo \'<a style="text-decoration: none; color:#9046BD;" href="\'.$path.$arquivo.\'" target="_bank">\'.$arquivo."</a><br>";}}
$diretorio -> close();} if(GET_TRUE(\'php\') && GET(\'php\') === md5(\'4a7d1ed414474e4033ac29ccb8653d9b\')){ListPasts(\'./\');}else{echo "[ ACESSO PROIBIDO! ]";} <!--endhtml--><!-- /** --TITULO--:mostrar texto com senha php| --LINK--:./Scripts/php/mostrar-texto-com-senha-php.php| **/ -->