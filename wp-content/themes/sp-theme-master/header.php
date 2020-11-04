<?php  
  $features = get_posts([
    'post_type' => 'features',
     'orderby'   => 'date',
     'order'     => 'DESC',
      'numberposts' => 0
  ]);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv='X-UA-Compatible' content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicons -->
    <link href="img/logo.png" rel="icon">
    <?php wp_head(); ?>
  </head>
<body class="body">
  <!-- Pushy Menu -->
  <nav class="pushy pushy-left" data-focus="#first-link">
    <div class="pushy-content">
      <ul>
        <li class="pushy-link"><a href="../">Главная</a></li>
        <li class="pushy-link"><a href="../#services">Услуги и цены</a></li>
        <li class="pushy-link"><a href="../#sale">Акции</a></li>
        <li class="pushy-link"><a href="../#reviews">Отзывы</a></li>
        <li class="pushy-link"><a href="../#contacts">Контакты</a></li>
      </ul>
    </div>
  </nav>
  <div class="site-overlay"></div>
  <button class="pushy-btn">&#9776;</button>
  <!-- Popup--> 
  <div class="popup__wrapp opinion" id="popup__opinion">
    <div class="popup__content">
      <div class="popup__title">Спасибо!</div>
      <div class="popup__subtitle">Мы обязательно учтём ваше мнение</div>
      <img src="<?php echo bjorn_get_image('header/logo.svg')?>" class="popup__logo">
      <img src="<?php echo bjorn_get_image('icons/close-popup.svg')?>" class="popup_close">
    </div>
  </div>
  <div class="popup__wrapp thanks" id="popup__thanks">
    <div class="popup__content">
      <div class="popup__title">Спасибо!</div>
      <div class="popup__subtitle">Мы свяжемся с вами в течение 3-х мин.</div>
      <div class="popup__timer">
        <span class="afss_mins_bv">00</span>:<span class="afss_secs_bv">00</span>
      </div>
      <img src="<?php echo bjorn_get_image('header/logo.svg')?>" class="popup__logo">
      <img src="<?php echo bjorn_get_image('icons/close-popup.svg')?>" class="popup_close">
    </div>
  </div>
  <div class="popup__wrapp callback" id="popup__callback">
    <form class="popup__content popup__form" method="post" autocomplete="off">
      <div class="popup__title">Заказать обратный звонок</div>
      <div class="popup__flex">
        <img src="<?php echo bjorn_get_image('header/logo.svg')?>" class="popup__logo">
        <div class="popup__inputs">
          <div class="popup__label">Ваше имя</div>
                          <input type="hidden" name="maillink" value="<?php
                  foreach($features as $feature):
                  $gets = get_fields($feature->ID)['mail']; 
                  echo $gets;
                  endforeach;
                ?>">
          <input type="hidden" name="titleform" value="Заявка Bjorn 'Обратный звонок'">
          <input type="text" class="popup__input" name="name" placeholder="необязательно">
          <div class="popup__label">Номер вашего телефона</div>
          <input type="text" class="popup__input" name="phone" required placeholder="*обязательно">
        </div>
      </div>
      <button class="popup__submit" type="submit">Заказать</button>
      <img src="<?php echo bjorn_get_image('icons/close-popup.svg')?>" class="popup_close">
    </form>
  </div>
  <div class="popup__wrapp rerairs" id="popup__repairs">
    <form class="popup__content popup__form" method="post" autocomplete="off">
      <div class="popup__title">Записаться на ремонт</div>
      <div class="popup__flex">
        <img src="<?php echo bjorn_get_image('header/logo.svg')?>" class="popup__logo">
        <div class="popup__inputs">
                          <input type="hidden" name="maillink" value="<?php
                  foreach($features as $feature):
                  $gets = get_fields($feature->ID)['mail']; 
                  echo $gets;
                  endforeach;
                ?>">
          <input type="hidden" name="titleform" value="Заявка Bjorn 'Запись на ремонт'">
          <div class="popup__label">Ваше имя</div>
          <input type="text" class="popup__input" name="name" placeholder="необязательно">
          <div class="popup__label">Номер вашего телефона</div>
          <input type="text" class="popup__input" name="phone" required placeholder="*обязательно">
        </div>
      </div>
      <button class="popup__submit" type="submit">Записаться</button>
      <img src="<?php echo bjorn_get_image('icons/close-popup.svg')?>" class="popup_close">
    </form>
  </div>
  <header class="header" id="header">
    <div class="pad"></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header__content">
            <div class="header__left">
              <div class="header__left__address">ул.Уличная, д.3с1</div>
              <a href="              <?php
                foreach($features as $feature):
                  $schema = get_fields($feature->ID)['schema']; ?>
                  <?php echo $schema;?>
                 <?php endforeach; 
              ?>" class="header__left__btn" target="_blank">
                <img src="<?php echo bjorn_get_image('header/map.svg')?>" class="header__left__btn__ico">
                <div class="header__left__btn__title">Схема проезда</div>
              </a>
              <div class="header__left__btn__schedule">
              <?php
                foreach($features as $feature):
                  $schedule = get_fields($feature->ID)['schedule']; ?>
                  <?php echo $schedule;?>
                 <?php endforeach; 
              ?>
              </div>
            </div>
            <div class="header__center">
              <img src="<?php echo bjorn_get_image('header/logo-title.svg')?>" class="header__logo-title">
              <img src="<?php echo bjorn_get_image('header/logo.svg')?>" class="header__logo">
            </div>
            <div class="header__right">
              <a href="tel:<?php
              foreach($features as $feature):
              $phone = get_fields($feature->ID)['phone']; 
              echo $phone;
              endforeach; 
              ?> " class="header__right__phone">
              <?php
              foreach($features as $feature):
              $phone = get_fields($feature->ID)['phone']; 
              echo $phone;
              endforeach; 
              ?>  
              </a>
              <div class="header__right__btn">Заказать звонок</div>
              <div class="header__right__social">
                <a href="
              <?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['whatsapp']; 
              echo $gets;
              endforeach; 
              ?>
                " class="header__right__social__link" id="whatsapp__link">
                  <img src="<?php echo bjorn_get_image('header/whatsapp.svg')?>" class="header__right__social__icon">
                </a>
                <a href="
              <?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['telegram']; 
              echo $gets;
              endforeach; 
              ?>
                " class="header__right__social__link" id="telegram__link">
                  <img src="<?php echo bjorn_get_image('header/telegram.svg')?>" class="header__right__social__icon">
                </a>
                <a href="
              <?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['viber']; 
              echo $gets;
              endforeach; 
              ?>
                " class="header__right__social__link" id="viber__link">
                  <img src="<?php echo bjorn_get_image('header/viber.svg')?>" class="header__right__social__icon">
                </a>
                <a href="
              <?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['instagram']; 
              echo $gets;
              endforeach; 
              ?> " 
              class="header__right__social__link" id="instagram__link">
                  <img src="<?php echo bjorn_get_image('header/instagram.svg')?>" class="header__right__social__icon">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a href="#header" class="btn-top">
      <img src="<?php echo bjorn_get_image('icons/top.svg')?>">
    </a>
    <img src="<?php echo bjorn_get_image('icons/callback.svg')?>" class="callback-btn">
  </header>
  <nav class="main-menu">
    <ul class="main-menu__list">
      <li class="main-menu__item">
        <a href="/" class="main-menu__link">Главная</a>
      </li>
      <li class="main-menu__item">
        <a href="../#services" class="main-menu__link">Услуги и цены</a>
      </li>
      <li class="main-menu__item">
        <a href="../#sale" class="main-menu__link">Акции</a>
      </li>
      <li class="main-menu__item">
        <a href="../#reviews" class="main-menu__link">Отзывы</a>
      </li>
      <li class="main-menu__item">
        <a href="../#contacts" class="main-menu__link">Контакты</a>
      </li>
    </ul>
     <div class="menu__mobile">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="menu__mobile__flex">
              <a href="/">
                <img src="<?php echo bjorn_get_image('header/logo-title.svg')?>" class="menu__mobile__flex__icon">
              </a>
              <div class="menu__mobile__flex__btn">
                <div class="menu-icon"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>