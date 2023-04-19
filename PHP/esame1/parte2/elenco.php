<?php
$filenames = glob('schede/*.json');
echo '<hr>';
echo '<ul>';
foreach($filenames as $filename){
    echo '<li>
    <a href="scheda.php?file='.$filename.' ">'.$filename.'</a></li>';
}
echo '</ul>';
echo '<hr>';