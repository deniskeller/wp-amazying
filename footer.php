<footer class="footer">
  <div class="wrapper">
    <div class="footer-top">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.svg" class="logo_white"></img>
      <div class="header-top__menu">
        <ul>
          <li>
            <a href="#" data-class="how-it-works">как работает</a>
          </li>
          <li>
            <a href="#" data-class="projects">проекты</a>
          </li>
          <li>
            <a href="#" data-class="why">почему амaz он</a>
          </li>
        </ul>
      </div>
      <div class="header-top__left-items">
        <div class="btn-translator">
          <div class="btn btn-eng">ENG</div>
          <div class="btn btn-active btn-rus">РУС</div>
        </div>
        <a href="/business" class="btn-investor">предпринимателям</a>
      </div>
    </div>

    <div class="footer-content">

      <div class="footer-email">
        <div class="footer-email__title">Узнайте первыми о новых проектах</div>
        <div class="footer-email__text">Подпишитесь на рассылку</div>
        <div class="footer-email__btn">
          <input type="email" name="email" class="enter-mail" placeholder="Введите email">
          <div class="btn-enter"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_white.svg" class="arrow_white"></div>
        </div>

      </div>

      <div class="footer-social">

        <div class="footer-social__title">
          Оставайтесь в курсе последних событий
        </div>

        <div class="footer-social__text">Новости, анонсы</div>

        <div class="footer-social__items">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/images/vk.svg" class="vk">
          </a>
          <a href="https://www.facebook.com/groups/752559908411612/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/fb.svg" alt="fb">
          </a>
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/images/insta.svg" class="insta">
          </a>
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/images/tw.svg" class="tw">
          </a>
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/images/google.svg" class="google">
          </a>
        </div>





      </div>

      <div class="footer-address">

        <div class="footer-address__phone">
          <div class="phone">
            <img src="<?php echo get_template_directory_uri(); ?>/images/phone.svg" class="phone-img">
            +7 (495) 241-04-53
          </div>
          <div class="mode">Пн-Пт, 09:00-20:00</div>
        </div>


        <div class="footer-address__email">
          <div class="email">
            <img src="<?php echo get_template_directory_uri(); ?>/images/mail.svg" class="email-img">
            team@amazying.com
          </div>
          <div class="mode">По всем вопросам</div>
        </div>






      </div>

    </div>

    <div class="footer-copyright">

      <div class="left-item">
        <div class="date">&#169; <span>2018</span></div>
        Все права защищены
      </div>
      <div class="right-item">18+</div>
    </div>


  </div>
</footer>

<div class="reg-modal">

  <div class="wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/images/nice-close.svg" alt="" class="close">
    <div class="title">Регистрация инвестора</div>
    <img class="img" src="<?php echo get_template_directory_uri(); ?>/images/happy-guys.svg" alt="">
    <div class="inputs">
      <input type="email" class="input" placeholder="Введите email" name="email">
      <input type="password" class="input" placeholder="Пароль" name="password">
      <input type="password" class="input" placeholder="Повторите пароль" name="confirm">
      <a href="#" class="button reg-but">Регистрация <img src="<?php echo get_template_directory_uri(); ?>/images/arrow_white.svg" alt="" class="arrow"></a>
    </div>
  </div>
</div>


<div class="thank-modal">
  <div class="wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/images/red-close.svg" class="red-close">
    <img src="<?php echo get_template_directory_uri(); ?>/images/thank-bg.svg" class="thank-bg">
    <div class="modal-content">
      <div class="title">Спасибо!</div>
      <div class="text">Мы свяжемся с вами <br> в рабочее время <br> с 10:00 до 19:00</div>
    </div>
  </div>
</div>

<!-- <script>
  $(document).ready(function() {
    /*событие Меню*/
    $('.menu-btn').on('click', function(e) {
      e.preventDefault;
      $(this).toggleClass('menu-btn_active');
      $('.menu-mobile').toggleClass('hidden');
    });
    $('.btn_check-in').on('click', function() {
      $('.reg-modal .input[name="email"]').val($(this).parent().find('input').eq(0).val());
      $('.reg-modal').toggle();
    });


    $('.btn_show-all, .btn-choose').on('click', function() {
      $('.reg-modal').toggle();
    });
    $('.reg-modal .close').on('click', function() {
      $('.reg-modal').toggle();
      return false;
    });
    $('.header-top__menu a').click(function() {
      $('html, body').animate({
        scrollTop: $('.' + $(this).attr('data-class')).offset().top
      }, 'slow');
      return false;
    });
    $('.reg-but').on('click', function() {
      if ($(this).parent().find('input[name="email"]').eq(0).val() != '' && $(this).parent().find('input[name="password"]').eq(0).val() != '' && $(this).parent().find('input[name="confirm"]').eq(0).val() != '' && $(this).parent().find('input[name="password"]').eq(0).val() == $(this).parent().find('input[name="confirm"]').eq(0).val()) {
        $.ajax({
          url: "ar1.php",
          type: "POST",
          data: {
            'email': $(this).parent().find('input[name="email"]').eq(0).val(),
            'password': $(this).parent().find('input[name="password"]').eq(0).val()
          },
          success: function(data) {
            // swal({
            //   title: 'Отлично!',
            //   html:
            //     'Наш менеджер свяжется с вами в течение часа.',
            //       // JSON.stringify(result.value) +

            //   confirmButtonText: 'Закрыть'
            // })
            $('.reg-modal').toggle();
            $('input').val('');
            $('.thank-modal').toggle();
            $('.red-close').on('click', function(e) {
              e.preventDefault;
              $('.thank-modal').toggle().reset();
            });
          }
        });
      } else {
        if ($(this).parent().find('input[name="email"]').eq(0).val() == '') {
          $(this).parent().find('input[name="email"]').eq(0).attr('style', 'border: 2px solid red');
        }
        if ($(this).parent().find('input[name="password"]').eq(0).val() == '') {
          $(this).parent().find('input[name="password"]').eq(0).attr('style', 'border: 2px solid red');
        }
        if ($(this).parent().find('input[name="confirm"]').eq(0).val() == '') {
          $(this).parent().find('input[name="confirm"]').eq(0).attr('style', 'border: 2px solid red');
        }
        if ($(this).parent().find('input[name="password"]').eq(0).val() != $(this).parent().find('input[name="confirm"]').eq(0).val()) {
          $(this).parent().find('input[name="confirm"]').eq(0).attr('style', 'border: 2px solid red');
        }
      }
    });

    $('.btn-enter').on('click', function() {
      if ($(this).parent().find('input[name="email"]').eq(0).val() != '') {
        $.ajax({
          url: "",
          type: "POST",
          data: {
            'email': $(this).parent().find('input[name="email"]').eq(0).val()
          },
          success: function(data) {
            // swal({
            //   title: 'Отлично!',
            //   html:
            //     'Подписка оформлена.',
            //       // JSON.stringify(result.value) +

            //   confirmButtonText: 'Закрыть'
            // })
            $('input').val('');
            $('.thank-modal').toggle();
            $('.red-close').on('click', function(e) {
              e.preventDefault;
              $('.thank-modal').toggle().reset();
            });

          }
        });
      } else {
        if ($(this).parent().find('input[name="email"]').eq(0).val() == '') {
          $(this).parent().find('input[name="email"]').eq(0).attr('style', 'border: 2px solid red');
        }
      }
    });
  });

  window.onresize = function(event){
  	if (window.outerWidth < 1170) {
        document.getElementById('hack').setAttribute('style', 'overflow-x: hidden;');
      } else {
        document.getElementById('hack').setAttribute('style', 'overflow-x: unset;');
    }
  }
</script> -->

<?php wp_footer(); ?>
</body>

</html>
