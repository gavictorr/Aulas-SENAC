<?php
$notebooks['Lenovo']['Processador'] = 'Ryzen 5 5500U';
$notebooks['Lenovo']['Memoria ROM'] = '256GB SSD';
$notebooks['Lenovo']['Memoria RAM'] = '8 GB';
$notebooks['Lenovo']['Vídeo Integrado'] = 'Vega 7';
$notebooks['Lenovo']['Tamanho do Monitor'] = '1920x1080px';
$notebooks['Lenovo']['Sistema Operacional'] = 'Linux';
foreach($notebooks as $modelos => $caracteristicas){
    echo "{$modelos} => {$caracteristicas}</br>";
}foreach($caracteristicas => $valor){
    echo "$caracteristicas => $valor ";
}
?>