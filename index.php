<?php

require('recaptcha.php');

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="swiper.min.css"> 
    <link rel="stylesheet" href="build/css/style.min.css">
    <title>Виталий Ильин</title>
  </head>

  <body>

    <main>

      <!-- Меню навигации -->
      <header id="header-major">

        <nav class="header-major__nav">
          <a href="#about-me"  class="header-major__nav__link"><h2>Обо мне</h2></a>
          <a href="#skills"  class="header-major__nav__link"><h2>Навыки</h2></a>
          <a href="#education"  class="header-major__nav__link"><h2>Образование</h2></a>
          <a href="#work"  class="header-major__nav__link"><h2>Место работы</h2></a>
          <a href="#feedback"  class="header-major__nav__link"><h2>Обратная связь</h2></a>
        </nav>

        <div class="header-major__border-burger"><div class="header-major__border-burger__icon"><span class="header-major__border-burger__icon__span"></span></div></div>
        <!-- end  Меню навигации -->
      
      </header>
        

      <section id="section-header">

        <!-- Фон main-header -->
        <div class="section-header__filter"></div>
        <video preload="auto" loop autoplay muted playsinline>
          <source src="video.mp4" type="video/mp4">
          <source src="video.webm" type="video/webm">
          <source src="video.ogv" type="video/ogv">
        </video><!-- end Фон main-header -->
    
        <!-- Контент  main-header -->
        <div class="section-header__wrapper-content">
          <figure class="section-header__wrapper-content__photo">
            <img src="build/img/header-major__my-photo.png" alt="Мое фото">
            <figcaption class="section-header__wrapper-content__photo__description"><h1>Ильин<br>Виталий<br>Александрович</h1></figcaption>
          </figure>
          <div class="section-header__wrapper-content__title">
            <h1>Здравствуйте!</h1>
            <h2>Мне 26 лет и я начинающий Frontend разработчик</h2>
          </div>
        </div><!-- end Контент  main-header -->

        <!-- стрелка скролла вниз -->
        <a href="#about-me"  class="section-header__arrow-down"><img src="build/img/header-major__icon-arrow.svg" alt="вниз"></a>
 
      
      </section>
      

      <section id="about-me">

        <div class="container"> <!-- container - уравнительный блок, свойства находятся в page -->
          <h1>Обо мне</h1>
          <ul class="about-me__list">
            <li class="about-me__list__item">
                <div class="about-me__list__item__wrapper-icon">
                  <img src="build/img/about-me__list__item__icon.svg" alt="icon">
                </div>
                <h2>ФИО</h2>
                <p>Ильин Виталий Александрович</p>
            </li>

            <li class="about-me__list__item">
              <div class="about-me__list__item__wrapper-icon">
                <img src="build/img/about-me__list__item__icon-calendar.svg" alt="icon-calendar">
              </div>
                <h2>Возраст</h2>
                <p>26 лет</p>
            </li>

            <li class="about-me__list__item">
              <div class="about-me__list__item__wrapper-icon">
                <img src="build/img/about-me__list__item__icon-telephone.svg" alt="icon-telephone">
              </div>
                <h2>Номер телефона</h2>
                <a href="tel:+7(912)319-63-71"><p>+7(912)319-63-71</p></a>
            </li>

            <li class="about-me__list__item">
              <div class="about-me__list__item__wrapper-icon">
                <img src="build/img/about-me__list__item__icon-mail.svg" alt="icon-mail">
              </div>
                <h2>E-mail</h2>
                <p>vetaly-Ilin@yandex.ru</p>
            </li>

            <li class="about-me__list__item">
              <div class="about-me__list__item__wrapper-icon">
                <img src="build/img/about-me__list__item__icon-mark.svg" alt="icon-mark">
              </div>
                <h2>Город</h2>
                <p>Магнитогорск</p>
            </li>
          </ul>
        </div> 

      </section>


      <section id="skills">

        <h1>Навыки</h1>
        <div class="skills__wrapper  ">

          <!-- Swiper библиотека-->
          <div class="swiper-container">
              
            <div class="swiper-wrapper">

              <!-- Слайды -->
              <div class="swiper-slide"> 
                <h2>HTML 5</h2>
                <img src="build/img/skills__swiper-slide-background-image-HTML5.svg" alt="Фоновое изображение">
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Значение тегов HTML 5 <br> и применение их на практике</p>
                </div>
              </div>

              <div class="swiper-slide"> 
                <h2>CSS 3</h2>
                <img src="build/img/skills__swiper-slide-background-image-CSS3.svg" alt="Фоновое изображение">
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Кроссбраузерная верстка</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Адаптивная верстка</p>
                </div>
              </div>

              <div class="swiper-slide"> 
                <h2>javaScript</h2>
                <img src="build/img/skills__swiper-slide-background-image-JS.svg" alt="Фоновое изображение">
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Переменные</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Условия</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Циклы</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Массивы</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Функции</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Объекты</p>
                </div>
              </div>

              <div class="swiper-slide"> 
                <h2>jQuery</h2>
                <img src="build/img/skills__swiper-slide-background-image-jquery.svg" alt="Фоновое изображение">
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Знание методов jQuery <br> и применение их на практике</p>
                </div>
              </div>

              <div class="swiper-slide"> 
                <h2>less</h2>
                <img src="build/img/skills__swiper-slide-background-image-less.svg" alt="Фоновое изображение">
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Переменные</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Вложения</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Миксины</p>
                </div>
              </div>

              <div class="swiper-slide"> 
                <h2>Gulp</h2>
                <img src="build/img/skills__swiper-slide-background-image-gulp.svg" alt="Фоновое изображение">
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Конкантинация файлов</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Автопрефикс</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Минификация файлов</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Удаление неиспользуемых файлов</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Синхронизация браузера с кодом</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Компиляция less</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Сжатие изображений</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Отслеживание изменений файлов</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Переименование файлов</p>
                </div>
              </div>
              
              <div class="swiper-slide"> 
                <h2>GIT</h2>
                <img src="build/img/skills__swiper-slide-background-image-git.svg" alt="Фоновое изображение">
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Работа с командами: <br> git status; git add; git push; git commit; git pull</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Работа с ветками: <br> git branch</p>
                </div>
              </div>

              <div class="swiper-slide"> 
                <h2>GitHub</h2>
                <img src="build/img/skills__swiper-slide-background-image-github.svg" alt="Фоновое изображение">
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Создание репозитория</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Загрузка репозитория на компьютер</p>
                </div>
                <div class="swiper-slide__text-wrapper">
                  <img src="build/img/swiper-slide-item-icon.svg" alt="checkbox">
                  <p>Применение Gist</p>
                </div>
              </div>
              
            </div> <!-- end Слайды -->

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

          </div>  <!-- END Swiper библиотека-->

          <!-- Список навыков -->
          <ul class="skills__wrapper__list"> 
            <li class="skills__wrapper__list__item">
      
              <img src="build/img/skills__wrapper__list__item__icon-flag.svg" alt="icon HTML5">
              <h2>HTML 5</h2>
            
            </li>
            <li class="skills__wrapper__list__item">
             
              <img src="build/img/skills__wrapper__list__item__icon-flag.svg" alt="icon CSS3">
              <h2>CSS 3</h2>
              
            </li>
            <li class="skills__wrapper__list__item">
            
              <img src="build/img/skills__wrapper__list__item__icon-flag.svg" alt="icon JS">
              <h2>javaScript</h2>
              
            </li>
            <li class="skills__wrapper__list__item">
              
              <img src="build/img/skills__wrapper__list__item__icon-flag.svg" alt="icon jQuery">
              <h2>jQuery</h2>
              
            </li>
            <li class="skills__wrapper__list__item">
              
              <img src="build/img/skills__wrapper__list__item__icon-flag.svg" alt="icon less">
              <h2>less</h2>
              
            </li>
            <li class="skills__wrapper__list__item">
              
              <img src="build/img/skills__wrapper__list__item__icon-flag.svg" alt="icon Gulp">
              <h2>Gulp</h2>
            
            </li>
            <li class="skills__wrapper__list__item">
            
              <img src="build/img/skills__wrapper__list__item__icon-flag.svg" alt="icon Git">
               <h2>Git</h2>
            
            </li>
            <li class="skills__wrapper__list__item">
            
                <img src="build/img/skills__wrapper__list__item__icon-flag.svg" alt="icon GitHub">
                <h2>GitHub</h2>  
                        
            </li>
          </ul> <!-- end список навыков -->
        </div> <!-- end skills__wrapper  -->

      </section>


      <section id="education">

        <div class="container">
          <h1>Образование</h1>
          <ul class="education__list">

            <li class="education__list__item">
              <h2>Магистр</h2>
              <h2>Университет</h2>
              <p>Магнитогорский государственный технический 
                университет им. Носова, г. Магнитогорск.</p>
              <h2>Направление подготовки</h2>
              <p>Наземные 
                транспортно - технологические комплексы.</p>
              <h2>Год окончания: <span>2017</span></h2>
              <img src="build/img/education__icon.svg" alt="icon">
            </li>

            <li class="education__list__item">
              <h2>Бакалавр</h2>
              <h2>Университет</h2>
              <p>Магнитогорский государственный технический университет 
                им. Г.И. Носова.</p> 
              <h2>Направление подготовки</h2>
              <p>Наземные транспортно - 
                технологические комплексы, Подъемно - транспортные  
                строительные, дорожные машины и оборудование.</p>
                <h2>Год окончания: <span>2015</span></h2>
              <img src="build/img/education__icon.svg" alt="icon">
            </li>

          </ul>
        </div>

      </section>


      <section id="work">

        <h1>Место работы</h1>
        <ul class="work__list">
          
          <!-- desktop -->
          <li class="work__list__item-left">
            <img src="build/img/work-icon-engineer.svg" alt="icon-engineer">
            <div class="work__list__item-left__wrapper-content-left">
              <h2>Инженер</h2>
              <button id="work__list__item__button-left" class="button-primery">Подробнее</button>
            </div>
            <div class="work__list__item-left__popup-left">
              <div class="work__list__item-left__popup-left__wrapper-button">
                <button id="work__list__item-left__popup-left__wrapper-button-left"  class="button-primery" tabindex="-1">Закрыть (esc)</button>
              </div>
              <div class="work__list__item-left__popup-left__wrapper-content">
                <h2>Инженер</h2>
                <p>
                  В мои должностные обязанности входит проведение экспертизы промышленной безопасности (ЭПБ) 
                  и оценка технического состояния (ОТС) подъемно транспортных машин и механизмов, проведение комплексного обследования рельсовых путей грузоподъемных кранов. 
                  Для выполнения данных работ требуется широкий объем знаний в области:<br>
                  * Неразрушающего контроля – для выявления дефектов и повреждений металлоконструкций.<br>
                  * Принципов работы и строения механизмов – для выявления дефектов и повреждений механического оборудования.<br>
                  * Технических чертежей и документации. 

                </p>
                <p>
                  При проведении данных работ я приобрел ряд качеств, а именно:<br>
                  * Умение качественно выполнять полный объем работы в экстремальных условиях, так как чаще 
                  всего грузоподъемные краны работают в среде повышенных или наоборот экстремально пониженных температурах, 
                  в запыленных помещениях, в помещениях с недостаточным освещением.<br> 
                  * Умение качественно выполнять работу с высоким уровнем ответственности, так как от качества моего 
                  обследования зависят жизни и здоровье людей работающих рядом с грузоподъемным краном или механизмом. 
                </p>
              </div>
            </div>
          </li> 

         
          <li class="work__list__item-right">
            <img src="build/img/work-icon-surveyor.svg" alt="icon-surveyor">
            <div class="work__list__item-right__wrapper-content-right">
              <h2>Геодезист</h2>
              <button id="work__list__item__button-right"  class="button-primery">Подробнее</button>
            </div>
            <div class="work__list__item-right__popup-right"> 
              <div class="work__list__item-right__popup-right__wrapper-button">
                <button id="work__list__item-right__popup-right__wrapper-button-right"  class="button-primery" tabindex="-1">Закрыть (esc)</button>
              </div>
              <div class="work__list__item-right__popup-right__wrapper-content">
                <h2>Геодезист</h2>
                <p>
                  В мои должностные обязанности входит проведение геодезической съемки 
                  на производственных объектах.  Для выполнения данных работ требуется широкий объем знаний в области:<br>
                  * Работы с тахеометром;<br>
                  * Работы с нивелиром.

                </p>
                <p>
                  При проведении данных работ я приобрел ряд качеств, а именно:<br>
                  * Умение качественно и в полном объеме выполнять высокоточные работы, по результатам которых в дальнейшем проводится  работы сторонними организациями.<br>
                  * Умение проводить качественную и кропотливую подготовку перед тем как приступить к работе.<br>
                  * Умение подстраиваться под разные условия работы и находить правильные и не стандартные решения по проведению геодезической съемки. 
                </p>
              </div>
            </div>
          </li>  <!-- end desktop -->

          <li class="work__list__center">
          
            <div class="work__list__center__item">
              <h2>Организация</h2>
              <p>
                АО “Магнитогорский ГИПРОМЕЗ” (Государственный Институт по 
                Проектированию Металлургических Заводов)
              </p>
            </div>
  
            <!-- smartphone -->
            <div class="work__list__center__item">
              <h2>Должность</h2>
              <div class="work__list__center__item__wrapper-content">
                <img src="build/img/work-icon-engineer.svg" alt="icon-engineer">
                <p>Инженер</p>
              </div>
              <div class="work__list__center__item__wrapper-content">
                <img src="build/img/work-icon-surveyor.svg" alt="icon-surveyor">
                <p>Геодезист</p>
              </div>
            </div> <!-- end  smartphone -->
  
            <div class="work__list__center__item">
              <h2>Опыт работы</h2>
              <p>4 года. С августа 2016 года <br> - по настоящее время.</p>
            </div>>
  
          </li>

        </ul> <!-- end  work__list  -->
      </section>


      <section id="feedback">

        <div class="container">
          <h1>Обратная связь</h1>

        <?php

          //проверяем, существуют ли переменные в массиве POST
          if(!isset($_POST['message'])){

        ?>

          <form action="/" method="POST" id="feedback-form">
            <textarea  id="comment" rows='10' name="message" placeholder="Буду очень благодарен если вы укажите недочеты в моем портфолио." required></textarea>
            <input  type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" >
            <div class="recaptcha-conditionality-policy"> 
              Вся информация данного сайта защищена с помощью reCAPTCHA и Google.
              Применяются<a href="https://policies.google.com/privacy"> Политика конфиденциальности</a> и 
              <a href="https://policies.google.com/terms">Условия предоставления услуг.</a>
            </div>
            <input class="button-primery" id="feedback-input" type="submit" name="submit" value="Отправить">  
          </form> <?php  } else {
            
            //показываем форму
            $message = $_POST['message'];
            $message = htmlspecialchars($message);
            $message = urldecode($message);
            $message = trim($message);
            $class = 'feedback__wrapper-text';
            
            if (mail("vetaly-Ilin@yandex.ru", "Cообщение с сайта", "В форме написан комментарий: ".$message , "From: info@портфолио-ильин.рф \r\n")){
              echo("<script>console.log('Сообщение удачно отправлено!');</script>");
              echo "<h2 style='color: white; position: absolute; width: 100%; top: 50%; left: 0; transform: translateY(-50%); text-align: center; padding: 20px 0'>сообщение отправлено</h2>";
            
            } else {
              echo("<script>console.log('Произошла ошибка. Cообщение не отправлено!');</script>");
            }
          }
          ?>

          <div class="feedback__popup-error">
            <h2>Пожалуйста напишите комментарий</h2>
          </div>

          <div class="feedback__wrapper-text">
            <h2>Спасибо за ваш комментарий!</h2>
          </div>
        </div>

      </section>
  

      <footer>
        <div class="footer-contact" tabindex="0">
          <div class="footer-contact__wrapper-icon"></div>
          <div class="footer-contact__number"> 
            <a href="tel:+7(912)319-63-71"><p>+7(912)319-63-71</p></a>
          </div>
        </div>
        
        <div class="footer-vk" tabindex="0">
          <div class="footer-vk__wrapper-icon"></div>
          <div class="footer-vk__link">
            <a href="https://vk.com/v.ilin94"><p>v.ilin94</p></a>
          </div>
        </div>

        <div class="footer-github" tabindex="0">
          <div class="footer-github__wrapper-icon"></div>
          <div class="footer-github__link">
            <a href="https://github.com/Vetal-Ilin/portfolio-new.git"><p>portfolio.git</p></a>
          </div>
        </div>
      </footer>

    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="swiper.min.js"></script>
    <script src="focus-visible.min.js"></script>
    <script src="build/js/script.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY ?>"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'}).then(function(token) {
                /*console.log(token);*/
                document.getElementById('g-recaptcha-response').value=token;
            });
        });
    </script>
  </body>
</html>
