<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="shortcut icon" href="assets/img/helpers/favicon.png" type="image/png" />
  <link rel="stylesheet" href="assets/css/libs.min.css" />
  <link rel="stylesheet" href="assets/css/main.css?v=1.0.0" />
  <link rel="stylesheet" href="assets/css/about.css?v=1.0.0" />
  <link rel="stylesheet" href="assets/css/blocks.css?v=1.0.0" />

  <title>О клинике</title>
</head>

<body>
  <?php include ("blocks/header.php"); ?>

<!-- Section about -->
  <section class="about">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-md-12">
          <div class="about-left">
            <h1>О клинике</h1>
            <p>
              Приоритетами клиники является слаженная работа команды единомышленников, которые могут оказать помощь
              животным на основании своих знаний, опыта и с использованием самого современного оборудования. Для нас
              очень важен индивидуальный подход к каждому пациенту и мы готовы сделать пребывание в нашей клинике
              наиболее приятным.
            </p>
            <a href="our-team.php" class="about-left__button about-left__button-text">Познакомиться с командой</a>
            <p>
              Наша клиника тесно сотрудничает с референсными диагностическими центрами как в России, так и за рубежом
              для предоставления самых сложных экспертных диагностических услуг.
            </p>
          </div>
        </div>
        <div class="about-right">
          <img class="about-right__animal__image" src="assets/img/about/dog.png">
        </div>
        <div class="about-right-mobile">
          <div class="about-right__animal">
            <img class="about-right__animal__image" src="assets/img/about/dog.png">
          </div>
        </div>

      </div>
    </div>
  </section>

<!-- Section equipment -->
  <section class="equipment">
    <div class="container">
      <div class="equipment-body">
        <div class="equipment-header-wrapper">
          <p>
            Клиника оснащена новейшим оборудованием, позволяющим проводить
            диагностику, лечение и реабилитацию животных на высоком
            профессиональном уровне в минимально возможные сроки.
          </p>
        </div>
        <!-- Mobile equipment slider -->
        <div class="mobile-slider">

          <div class="row">
            <div class="container">

              <div class="slider-for equipment-slider">
                <div class="equipment-block">
                  <img class="equipment-block__image" src="assets/img/equipment/laboratory.png" />
                  <p>Собственная лаборатория</p>
                </div>
                <div class="equipment-block">
                  <img class="equipment-block__image" src="assets/img/equipment/philips.png" />
                  <p>Cовременный экспертный ультразвуковой аппарат Philips</p>
                </div>
                <div class="equipment-block">
                  <img class="equipment-block__image" src="assets/img/equipment/xray.png" />
                  <p>Цифровой рентген</p>
                </div>
                <div class="equipment-block">
                  <img class="equipment-block__image" src="assets/img/equipment/operation.png" />
                  <p>Просторная операционная, оснащенная аппаратом газового наркоза и
                    кислородными концентраторами</p>
                </div>
                <div class="equipment-block">
                  <img class="equipment-block__image" src="assets/img/equipment/reabilitation.png" />
                  <p>Удобный комфортабельный стационар для полноценной реабилитации</p>
                </div>
                <div class="equipment-block">
                  <img class="equipment-block__image" src="assets/img/equipment/pharmacy.png" />
                  <p>Собственная аптека</p>
                </div>
              </div>

            </div>
          </div>

          <!-- Mobile equipment slider controls -->
          <div class="row">
            <div class="container" style="display: flex;justify-content: center; margin-bottom: 32px;">
              <div class="slider-nav equipment-slider-nav">
                <p class="clider-nav_item">1 из 6</p>
                <p class="clider-nav_item">2 из 6</p>
                <p class="clider-nav_item">3 из 6</p>
                <p class="clider-nav_item">4 из 6</p>
                <p class="clider-nav_item">5 из 6</p>
                <p class="clider-nav_item">6 из 6</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Desktop equipment -->
        <div class="equipment-row">
          <div class="row">
            <div class="col-md-4">
              <div class="equipment-block">
                <img class="equipment-block__image" src="assets/img/equipment/laboratory.png" />
                <p>Собственная лаборатория</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="equipment-block">
                <img class="equipment-block__image" src="assets/img/equipment/philips.png" />
                <p>Cовременный экспертный ультразвуковой аппарат Philips</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="equipment-block">
                <img class="equipment-block__image" src="assets/img/equipment/xray.png" />
                <p>Цифровой рентген</p>
              </div>
            </div>
          </div>
        </div>

        <div class="equipment-row">
          <div class="row">
            <div class="col-md-4">
              <div class="equipment-block">
                <img class="equipment-block__image" src="assets/img/equipment/operation.png" />
                <p>Просторная операционная, оснащенная аппаратом газового наркоза и
                  кислородными концентраторами</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="equipment-block">
                <img class="equipment-block__image" src="assets/img/equipment/reabilitation.png" />
                <p>Удобный комфортабельный стационар для полноценной реабилитации</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="equipment-block">
                <img class="equipment-block__image" src="assets/img/equipment/pharmacy.png" />
                <p>Собственная аптека</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

<!-- Section directions -->
  <section class="directions">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <div class="directions-header">
            <p>
              Одним из основных направлений работы клиники является
              кардиология
            </p>
          </div>
          <div class="directions-text">
            <p>
              Неслучайно в названии фигурирует «COR», что на латинском языке
              означает сердце.</br></br>Экспертное кардиологическое обследование и
              лечение собак и кошек проводят квалифицированные ветеринарные
              врачи-кардиологи под руководством кандидата биологических наук
              Владиславы Константиновны Илларионовой.
            </p>
          </div>
          <div class="directions-button">
            <a href="services-cardiology.php" class="directions-button__item directions-button__item__text">
              Перейти в раздел Кардиология
            </a>
          </div>
        </div>
        <div class="directions-image show-desktop">
          <img class="direction-image__item" src="assets/img/about/circlehurt.svg" />
        </div>
      </div>
    </div>
  </section>

<!-- Footer + modal + js libs -->
  <?php include ("blocks/footer.php"); ?>
  <?php include ("blocks/modal-appointment.php"); ?>
  <?php include ("blocks/modal-thanks.php"); ?>
  <?php include ("blocks/js-lib.php"); ?>

</body>
</html>