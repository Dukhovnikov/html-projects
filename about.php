<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="shortcut icon" href="assets/img/helpers/favicon.png" type="image/png" />
  <link rel="stylesheet" href="assets/css/libs.min.css" />
  <link rel="stylesheet" href="assets/css/main.css?v=1.0.0" />
  <link rel="stylesheet" href="assets/css/responsive.css?v=1.0.0" />
  <link rel="stylesheet" href="assets/css/header.css?v=1.0.0" />
  <link rel="stylesheet" href="assets/css/footer.css?v=1.0.0" />
  <link rel="stylesheet" href="assets/css/about.css?v=1.0.0" />
  <link rel="stylesheet" href="assets/css/block-photogallery.css?v=1.0.0" />

  <title>О клинике</title>
</head>

<body>
  <div class="version">1.0.0</div>

  <?php include ("blocks/header.php"); ?>

  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="about-left">
            <p class="about-left__header">О клинике</p>
            <p class="about-left__text">
              Приоритетами клиники является слаженная работа команды единомышленников, которые могут оказать помощь
              животным на основании своих знаний, опыта и с использованием самого современного оборудования. Для нас
              очень важен индивидуальный подход к каждому пациенту и мы готовы сделать пребывание в нашей клинике
              наиболее приятным.
            </p>
            <button class="about-left__button about-left__button-text">Познакомиться с командой</button>
            <p class="about-left__text">
              Наша клиника тесно сотрудничает с референсными диагностическими центрами как в России, так и за рубежом
              для предоставления самых сложных экспертных диагностических услуг.
            </p>
          </div>
        </div>
        <div class="about-right">
          <img class="about-right__pawshake" src="assets/img/about/korvetcenter.svg">
        </div>
        <div class="about-right-mobile">
          <div class="about-right__animal">
            <img class="about-right__animal__image" src="assets/img/about/dog.png">
          </div>
          <div class="about-right__pawshake">
            <img src="assets/img/about/korvetcenter.svg">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="equipment">
    <div class="container">
      <div class="equipment-body">
        <div class="equipment-header-wrapper">
          <p class="equipment-header-wrapper__text">
            Клиника оснащена новейшим оборудованием, позволяющим проводить
            диагностику, лечение и реабилитацию животных на высоком
            профессиональном уровне в минимально возможные сроки.
          </p>
        </div>
        <div class="equipment-row">
          <div class="row">
            <div class="col-md-4">
              <div class="equipment-block">
                <img class="equipment-block__image" src="assets/img/equipment/laboratory.png" />
                <p class="equipment-block__text">Собственная лаборатория</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="equipment-block">
                <img class="equipment-block__image" src="assets/img/equipment/philips.png" />
                <p class="equipment-block__text">Cовременный экспертный ультразвуковой аппарат Philips</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="equipment-block">
                <img class="equipment-block__image" src="assets/img/equipment/xray.png" />
                <p class="equipment-block__text">Цифровой рентген</p>
              </div>
            </div>
          </div>
        </div>
        <div class="equipment-row">
          <div class="row">
            <div class="col-md-4">
              <div class="equipment-block">
                <img class="equipment-block__image" src="assets/img/equipment/operation.png" />
                <p class="equipment-block__text">Просторная операционная, оснащенная аппаратом газового наркоза и
                  кислородными концентраторами</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="equipment-block">
                <img class="equipment-block__image" src="assets/img/equipment/reabilitation.png" />
                <p class="equipment-block__text">Удобный комфортабельный стационар для полноценной реабилитации</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="equipment-block">
                <img class="equipment-block__image" src="assets/img/equipment/pharmacy.png" />
                <p class="equipment-block__text">Собственная аптека</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
            <button class="directions-button__item directions-button__item__text">
              Перейти в раздел Кардиология
            </button>
          </div>
        </div>
        <div class="directions-image show-desktop">
          <img class="direction-image__item" src="assets/img/about/circlehurt.svg">
        </div>
      </div>
    </div>
  </section>
  <?php include ("blocks/block-photogallery.php"); ?>

  <?php include ("blocks/footer.php"); ?>

  <script src="assets/js/libs.min.js"></script>
  <script src="assets/js/share.js?v=1.0.0"></script>
  <script src="assets/js/main.js?v=1.0.0"></script>
  <script src="assets/js/block-photogallery.js?v=1.0.0"></script>
  <script src="assets/js/flickity.pkgd.min.js"></script>
</body>
</html>