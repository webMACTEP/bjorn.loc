  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="footer__main">
            <div class="footer__item">
              <div class="footer__logo">
                <img src="<?php echo bjorn_get_image('header/logo.svg')?>" class="footer__logo__icon">
                <img src="<?php echo bjorn_get_image('header/logo-title.svg')?>" class="footer__logo__title">
              </div>
              <div class="footer__text">
                Техцентр по обслуживанию, ремонту и тюнингу автомобилей всех марок
                <br><br>
                Работаем с <span class="footer__bold">09:00</span> до <span class="footer__bold">21:00</span><br>
                без выходных и праздников
              </div>
              <div class="footer__social">
                <a href="
              <?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['youtube']; 
              echo $gets;
              endforeach; 
              ?>" class="footer__social__link">
                  <img src="<?php echo bjorn_get_image('icons/youtube.svg')?>" class="footer__social__icon footer__youtube">
                </a>
                <a href="
              <?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['instagram']; 
              echo $gets;
              endforeach; 
              ?>
                " class="footer__social__link">
                  <img src="<?php echo bjorn_get_image('icons/instagram.svg')?>" class="footer__social__icon footer__instagram">
                </a>
                <a href="
              <?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['facebook']; 
              echo $gets;
              endforeach; 
              ?>
                " class="footer__social__link">
                  <img src="<?php echo bjorn_get_image('icons/facebook.svg')?>" class="footer__social__icon footer__facebook">
                </a>
                <a href="
              <?php
              foreach($features as $feature):
              $gets = get_fields($feature->ID)['vk']; 
              echo $gets;
              endforeach; 
              ?>                
                " class="footer__social__link">
                  <img src="<?php echo bjorn_get_image('icons/vk.svg')?>" class="footer__social__icon footer__vk">
                </a>
              </div>
            </div>
            <div class="footer__item">
              <div class="footer__name footer__name-btn1">
                <div class="footer__name__title">
                  Электрика
                </div>
                <img src="<?php echo bjorn_get_image('services/arrow.svg')?>" class="footer__name__icon footer__arrow1">
              </div>
              <ul class="footer__list footer__list1">
                <li class="footer__list__item">
                  <a href="" class="footer__link">
                    Кодирование блоков
                  </a>
                </li>
                <li class="footer__list__item">
                  <a href="" class="footer__link">
                    Программирование электронных блоков управления
                  </a>
                </li>
                <li class="footer__list__item">
                  <a href="" class="footer__link">
                    Русификация бортового компьютера
                  </a>
                </li>
                <li class="footer__list__item">
                  <a href="" class="footer__link">
                    Сканирование (считывание) ошибок
                  </a>
                </li>
                <li class="footer__list__item">
                  <a href="" class="footer__link">
                    Обновление программного обеспечения
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer__item footer__margin">
              <div class="footer__name footer__name-btn2">
                <div class="footer__name__title">
                  Ремонт двигателей
                </div>
                <img src="<?php echo bjorn_get_image('services/arrow.svg')?>" class="footer__name__icon footer__arrow2">
              </div>
              <ul class="footer__list footer__list2">
                <li class="footer__list__item">
                  <a href="" class="footer__link">
                    Кодирование блоков
                  </a>
                </li>
                <li class="footer__list__item">
                  <a href="" class="footer__link">
                    Программирование электронных блоков управления
                  </a>
                </li>
                <li class="footer__list__item">
                  <a href="" class="footer__link">
                    Русификация бортового компьютера
                  </a>
                </li>
                <li class="footer__list__item">
                  <a href="" class="footer__link">
                    Сканирование (считывание) ошибок
                  </a>
                </li>
                <li class="footer__list__item">
                  <a href="" class="footer__link">
                    Обновление программного обеспечения
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer__item footer__margin">
              <div class="footer__name footer__name-btn3">
                <div class="footer__name__title">
                  Ремонт АКПП
                </div>
                <img src="<?php echo bjorn_get_image('services/arrow.svg')?>" class="footer__name__icon footer__arrow3">
              </div>
              <ul class="footer__list footer__list3">
                <li class="footer__list__item">
                  <a href="" class="footer__link">
                    Кодирование блоков
                  </a>
                </li>
                <li class="footer__list__item">
                  <a href="" class="footer__link">
                    Программирование электронных блоков управления
                  </a>
                </li>
                <li class="footer__list__item">
                  <a href="" class="footer__link">
                    Русификация бортового компьютера
                  </a>
                </li>
                <li class="footer__list__item">
                  <a href="" class="footer__link">
                    Сканирование (считывание) ошибок
                  </a>
                </li>
              </ul>
              <div class="footer__pay">
                <img src="<?php echo bjorn_get_image('icons/visa.svg')?>" class="footer__pay__icon">
                <img src="<?php echo bjorn_get_image('icons/maestro.svg')?>" class="footer__pay__icon">
                <img src="<?php echo bjorn_get_image('icons/mastercard.svg')?>" class="footer__pay__icon">
              </div>
            </div>
          </div>
          <div class="footer__copyright">Bjorn-Motors © 2020  Все права защищены</div>
        </div>
      </div>
    </div>
  </footer>

 <?php wp_footer(); ?>

</body>
</html>