<!--starthtml--> //se tiver erros no PHP ele não funciona
function IncludeDir($pastaDir){						
	        $path = $pastaDir;						
			foreach(glob($path.'/*.php') as $arquivo){
                if($arquivo != "index.php"){
                    require_once $arquivo;
                }  
            }
		}
		IncludeDir("./Assets/php");
 <!--endhtml--><!-- /** --TITULO--:Include de varios arquivos ao mesmo tempo php| --LINK--:./Scripts/php/include-de-varios-arquivos-ao-mesmo-tempo-php.php| **/ -->