<?php
 echo "PHP<br/>";
 echo "curriculum<br/>";
?>

<?php
 echo 7 + 1;
 echo 10 - 10;
 echo 10 * 10;
 echo 10 / 10;
?>


<?php
 $name = "Hello, World!<br/>";
 echo $name;
 $number = 1;
 $number_2 = 2;
 echo $number + $number_2;
 echo $number - $number_2;
 echo $number * $number_2;
 echo $number / $number_2;
?>

<?php
 $num = 5;
 echo $num;
 $num = 10;
 echo $num;
?>

<?php
 $num = 5;
 echo $num;
 $num = $num + 10;
 echo $num;
?>

<?php
 $num++;
 echo ++$num; 
 echo $num++;
 echo $num; 
?>


<?php
 $name1 = "根本";
 $name2 = "翔伍";
 echo $name1 . $name2;
 $name1 .= "PHP";
 echo $name1 . $name2;
 ?>

<?php
 echo "こんにちは！ \"'今' 私は’PHP’を勉強しています";
?>

<?php
 $num = rand(1,10);
   if ($num % 2 == 0 ) {
   echo '偶数';
 } else {
   echo '奇数';
   }
 echo $num;
?>

<?php
 $score = rand(0,100);
   if ($score > 0 && $score < 49 ){
    echo '不可';
 } else if ($score > 50 && $score < 69 ){
    echo '可';    
 } else if ($score > 70 && $score < 79 ){
    echo '良';    
 } else if ($score > 80 && $score < 99 ){
    echo '優';    
 } else {
    echo '満点';    
 }
?>

<?php
 $score1 = rand(0,100);
 $score2 = rand(0,100);
   if ($score1 > 60 && $score2 < 60 ){
    echo '合格';
 } else if ($score1 + $score2 > 130 ){
    echo '合格';    
 } else if ($score1 + $score2 > 100 && (score1 > 90 or score2 > 90)  ){
    echo '合格';    
 } else {
    echo '不合格';    
 } 
?>



<?php

$age = 20;
$job = "エンジニア";
$pref = "東京";

$array = array('age' => '20', 'job' => 'エンジニア', 'pref' => '東京');

?>