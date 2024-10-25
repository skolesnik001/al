<?php

include_once('./config.php');
include_once('./includes/functions.php');
include_once('./includes/analytics.php');

if(function_exists('check_utm')){
  check_utm();
}

if(function_exists('check_form')){
  check_form();
}

include_once('./includes/integrations.php');
if(function_exists('integrations') && isset($_REQUEST['name']) && isset($_REQUEST['phone'])){
  $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';
  $phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : '';
  $source = isset($_REQUEST['source']) ? $_REQUEST['source'] : 'form';
  integrations($name, $phone, $source);
}

?>

<!DOCTYPE html>
<html lang="<?php echo isset($config["language"]) ? $config["language"] : "en"; ?>" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=375, user-scalable=no">
    <meta name="theme-color" content="#e69ebd" />
    <title>Замовлення створено | Набор силиконовых крышек</title>
    <meta property="og:site_name" content="Замовлення створено | Набор силиконовых крышек">
    <meta property="og:locale" content="<?php echo isset($config["language"]) ? $config["language"] : "en"; ?>">
    <meta property="og:type" content="website">
    
    
    
    <link rel="stylesheet" href="assets/css/checkout.css" />
    
    <?php function_exists('gtm_init') ? gtm_init() : ""; ?>
    <?php function_exists('fbq_init') ? fbq_init() : ""; ?>

  </head>
  <body>
    <?php function_exists('gtm_conversion') ? gtm_conversion() : ""; ?>
    <?php function_exists('fbq_conversion') ? fbq_conversion() : ""; ?>
    <div class="overlay hidden"></div>
    <section class="checkout-form">
      <div>
        <h1>Поздравляем! <br />Ваша скидка забронирована!</h1>
        <p>Наши операторы свяжутся с минуты на минуту! Просим держать тефон рядом)</p>
      </div>

      <div>
        Пожалуйста, проверьте правильность введенной информации
      </div>

      <form method="post" action="">
        <div>
          <div>
            <label for="name">Имя:</label>
            <input id="name" name="name" type="text" value="<?php function_exists('name') ? name() : ""; ?>" autocomplete="name" placeholder="Ваше имя" required disabled />
          </div>
          <div>
            <label for="phone">Телефон:</label>
            <input id="phone" name="phone" type="tel" value="<?php function_exists('phone') ? phone() : ""; ?>" autocomplete="tel" placeholder="Ваш номер телефона" required disabled />
          </div>

          <?php if(isset($_REQUEST['save'])){ ?>
            <span id="save-message">Данные успешно сохранены</span>
          <?php } ?>
        </div>

        <button type="button" name="edit">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152L0 424c0 48.6 39.4 88 88 88l272 0c48.6 0 88-39.4 88-88l0-112c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 112c0 22.1-17.9 40-40 40L88 464c-22.1 0-40-17.9-40-40l0-272c0-22.1 17.9-40 40-40l112 0c13.3 0 24-10.7 24-24s-10.7-24-24-24L88 64z" fill="currentColor"/></svg>
          <span>Редактировать информацию</span>
        </button>
        <button type="submit" name="save" class="hidden">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M48 96l0 320c0 8.8 7.2 16 16 16l320 0c8.8 0 16-7.2 16-16l0-245.5c0-4.2-1.7-8.3-4.7-11.3l33.9-33.9c12 12 18.7 28.3 18.7 45.3L448 416c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64L0 96C0 60.7 28.7 32 64 32l245.5 0c17 0 33.3 6.7 45.3 18.7l74.5 74.5-33.9 33.9L320.8 84.7c-.3-.3-.5-.5-.8-.8L320 184c0 13.3-10.7 24-24 24l-192 0c-13.3 0-24-10.7-24-24L80 80 64 80c-8.8 0-16 7.2-16 16zm80-16l0 80 144 0 0-80L128 80zm32 240a64 64 0 1 1 128 0 64 64 0 1 1 -128 0z" fill="currentColor"/></svg>
          <span>Сохранить изменения</span>
        </button>
      </form>
    </section>

    <script>
      document.addEventListener("DOMContentLoaded", (gE) => {
        // Hide save-message
        setTimeout(() => {
          const m = document.querySelector('#save-message');
          if(m){
            m.classList.add('hidden');
          }
        }, 5000);

        // Toggle overlay, inputs and button
        const bE = document.querySelector('button[name="edit"]');
        const bS = document.querySelector('button[name="save"]');
        const o = document.querySelector('.overlay');
        const iN = document.querySelector('input[name="name"]');
        const iP = document.querySelector('input[name="phone"]');

        if(bE && bS && o && iN && iP){
          bE.addEventListener('click', (e) => {
            e?.preventDefault();
            bE.classList.add('hidden');
            bS.classList.remove('hidden');
            o.classList.remove('hidden');
            iN.removeAttribute('disabled');
            iP.removeAttribute('disabled');
          });
        }
      });
    </script>
  </body>
</html>