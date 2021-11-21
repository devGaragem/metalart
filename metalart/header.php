<?php
function assets()
{
  echo get_bloginfo('template_url') . '/assets';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
  <title>
    <?php
    if (is_home()) :
      echo 'Metal Art';
    else :
      echo str_replace('»', '', get_the_title());
    endif;
    ?>
  </title>
  <?php
  wp_head();
  ?>
  <link rel="stylesheet" href="<?php assets(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php assets(); ?>/css/glider.min.css">
  <script src="<?php assets();?>/js/glider.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      document.querySelector('.navbar-toggle').onclick = (e) => {
        const nav = document.querySelector('.navbar-nav')
        const currentIcon = nav.classList.contains('show') ? '☰' : '✕'
        console.log(currentIcon);
        e.target.innerHTML = currentIcon
        nav.classList.toggle('show')
      }
      new Glider(document.querySelector('.slider-inner'), {
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: true,
        arrows: {
          prev: '.prev',
          next: '.next'
        }
      });
    })
  </script>
</head>

<body>
  <header>
    <a class="navbar-brand" href="<?php echo get_home_url();?>"> <img height="60px" src="<?php assets(); ?>/img/MetalArt_Marca.svg" /></a>
    <button class="navbar-toggle" onclick="">☰</button>
    <ul class="navbar-nav">
      <li><a href="#sobre">sobre</a></li>
      <li><a href="/portfolio">portifólio</a></li>
      <li><a href="#contato">contato</a></li>
    </ul>
  </header>