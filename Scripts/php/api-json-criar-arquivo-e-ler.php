<!--starthtml--> #region NOVO JSON
$NameTabela = "login";
//CRIAR PRIMEIRO ARQQUIVO JSON
//modelo de criação de json
/*
$json_str = '{"'.$NameTabela.'": '.
    '[{"user":"nanosistecck", "password":12456, "name": "marcelo"},'.
    '{"user":"martielo", "password":1403, "name": "maria"},'.
    '{"user":"mady", "password":2256, "name": "Madalena"}'.
    ']}';
file_put_contents('tabella.json', $json_str);
$json_str = '{"infoTab": [{"coluna":"name"},{"coluna":"user"},{"coluna": "password"},{"coluna": "info"}]}';
file_put_contents('info.json', $json_str);
*/
#endregion


function Api_BD($json_str, $NameTabela, $colun, $busca){
    $jsonObj = json_decode($json_str);
    $tab = $jsonObj->$NameTabela;
    $value = "";
        foreach ( $tab as $e )
        {
            if($busca != ""){
                $var = $e->$colun;
                if($var  === $busca){
                    $value .= "\n". $e->$colun;  
                }
            }else{
                $value .= "\n". $e->$colun;  
            }
        }
        return explode("\n", $value);
}

error_reporting(0);

$json_str = file_get_contents('tabella.json');
$tab = file_get_contents('info.json');

$user       = Api_BD($json_str, $NameTabela, 'user','');
$password   = Api_BD($json_str, $NameTabela, 'password','');
$name       = Api_BD($json_str, $NameTabela, 'name','');
$info       = Api_BD($json_str, $NameTabela, 'info','');

$cols = Api_BD($tab, 'infoTab', 'coluna','');



$cln  = ""; $tdTr = "";
for($i = 1; $i<=count($cols)-1; $i++){
    $cln .=  "<th>$cols[$i]</th>\n";
}
for ($a = 1; $a <= count($user) - 1; $a++) {
     $tdTr .= '<tr style="border:1px solid #000;">
     <td style="border:1px solid #000;">' . $user[$a] . '</td>
     <td style="border:1px solid #000;">' . $password[$a] . '</td>
     <td style="border:1px solid #000;">' . $name[$a] . '</td>
     <td style="border:1px solid #000;">' . $info[$a] . '</td>
     </tr>';
 }

echo '
<table style="border:1px solid #000;">
<tr style="border:1px solid #000;">
'.$cln.'
</tr>
'.$tdTr.'
</table>
'; <!--endhtml--><!-- /** --TITULO--:api json criar arquivo e ler| --LINK--:./Scripts/php/api-json-criar-arquivo-e-ler.php| **/ -->