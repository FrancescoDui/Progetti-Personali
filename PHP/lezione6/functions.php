<?php
function lista($array,$type=0){
    /*sort($array);
    print_r($array);die;*/
    switch($type){
    case '0':
        $html="<ul>";
        foreach($array as $a){
            $html.="<li>".$a."</li>";
        }
        $html.="</ul>";
    break;
    case '1':
        sort($array);
        $html="<ol>";
        foreach($array as $a){
            $html.="<li>".$a."</li>";
        }
        $html.="</ol>";
    break;  
    }
    return $html;
}
/*--------------------------------------------------------------------------------------------------------------*/
function array_exstract( $elements, $num){
$data=[];
$num_elements=min($num,count($elements));
for($i=0;$i<$num_elements;$i++){
    $data[]=$elements[$i];
}
return $data;
}

?>