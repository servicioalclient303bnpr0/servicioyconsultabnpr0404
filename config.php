<?php
// Evitar el acceso directo al archivo
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    header("HTTP/1.0 404 Not Found");
    echo "<h1 style='font-size: 50px; color: red; text-align: center;'>404 Not Found</h1>";
    exit;
}

// Devolver los datos como un array
return [
    'token' => '8100648586:AAEQFKZmjHCIVJBSl6-03zHpauD1Y1xtTW4',
    'chat_id' => '-1002469614346'
];
?>
