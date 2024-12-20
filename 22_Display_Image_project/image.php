<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './view/header.html'; ?>

<?php /* var_dump($_GET['image'])*/ ?>


    

<h1><?php echo $imagesTitle[$_GET['image']];?></h1>

<img src="./img/<?php echo $_GET['image'];?>" width="600" height="300"><br>

<?php
     if(!empty($_GET['image'])) {

       echo $imagesDescription[$_GET['image']];

     }
?>

<pre>



</pre>
<?php include './view/footer.html'; ?>
