<!--starthtml--> //php
function limitChars($text, $limit)
{
 $join = array();
 $ArrayString = explode(" ", $text);

    if ($limit > count($ArrayString)) {
        $limit = count($ArrayString) / 2;   
    }

    foreach ($ArrayString as $key => $word) {
              $join[] = $word;
           if ($key == $limit) {
               break;
         }
    }
    return implode(" ", $join);

} <!--endhtml--><!-- /** --TITULO--:limitar texto| --LINK--:./Scripts/php/limitar-texto.php| **/ -->