<?php 
require 'parse/autoload.php';

use Parse\ParseClient;
use Parse\ParseQuery;
use Parse\ParseObject;

ParseClient::initialize( "LSFG453DFGEQGSXBW123S", null, "LGKFS21GD321SDCDS" );

// Users of Parse Server will need to point ParseClient at their remote URL and Mount Point:
ParseClient::setServerURL('http://110.49.2.58:1337','parse');

function getDetail($data = "newborn"){

  $ss;
  $query = new ParseQuery("tracker");
  $query->equalTo("type", $data);
  $results = $query->find();
  foreach ($results as $value) {
    $ss = $value->get('detail');
    }
    return $ss;
}

?> 