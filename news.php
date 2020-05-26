<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="shortcut icon" href="assets/img/helpers/favicon.png" type="image/png" />
  <link rel="stylesheet" href="assets/css/libs.min.css" />
  <link rel="stylesheet" href="assets/css/main.css?v=1.0.0" />
  <link rel="stylesheet" href="assets/css/blocks.css?v=1.0.0" />

  <title>Корветцент</title>
</head>

<body>

  <?php include ("blocks/header.php"); ?>
<!-- News -->
  <section class="news">
    <div class="container">
      <div class="row">

      <!-- News left content -->
        <div class="col-md-8">

          <div class="row">
            <div class="news__title">
              <h2 class="news__title-txt">Новости</h2>
            </div>
          </div>

          <a class="news__link" href="news-single.php">
            <div class="news__card">
              <div class="news__card__date">
                <p>30.02.2019</p>
              </div>
              <div class="news__card__title">
                <h3 class="new__card__title-txt">Мастер-класс по кардиологии</h3>
              </div>
              <div class="news__card__description">
                <p>
                  Ведущий кардиолог клиники КорВетЦентр Илларионова Владислава Константинова провела мастер-класс по кардиологии. Здорово, когда уровень ветеринарных врачей стремительно повышается!
                </p>
              </div>
            </div>
          </a>
        </div>

      <!-- News right content (popular articles) -->
        <div class="col-md-4">
          <?php include ("blocks/popular-article-block.php"); ?>
        </div>
      </div>
      <?php include ("blocks/pagination.php"); ?>
    </div>
  </section>

  <!-- Section news + footer + modal + js libs -->
    <?php include ("blocks/modal-appointment.php"); ?>
    <?php include ("blocks/modal-thanks.php"); ?>
    <?php include ("blocks/footer.php"); ?>

    <?php include ("blocks/js-lib.php"); ?>

</body>
</html>
