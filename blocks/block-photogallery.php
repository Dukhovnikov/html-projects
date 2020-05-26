<!-- Photogallery -->
<section class="photogallery">
  <div class="container">
    <div class="photogallery-wrapper">

        <h3 class="photogallery-title">Фотогалерея</h3>

        <div class="photogallery-block">

          <div class="slider-big">

            <div class="photogallery-slider_item">
              <img
                src="./assets/img/block-photogallery/photo-1.jpg"
                onclick="showModal()"
                data-id="1"
                alt="photo"
              />
              <div class="photogallery-slider-text-block">
                <p class="photogallery-slider-text">
                  Наши врачи проводят плановую операцию: удаление опухоли в
                  брюшной полости у кота Матвея. Операция прошла успешно, Матвей здоров.
                </p>
              </div>
            </div>

            <div class="photogallery-slider_item">
              <img
                src="./assets/img/block-photogallery/photo-1.jpg"
                onclick="showModal()"
                data-id="2"
                alt="photo"
              />
              <div class="photogallery-slider-text-block">
                <p class="photogallery-slider-text">
                  Наши врачи проводят плановую операцию: удаление опухоли в
                  брюшной полости у кота Матвея. Операция прошла успешно, Матвей здоров.
                </p>
              </div>
            </div>
            <!-- ... -->

          </div>

          <div class="slider-modalka" id="modal">

            <button class="btn1" onclick="hideModal()"> &times;</button>

            <div class="slider-modal-block">
              <div class="slider-modal_item carousel-cell">
                <img
                  src="assets/img/block-photogallery/photo-1.jpg"
                  onclick="showModal()"
                  data-id="1"
                  alt="photo"
                />
                <p>
                  Наши врачи проводят плановую операцию: удаление опухоли в
                  брюшной полости у кота Матвея. Операция прошла успешно, Матвей здоров.
                </p>
              </div>
              <div class="slider-modal_item carousel-cell">
                <img
                  src="assets/img/block-photogallery/photo-2.jpg"
                  onclick="showModal()"
                  data-id="2"
                  alt="photo"
                />
                <p>
                  Наши врачи проводят плановую операцию: удаление опухоли в
                  брюшной полости у кота Матвея. Операция прошла успешно, Матвей здоров.
                </p>
              </div>

            </div>

          </div>

      </div>
    </div>
  </div>
</section>
