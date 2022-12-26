<!--starthtml--> //php
function includeIFExist($value)
{
    if (file_exists($value)) {
        include $value;
    } 
}
includeIFExist('Scripts/php/condional-para-o-codigo.php'); <!--endhtml--><!-- /** --TITULO--:include se existir arquivo| --LINK--:./Scripts/php/include-se-existir-arquivo.php| **/ -->