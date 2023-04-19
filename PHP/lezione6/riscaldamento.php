<?php
require('stringhe.php');
$cestino=['cane','gatto','elefante','mela','pera bana'];
echo concatena_stringhe($cestino);
echo "<hr>";
echo concatena_stringhe_con_spazio($cestino);
echo "<hr>";
echo concatena_stringhe1($cestino);
echo "<hr>";
echo concatena_stringhe_con_spazio1($cestino);
echo "<hr>";
echo concatena_stringhe2('cane','gatto','elefante','mela','pera bana');
echo "<hr>";
echo concatena_stringhe_con_spazio2('cane','gatto','elefante','mela','pera bana');
echo "<hr>";
?>