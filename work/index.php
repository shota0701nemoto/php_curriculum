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
       } else if ($score > 50 && $score < 69 ) {
     echo '可';    
       } else if ($score > 70 && $score < 79 ) {
     echo '良';    
       } else if ($score > 80 && $score < 99 ) {
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

<?php
  echo '<br>';   
  $name = $_POST['name'];
  $age = $_POST['age'];
    if ( $age >= 120 ) {
        echo 'エラー';
    } else {
        echo $name . 'さんは' . $age . '歳です';
     } 
?>

<!DOCTYPE html>
<html lang = “ja”>
<head>
<meta charset = “UTF-8”>
<title>GET・POST練習</title>
</head>
<body>
<h1>データの送信</h1>
<form action="index.php" method="post">
<label>名前</label><input type="text" name="name"><br/>
<label>年齢</label><input type="number" name="age"><br/>
<input type="submit" value="送信">
</form>
</body>
</html>

<?php
  $list = [
    [ 'id' => '1','password' => '111', 'name' =>  '田中'],
    [ 'id' => 2,'password' => '222', 'name' =>  '佐藤'],
    [ 'id' => 3,'password' => 333, 'name' =>  '山田'],
  ];
  echo '<br>';
  $list_id = $_POST['id'];
  $password = $_POST['password'];
  #var_dump($list_id);
  #var_dump($password);
  #var_dump($list[0]['id']);
  #var_dump($list[0]['password']);
  #var_dump($list[0]['name']);
  foreach ($list as $key => $value)
  { if ( $list[0]['id'] == $list_id && $list[0]['password'] == $password ) {
      echo $list[0]['name'];
        break;
    } else {
        echo 'エラー';
    }
  }
?>

<!DOCTYPE html>
<html lang = “ja”>
<head>
<meta charset = “UTF-8”>
<title>GET・POST練習</title>
</head>
<body>
<h1>データの送信</h1>
<form action="index.php" method="post">
<label>ID</label><input type="number" name="id"><br/>
<label>パスワード</label><input type="number" name="password"><br/>
<input type="submit" value="送信">
</form>
</body>
</html>

<?php
$file = "./sample.json";
$json = file_get_contents($file);
$data = json_decode($json, true);
foreach ($data[0] as $key => $value) {
  echo $value['name'];
  echo '<br>';
};
?>

<pre>
<?php
  $file = "./sample.json";
  $json = file_get_contents($file);
  $data = json_decode($json, true);
  $object = [];
  foreach ($data[0] as $key => $value) {
    $array = [];
      foreach ($value['city'] as $city_key => $city_value) {
      #市区町村が取れてる
      #var_dump($city_value['city']);
      array_push($array , $city_value['city'] );
      }
    #各都道府県が取れてる
    #var_dump($value['name']);
    $object[ $value['name'] ] = $array;
  }
  var_dump($object);
?>
</pre>

<?php
  $message = htmlspecialchars($_GET['message'], ENT_QUOTES, 'UTF-8');
  echo $message;
  print_r($_GET);
?>

<!DOCTYPE html>
<html lang = "ja">
<head><meta charset = "UFT-8"></head>
<body>
<form action = "index.php" method = "get">
<input type = "text" name ="message"><br/>
<input type="checkbox" name="hoby[]" value="musicappreciation">音楽鑑賞<br/>
<input type="checkbox" name="hoby[]" value="moviegoing">映画鑑賞<br/>
<input type="checkbox" name="hoby[]" value="reading">読書<br/>
<input type="checkbox" name="hoby[]" value="fishing">釣り<br/>
<input type = "submit" value ="submit">
</form>
</body>
</html>

<pre>
<?php
  $file = "./sample.json";
  $json = file_get_contents($file);
  $data = json_decode($json, true);
  #地方の配列を準備し、あとで連想配列に直す。
  $Chihou = array(
    '北海道地方' => ['県名' => [], '市町村名' => []],
    '東北地方' => ['県名' => [], '市町村名' => []],
    '関東道地方' => ['県名' => [], '市町村名' => []],
    '中部道地方' => ['県名' => [], '市町村名' => []],
    '近畿道地方' => ['県名' => [], '市町村名' => []],
    '四国道地方' => ['県名' => [], '市町村名' => []],
    '中国道地方' => ['県名' => [], '市町村名' => []],
    '九州道地方' => ['県名' => [], '市町村名' => []]
  );
  #var_dump($Chihou['北海道地方']['県名']['市町村名']);
  #var_dump($Chihou['北海道地方']['県名']);
  foreach ($data[0] as $key => $value) {
    foreach ($value['city'] as $city_key => $city_value) {
      #市区町村が取れてる
      #var_dump($city_value['city']);
    }
    $Chihou['北海道地方']['県名']['市町村名'] = $city_value['city'];
    
    #各都道府県が取れてる
    #var_dump($value['name']);
  }
  $Chihou['北海道地方']['県名'] = $value['name'];
  var_dump($Chihou)
?>
</pre>