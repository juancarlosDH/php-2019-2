<?php

require_once('clases/autoload.php');

$person = new Persona('tato', 'alguien', 1234567890, '2000-10-11', 'tato@tato.com', '12345');

$pyme = new Pyme('pyme@pyme.com', '1234567890');

$pyme->liquidarHaberes($person, 1000);
