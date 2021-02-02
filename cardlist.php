<?php 


function gethtml(){
    $html = 'jgdkgj';
    // if($num == "newborn"){
    // $html = '<div> newborn </div>';
    // }else{
    // $html = '<div>  other </div>';
    // }
    
    return $html;
}

if (isset($_GET['type'])) {
    gethtml();
}


?>