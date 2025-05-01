<?php

// A quine is a self-replicating program that produces its own source code as output.
// This is a simple PHP quine that outputs its own source code.

header('Access-Control-Allow-Origin: *');
$code = file(__FILE__);

echo '<pre>' . htmlspecialchars(implode('', $code)) . '</pre>';
exit;

//     __
//   <(o )___
//    (  ._> /
//     `---'  
//      Moo!