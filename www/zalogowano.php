<?php
session_start();
if(!isset($_SESSION['login']))
{
    header ('Location: index.php');
    exit;
}
else
echo 'Witaj uzytkowniku: '.$_SESSION['login'];
?> 
<?php
$conn = mysqli_connect('db', 'user', 'test', 'myDb', 3306);
mysqli_set_charset($conn, "utf8");
$query = 'SELECT * From Person';
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="pl">
<html>
 <head>
 </head>
 <body>
 <?php echo '<p>Witaj Dockerze osadzony na platformie Heroku! Sprawdzenie</p>'; ?> 
</br></br></br></br></br>
<?php
    while ($value = $result->fetch_array(MYSQLI_ASSOC)) {
      foreach ($value as $element) {
        echo ' - ' . $element;
      }
    }
    $result->close();
    mysqli_close($conn);
    ?>
 </body>
</html> 
