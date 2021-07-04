<?php
// Déclaration des constantes + Regex:
define('REGEX_EMAIL','[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,64}');

define('REGEX_NO_NUMBER',"^[A-Za-z-éèêëàâäôöûüç' ]+$");

define ('REGEX_PASSWORD',"^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#&()–[{}]:;',?/*~$^+=<>]).{8,20}$");
