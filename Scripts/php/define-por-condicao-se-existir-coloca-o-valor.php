<!--starthtml--> function DEFINE_D($NvDEFINE, $condicao, $ValueDirlc){
    if (isset($condicao) or $condicao != "") {
      define($NvDEFINE, $ValueDirlc);
    }else{
      define($NvDEFINE, '');
    }
  } <!--endhtml--><!-- /** --TITULO--:define por condição se existir coloca o valor| --LINK--:./Scripts/php/define-por-condicao-se-existir-coloca-o-valor.php| **/ -->