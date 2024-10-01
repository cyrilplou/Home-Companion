<?php
require_once(__DIR__. '/variables.php');
require_once(__DIR__. '/functions.php');



$searchrec = $_POST ;

if (!empty($searchrec)
&& isset($searchrec)){

$search = $searchrec['search'];

}

