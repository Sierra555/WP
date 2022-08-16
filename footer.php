<footer class="footer">
    <div class="container">
      <div class="footer__inner">
        <div class="footer__desc">
          <p class="footer__text">
            Служба підтримки працює міжгалактично та суборбітально          </p>
          <p class="footer__text">
            Графік прийому відвідувачів по запису</p>
        </div>
        <ul class="footer__list">
          <li class="footer__list-item"><a href="#header" class="footer__link">ПРО НАС</a></li>
          <li class="footer__list-item"><a href="#about" class="footer__link">ВАРТІСТЬ</a></li>
          <li class="footer__list-item"><a href="#services" class="footer__link">ДОД. Послуги</a></li>
          <li class="footer__list-item"><a href="#guarantee" class="footer__link">ГАРАНТІЇ</a></li>
          <li class="footer__list-item"><a href="#" class="footer__link">НОВИНИ</a></li>
        </ul>
        <ul class="footer__list">
          <li class="footer__list-item"><a href="<?php the_field('spacex-link');?>" class="footer__link">spacex.com</a>
          </li>
          <li class="footer__list-item"><a href="<?php the_field('blueorigin-link');?>" class="footer__link">blueorigin.com
            </a></li>
          <li class="footer__list-item"><a href="<?php the_field('virgingalactic-link');?>" class="footer__link">virgingalactic.com</a></li>
          <li class="footer__list-item"><a href="tel:<?php the_field('phone-num'); ?>" class="footer__link"><?php the_field('phone'); ?></a></li>
          <li class="footer__list-item"><a href="#" class="footer__link">МКС</a></li>
        </ul>
      </div>
    </div>
  </footer>
 
  <?php wp_footer(); ?>

  
</body>

</html>
