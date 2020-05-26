<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="shortcut icon" href="assets/img/helpers/favicon.png" type="image/png" />
  <link rel="stylesheet" href="assets/css/libs.min.css" />
  <link rel="stylesheet" href="assets/css/main.css?v=1.0.0" />
  <link rel="stylesheet" href="assets/css/blocks.css?v=1.0.0" />

  <title>Корветцент - Статьи</title>
</head>

<body>
  <?php include ("blocks/header.php"); ?>

<!-- Posts -->
  <section class="posts">
    <div class="container">
      <div class="row">

      <!-- Posts header -->
        <div class="col-md-12">
          <div class="posts__title">
            <h2 class="posts__title__txt">Статьи</h2>
          </div>
        </div>

      <!-- Tabs -->
        <div class="col-md-12">
          <div class="posts__tabs">

          <!-- Tabs names -->
            <ul class="posts__tabs__caption">
              <li class="posts__tabs__caption-item active">Все статьи</li>
              <li class="posts__tabs__caption-item">Терапия</li>
              <!-- ... -->
            </ul>

          <!-- Tabs content -->
            <div class="posts__tabs__content active">
              <div class="row">

                <div class="col-md-3">
                  <a class="posts__link" href="posts-single.php">
                    <div class="posts__card">

                      <div class="posts__card__img">
                        <img class="posts__card__img-src" src="./assets/img/posts/post1.png" alt="">
                      </div>

                      <div class="posts__card__date">
                        <p>12.02.2020</p>
                      </div>

                      <div class="posts__card__title">
                        <h3 class="posts__card__title-txt">Кастрация кобеля: все за и против</h3>
                      </div>

                      <div class="posts__card__description">
                        <p>
                          Собаки и люди с давних времён живут вместе. Несмотря на то, что это животное помогает человеку и приспособлено
                        </p>
                      </div>

                      <div class="posts__card__tag">
                        <p> #Уход за животными </p>
                      </div>

                    </div>
                  </a>
                </div>
                <!-- ... -->

              </div>
            </div>

            <div class="posts__tabs__content">
              <div class="row">

                <div class="col-md-3">
                  <a class="posts__link" href="posts-single.php">
                    <div class="posts__card">

                      <div class="posts__card__img">
                        <img class="posts__card__img-src" src="./assets/img/posts/post1.png" alt="">
                      </div>

                      <div class="posts__card__date">
                        <p>12.02.2020</p>
                      </div>

                      <div class="posts__card__title">
                        <h3 class="posts__card__title-txt">Вторая статья</h3>
                      </div>

                      <div class="posts__card__description">
                        <p>
                          Собаки и люди с давних времён живут вместе. Несмотря на то, что это животное помогает человеку и приспособлено
                        </p>
                      </div>

                      <div class="posts__card__tag">
                        <p> #Уход за животными </p>
                      </div>

                    </div>
                  </a>
                </div>
                <!-- ... -->

              </div>
            </div>

            <?php include ("blocks/pagination.php"); ?>


          </div>
        </div>

      </div>
    </div>
  </section>
  <?php include ("blocks/feedback-form.php"); ?>
<!-- Footer + modal + js libs -->
  <?php include ("blocks/footer.php"); ?>
  <?php include ("blocks/modal-appointment.php"); ?>
  <?php include ("blocks/modal-thanks.php"); ?>
  <?php include ("blocks/js-lib.php"); ?>

</body>

</html>