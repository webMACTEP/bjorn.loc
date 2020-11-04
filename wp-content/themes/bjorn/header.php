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
    <meta name="yandex-verification" content="7da32b230d9b5750" />
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(68416318, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/68416318" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<meta name="google-site-verification" content="D78T8ftsNqS11xww7lALyihagjQWSzLRKdbcfs4TZtc" />
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
      <button onclick="ym(68416318,'reachGoal','zvonok'); return true;" class="popup__submit" type="submit">Заказать</button>
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
      <button onclick="ym(68416318,'reachGoal','zapis'); return true;" class="popup__submit" type="submit">Записаться</button>
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
              <div class="header__left__address"><?php the_field("adress", 183);?></div>
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
    
    
    <?php function check_mobile_device() { 
    $mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);    
    // var_dump($agent);exit;
    foreach ($mobile_agent_array as $value) {    
        if (strpos($agent, $value) !== false) return true;   
    }       
    return false; 
}
$is_mobile_device = check_mobile_device();
if($is_mobile_device){  //if (isset($_GET['width']) )  {
// если переменные существуют, то выводим полученные значения на экран
echo '<a href="tel:';
the_field ("telephone", 183);
echo '"><img src="'. bjorn_get_image('icons/callback.svg') .'" class="callback-btn1"></a>';}
else { echo '<img src="'. bjorn_get_image('icons/callback.svg') .'" class="callback-btn">';}
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
