<?php
      $dblocation = "localhost";
      $dbname = "xxxxx";
      $dbuser = "root";
      $dbpasswd = "";
      $dbcnx = @mysql_connect($dblocation,$dbuser,$dbpasswd);
      if (!$dbcnx)
      {
      echo( "<P> В настоящий момент сервер базы данных не доступен, поэтому корректное отображение страницы невозможно. </P>" );
      exit();
      }
      if (!@mysql_select_db($dbname, $dbcnx))
      {
      echo( "<P> В настоящий момент база данных не доступна, поэтому корректное отображение страницы невозможно. .</P>" );
      exit();
      }
      ?>

<?php
      if (isset($_POST['name']) && (isset($_POST['email']) && (isset($_POST['password']))))
{
    $name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$created_at = date('Y-m-d H:i:s');;
    $insert_user = mysql_query("INSERT INTO users (name, email, password, created_at) VALUES ('$name', '$email', '$password', '$created_at')");
}
else
       {
        echo "<p>Вы ввели не всю информацию, поэтому новость в базу не может быть добавлена! </p>";   
       }
       ?>