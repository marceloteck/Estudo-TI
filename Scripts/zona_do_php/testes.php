<?php
//phpinfo();
//echo $_SERVER['HTTP_USER_AGENT'];
?>
<h1>texte de titulo</h1>
<!DOCTYPE html>
<html>
<body>

<form method="get" action="<?=$_SERVER['PHP_SELF']?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</html>