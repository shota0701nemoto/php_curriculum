<?php
  echo 'PHP<br/>';
  echo 'curriculum<br/>';
?>

<?php
  echo 7 + 1;
  echo 10 - 10;
  echo 10 * 10;
  echo 10 % 10;
?>


<?php
echo '<br/>';
  $name = 'Hello, World!<br/>';
    echo $name;
  $number = 1;
  $number_2 = 2;
    echo $number + $number_2;
    echo $number - $number_2;
    echo $number * $number_2;
    echo $number % $number_2;
?>

<?php
echo '<br/>';
 $num = 5;
   echo $num;
 $num = 10;
   echo $num;
?>

<?php
echo '<br/>';
 $num = 5;
   echo $num;
 $num = $num + 10;
   echo $num;
?>

<?php
echo '<br/>';
 $num++;
   echo ++$num; 
   echo $num++;
   echo $num; 
?>


<?php
echo '<br/>';
  $name1 = '根本';
  $name2 = '翔伍';
    echo $name1 . $name2;
  $name1 .= "PHP";
    echo $name1 . $name2;
    echo '<br/>';
 ?>

<?php
  echo "こんにちは！ \"'今' 私は’PHP’を勉強しています";
?>

<?php
echo '<br/>';
 $num = rand(1,10);
   if ($num % 2 == 0 ) {
     echo '偶数';
       } else {
     echo '奇数';
       }
     echo $num;
?>

<?php
echo '<br/>';
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
echo '<br/>';
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
echo '<br/>';
 $array = [
   '田中' => [
      'info' => [
        'name' => '田中',
        'division' => '1',
        'age' => '25' 
      ],
      'skill' => [
        'lang' => ['PHP','RUBY'],
        'fw' => ['laravel','CakePHP','Rails'] 
      ],
      'description' => ['バックエンドエンジニア']
    ],
    '山田' => [
        'info' => [
          'name' => '山田',
          'division' => '2',
          'age' => '23' 
        ],
        'skill' => [
          'lang' => ['HTML','CSS','JS'],
          'fw' => ['Vue.js'] 
        ],
        'description' => ['フロントエンジニア']
    ],
      '佐藤' => [
        'info' => [
          'name' => '佐藤',
          'division' => '2',
          'age' => '20' 
        ],
        'skill' => [
          'lang' => ['PHP'],
          'fw' => [] 
        ],
        'description' => ['PHP初学者']
      ]    
   ]
?>

<?php
echo '<br/>';
  for ($num1 = 1; $num1 < 10; $num1++){
    for ($num2 = 1; $num2 < 10; $num2++){
      echo $num1 * $num2;
    }
    echo '<br/>';
  }
?>

<?php
$emp = ['山田' => ['age' => '20','pref' => '東京'],
        '田中' => ['age' => '23','pref' => '神奈川'],
        '佐藤' => ['age' => '24','pref' => '埼玉'],
        '鈴木' => ['age' => '25','pref' => '千葉']
       ];
foreach ($emp as $key => $val ) {   # 配列のキーを$key、値を$valに順番入れる）
          echo 'name:'.$key;
          echo '<br>';
          echo 'age:'.$val['age'];
          echo '<br>';
          echo 'pref:'.$val['pref'];
          echo '<br>';
          echo '<br>';
        } 
?>

<?php
  for ($num = 1; $num <= 50; $num++) {
    $v_num = ( strval($num) );
      if ( strpos($v_num, '3') == true or $num % 3 == 0 ){
        echo $num;
      }
  }
echo "<br>";
?>

<?php
  function greeting($price) {
    $msg = $price . '円の税込価格は' . $price * 1.1 . '円です';
    $error_msg = '数字を入力してください';
    $error_msg2 = '空白です';
      if ( is_numeric($price) ) {
        return $msg; 
          } else {
            return $error_msg;     
          };
      if ( empty($price) == false ){
        return $error_msg2;
      }  
    };
  $msg = greeting(100);
  echo $msg;
  echo '<br>';
?>

<?php
  $array = array();
  $array = array('name'=>'山田', 'pref'=>'東京');
?>

<?php
  $var =  "";
    if ( empty($var) ){
      echo 'OK';
    } else {
      echo 'NG';    
    };
    echo '<br>';
?>

<?php
  $var =  ['name'=>'山田', 'pref'=>'東京'];
    if ( is_array($var) ){
      echo 'OK';
    } else {
      echo 'NG';    
    };
?>