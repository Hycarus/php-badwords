<?php
$paragrafo = $_GET["paragraph"];
$parolaCensurata = $_GET["badword"];
$paragrafoLength = strlen($paragrafo);
$paragrafoCensurato = str_replace($parolaCensurata, '***', $paragrafo);
$paragrafoLength2 = explode(' ', $paragrafo);
?>
<p><?php echo $paragrafo . ' ' . '{Characters: ' . $paragrafoLength  . ' ' . 'Worlds:' . count($paragrafoLength2)  . '}' ?> </p>
<p><?php echo $paragrafoCensurato . ' ' . '{Characters: ' . $paragrafoLength . ' ' . 'Worlds:' . count($paragrafoLength2) . '}' ?></p>