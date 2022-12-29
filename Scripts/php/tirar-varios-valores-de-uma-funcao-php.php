<!--starthtml--> function fls($f){
    switch ($f) {
        case 1: return array(PROJETO, 'index.php', 'texto index');
        case 2: return array(PROJETO,'.htacces', 'texto htacces');
    }
}

for($i = 1; $i <=2; $i++){ 
//buscando 3 valores da função fls();
    list($folder,$file,$text) = fls($i);
    New_FilesInstall([$folder],[$file],[$text]); 
    } <!--endhtml--><!-- /** --TITULO--:tirar varios valores de uma função php| --LINK--:./Scripts/php/tirar-varios-valores-de-uma-funcao-php.php| **/ -->