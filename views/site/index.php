<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Total Web Интернет-магазин';
?>
<div class="site-index">
    <?php $form = ActiveForm::begin(); ?>
    <div class="jumbotron">
        <img src="images/logo.png" alt="TOTALWEB ГЕНЕРАТОР ВАШЕЙ ПРИБЫЛИ">
        <h2>ГЕНЕРАТОР ВАШЕЙ ПРИБЫЛИ!</h2>

    </div>

    <div class="body-content">

        <div class="row text-center">
            <br><br><br><br>
            <h2 class="shop-name">TW Интернет Магазин</h2>
            <br><br><br><br>
            <p>
                <?= Html::a('Обзор услуг', ['/content/index'],
                ['class' => 'btn btn-lg btn-success',
                 'style' => ['padding' => '50px 50px', 'font-size' => '30px']]) ?>
            </p>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>

        <div class="row text-center why">
            <br><br><br><br>
            <h3 class="why-header"><b>ПОЧЕМУ МЫ?</b></h3>
            <br><br>
            <div class="col-lg-6">
                <img src="images/why01.jpg" alt="Рукопожатие" height="200">
                <img src="images/why02.jpg" alt="Наша команда" height="200">
            </div>
            <div class="col-lg-6">
                <h4 class="why-text">
                    Доверие — это главная фишка нашей организации!<br>
                    Наша команда — это 7 профессионалов своего дела, которые работают в рекламном бизнесе уже более 13 лет!<br>
                    Мы не стоим на месте, как и весь рекламный мир! Круговорот изменений не дает нам возможности работать шаблонно
                     в стратегии и тактике рекламного продвижения. Что остается неизменным — так это наш надежный стартовый состав
                     специалистов. Активное развитие наша команда начала в 2010, именно в стартовые годы перехода рекламы в Интернет.
                     У нас начали появляться новые инструменты продвижения, и конечно же усовершенствовались наши навыки в работе.
                     Сегодня мы с уверенностью смотрим в будущее и сами создаем моду в рекламном бизнесе. В своих идеях мы используем
                     не только собственное видение или пожелания клиента, но и ценим менталитет целевой аудитории.<br>
                    Именно для повышения потока Ваших клиентов мы и работаем!
                </h4>
                <br><br><br><br>
            </div>
        </div>

        <div class="row text-center what">
            <br><br><br><br>
            <h3 class="what-header"><b>ЧЕМ МЫ ЗАНИМАЕМСЯ?</b></h3>
            <br><br><br><br>
                <h4 class="what-text">
                    Предоставляем комлекс услуг по продвижению Вашего продукта (бренда) в сети и его офф-лайн поддержку. Этот комплекс
                    включает в себя практически все виды информационно-рекламных услуг, предоставляемых современными технологиями
                </h4>
        </div>

        <div class="row text-center what">
            <br><br><br><br>
            <div class="col-lg-3">
                <img src="images/01.png" alt="РАЗРАБОТКА САЙТОВ">
                <br>
                <h4>РАЗРАБОТКА САЙТОВ</h4>
            </div>
            <div class="col-lg-3">
                <img src="images/02.png" alt="SMM/SEO ПРОДВИЖЕНИЕ">
                <br>
                <h4>SMM/SEO ПРОДВИЖЕНИЕ</h4>
            </div>
            <div class="col-lg-3">
                <img src="images/03.png" alt="НАРУЖНАЯ РЕКЛАМА И ПОЛИГРАФИЯ">
                <br>
                <h4>НАРУЖНАЯ РЕКЛАМА И ПОЛИГРАФИЯ</h4>
            </div>
            <div class="col-lg-3">
                <img src="images/04.png" alt="РАЗРАБОТКА МОБИЛЬНЫХ ПРИЛОЖЕНИЙ">
                <br>
                <h4>РАЗРАБОТКА МОБИЛЬНЫХ ПРИЛОЖЕНИЙ</h4>
                <br><br><br><br><br><br>
            </div>
         </div>

         <div class="row text-center steps">
             <br><br><br><br>
             <h3 class="steps-header"><b>
                 НАША КОМАНДА УВЕЛИЧИТ КОНВЕРСИЮ ВАШЕГО БИЗНЕСА В РАЗЫ! КАК?
                 ОТВЕТ НА ЛАДОНИ.</b>
             </h3>
             <br><br><br><br>
             <h4 class="steps-text">
                 Мы активно используем в продвижении все возможные инструменты. К каждому бизнесу
                 подбираем свои ключи для запуска рекламной кампании. После анализа целевой аудитории
                 клиента, наша команда подбирает эффективный канал продвижения – наружная реклама,
                 мобильные приложения, продвижение в сети.
             </h4>
             <br><br><br><br>
         </div>
         <div class="row text-center steps">
             <div class="col-lg-3">
                 <img src="images/05.png" alt="АНАЛИЗ ЗАДАЧ ПРОЕКТА">
                 <br>
                 <h4>АНАЛИЗ ЗАДАЧ ПРОЕКТА</h4>
             </div>
             <div class="col-lg-3">
                 <img src="images/06.png" alt="ЗАКЛЮЧАЕМ ДОГОВОР">
                 <br>
                 <h4>ЗАКЛЮЧАЕМ ДОГОВОР</h4>
             </div>
             <div class="col-lg-3">
                 <img src="images/07.png" alt="РАЗРАБОТКА И ТЕСТИРОВАНИЕ">
                 <br>
                 <h4>РАЗРАБОТКА И ТЕСТИРОВАНИЕ</h4>
             </div>
             <div class="col-lg-3">
                 <img src="images/08.png" alt="ГОТОВЫЙ ПРОДУКТ">
                 <br>
                 <h4>ГОТОВЫЙ ПРОДУКТ</h4>
                 <br><br>
             </div>
          </div>
          <div class="row text-center steps">
              <h4>Все удобные варианты оплаты, в том числе безналичный расчёт</h4>
              <br><br><br><br>
          </div>

          <div class="row text-center clients">
              <br><br><br><br>
              <h3><b>
                  КЛИЕНТЫ, ПРИБЫЛЬ КОТОРЫХ УЖЕ УВЕЛИЧИЛАСЬ:</b>
              </h3>
              <br><br><br><br>

              <div id="myCarousel" class="carousel slide col-md-12" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                      <li data-target="#myCarousel" data-slide-to="3"></li>
                      <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                      <div class="item active">
                          <div class="col-xs-12 box-bg">
                              <a href="http://www.esco.net.ua/" target="_blank">
                                  <img src="images/carousel01.jpg" alt="ESCO" width="460" height="345">
                              </a>
                              <div class="carousel-caption">
                                  <h3>ESCO</h3>
                                  <p>Это опытные и профессиональные специалисты.</p>
                              </div>
                          </div>
                      </div>

                      <div class="item">
                          <div class="col-xs-12 box-bg">
                                <a href="http://5th.kiev.ua/" target="_blank">
                                    <img src="images/carousel02.jpg" alt="5TH AVE RESIDENCE" width="460" height="345">
                                </a>
                                <div class="carousel-caption">
                                  <h3>5TH AVE RESIDENCE</h3>
                                  <p>К любому из сетов &#8212; бокал вина в подарок</p>
                                </div>
                          </div>
                      </div>

                      <div class="item">
                          <div class="col-xs-12 box-bg">
                                <a href="https://securityevolution.com.ua/" target="_blank">
                                    <img src="images/carousel03.jpg" alt="Охранные системы" width="460" height="345">
                                </a>
                                <div class="carousel-caption">
                                  <h3>Охранные системы</h3>
                                  <p>Установка систем видеонаблюдения</p>
                                </div>
                           </div>
                      </div>

                      <div class="item">
                          <div class="col-xs-12 box-bg">
                                <a href="https://novipro.com.ua/ru/" target="_blank">
                                    <img src="images/carousel04.jpg" alt="Интернет магазин" width="460" height="345">
                                </a>
                                <div class="carousel-caption">
                                  <h3>Интернет магазин</h3>
                                  <p>Качественная продукция только у нас</p>
                                </div>
                           </div>
                      </div>

                      <div class="item">
                          <div class="col-xs-12 box-bg">
                                <a href="http://g50ua.com/" target="_blank">
                                    <img src="images/carousel05.jpg" alt="Data Center" width="460" height="345">
                                </a>
                                <div class="carousel-caption">
                                  <h3>Data Center</h3>
                                  <p>We provide pure-play and co-location hosting services</p>
                                </div>
                           </div>
                      </div>

                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>

          </div>

    </div>
    <?php ActiveForm::end(); ?>
</div>
