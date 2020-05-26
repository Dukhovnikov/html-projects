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
    <link rel="stylesheet" href="assets/css/index.css?v=1.0.0" />
    <link rel="stylesheet" href="assets/css/blocks.css?v=1.0.0" />
    <link rel="stylesheet" href="assets/css/news-articles.css?v=1.0.0" />

    <title>Корветцент</title>
  </head>

  <body class="not-scrollable">
  <?php include ("blocks/header.php"); ?>

  <!-- Section top block -->
    <section class="dog-block">
      <div class="container">

        <div class="dog-block-wrapper">
          <div class="dog-block-text-wrapper">
            <h3 class="dog-block-title"> Мы знаем,</br> как бьется сердце вашего питомца</h3>
            <p class="dog-block-text">
              <span class="dog-block-bold">Корветцентр - ветеринарная клиника
              в Королеве,</span> специализиущаяся на
              <a class="dog-block-link" href="">кардиологии.</a>
              Так же мы проводим <a class="dog-block-link" href="">любые осмотры</a>,
              <a class="dog-block-link" href="">операции</a>,
              <a class="dog-block-link" href="">УЗИ</a>,
              <a class="dog-block-link" href="">рентгены</a> и
              <a class="dog-block-link" href="">анализы</a>.
            </p>
          </div>
          <div class="dog-block-button-wrapper">
            <p class="dog-block-button-text"> Смотреть видео УЗИ сердца </p>
            <div class="dog-block-button-circle">
              <img class="dog-block-button-img red-button" src="./assets/img/main-page-img/play-.svg" alt="play-button">
            </div>
          </div>
          <div class="dog-block-img-wrapper">
            <img src="./assets/img/main-page-img/slide-img.png" alt="main-slide">
          </div>
        </div>

      </div>
    </section>

    <!-- Modal with ultrasound videos -->
    <div class="ultrasound-block">
      <div class="ultrasound-slider-modal-block">

        <div class="ultrasound-slider-modal_item">
          <div class="ultrasound-slider-top-block">
            <img class="ultrasound-slider-logo" src="./assets/img/main-page-img/logo-white.svg" alt="ultrasound-slider-logo">
            <img class="ultrasound-slider-hide-btn" src="./assets/img/main-page-img/close-white.svg" alt="ultrasound-close">
          </div>

          <div class="ultrasound-slider-video">
            <video id="video-count-1" src="./assets/video/ultrasound.mp4" autoplay loop></video>
          </div>

          <div class="ultrasound-slider-bottom-block">
            <div class="ultrasound-slider-information">
              <p class="ultrasound-slider-information-name">Бим</p>
              <p class="ultrasound-slider-information-age">Немецкий дог, 9 лет</p>
            </div>
            <div class="ultrasound-slider-phrase">
              <p>
                Мы рекомендуем каждые пол года делать УЗИ сердца, чтобы всегда быть
                уверенным в здоровье питомца. Особенно это касается пород...
              </p>
            </div>
            <div class="ultrasound-slider-sign-up">
              <button
                class="ultrasound-slider-sign-up-button appointment__initial-modal"
                data-modal="#appointment-modal"
              >
                Записаться на УЗИ
              </button>
            </div>
          </div>
        </div>

        <div class="ultrasound-slider-modal_item">
          <div class="ultrasound-slider-top-block">
            <img class="ultrasound-slider-logo" src="./assets/img/main-page-img/logo-white.svg" alt="">
            <img class="ultrasound-slider-hide-btn" src="./assets/img/main-page-img/close-white.svg" alt="">
          </div>
          <div class="ultrasound-slider-video">
            <video id="video-count-2" src="./assets/video/ultrasound.mp4" autoplay loop></video>
          </div>
          <div class="ultrasound-slider-bottom-block">
            <div class="ultrasound-slider-information">
              <p class="ultrasound-slider-information-name">Шарик</p>
              <p class="ultrasound-slider-information-age">Кот, 5 лет</p>
            </div>
            <div class="ultrasound-slider-phrase">
              <p>
                Мы рекомендуем каждые пол года делать УЗИ сердца, чтобы всегда быть
                уверенным в здоровье питомца. Особенно это касается пород...
              </p>
            </div>
            <div class="ultrasound-slider-sign-up">
              <button
                class="ultrasound-slider-sign-up-button appointment__initial-modal"
                data-modal="#appointment-modal"
              >
                Записаться на УЗИ
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>

  <!-- Section our mission and about -->
    <section class="main-page-text-wrapper">
      <div class="container">

        <div class="main-page-text-section">
          <div class="text-block-left">
            <div class="main-page-text-block">
              <h2 class="main-page-text-block-title">Наша миссия:</h2>
              <p>Мы хотим обеспечить каждому животному долгую
                здоровую жизнь на радость их хозяевам с помощью
                современных передовых методов ветеринарной медицины
                и наших открытых сердец.</p>
            </div>
            <div class="main-page-text-block">
              <h2 class="main-page-text-block-title">О клинике:</h2>
              <p>Одним из основных направлений работы центра является
                  кардиология – неслучайно в названии фигурирует «COR»,
                  что на латинском языке означает сердце. Клиника оснащена
                  новейшим оборудованием, позволяющим проводить диагностику,
                  лечение и реабилитацию животных на высоком профессиональном уровне.
                </p>
                <a href="about.php" class="main-page-text-block-link">Подробнее</a>
            </div>
          </div>
          <div class="text-block-right">
            <div class="main-page-text-block-contact">
              <div class="main-page-text-contact-block">
                <h2 class="main-page-text-contact-block-bold"> г. Королев, ул. Фрунзе, 19 </h2>
                <p>в 700 метрах от станции Подлипки-Дачные</p>
              </div>
              <div class="main-page-text-contact-block">
                <h2 class="main-page-text-contact-block-bold"> +7 (977) 119-10-05</h2>
                <p>Работаем с 9 до 21 каждый день</p>
              </div>
              <div class="main-page-text-contact-block map-block">
                <img src="./assets/img/icons/map.svg" alt="map-icon">
                <a href="contact.php">Посмотреть на карте</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

  <!-- Section our services -->
    <section class="uslugi">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 card-wrapper">
            <a href="services-cardiology.php">
              <div class="card">
                <div class="card-left">
                  <p class="card__title">Кардиология</p>
                  <p class="card__price">от 1100 руб.</p>
                  <p class="card__info w-270">Лечение и профилактика сердечных заболеваний</p>
                </div>
                <div class="card-right">
                  <img class="card__img" src="assets/img/icons/cardiology.svg">
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 card-wrapper">
            <a href="services-terapy.php">
              <div class="card">
                <div class="card-left">
                  <p class="card__title">Терапия</p>
                  <p class="card__price">от 800руб.</p>
                  <p class="card__info w-270">Диагностика, лечение и профилактика, вакцинирование</p>
                </div>
                <div class="card-right">
                  <img class="card__img" src="assets/img/icons/therapy.svg">
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 card-wrapper">
            <a href="services-terapy.php">
              <div class="card">
                <div class="card-left">
                  <p class="card__title">Хирургия</p>
                  <p class="card__price">от 3 200 руб.</p>
                  <p class="card__info w-270">Различные виды операций, стерилизация, обработка ран</p>
                </div>
                <div class="card-right">
                  <img class="card__img" src="assets/img/icons/surgery.svg">
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 card-wrapper">
            <a href="services-terapy.php">
              <div class="card">
                <div class="card-left">
                  <p class="card__title">УЗИ сердца</p>
                  <p class="card__price">от 900 руб.</p>
                  <p class="card__info w-270">УЗИ сердца, УЗИ брюшной полости</p>
                </div>
                <div class="card-right">
                  <img class="card__img" src="assets/img/icons/xray.svg">
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 card-wrapper">
            <a href="services-terapy.php">
              <div class="card">
                <div class="card-left">
                  <p class="card__title">УЗИ брюшной полости</p>
                  <p class="card__price">от 900 руб.</p>
                  <p class="card__info w-270">УЗИ сердца, УЗИ брюшной полости</p>
                </div>
                <div class="card-right">
                  <img class="card__img" src="assets/img/icons/xray.svg">
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 card-wrapper">
            <a href="services-terapy.php">
              <div class="card">
                <div class="card-left">
                  <p class="card__title">Цифровой рентген</p>
                  <p class="card__price">от 2000 руб.</p>
                  <p class="card__info w-270">Более качественный и быстрый метод исследования</p>
                </div>
                <div class="card-right">
                  <img class="card__img" src="assets/img/icons/ultrasound.svg">
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 card-wrapper">
            <a href="services-terapy.php">
              <div class="card">
                <div class="card-left">
                  <p class="card__title">Лаборатория</p>
                  <p class="card__price">от 450руб.</p>
                  <p class="card__info w-270">Название анализа, название анализа, анализ</p>
                </div>
                <div class="card-right">
                  <img class="card__img" src="assets/img/icons/laboratory.svg">
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 card-wrapper">
            <a href="services-terapy.php">
              <div class="card">
                <div class="card-left">
                  <p class="card__title">Стационар</p>
                  <p class="card__price">от 15 000руб.</p>
                  <p class="card__info w-270">Комфортные боксы для животных разных размеровp>
                </div>
                <div class="card-right">
                  <img class="card__img" src="assets/img/icons/hospital.svg">
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 card-record-wrapper">
            <div class="card-record">
              <div class="card-record__title">Не знаете к кому обратиться?</div>
              <div class="card-record__text">Обычно прием начинается у терапевта. Напишите нам и мы подберем удобнее время.</div>
              <button
                class="card-record__button appointment__initial-modal"
                data-modal="#appointment-modal"
              >
                Записаться на прием
              </button>
            </div>
          </div>

        </div>
      </div>
    </section>

  <!-- Section advantages -->
    <section class="advantages">
      <div class="container">

        <div class="row">
          <div class="col-md-12">
            <h2 class="advantages-block__header">КОРВЕТЦЕНТР это:</h2>
					</div>
        </div>

				<div class="advantages-block">
					<div class="row">
						<div class="col-md-6 advantages-block__img-wrapper">
							<img class="advantages-block__img" src="assets/img/advantages/cardiology.png"></img>
						</div>
						<div class="col-md-6 advantages-block__text-wrapper">
							<div class="advantages-block__text">
								<h2 class="advantages-block__text-title">Кардиологическое отделение</h2>
								<p>
                  Кардиология занимает особое место в деятельности нашей клиники.
                  Многолетний опыт и уникальные знания лежат в основе нашей работы,
                  направленной на диагностику и лечение болезней сердца собак и кошек.
                  Безусловно, невозможно обойтись без современного высокоточного оборудования,
                  с помощью которого наши специалисты получают ценные диагностические данные
                  о заболевании. Наше отделение принимает пациентов из других клиник по
                  вопросам диагностики и лечения.
                </p>
							</div>
						</div>
					</div>
        </div>

				<div class="advantages-block">
					<div class="row">
						<div class="col-md-6 advantages-block__text-wrapper">
							<div class="advantages-block__text">
								<h2 class="advantages-block__text-title">Лечение и профилактика полного спектра заболеваний</h2>
								<p>
                  Понимая, что качественное лечение не может быть сфокусировано
                  лишь на одной системе организма, мы готовы предоставить
                  широкий спектр услуг для комплексной помощи питомцу.
                  Оборудованный хирургический блог, своя лаборатория и стационар
                  дают возможнось нашим специалистам проводить диагностику и
                  лечение на высшем уровне.
                </p>
							</div>
						</div>
						<div class="col-md-6  advantages-block__img-wrapper">
							<img class="advantages-block__img advantages-block__img-wrapper" src="assets/img/advantages/terapy.png"></img>
						</div>
					</div>
        </div>

				<div class="advantages-block">
					<div class="row">
						<div class="col-md-6 advantages-block__img-wrapper">
							<img class="advantages-block__img" src="assets/img/advantages/diagnostics.png"></img>
						</div>
						<div class="col-md-6 advantages-block__text-wrapper">
							<div class="advantages-block__text">
                <h2 class="advantages-block__text-title">Диагностика</h2>
                <p>
                  Понимая, что качественное лечение не может быть сфокусировано
                  лишь на одной системе организма, мы готовы предоставить
                  широкий спектр услуг для комплексной помощи питомцу.
                  Оборудованный хирургический блог, своя лаборатория и стационар
                  дают возможнось нашим специалистам проводить диагностику и
                  лечение на высшем уровне.
                </p>
							</div>
						</div>
					</div>
        </div>

				<div class="advantages-block">
					<div class="row">
						<div class="col-md-6 advantages-block__text-wrapper">
							<div class="advantages-block__text">
								<h2 class="advantages-block__text-title">Отношение</h2>
								<p>
                  Клиника готова консультировать и делиться своими знаниями
                  опытом, наши двери открыты для неравнодушных людей и
                  благотворительных организаций. Персонал клиники всегда
                  очень ответственно подходит к своей работе, и очень
                  душевно к посетителям: их окружают вниманием и
                  заботой (даже стационар не с клетками, а с боксами),
                  а для хозяев есть комфортная зона ожидания, чай, кофе.
                </p>
							</div>
						</div>
						<div class="col-md-6 advantages-block__img-wrapper">
							<img class="advantages-block__img" src="assets/img/advantages/relationship.png"></img>
						</div>
					</div>
        </div>

      </div>
    </section>

  <!-- Section pharmacy -->
    <section class="pharmacy">
      <div class="container">

        <div class="row">
          <div class="col-md-12">
            <div class="pharmacy__header">
              <p>
                Также в нашей клинике работает лицензированная ветеринарная аптека с широким выбором лечебных и профилактических препаратов
              </p>
            </div>
          </div>
        </div>

        <div class="pharmacy-items">
          <div class="row">

            <div class="col-lg-3 col-md-6">
              <div class="pharmacy-items__item">
                <img class="img" src="assets/img/services/1.svg" />
                <p>Вся продукция является сертифицированной и проходит через проверенных поставщиков.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="pharmacy-items__item">
                <img class="img" src="assets/img/services/2.svg" />
                <p>При необходимости можно сделать индивидуальный заказ на определенные лекарственные средства.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="pharmacy-items__item">
                <img class="img" src="assets/img/services/3.svg" />
                <p>Представлен широкий спектр лечебных и профилактических кормов от лучших производителей.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="pharmacy-items__item">
                <img class="img" src="assets/img/services/4.svg" />
                <p>Сотрудники клиники с радостью проконсультируют вас по выбору продукции.</p>
              </div>
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="pharmacy__footer">
              <p>
                Также вы можете побаловать своего любимца, купив ему игрушку или лакомство. Информацию о наличии истоимости препаратов уточняйте по телефонам клиники.
              </p>
            </div>
          </div>
        </div>

      </div>
    </section>

    <?php include ("blocks/feedback-form.php"); ?>

  <!-- Section social-activity -->
    <section class="social-activity">
      <div class="container">
        <div class="row">

          <div class="col-md-8">
            <div class="social-activity-left">
              <h2 class="social-activity-left__header">Мы ценим жизнь животных и помогаем неравнодушным людям защищать их</h2>
              <h2 class="social-activity-left__text">
                Если вы нашли бездомное животное, позвоните нам по телефону <a href="tel:+7 (977) 119-10-05">+7 (977) 119-10-05</a>, мы расскажем вам, что с ним нужно делать.
              </h2>
              <div class="row">
                <div class="col-md-6">
                  <div class="services-body">
                    <h2 class="services-body__header">Стерилизация<br />собак и кошек</h2>
                    <p>
                      Наши специалисты проводят быстрые бесшовные операции по доступным ценам, после которых животным не требуется восстановление.
                    </p>
                  </div>
                </div>
                  <div class="col-md-6">
                    <div class="services-body">
                    <h2 class="services-body__header">Лечение<br />собак и кошек</h2>
                    <p>
                      Мы оказываем помощь в лечении сложных случаев с бездомными животными, работаем с различными зоозащитными организациями.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 social-activity-right-wrapper">
            <div class="social-activity-right">
              <div class="cooperation">
                <p class="cooperation__header">Организации, с которыми мы сотрудничаем:</p>
                <div class="cooperation__logo cooperation__temporary-block1">логотип</div>
                <div class="cooperation__logo cooperation__temporary-block2">логотип</div>
                <div class="cooperation__logo cooperation__temporary-block3">логотип</div>
              </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  <!-- Section news + footer + modal + js libs -->
    <?php include ("blocks/news-articles.php"); ?>
    <?php include ("blocks/modal-appointment.php"); ?>
    <?php include ("blocks/modal-thanks.php"); ?>
    <?php include ("blocks/footer.php"); ?>

    <?php include ("blocks/js-lib.php"); ?>

</body>
</html>
