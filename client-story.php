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

<!-- Section clients -->
  <section class="clients">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <div class="clients__title">
            <h2 class="clients__title__txt">Истории клиентов</h2>
          </div>
        </div>

        <div class="col-md-3">
          <a class="clients__link" href="client-story-single.php">
            <div class="clients__card">
              <div class="clients__card__img">
                <img class="clients__card__img-src" src="./assets/img/posts/post1.png" alt="post-1">
              </div>
              <div class="clients__card__date">
                <p>12.02.2020</p>
              </div>
              <div class="clients__card__title">
                <h3 class="clients__card__title-txt">Джек</h3>
              </div>
              <div class="clients__card__description">
                <p> Гипертрофическая кардиомиопатия </p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="clients__link" href="client-story-single.php">
            <div class="clients__card">
              <div class="clients__card__img">
                <img class="clients__card__img-src" src="./assets/img/posts/post1.png" alt="post-1">
              </div>
              <div class="clients__card__date">
                <p>12.02.2020</p>
              </div>
              <div class="clients__card__title">
                <h3 class="clients__card__title-txt">Джек</h3>
              </div>
              <div class="clients__card__description">
                <p> Гипертрофическая кардиомиопатия </p>
              </div>
            </div>
          </a>
        </div>

      </div>
      <?php include ("blocks/pagination.php"); ?>
    </div>
  </section>

<!-- Footer + modal + js libs -->
  <?php include ("blocks/footer.php"); ?>
  <?php include ("blocks/modal-appointment.php"); ?>
  <?php include ("blocks/modal-thanks.php"); ?>
  <?php include ("blocks/js-lib.php"); ?>

</body>
</html>
