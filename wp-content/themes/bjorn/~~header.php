<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bjorn
 */

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
          <input type="hidden" name="maillink" value="<?php the_field("mail");?>">
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
          <input type="hidden" name="maillink" value="<?php the_field("mail");?>">
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
              <a href="<?php the_field("schema", 183);?>" class="header__left__btn" target="_blank">
                <img src="<?php echo bjorn_get_image('header/map.svg')?>" class="header__left__btn__ico">
                <div class="header__left__btn__title">Схема проезда</div>
              </a>
              <div class="header__left__btn__schedule">
              	<?php the_field("schedule", 183);?>
              </div>
            </div>
            <div class="header__center">
              <img src="<?php echo bjorn_get_image('header/logo-title.svg')?>" class="header__logo-title">
              <img src="<?php echo bjorn_get_image('header/logo.svg')?>" class="header__logo">
            </div>
            <div class="header__right">
              <a href="tel:<?php the_field("telephone", 183);?>" class="header__right__phone">
             	<?php the_field("telephone", 183);?>
              </a>
              <div class="header__right__btn">Заказать звонок</div>
              <div class="header__right__social">
                <a href="<?php the_field("whatsapp", 183);?>" class="header__right__social__link" target="_blank" id="whatsapp__link">
                  <img src="<?php echo bjorn_get_image('header/whatsapp.svg')?>" class="header__right__social__icon">
                </a>
                <a href="<?php the_field("telegram", 183);?>" class="header__right__social__link" target="_blank" id="telegram__link">
                  <img src="<?php echo bjorn_get_image('header/telegram.svg')?>" class="header__right__social__icon">
                </a>
                <a href="<?php the_field("viber", 183);?>" class="header__right__social__link" target="_blank" id="viber__link">
                  <img src="<?php echo bjorn_get_image('header/viber.svg')?>" class="header__right__social__icon">
                </a>
                <a href="<?php the_field("instagram", 183);?>" class="header__right__social__link" target="_blank" id="instagram__link">
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

     <?php // проверяем существование переменных $width и $height
if (isset($_GET['width']) AND isset($_GET['height']))  {
// если переменные существуют, то выводим полученные значения на экран
echo 'Ширина экрана: ' . $_GET['width'] . "<br />\n";}
else { echo 'нет ';}
?>
   
		  
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
