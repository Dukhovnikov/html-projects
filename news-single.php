<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<link rel="shortcut icon" href="assets/img/helpers/favicon.png" type="image/png" />
<link rel="stylesheet" href="assets/css/libs.min.css" />
<link rel="stylesheet" href="assets/css/main.css?v=1.0.0" />
<link rel="stylesheet" href="assets/css/blocks.css?v=1.0.0" />
<link rel="stylesheet" href="assets/css/replenishment-post.css?v=1.0.0" />
<link rel="stylesheet" href="assets/css/social-links.css?v=1.0.0" />

<title>Одиночная статья</title>
</head>

<body>

<?php include ("blocks/header.php"); ?>
<!-- Single news page -->
<section class="replenishment">
  <div class="container">
    <div class="row">

    <!-- Single news left -->
      <div class="col-md-8">
        <div class="replenishment-header">
          <div class="replenishment-header__text">Пополнение в команде</div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="replenishment-footnote-block">
              <div class="replenishment-footnote-block__data">
                <img class="replenishment-footnote-block__image" src="assets/img/replenishment-post/calendar.svg" alt="calendar" />
                <p class="replenishment-footnote-block__text">12.02.2020</p>
              </div>
              <div class="replenishment-footnote-block__data">
                <img class="replenishment-footnote-block__image" src="assets/img/replenishment-post/eye.svg" alt="eye" />
                <p class="replenishment-footnote-block__text">257</p>
              </div>
            </div>
          </div>
        </div>
        <div class="replenishment-employee">
          <p class="replenishment-employee__text">Рады представить вам нового члена нашей команды Имя Фамилия.</p>
          <img src="assets/img/replenishment-post/emloyee.png" class="replenishment-employee__image">
          <p class="replenishment-employee__image-caption">Подпись к фотографии</p>
        </div>
        <div class="replenishment-text-wrapper">
          <p class="replenishment-text-wrapper__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel interdum odio. Fusce tristique in felis eget hendrerit. Sed eget sodales leo, nec cursus urna. Mauris consectetur justo ac dolor laoreet, sagittis finibus ligula ultrices. Nam sit amet lectus tempus ex pulvinar tempor eu eu magna. Fusce vehicula posuere lorem, sit amet ullamcorper ipsum lobortis ut. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In placerat convallis tincidunt. Nullam purus dolor, ornare at mattis sit amet, lobortis at odio. Nunc ac laoreet quam. Aliquam non eleifend ligula, vitae vulputate lacus. Suspendisse urna lorem, ornare a purus et, volutpat sagittis ligula. Mauris vehicula euismod mauris quis pharetra. Donec libero diam, euismod a gravida at, aliquet ut augue. Ut vitae consectetur sem. Cras elementum neque quis dapibus tempor.</br></br>Fusce sed magna vitae ligula molestie luctus. Nunc nec magna sed felis bibendum faucibus scelerisque eget orci. Phasellus a convallis eros. Mauris luctus ut tellus vitae pharetra. Mauris id facilisis mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam sit amet lorem sit amet diam aliquet pretium. Donec porta, magna et porttitor lacinia, sem sem scelerisque libero, ac tincidunt velit augue vitae quam. Sed molestie, eros ut euismod hendrerit, lectus lacus tempor neque, nec malesuada purus velit sed metus. Donec consectetur, neque eget pulvinar pretium, arcu risus egestas quam, sed ornare felis eros non orci. Phasellus facilisis molestie quam, non feugiat velit ultricies sit amet. Sed tincidunt condimentum mi sed pellentesque.
          </p>
        </div>

        <?php include ("blocks/social-links.php"); ?>

      </div>

      <!-- Single news right -->
      <div class="col-md-4">
        <?php include ("blocks/last-news-block.php"); ?>
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