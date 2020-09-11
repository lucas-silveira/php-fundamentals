<?php

// A diferença entre include e require é a forma como um erro é tratado.
// O require produz um erro E_COMPILE_ERROR , o que encerra a execução do script.
// O include apenas produz um warning que pode ser "abafado".

require('sum.php');

var_dump(sum(1, 2)); // int(3)