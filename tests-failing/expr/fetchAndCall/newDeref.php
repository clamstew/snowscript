<?php
require dirname(__FILE__) . '/../../bootstrap_tests.php';

snowscript_to_php("
Ab().b
Ab().b()
Ab()['b']
Ab()['b']['c']
", 0);
