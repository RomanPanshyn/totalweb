<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Total Web Клиенты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-clients">
    <h1><?= Html::encode($this->title) ?></h1>
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
                            <img src="images/carousel01s.jpg" alt="ESCO" height="345">
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
                              <img src="images/carousel02s.jpg" alt="5TH AVE RESIDENCE" height="345">
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
                              <img src="images/carousel03.jpg" alt="Охранные системы" height="345">
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
                              <img src="images/carousel04.jpg" alt="Интернет магазин" height="345">
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
                              <img src="images/carousel05s.jpg" alt="Data Center" height="345">
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
