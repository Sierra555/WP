<!DOCTYPE html>
<html <? language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php wp_head();?>
 

</head>

<body>
  <header class="header"  id="header">
    <div class="container">
      <div class="header__inner">

        <div class="header__top">
          <nav class="menu"><button class="menu__btn"><span></span></button>
            <ul class="menu__list">
              <li class="menu_item"><a href="#header" class="menu__link">ПРО НАС</a></li>
              <li class="menu_item"><a href="#about" class="menu__link">ВАРТІСТЬ</a></li>
              <li class="menu_item"><a href="#services" class="menu__link">ДОД. ПОСЛУГИ</a></li>
              <li class="menu_item"><a href="#guarantee" class="menu__link">ГАРАНТІЇ</a></li>
              <li class="menu_item"><a href="#" class="menu__link">НОВИНИ</a></li>
            </ul>
          </nav>
          <a href="tel:<?php the_field('phone-num'); ?>" class="tel-numb"> <?php the_field('phone'); ?> </a>
          <button class="header__login"><img src="<?php bloginfo('template_url'); ?>/assets/images/14.png" alt="" class="header__img"></button>
        </div>
        <div class="header__content">
          <h1 class="header__title title">Космічний <span>туризм</span></h1>
          <div class="header__subtitles">
            <h3 class="header__subtitle">Майбутнє вже наступило!</h3>
            <h3 class="header__subtitle">Здійсни мрію дитинства!</h3>
          </div>
          <button  class="header__btn">Хочу бути космонавтом!</button>
        </div>
        <div class="header__bottom">
          <p class="header__text-left">У 2021 році настала нова ера в освоєнні космосу – ера космічного туризму.
            Приватні
            компанії отримали доступ до
            Космічний простір.</p>
          <p class="header__text">Між ними загострилася конкуренція, а ціна квитка на польоти до космічного
            простір
            знизилася у сто разів.</p>
        </div>
      </div>
    </div>
  </header>