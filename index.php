<?php
 include '_loader.php';
 $Template=false;
 if(isset($_GET['halaman'])){
    $halaman=$_GET['halaman'];
  }
  else{
    $halaman='home';
  }
  ob_start();
  $file='_halaman/'.$halaman.'.php';
  if(!file_exists($file)){
    include '_halaman/error.php';
  }
  else{
    include $file;
  }
  $content = ob_get_contents();
  ob_end_clean();

  if($Template==true){
?>

<!DOCTYPE html>
<html lang="en">
    <?php include '_layouts/head.php'?>
    <body>
        <?php
            include '_layouts/header.php';
            include '_layouts/navbar.php';
            echo $content;
            include '_layouts/footer.php';
            include '_layouts/javascript.php';
        ?>
    </body>
</html>

<?php } else {
  echo $content;
}
if(isset($fileJS)){
  include '_halaman/js/'.$fileJS.'.php';
}
?>