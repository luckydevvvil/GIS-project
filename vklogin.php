<?php
$first_name = $_GET["first_name"];
$last_name = $_GET["last_name"];
$uid = $_GET["uid"];
$hash = $_GET["hash"];


if ($_REQUEST['hash']==md5('5968477'.$uid.'CzPWUFZ4CoT2C1WtIy6V')) {
  $result = mysql_query("SELECT id, random, password FROM tracker_users WHERE username = 'vk-$uid'");
  setcookie('uid','');
  setcookie('pass','');
  if (mysql_num_rows($result)) {
    $user = mysql_fetch_assoc($result);
    mysql_query("UPDATE tracker_users SET name = '$name' WHERE username = 'vk-$uid' LIMIT 1");
    setcookie('pass',md5($user['random'].$user['password'].$user['random']));
    setcookie('uid',$user['id']);
  } else {
    $random = mt_rand(100000,999999);
    $pwd = $uid . 'verysecretlonglongword-';
    $pid=md5(uniqid(rand(),true));
    mysql_query("INSERT INTO tracker_users 
      (username, name, password, random, id_level, email, style, language, flag, joined, lastconnect, pid, time_offset) VALUES 
      ('vk-$uid', '$name', '" . md5($pwd) . "', $random, 3, '', 5, 7, 0, NOW(), NOW(),'$pid', '0')");
    setcookie('pass',md5($random.md5($pwd).$random));
    setcookie('uid',mysql_insert_id());
  }
  header("Location: /index.html");
}


?>
