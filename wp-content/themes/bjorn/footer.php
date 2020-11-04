<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bjorn
 */
?>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="footer__main">
          <div class="footer__item">
            <div class="footer__logo">
              <img src="<?php echo bjorn_get_image('header/logo.svg') ?>" class="footer__logo__icon">
              <img src="<?php echo bjorn_get_image('header/logo-title.svg') ?>" class="footer__logo__title">
            </div>
            <div class="footer__text">
              Техцентр по обслуживанию, ремонту и тюнингу автомобилей всех марок
              <br><br>
              <?php the_field("schedule", 183); ?>
            </div>
            <div class="footer__social">
              <a href="<?php the_field("youtube", 183); ?>" class="footer__social__link">
                <img src="<?php echo bjorn_get_image('icons/youtube.svg') ?>" class="footer__social__icon footer__youtube">
              </a>
              <a href="<?php the_field("instagram", 183); ?>" class="footer__social__link">
                <img src="<?php echo bjorn_get_image('icons/instagram.svg') ?>" class="footer__social__icon footer__instagram">
              </a>
              <a href="<?php the_field("facebook", 183); ?>" class="footer__social__link">
                <img src="<?php echo bjorn_get_image('icons/facebook.svg') ?>" class="footer__social__icon footer__facebook">
              </a>
              <a href="<?php the_field("vk", 183); ?>" class="footer__social__link">
                <img src="<?php echo bjorn_get_image('icons/vk.svg') ?>" class="footer__social__icon footer__vk">
              </a>
            </div>
          </div>
          <div class="footer__item">
            <div class="footer__name footer__name-btn1">
              <div class="footer__name__title">
                <?php
                $category = get_category_by_slug("electrik");
                echo $category->name;
                ?>
              </div>
              <img src="<?php echo bjorn_get_image('services/arrow.svg') ?>" class="footer__name__icon footer__arrow1">
            </div>
            <?php
            $menu1 = wp_nav_menu([
              'theme_location'  => '',
              'menu'            => 'electrica',
              'container'       => 'false',
              'menu_class'      => 'footer__list footer__list1',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => '',
            ]);
            echo ' 
                <li class="footer__list__item">
                  <a href="" class="footer__link">
                    ' . $menu1 . '
                  </a>
                </li>';
            ?>
          </div>
          <div class="footer__item footer__margin">
            <div class="footer__name footer__name-btn2">
              <div class="footer__name__title">
                <?php
                $category = get_category_by_slug("remontdvig");
                echo $category->name;
                ?>
              </div>
              <img src="<?php echo bjorn_get_image('services/arrow.svg') ?>" class="footer__name__icon footer__arrow2">
            </div>
            <?php
            $menu2 = wp_nav_menu([
              'theme_location'  => '',
              'menu'            => 'remontDvagatelei',
              'container'       => 'false',
              'menu_class'      => 'footer__list footer__list2',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => '',
            ]);
            echo ' 
                <li class="footer__list__item">
                  <a href="" class="footer__link">
                    ' . $menu2 . '
                  </a>
                </li>';
            ?>
          </div>
          <div class="footer__item footer__margin">
            <div class="footer__name footer__name-btn3">
              <div class="footer__name__title">
                <?php
                $category = get_category_by_slug("remontakpp");
                echo $category->name;
                ?>
              </div>
              <img src="<?php echo bjorn_get_image('services/arrow.svg') ?>" class="footer__name__icon footer__arrow3">
            </div>
            <?php
            $menu2 = wp_nav_menu([
              'theme_location'  => '',
              'menu'            => 'remontAkpp',
              'container'       => 'false',
              'menu_class'      => 'footer__list footer__list3',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => '',
            ]);
            echo ' 
                <li class="footer__list__item">
                  <a href="" class="footer__link">
                    ' . $menu3 . '
                  </a>
                </li>';
            ?>
            <div class="footer__pay">
              <img src="<?php echo bjorn_get_image('icons/visa.svg') ?>" class="footer__pay__icon">
              <img src="<?php echo bjorn_get_image('icons/maestro.svg') ?>" class="footer__pay__icon">
              <img src="<?php echo bjorn_get_image('icons/mastercard.svg') ?>" class="footer__pay__icon">
            </div>
          </div>
        </div>
        <div class="footer__copyright">Bjorn-Motors © 2020 Все права защищены</div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>