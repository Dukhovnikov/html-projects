<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="shortcut icon" href="assets/img/helpers/favicon.png" type="image/png" />
  <link rel="stylesheet" href="assets/css/libs.min.css" />
  <link rel="stylesheet" href="assets/css/main.css?v=1.0.0" />
  <link rel="stylesheet" href="assets/css/blocks.css?v=1.0.0" />

  <title>Корветцент - Контакты</title>
</head>

<body>

  <?php include ("blocks/header.php"); ?>

<!-- Contact block -->
  <section class="contact">
    <div class="container">
      <h3 class="contact-title">Контакты</h3>

      <div class="contact-container">
        <div class="contacts">

        <!-- Address + phone -->
          <div class="line">
            <div class="contacts-block">
              <h3 class="contacts-block-title">Адрес</h3>
              <p>г. Королев, ул. Фрунзе, д. 19</p>
            </div>
            <div class="contacts-block">
              <h3 class="contacts-block-title">Телефон:</h3>
              <a href="tel: +79771191005">8 (977) 119-10-05</a>
            </div>
          </div>

        <!-- Work hours -->
          <div class="line">
            <div class="contacts-block">
              <h3 class="contacts-block-title">Часы работы:</h3>
              <p>Ежедневно с 9.00 до 21.00</p>
            </div>
            <div class="contacts-block">
              <h3 class="contacts-block-title">Почта:</h3>
              <a href="mailto:info@corvetcentre.ru">info@corvetcentre.ru</a>
            </div>
          </div>
        </div>

        <div class="info">
          <img class="info-img" src="./assets/img/footer/logo.svg" alt="logo" />
          <p>
            Мы находимся в 700 метрах от станции Подлипки-Дачные или
            9км от МКАД по Ярославскому шоссе. К нам удобно добираться,
            как на машине, так и на электричке. Рядом есть парковка
          </p>
        </div>

      </div>

      <div class="map">
        <img src="./assets/img/contacts/map.png" alt="map" />
      </div>

    <!-- Directions -->
      <div class="find">
        <h3 class="find-title">Как нас найти</h3>

        <div class="find-container">

          <div class="find-block">
            <h2 class="find-block-title">На автомобиле:</h2>
            <p>
              Клиника находится на северо-востоке Подмосковья
              в городе Королев в 9км от МКАД. Выезжаете из
              Москвы по Ярославскому шоссе и сворачиваете на
              Пионерскую улицу. Дальше через улицы Терешковой,
              Калинина и Циолковского попадаете на улицу Фрунзе.
              Наша клиника находится против гостиницы «Подмосковье»,
              там же можно припарковать машину.
            </p>
          </div>

          <div class="find-block margin">
            <h2 class="find-block-title">На электричке:</h2>
            <p>
              Ближе всего к клинике находится станция Подлипки-Дачные
              ярославского направления. С Ярославского вокзала вы
              можете сесть как на обычную электричку (около 45 минут),
              так и на Экспрессе РЭКС (25 минут). После вам нужно
              пройтись 8-9 минут пешком прямо по Вокзальному проезду,
              на втором перекрестке повернуть направо на улицу Фрунце.
              Напротив гостиницы «Подмосковье» будет наша клиника.
            </p>
          </div>

          <div class="find-block">
            <h2 class="find-block-title">Пешком или общественном транспорте:</h2>
            <p>
              Если вы живете Подлипках, Новых Подлипках или Черемушках,
              то дорога до нас у вас займет от 10 до 20 минут.
              Из Завокзального района удобнее всего будет доехать
              на автобусах 1, 28, 31, 392 и 9 или на маршрутках
              13 и 58к до остановки «Центральная городская больница».
              Мы находимся напротив гостиницы «Подмосковье».
            </p>
          </div>

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
