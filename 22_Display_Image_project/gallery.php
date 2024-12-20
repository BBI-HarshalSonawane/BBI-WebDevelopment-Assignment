<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './view/header.html'; ?>


<div class="gallery-container">
    <?php foreach ($imagesTitle as $key => $title): ?>

        <a href="image.php?<?php echo http_build_query(['image' => $key ])?>" class="gallery-item">
            <!-- "http_build_query()" learn 👉 here is gpt link https://chatgpt.com/share/674991e3-6f2c-8010-b9f1-84fb8b2e2bd1 
            and instead of ✅ "$src" we can use anything.

            ✅ here "['image' => $key ]" 👉 means when we pass an 👉 ?image=img2.jpg 👈 in url we get output. 👉👉👉 http://localhost:8888/Learnphp/22_Display_Image_project/image.php?image=img2.jpg 👈👈
            --> 

            <h2><?php echo mySafetyFunct($title) ?></h2>

            <img src="./img/<?php echo rawurldecode($key) ?>" alt="<?php echo mySafetyFunct($title) ?>" class="gallery-item">    <!--Here "rawurldecode" funct mainly use for returning our text in clean and simple way. When it encode by some one means adding any special char in our string 👉 here is gpt link https://chatgpt.com/share/674991e3-6f2c-8010-b9f1-84fb8b2e2bd1 -->

        </a>

    <?php endforeach;?>
</div>

<?php include './view/footer.html'; ?>