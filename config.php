<?php

/*
Atoum configuration file.
Do "php path/to/test/file -c path/to/this/file" or "php path/to/atoum/scripts/runners/autorunner.php -c path/to/this/file -f path/to/test/file" to use it.
*/

use \mageekguy\atoum;

$stdOutWriter = new atoum\writers\stdout();

$cliReport = new atoum\reports\cli();
$cliReport->addWriter($stdOutWriter);

$runner->addReport($cliReport);

?>
