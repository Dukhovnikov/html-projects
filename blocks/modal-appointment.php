<!-- Modal appointment -->
<div class="appointment-modal" id="appointment-modal">

  <div class="appointment-modal__title">
    <p>Запишитесь на прием прямо сейчас</p>
    <img
      src="assets/img/appointment/Close.svg"
      alt="Close"
      class="appointment-close-modal"
      data-modal="#appointment-modal"
    />
  </div>

  <form action="">
    <div class="appointment-modal__input input-name">
      <input type="text" placeholder="Как вас зовут?">
    </div>
    <div class="appointment-modal__input input-phone">
      <input type="text" placeholder="Ваш телефон?">
    </div>
    <div class="appointment-modal__prompt-phone">
      <p>В формате +7 XXX XXX-XX-XX</p>
    </div>
    <div class="appointment-modal__promp-date">
      <p>Когда вы хотите записаться?</p>
    </div>
    <div class="appointment-modal__input input-date">
      <input class="appointment-modal__input__date" type="text" placeholder="Сегодня">
    </div>
    <div class="appointment-modal__input input-reason">
      <input class="appointment-modal__input__reason" type="text" placeholder="Что случилось у вашего питомца? (необязательно)">
    </div>
  </form>

  <div class="appointment-modal__footer">
    <button
      class="appointment-modal__button appointment-close-modal"
      type="submit"
      data-modal="#appointment-modal"
    >
      Отправить запрос
    </button>
    <p>Нажимая кнопку “Отправить запрос” вы соглашаетесь на условиями Политики конфеденциаьности</p>
  </div>

</div>
