<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="shortcut icon" href="assets/img/helpers/favicon.png" type="image/png" />
  <link rel="stylesheet" href="assets/css/libs.min.css" />
  <link rel="stylesheet" href="assets/css/main.css?v=1.0.0" />
  <link rel="stylesheet" href="assets/css/404.css?v=1.0.0" />

  <title>О клинике</title>
</head>

<body>
  <?php include ("blocks/header.php"); ?>

  <section class="container-404">
    <div class="container">
      <div class="text-block">
        <p class="text-block__header">О-оу! Кажется, что-то пошло не так(</p>
        <p class="text-block__text">
          Возможно, этой страницы уже нет или неправильный адрес ссылки. Вы можете вернуться на главную или посмотреть наши услуги.
        </p>
        <div class="text-block__buttons-wrapper">
          <a href="#" class="text-block__buttons__item">Главная</a>
        </div>
      </div>
      <div class="image-block">
        <img class="image-block__item" alt="" src="assets/img/404/404.png" />
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