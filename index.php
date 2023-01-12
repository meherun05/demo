<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
    <header class="slider container-fluid">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <?php
        $cat= new WP_Query([
            'post_type'=>'post',
            'category'=>'slider'
        ]);
        ?>
  <div class="carousel-inner">
  <?php
  $x=0;
  while($cat->have_posts()){$cat->the_post();
  $x++;
  ?>
    <div class="carousel-item <?=($x==1)? 'active' : ''?>">
     <?php the_post_thumbnail();?>
    </div>
    <?php }?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </header>
    <!-- logo -->
    <section class="container-fluid logo">
        <div class="row">
            <div class="col-sm-6">
                <?php the_custom_logo();?>
            </div>
            <div class="col-sm-6">
                <?php dynamic_sidebar('ltr');?>
            </div>
        </div>
    </section>
    <section class="container navbar bg-lght menu">
        <?php wp_nav_menu([
            'theme_location'=>'PM',
            'menu_class'=>'navbar_nav'
        ]);?>
    </section>
<section class="container">
    <div class="row">
        <?php dynamic_sidebar('titlebar');?>
    </div>
    <div class="row hero">
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
 <?php dynamic_sidebar('card1');?>
</div>
        </div>
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
 <?php dynamic_sidebar('card1');?>
</div>
        </div>
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
 <?php dynamic_sidebar('card1');?>
</div>
        </div>
    </div>
</section>
<?php wp_footer();?>
</body>
</html>