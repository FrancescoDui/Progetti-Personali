<?php
function generate_list($items){
    echo '<ol>';
    foreach($items as $i){
        echo '<li>'.$i.'</li>';
    }
    echo '</ol>';
}