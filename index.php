<?php 

require_once 'app/Core/Core.php';
require_once 'lib/Database/Connection.php';

require_once 'app/Controller/HomeController.php';

require_once 'app/Model/Postagem.php';

require_once 'vendor/autoload.php';

$template = file_get_contents('app/Template/index.html');

//ob_start();

$core = new Core;
$core->start($_GET);

echo $template;

//$saida = ob_get_contents();

//ob_end_clean();

//$tplPronto = str_replace('{{area_dinamica}}', $saida, $template);
//echo $tplPront;


?>