<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="shortcut icon" href="assets/img/helpers/favicon.png" type="image/png" />
  <link rel="stylesheet" href="assets/css/libs.min.css" />
  <link rel="stylesheet" href="assets/css/main.css?v=1.0.0" />
  <link rel="stylesheet" href="assets/css/blocks.css?v=1.0.0" />
  <link rel="stylesheet" href="assets/css/our-team.css?v=1.0.0" />
  <link rel="stylesheet" href="assets/css/news-articles.css?v=1.0.0" />

  <title>Корветцент</title>
</head>

<body>
  <?php include ("blocks/header.php"); ?>

<!-- Section our team header -->
  <section class="our-team-header">
    <div class="container">
      <div class="row">

        <div class="col-lg-12">
          <div class="team">
            <div class="team-title">
              <h2 class="team-title__text">Команда КОРВЕТЦЕНТР</h2>
            </div>
            <div class="team-photo">
              <img class="team-photo__img" src="./assets/img/kvcr-team/team.jpg" alt="">
            </div>
            <div class="team-cardiogram">
              <img class="team-cardiogram__icon" src="./assets/img/kvcr-team/icon/cardiogramme.svg" alt="">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

<!-- Section our team members list -->
  <section class="team-members">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
          <a class="doc-card" href="our-team-single.php">
            <div class="doc-card__img">
              <img class="doc-card__img-src" src="./assets/img/kvcr-list/docjpg.png" alt="doctor-image">
            </div>
            <div class="doc-card__position">
              <h3 class="doc-card__position-text">Ветеринарный врач</h3>
            </div>
            <div class="doc-card__name">
              <h2 class="doc-card__name-text">Владислава Константиновна Илларионова</h2>
            </div>
            <div class="doc-card__specialization">
              <p>Кардиология</p>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
          <a class="doc-card" href="our-team-single.php">
            <div class="doc-card__img">
              <img class="doc-card__img-src" src="./assets/img/kvcr-list/docjpg.png" alt="doctor-image">
            </div>
            <div class="doc-card__position">
              <h3 class="doc-card__position-text">Ветеринарный врач</h3>
            </div>
            <div class="doc-card__name">
              <h2 class="doc-card__name-text">Владислава Константиновна Илларионова</h2>
            </div>
            <div class="doc-card__specialization">
              <p>Кардиология</p>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <?php include ("blocks/feedback-form.php"); ?>
<!-- Section feedback-from + news + footer + js libs -->
  <?php include ("blocks/news-articles.php"); ?>
  <?php include ("blocks/modal-appointment.php"); ?>
  <?php include ("blocks/modal-thanks.php"); ?>
  <?php include ("blocks/footer.php"); ?>

  <?php include ("blocks/js-lib.php"); ?>

</body>

</html>