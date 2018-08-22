<?php
$output =  str_replace('http://', '', $input);
$output =  str_replace('https://', '', $output);
$output =  str_replace('/', '', $output);

return $output;