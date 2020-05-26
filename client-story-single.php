<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/img/helpers/favicon.png"
      type="image/png"
    />
    <link rel="stylesheet" href="assets/css/libs.min.css" />
    <link rel="stylesheet" href="assets/css/main.css?v=1.0.0" />
    <link rel="stylesheet" href="assets/css/blocks.css?v=1.0.0" />

    <title>Корветцент</title>
  </head>
<body>

    <?php include ("blocks/header.php"); ?>
  <!-- Article -->
    <section class="articles">
      <div class="container">
        <div class="articles-row-body">
          <div class="row">

            <div class="col-md-8">
              <div class="articles-image">
                <img src="assets/img/articles/dog.png" />
              </div>
              <div class="articles-name">
                <a href="client-story-single.php">Джек</a>
              </div>

              <div class="row">
                <div class="col-lg-4 col-6">
                  <div class="articles-block">
                      <div class="articles-block__data" >
                        <img class="articles-block__image" src="assets/img/articles/calendar.svg" alt="celendar" />
                        <p>12.02.2020</p>
                      </div>
                      <div class="articles-block__views">
                        <img class="articles-block__image" src="assets/img/articles/eye.svg" alt="eye" />
                        <p>257</p>
                      </div>
                  </div>
                </div>
              </div>

              <div class="articles-text">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                  vel interdum odio. Fusce tristique in felis eget hendrerit. Sed
                  eget sodales leo, nec cursus urna. Mauris consectetur justo ac
                  dolor laoreet, sagittis finibus ligula ultrices. Nam sit amet
                  lectus tempus ex pulvinar tempor eu eu magna. Fusce vehicula
                  posuere lorem, sit amet ullamcorper ipsum lobortis ut. Orci
                  varius natoque penatibus et magnis dis parturient montes,
                  nascetur ridiculus mus. In placerat convallis tincidunt. Nullam
                  purus dolor, ornare at mattis sit amet, lobortis at odio. Nunc
                  ac laoreet quam. Aliquam non eleifend ligula, vitae vulputate
                  lacus. Suspendisse urna lorem, ornare a purus et, volutpat
                  sagittis ligula. Mauris vehicula euismod mauris quis pharetra.
                  Donec libero diam, euismod a gravida at, aliquet ut augue. Ut
                  vitae consectetur sem. Cras elementum neque quis dapibus tempor.
                  </br></br>Fusce sed magna vitae ligula molestie luctus. Nunc nec magna sed
                  felis bibendum faucibus scelerisque eget orci. Phasellus a
                  convallis eros. Mauris luctus ut tellus vitae pharetra. Mauris
                  id facilisis mauris. Pellentesque habitant morbi tristique
                  senectus et netus et malesuada fames ac turpis egestas. Nam sit
                  amet lorem sit amet diam aliquet pretium. Donec porta, magna et
                  porttitor lacinia, sem sem scelerisque libero, ac tincidunt
                  velit augue vitae quam. Sed molestie, eros ut euismod hendrerit,
                  lectus lacus tempor neque, nec malesuada purus velit sed metus.
                  Donec consectetur, neque eget pulvinar pretium, arcu risus
                  egestas quam, sed ornare felis eros non orci. Phasellus
                  facilisis molestie quam, non feugiat velit ultricies sit amet.
                  Sed tincidunt condimentum mi sed pellentesque.
                </p>
              </div>

            </div>
            <div class="col-md-4">
              <?php include ("blocks/last-news-block.php"); ?>
            </div>

              <?php include ("blocks/social-links.php"); ?>

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