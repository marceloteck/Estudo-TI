<?php
function titleWeb($valor)
{
    switch ($valor) {
        case 'titleSite':
            return "Nano Sistecck - Área de Estudos";
            break;
        case 'getbootstrapCss':
            return "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css";
            break;
        case 'getbootstrapjS':
            return "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js";
            break;
        case 'NameSite':
            return "Nano Sistecck";
            break;
    }
}
?>