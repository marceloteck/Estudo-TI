<!--starthtml--> function FormData($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} <!--endhtml--><!-- /** --TITULO--:corrigir segurança de PHP function POST| --LINK--:./Scripts/php/corrigir-seguranca-de-php-function-post.php| **/ -->