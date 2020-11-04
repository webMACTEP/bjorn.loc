<?php get_header(); ?>
  <?php
    $features = get_posts([
    'post_type' => 'features',
     'orderby'   => 'date',
     'order'     => 'DESC'
  ]);
  ?>
  <section class="slider">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="slider__container">
            <div class="slider__main">
              <div class="slider__slide">
                <div class="slider__left">
                  <div class="slider__left__title">
                    Каждое 3 ТО<br> 
                    <strong class="strong2">БЕСПЛАТНО</strong><br> 
                    по работам
                  </div>
                  <ul class="slider__left__list">
                    <li class="slider__left__item">Замена масла</li>
                    <li class="slider__left__item">Замена 3-х фильтров</li>
                    <li class="slider__left__item">Диагностика подвески</li>
                  </ul>
                </div>
              </div>
              <div class="slider__slide">
                <div class="slider__left">
                  <div class="slider__left__title">
                    Каждое 4 ТО<br> 
                    <strong class="strong2">БЕСПЛАТНО</strong><br> 
                    по работам
                  </div>
                  <ul class="slider__left__list">
                    <li class="slider__left__item">Замена масла</li>
                    <li class="slider__left__item">Замена 3-х фильтров</li>
                    <li class="slider__left__item">Диагностика подвески</li>
                  </ul>
                </div>
              </div>
              <div class="slider__slide">
                <div class="slider__left">
                  <div class="slider__left__title">
                    Каждое 5 ТО<br> 
                    <strong class="strong2">БЕСПЛАТНО</strong><br> 
                    по работам
                  </div>
                  <ul class="slider__left__list">
                    <li class="slider__left__item">Замена масла</li>
                    <li class="slider__left__item">Замена 3-х фильтров</li>
                    <li class="slider__left__item">Диагностика подвески</li>
                  </ul>
                </div>
              </div>
            </div>
            <picture>
                <source type="image/webp" srcset="<?php echo bjorn_get_image('slider/car.webp')?>">
                <source type="image/png" srcset="<?php echo bjorn_get_image('slider/car.png')?>">
                <img src="<?php echo bjorn_get_image('slider/car.webp')?>" class="slider__car__img">
            </picture>
            <picture>
              <source type="image/webp" srcset="<?php echo bjorn_get_image('slider/leans.webp')?>">
              <source type="image/png" srcset="<?php echo bjorn_get_image('slider/leans.png')?>">
              <img src="<?php echo bjorn_get_image('slider/leans.webp')?>" class="slider__car__leans slider__car__leans__left">
              <img src="<?php echo bjorn_get_image('slider/leans.webp')?>" class="slider__car__leans slider__car__leans__right">  
            </picture>    
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="advantages">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="advantages__title">
                          <?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['titleAdvantages'];
              echo $gets;
              endforeach; 
              ?>
          </div>
          <div class="advantages__subtitle">
              <?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['subtitleAd'];
              echo $gets;
              endforeach; 
              ?>
          </div>
              <?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['textAdvantages'];
              echo $gets;
              endforeach; 
              ?>
        </div>
      </div>
    </div>
  </section>
  <section class="brands">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="brands__wrapp">
            <div class="brands__text">
              Марки а/м
              с которыми мы
              работаем
            </div>
            <div class="brands__flex">
              <img src="<?php echo bjorn_get_image('brands/1.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/2.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/3.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/4.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/5.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/6.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/7.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/8.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/9.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/10.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/11.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/12.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/13.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/14.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/15.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/16.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/17.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/18.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/19.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/20.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/21.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/22.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/23.svg')?>" class="brands__icon">
              <img src="<?php echo bjorn_get_image('brands/24.svg')?>" class="brands__icon">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="services__title">Услуги и цены <span style="color:#498DD8;"><br class="none">Bjorn Motors</span></div>
          <div class="services__subtitle">Действуют скидки, поэтому точную цену уточняйте у мастера-приёмщика</div>
          <input type="text" class="services__search__input" placeholder="Поиск услуги..." id="myInput">
          <div class="services__flex">
            <nav class="services__menu">
              <ul class="services__menu__list">
                  <?php
                    $terms = get_terms([
                        'taxonomy' => 'product-category',
                        'hide_empty' => false
                    ]);     
                  ?>
                <li class="services__menu__item services__btn1">
                  <img src="<?php echo bjorn_get_image('services/6.svg')?>" class="services__menu__icon">
                  <div class="services__menu__title">
                  <?php 
                   echo $terms[0]->name;
                  ?>
                  </div>
                </li>
                <li class="services__menu__item services__btn2">
                  <img src="<?php echo bjorn_get_image('services/5.svg')?>" class="services__menu__icon">
                  <div class="services__menu__title">
                  <?php 
                   echo $terms[5]->name;
                  ?>
                  </div>
                </li>
                <li class="services__menu__item services__btn3">
                  <img src="<?php echo bjorn_get_image('services/4.svg')?>" class="services__menu__icon">
                  <div class="services__menu__title">
                    <?php 
                     echo $terms[1]->name;
                    ?>
                  </div>
                </li>
                <li class="services__menu__item services__btn4">
                  <img src="<?php echo bjorn_get_image('services/3.svg')?>" class="services__menu__icon">
                  <div class="services__menu__title">
                    <?php 
                     echo $terms[3]->name;
                    ?>
                  </div>
                </li>
                <li class="services__menu__item services__btn5">
                  <img src="<?php echo bjorn_get_image('services/2.svg')?>" class="services__menu__icon">
                  <div class="services__menu__title">
                    <?php 
                     echo $terms[2]->name;
                    ?>
                  </div>
                </li>
                <li class="services__menu__item services__btn6">
                  <img src="<?php echo bjorn_get_image('services/1.svg')?>" class="services__menu__icon">
                  <div class="services__menu__title">
                    <?php 
                     echo $terms[4]->name;
                    ?>
                  </div>
                </li>
              </ul>
            </nav>
            <div class="services__list servicer__list-fixed">
              <img src="<?php echo bjorn_get_image('icons/close.svg')?>" class="services__list__close">
              <div class="services__list__wrapp services__list1">
              <?php
                $products_query = new WP_Query([
                  'post_type' => 'products',
                  'product-category' => 'diag'
                ]);
                $products = $products_query->posts;
                foreach($products as $prod):
                  $title = $prod->post_title;
                  $price = get_fields($prod->ID)['price'];
                echo
                '<div class="services__list__item">
                  <div class="services__list__title">'.$title.'</div>
                  <div class="services__list__price">'.$price.' р</div>
                </div>';
                endforeach; ?>
              </div>
              <div class="services__list__wrapp services__list2">
              <?php
                $products_query = new WP_Query([
                  'post_type' => 'products',
                  'product-category' => 'transmiss'
                ]);
                $products = $products_query->posts;
                foreach($products as $prod):
                  $title = $prod->post_title;
                  $price = get_fields($prod->ID)['price'];
                echo
                '<div class="services__list__item">
                  <div class="services__list__title">'.$title.'</div>
                  <div class="services__list__price">'.$price.' р</div>
                </div>';
                endforeach; ?>
              </div>
              <div class="services__list__wrapp services__list3">
              <?php
                $products_query = new WP_Query([
                  'post_type' => 'products',
                  'product-category' => 'pokras'
                ]);
                $products = $products_query->posts;
                foreach($products as $prod):
                  $title = $prod->post_title;
                  $price = get_fields($prod->ID)['price'];
                echo
                '<div class="services__list__item">
                  <div class="services__list__title">'.$title.'</div>
                  <div class="services__list__price">'.$price.' р</div>
                </div>';
                endforeach; ?>
              </div>
              <div class="services__list__wrapp services__list4">
              <?php
                $products_query = new WP_Query([
                  'post_type' => 'products',
                  'product-category' => 'shod'
                ]);
                $products = $products_query->posts;
                foreach($products as $prod):
                  $title = $prod->post_title;
                  $price = get_fields($prod->ID)['price'];
                echo
                '<div class="services__list__item">
                  <div class="services__list__title">'.$title.'</div>
                  <div class="services__list__price">'.$price.' р</div>
                </div>';
                endforeach; ?>
              </div>
              <div class="services__list__wrapp services__list5">
              <?php
                $products_query = new WP_Query([
                  'post_type' => 'products',
                  'product-category' => 'remont'
                ]);
                $products = $products_query->posts;
                foreach($products as $prod):
                  $title = $prod->post_title;
                  $price = get_fields($prod->ID)['price'];
                echo
                '<div class="services__list__item">
                  <div class="services__list__title">'.$title.'</div>
                  <div class="services__list__price">'.$price.' р</div>
                </div>';
                endforeach; ?>
              </div>
              <div class="services__list__wrapp services__list6">
              <?php
                $products_query = new WP_Query([
                  'post_type' => 'products',
                  'product-category' => 'tormoz'
                ]);
                $products = $products_query->posts;
                foreach($products as $prod):
                  $title = $prod->post_title;
                  $price = get_fields($prod->ID)['price'];
                echo
                '<div class="services__list__item">
                  <div class="services__list__title">'.$title.'</div>
                  <div class="services__list__price">'.$price.' р</div>
                </div>';
                endforeach; ?>
              </div>
            </div>
            <form action="" class="services__form" method="post" autocomplete="off">
              <div class="services__form__wrapp">
                <div class="services__form__title">Узнайте стоимость ремонта за 10 мин.</div>
                <div class="services__form__label">Номер вашего телефона</div>
                <input type="hidden" name="titleform" value="Заявка Bjorn 'Узнать стоимость ремонта'">
                <input type="hidden" name="maillink" value="<?php
                  foreach($features as $feature):
                  $gets = get_fields($feature->ID)['mail']; 
                  echo $gets;
                  endforeach;
                ?>">
                <input type="text" class="services__form__input phone" name="phone" required placeholder="*обязательно">
                <div class="services__form__label">VIN - номер автомобиля (17 знаков)</div>
                <input type="text" class="services__form__input" name="vin" placeholder="необязательно">
                <div class="services__form__label">Опишите неисправность</div>
                <textarea required placeholder="*обязательно" name="comment" class="services__form__textarea"></textarea>
                <button class="services__form__btn" type="submit">
                  <span class="services__form__btn__text">
                    Узнать стоимость
                  </span>
                </button>
              </div>
              <img src="<?php echo bjorn_get_image('services/phone.png')?>" class="services__form__bg">
            </form>
          </div>
          <div class="services__btn">
            <div class="services__btn__flex">
              <img src="<?php echo bjorn_get_image('services/plus.svg')?>" class="services__btn__icon">
              <div class="sercives__btn__text">
                Записаться на ремонт
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sale" id="sale">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="sale__top">
            <div class="sale__left">
              <div class="sale__left__title">Акция месяца</div>
              <div class="sale__left__subtitle">Снижаем цены на ремонт АКПП в августе на 20%</div>
              <div class="sale__timer">
                <div class="sale__timer__item countdown">
                  <div class="sale__timer__item__box">
                    <div class="sale__timer__item__num days">00</div>
                    <div class="sale__timer__item__text">дней</div>
                  </div>
                  <div class="sale__timer__item__box">
                    <div class="sale__timer__item__num hours">08</div>
                    <div class="sale__timer__item__text">часов</div>
                  </div>
                  <div class="sale__timer__item__box">
                    <div class="sale__timer__item__num minutes">17</div>
                    <div class="sale__timer__item__text">минут</div>
                  </div>
                </div>
                <div class="sale__timer__item">
                  <div class="sale__timer__item__label">
                    Скидка <s>10%</s> <span style="color: #4AC936;">20%</span>
                  </div>
                </div>
              </div>
              <div class="sale__left__btn">Записаться</div>
            </div>
            <div class="sale__right">
              <img src="<?php echo bjorn_get_image('sale/motor.png')?>" class="sale__right__img">
            </div>
          </div>
        </div>
      </div>
      <div class="row sale__bottom">
        <div class="col-12">
          <div class="sale__title">Текущие акции</div>
          <div class="sale__subtitle">Не имей 100 рублей, а имей 100 друзей</div>
        </div>
      </div>
    </div>
    <div class="container sale__cont">
      <div class="row sale__slider">
        <div class="col-sm-12 col-md-4">
          <div class="sale__box sale__box1">
            <div class="sale__box__item">
              <div class="sale__box__title">
                Диагностика по 75 <br>
                пунктам бесплатно при <br>
                первом посещении!
              </div>
              <div class="sale__box__btn">Записаться</div>
            </div>
          </div>  
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="sale__box sale__box2">
            <div class="sale__box__item">
              <div class="sale__box__title">
                Регулировка сход-развала <br>
                одна ось - 1500р. <br>
                две оси - 2400р.
              </div>
              <div class="sale__box__btn">Записаться</div>
            </div>
          </div>  
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="sale__box sale__box3">
            <div class="sale__box__item">
              <div class="sale__box__title">
                Гарантия <br>
                на все виды работ <br>
                1 год
              </div>
              <div class="sale__box__btn">Записаться</div>
            </div>
          </div>  
        </div>
      </div>
    </div>
  </section>
  <section class="team">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="team__top">
            <div class="team__left">
              <div class="team__left__title">
                <?php
                  foreach($features as $feature):
                  $teamTitle = get_fields($feature->ID)['teamTitle']; 
                  echo $teamTitle;
                  endforeach;
                ?>
              </div>
              <div class="team__left__subtitle">
                <?php
                  foreach($features as $feature):
                  $text = get_fields($feature->ID)['teamSubtitle']; 
                  echo $text;
                  endforeach;
                ?>
              </div>
            </div>
            <div class="team__right">
              <div class="team__right__flex">
                <div class="team__right__line">
                  <a data-fancybox="team__gallery" href="<?php echo bjorn_get_image('team/1.png')?>">
                    <img src="<?php echo bjorn_get_image('team/1.png')?>" class="team__ava">
                  </a>
                  <a data-fancybox="team__gallery" href="<?php echo bjorn_get_image('team/2.png')?>">
                    <img src="<?php echo bjorn_get_image('team/2.png')?>" class="team__ava">
                  </a>
                  <a data-fancybox="team__gallery" href="<?php echo bjorn_get_image('team/3.png')?>">
                    <img src="<?php echo bjorn_get_image('team/3.png')?>" class="team__ava">
                  </a>
                  <a data-fancybox="team__gallery" href="<?php echo bjorn_get_image('team/4.png')?>">
                    <img src="<?php echo bjorn_get_image('team/4.png')?>" class="team__ava">
                  </a>
                </div>
                <div class="team__right__line">
                  <a data-fancybox="team__gallery" href="<?php echo bjorn_get_image('team/5.png')?>">
                    <img src="<?php echo bjorn_get_image('team/5.png')?>" class="team__ava">
                  </a>
                  <a data-fancybox="team__gallery" href="<?php echo bjorn_get_image('team/6.png')?>">
                    <img src="<?php echo bjorn_get_image('team/6.png')?>" class="team__ava">
                  </a>
                  <a data-fancybox="team__gallery" href="<?php echo bjorn_get_image('team/7.png')?>">
                    <img src="<?php echo bjorn_get_image('team/7.png')?>" class="team__ava">
                  </a>
                  <a data-fancybox="team__gallery" href="<?php echo bjorn_get_image('team/8.png')?>">
                    <img src="<?php echo bjorn_get_image('team/8.png')?>" class="team__ava">
                  </a>
                </div>
                <div class="team__right__line">
                  <a data-fancybox="team__gallery" href="<?php echo bjorn_get_image('team/9.png')?>">
                    <img src="<?php echo bjorn_get_image('team/9.png')?>" class="team__ava">
                  </a>
                  <a data-fancybox="team__gallery" href="<?php echo bjorn_get_image('team/10.png')?>">
                    <img src="<?php echo bjorn_get_image('team/10.png')?>" class="team__ava">
                  </a>
                  <a data-fancybox="team__gallery" href="<?php echo bjorn_get_image('team/11.png')?>">
                    <img src="<?php echo bjorn_get_image('team/11.png')?>" class="team__ava">
                  </a>
                  <a data-fancybox="team__gallery" href="<?php echo bjorn_get_image('team/12.png')?>">
                    <img src="<?php echo bjorn_get_image('team/12.png')?>" class="team__ava">
                  </a>
              
                </div>
              </div>
            </div>
          </div>
          <div class="team__bottom">
            <div class="team__bottom__box">
              <div class="team__item">
                <img src="<?php echo bjorn_get_image('team/1.svg')?>" class="team__item__icon">
                <div class="team__item__title">
                <?php
                  foreach($features as $feature):
                  $text = get_fields($feature->ID)['teamAdvn1']; 
                  echo $text;
                  endforeach;
                ?>
                </div>
              </div>
              <div class="team__bottom__text">
                <?php
                  foreach($features as $feature):
                  $text = get_fields($feature->ID)['teamAdvntext1']; 
                  echo $text;
                  endforeach;
                ?>
              </div>
            </div>
            <div class="team__bottom__box">
              <div class="team__item">
                <img src="<?php echo bjorn_get_image('team/2.svg')?>" class="team__item__icon">
                <div class="team__item__title">
                <?php
                  foreach($features as $feature):
                  $text = get_fields($feature->ID)['teamAdvn2']; 
                  echo $text;
                  endforeach;
                ?>
                </div>
              </div>
              <div class="team__bottom__text">
                <?php
                  foreach($features as $feature):
                  $text = get_fields($feature->ID)['teamAdvntext2']; 
                  echo $text;
                  endforeach;
                ?>
              </div>
            </div>
            <div class="team__bottom__box">
              <div class="team__item">
                <img src="<?php echo bjorn_get_image('team/3.svg')?>" class="team__item__icon">
                <div class="team__item__title">
                <?php
                  foreach($features as $feature):
                  $text = get_fields($feature->ID)['teamAdvn3']; 
                  echo $text;
                  endforeach;
                ?>
                </div>
              </div>
              <div class="team__bottom__text">
                <?php
                  foreach($features as $feature):
                  $text = get_fields($feature->ID)['teamAdvntext3']; 
                  echo $text;
                  endforeach;
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="about__flex">
            <div class="about__left">
              <div class="about__title">
                <?php
                  foreach($features as $feature):
                  $text = get_fields($feature->ID)['titleAbout']; 
                  echo $text;
                  endforeach;
                ?>
              </div>
              <div class="about__text">
                <?php
                  foreach($features as $feature):
                  $text = get_fields($feature->ID)['textAbout']; 
                  echo $text;
                  endforeach;
                ?>
              </div>
              <img src="<?php echo bjorn_get_image('about/bear.svg')?>" class="about__left__img">
            </div>
            <div class="about__right">
              <img src="
                <?php 
                  foreach($features as $feature):
                  $text = get_fields($feature->ID)['imgAbout']; 
                  echo $text;
                  endforeach;
                ?>              
              " class="about__right__img">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="examples">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="examples__title">
                <?php
                foreach($features as $feature):
                $gets = get_fields($feature->ID)['titleExamples']; 
                echo $gets; 
                endforeach; 
                ?> 
          </div>
          <div class="examples__subtitle">
                <?php
                foreach($features as $feature):
                $gets = get_fields($feature->ID)['subtitleExamples']; 
                echo $gets; 
                endforeach; 
                ?> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-lg-4">
          <div class="examples__item">
            <a data-fancybox="examples__gallery" href="<?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['imgExamples1']; 
              echo $gets; 
              endforeach; 
              ?>">
              <img src="<?php echo bjorn_get_image('icons/zoom.svg')?>" class="fancy__zoom">
              <img src="
              <?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['imgExamples1']; 
              echo $gets; 
              endforeach; 
              ?> 
              " class="examples__img">
            </a>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="examples__item">
            <a data-fancybox="examples__gallery" href="<?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['imgExamples2']; 
              echo $gets; 
              endforeach; 
              ?>">
              <img src="<?php echo bjorn_get_image('icons/zoom.svg')?>" class="fancy__zoom">
              <img src="
              <?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['imgExamples2']; 
              echo $gets; 
              endforeach; 
              ?> 
              " class="examples__img">
            </a>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="examples__item">
            <a data-fancybox="examples__gallery" href="<?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['imgExamples3']; 
              echo $gets; 
              endforeach; 
              ?>">
              <img src="<?php echo bjorn_get_image('icons/zoom.svg')?>" class="fancy__zoom">
              <img src="
              <?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['imgExamples3']; 
              echo $gets; 
              endforeach; 
              ?> 
              " class="examples__img">
            </a>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="examples__item">
            <a data-fancybox="examples__gallery" href="<?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['imgExamples4']; 
              echo $gets; 
              endforeach; 
              ?>">
              <img src="<?php echo bjorn_get_image('icons/zoom.svg')?>" class="fancy__zoom">
              <img src="
              <?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['imgExamples4']; 
              echo $gets; 
              endforeach; 
              ?> 
              " class="examples__img">
            </a>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="examples__item">
            <a data-fancybox="examples__gallery" href="<?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['imgExamples5']; 
              echo $gets; 
              endforeach; 
              ?>">
              <img src="<?php echo bjorn_get_image('icons/zoom.svg')?>" class="fancy__zoom">
              <img src="
              <?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['imgExamples5']; 
              echo $gets; 
              endforeach; 
              ?> 
              " class="examples__img">
            </a>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="examples__item">
            <a data-fancybox="examples__gallery" href="<?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['imgExamples6']; 
              echo $gets; 
              endforeach; 
              ?>">
              <img src="<?php echo bjorn_get_image('icons/zoom.svg')?>" class="fancy__zoom">
              <img src="
              <?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['imgExamples6']; 
              echo $gets; 
              endforeach; 
              ?> 
              " class="examples__img">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="reviews" id="reviews">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="reviews__flex">
            <div class="reviews__title">Отзывы</div>
            <div class="reviews__right">
              <div class="reviews__stars">
                <img src="<?php echo bjorn_get_image('reviews/star.svg')?>" class="reviews__star">
                <img src="<?php echo bjorn_get_image('reviews/star.svg')?>" class="reviews__star">
                <img src="<?php echo bjorn_get_image('reviews/star.svg')?>" class="reviews__star">
                <img src="<?php echo bjorn_get_image('reviews/star.svg')?>" class="reviews__star">
                <img src="<?php echo bjorn_get_image('reviews/star.svg')?>" class="reviews__star">
              </div>
              <div class="reviews__right__text">настоящие</div>
            </div>
          </div>
          <div class="reviews__subtitle">
            Лучшая оценка нашей работы - это отзывы наших клиентов!
          </div>
          <div class="reviews__slider">
            <div class="reivews__slide">
              <div class="reviews__slide__ava__wrapp">
                <img src="<?php echo bjorn_get_image('reviews/ava1.png')?>" class="reviews__slide__ava">
              </div>
              <div class="reviews__slide__text">
                Приезжал делать сход-развал. Быстро и качественно. Профессиональное оборудование. Сервис чистый и акуратный. Понравилось обслуживание. Ребята молодые, шустрые.
              </div>
              <div class="reviews__slider__name">Сергей Смирнов</div>
            </div>
            <div class="reivews__slide">
              <div class="reviews__slide__ava__wrapp">
                <img src="<?php echo bjorn_get_image('reviews/ava1.png')?>" class="reviews__slide__ava">
              </div>
              <div class="reviews__slide__text">
                Приезжал делать сход-развал. Быстро и качественно. Профессиональное оборудование. Сервис чистый и акуратный. Понравилось обслуживание. Ребята молодые, шустрые.
              </div>
              <div class="reviews__slider__name">Сергей Смирнов</div>
            </div>
            <div class="reivews__slide">
              <div class="reviews__slide__ava__wrapp">
                <img src="<?php echo bjorn_get_image('reviews/ava1.png')?>" class="reviews__slide__ava">
              </div>
              <div class="reviews__slide__text">
                Приезжал делать сход-развал. Быстро и качественно. Профессиональное оборудование. Сервис чистый и акуратный. Понравилось обслуживание. Ребята молодые, шустрые.
              </div>
              <div class="reviews__slider__name">Сергей Смирнов</div>
            </div>
            <div class="reivews__slide">
              <div class="reviews__slide__ava__wrapp">
                <img src="<?php echo bjorn_get_image('reviews/ava1.png')?>" class="reviews__slide__ava">
              </div>
              <div class="reviews__slide__text">
                Приезжал делать сход-развал. Быстро и качественно. Профессиональное оборудование. Сервис чистый и акуратный. Понравилось обслуживание. Ребята молодые, шустрые.
              </div>
              <div class="reviews__slider__name">Сергей Смирнов</div>
            </div>
            <div class="reivews__slide">
              <div class="reviews__slide__ava__wrapp">
                <img src="<?php echo bjorn_get_image('reviews/ava1.png')?>" class="reviews__slide__ava">
              </div>
              <div class="reviews__slide__text">
                Приезжал делать сход-развал. Быстро и качественно. Профессиональное оборудование. Сервис чистый и акуратный. Понравилось обслуживание. Ребята молодые, шустрые.
              </div>
              <div class="reviews__slider__name">Сергей Смирнов</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="social">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="social__title">Мы в социальных сетях</div>
          <div class="social__subtitle"># Bjorn_Motors</div>
          <div class="social__gallery">
            <div class="social__gallery__item">
              <a data-fancybox href="https://www.youtube.com/watch?v=CptDGw4X3bM">
                <img src="<?php echo bjorn_get_image('icons/play.svg')?>" class="fancy__play fancy__zoom">
                <img src="<?php echo bjorn_get_image('social/1.jpg')?>" class="social__img">
              </a>
            </div>
            <div class="social__gallery__item">
              <a data-fancybox="social__gallery" href="<?php echo bjorn_get_image('social/2.jpg')?>">
                <img src="<?php echo bjorn_get_image('icons/zoom.svg')?>" class="fancy__zoom">
                <img src="<?php echo bjorn_get_image('social/2.jpg')?>" class="social__img">
              </a>
            </div>
            <div class="social__gallery__item">
              <a data-fancybox="social__gallery" href="<?php echo bjorn_get_image('social/3.jpg')?>">
                <img src="<?php echo bjorn_get_image('icons/zoom.svg')?>" class="fancy__zoom">
                <img src="<?php echo bjorn_get_image('social/3.jpg')?>" class="social__img">
              </a>
            </div>
            <div class="social__gallery__item">
              <a data-fancybox="social__gallery" href="<?php echo bjorn_get_image('social/4.jpg')?>">
                <img src="<?php echo bjorn_get_image('icons/zoom.svg')?>" class="fancy__zoom">
                <img src="<?php echo bjorn_get_image('social/4.jpg')?>" class="social__img">
              </a>
            </div>
            <div class="social__gallery__item">
              <a data-fancybox="social__gallery" href="<?php echo bjorn_get_image('social/5.jpg')?>">
                <img src="<?php echo bjorn_get_image('icons/zoom.svg')?>" class="fancy__zoom">
                <img src="<?php echo bjorn_get_image('social/5.jpg')?>" class="social__img">
              </a>
            </div>
            <div class="social__gallery__item">
              <a data-fancybox href="https://www.youtube.com/watch?v=CptDGw4X3bM">
                <img src="<?php echo bjorn_get_image('icons/play.svg')?>" class="fancy__play fancy__zoom">
                <img src="<?php echo bjorn_get_image('social/6.jpg')?>" class="social__img">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="feedback">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form action="" class="feedback__form" method="post" autocomplete="off">
            <div class="feedback__form__title">
              Ваши предложения и пожелания руководству техцентра
            </div>
            <div class="feedback__form__subtitle">
              Мы ценим каждого клиента и для нас важно ваше мнение
            </div>
            <div class="feeedback__form__flex">
              <div class="feedback__form__left">
                                <input type="hidden" name="maillink" value="<?php
                  foreach($features as $feature):
                  $gets = get_fields($feature->ID)['mail']; 
                  echo $gets;
                  endforeach;
                ?>">
                <input type="hidden" name="titleform" value="Заявка Bjorn 'Предложение пользователя'">
                <div class="feedback__form__label">Ваше имя</div>
                <input type="text" class="feedback__form__input" name="name" required placeholder="*обязательно">
                <div class="feedback__form__label">Номер вашего телефона</div>
                <input type="text" class="feedback__form__input" name="phone" required placeholder="*обязательно">
              </div>
              <div class="feedback__form__right">
                <textarea class="feedback__form__textarea" name="opinion" required placeholder="*напишите здесь ваши предложения"></textarea>
              </div>
            </div>
            <button class="feedback__form__btn" type="submit">Отправить</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="contacts" id="contacts">
    <div class="contacts__wrapp">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="contacts__box">
                <div class="contacts__title">Контакты</div>
                <div class="contacts__address">
                  Москва, ул.Уличная, д.2 стр.3
                </div>
                <a href="tel:+74954774747" class="contacts__tel">
                <?php
                foreach($features as $feature):
                $phone = get_fields($feature->ID)['phone']; 
                echo $phone;
                endforeach; 
                ?>  
                </a>
                <a href="mailto:info@bjorn-motors.ru" class="contacts__mail">info@bjorn-motors.ru</a>
                <div class="contacts__socials">
                  <a href="tel:<?php
              foreach($features as $feature):
              $phone = get_fields($feature->ID)['phone']; 
              echo $phone;
              endforeach; 
              ?> ">
                    <img src="<?php echo bjorn_get_image('icons/telephone.svg')?>" class="contacts__phone">
                  </a>
                  <a href="
                  <?php
                  foreach($features as $feature):
                  $gets = get_fields($feature->ID)['whatsapp']; 
                  echo $gets;
                  endforeach; 
                  ?>
                  ">
                    <img src="<?php echo bjorn_get_image('header/whatsapp-hover.svg')?>" class="contacts__social">
                  </a>
                  <a href="
                  <?php
                  foreach($features as $feature):
                  $gets = get_fields($feature->ID)['telegram']; 
                  echo $gets;
                  endforeach; 
                  ?>
                  ">
                    <img src="<?php echo bjorn_get_image('header/telegram-hover.svg')?>" class="contacts__social">
                  </a>
                  <a href="
                  <?php
                  foreach($features as $feature):
                  $gets = get_fields($feature->ID)['viber']; 
                  echo $gets;
                  endforeach; 
                  ?>
                  ">
                    <img src="<?php echo bjorn_get_image('header/viber-hover.svg')?>" class="contacts__social">
                  </a>
                  <a href="
                  <?php
                  foreach($features as $feature):
                  $gets = get_fields($feature->ID)['instagram']; 
                  echo $gets;
                  endforeach; 
                  ?>
                  ">
                    <img src="<?php echo bjorn_get_image('header/instagram-hover.svg')?>" class="contacts__social">
                  </a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contacts__map__overlay"></div>
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A238cc26bf6bc62c6ec218ed43ac8b13eac2ca2f1e2f13dc53f1bd6bf2d539415&amp;source=constructor;scroll=false;" width="100%" height="400" frameborder="0" class="contacts__map"></iframe>
  </section>
<?php get_footer(); ?>