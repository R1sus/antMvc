<?php
// ----------------------------configuration-------------------------- // 
function postMail () {
$adminemail="nadyabal@gmail.com";  // e-mail admin
//$date=date("d.m.y"); // date
//$time=date("H:i"); // time
// print_r ($adminemail);
  // get data from html form
$name=$_POST['name']; 
$email=$_POST['email']; 
$sbj=$_POST['subject'];
$msg=$_POST['message']; 
  // email validation
// if (!preg_match("|^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is",
//strtolower($email))) {
//  echo "<center>Вернитесь <a href='javascript:history.back(1)'><B>назад</B></a>. Вы
//указали неверные данные!";
//   }
// else {
//$msg="
//<p>Имя: $name</p>
//<p>E-mail: $email</p>
//<p>Тема: $sbj</p>
//<p>Сообщение: $msg</p>
// ";
  // send message to admin 
mail($adminemail, $sbj, $msg);

return "test";

//  }
}

?>