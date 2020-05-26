<header>
  <div class="container">
    <div class="header">
    <!-- Header logo -->
      <div class="header-logo">
        <a class="open">
          <img src="./assets/img/header/burger.svg" alt="burger-menu" />
        </a>
        <a class="close">
          <img src="./assets/img/header/cross.svg" alt="cross" />
        </a>
        <a href="index.php">
          <img class="header-logo__src" src="./assets/img/header/logo.svg" alt="logo" />
          <img class="scroll-logo" src="./assets/img/header/slogo.svg" alt="logo" />
        </a>
      </div>
    <!-- Desktop header items -->
      <div class="header-items">
        <ul class="header-items__list">
          <li class="header-items__list-item"><a href="about.php">О клинике</a></li>
          <li class="header-items__list-item dropdown">Услуги и цены</li>
          <li class="header-items__list-item"><a href="our-team.php">Команда</a></li>
          <li class="header-items__list-item"><a href="client-story.php">Истории пациентов</a></li>
          <li class="header-items__list-item"><a href="posts.php">Статьи</a></li>
          <li class="header-items__list-item"><a href="contact.php">Контакты</a></li>
        </ul>
      </div>
    <!-- Desktop header button -->
      <div class="header-appointment">
        <button class="appointment__button appointment__initial-modal" data-modal="#appointment-modal">
          Записаться на прием
        </button>
      </div>

    <!-- Mobile header -->
      <div class="header-dropdown">
        <div class="container">

          <div class="main-dropdown">
          <!-- Mobile header items -->
            <div class="header-main__items">
              <h2 class="header-main__items-title">Меню:</h2>
              <ul class="header-main__items-list">
                <li><a class="sub-active" href="about.php">О клинике</a></li>
                <li class="subdrop">
                  <a href="#">Услуги и цены</a>
                  <img class="subdrop__icon" src="./assets/img/header/chevron-right.svg" alt="right-arrow" />
                </li>
                <li><a href="our-team.php">Команда</a></li>
                <li><a href="client-story.php">Истории пациентов</a></li>
                <li><a href="posts.php">Статьи</a></li>
                <li><a href="contact.php">Контакты</a></li>
              </ul>
            <!-- Mobile header button -->
              <div class="header-dropdown__appointment">
                <button class="appointment__button appointment__initial-modal" data-modal="#appointment-modal">
                  Записаться на прием
                </button>
              </div>
            <!-- Mobile header phone -->
              <div class="header-dropdown__contact">
                <img class="header-dropdown__contact-icon" src="./assets/img/header/phone.svg" alt="phone" />
                <a href="tel: +79771191005">+7 (977) 119-10-05</a>
              </div>
            </div>

          <!-- Mobile header sub-menu -->
            <div class="header-dropdown__subitems">
              <h2 class="header-dropdown__subitems-title">Услуги:</h2>

              <div class="header-dropdown__subitems-nav">
                <img class="header-dropdown__subitems-nav-icon" src="./assets/img/header/chevron-left.svg" alt="left-arrow" />
                <h3 class="header-dropdown__subitems-nav-back">Назад</h3>
              </div>

            <!-- Mobile header sub-menu items -->
              <div class="header-dropdown__items">
                <div class="header-dropdown_block">
                  <ul>
                    <li><a href="services-cardiology.php">Кардиология</a></li>
                    <li><a href="services-cardiology.php">Терапия</a></li>
                    <li><a href="services-cardiology.php">Хирургия</a></li>
                  </ul>
                </div>
                <div class="header-dropdown_block">
                  <ul>
                    <li><a href="services-cardiology.php">УЗИ сердца</a></li>
                    <li><a href="services-cardiology.php">УЗИ брюшной полости</a></li>
                    <li><a href="services-cardiology.php">Рентген</a></li>
                  </ul>
                </div>
                <div class="header-dropdown_block">
                  <ul>
                    <li><a href="services-cardiology.php">Лаборатория</a></li>
                    <li><a href="services-cardiology.php">Стационар</a></li>
                  </ul>
                </div>
                <div class="header-dropdown_img">
                  <img class="header-dropdown_img-src" src="./assets/img/header/pet.svg" alt="">
                  <p>Мы принимаем кошек и собак любых пород</p>
                </div>
              </div>

            </div>

          </div>

        </div>
      </div>

    </div>
  </div>
</header>

<!-- Breadcrumbs TODO -->
<section class="under-header-path">
  <div class="container">
    <div class="under-header-body">

      <div class="under-header-path__main">
        <p class="under-header-path__main__text">Главная</p>
      </div>

      <div class="under-header-path__arrow">
        <img class="under-header-path__arrow__img" src="assets/img/about/arrow.svg" alt="right-arrow" />
      </div>

      <div class="under-header-path__about">
        <p class="under-header-path__about__text">О клинике</p>
      </div>

    </div>
  </div>
</section>
