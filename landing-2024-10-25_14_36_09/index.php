<?php

include_once('./config.php');
include_once('./includes/functions.php');
include_once('./includes/analytics.php');

if(function_exists('check_utm')){
  check_utm();
}


?>

<!DOCTYPE html>
<html lang="<?php echo isset($config["language"]) ? $config["language"] : "en"; ?>" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=375, user-scalable=no">
    <meta name="theme-color" content="#e69ebd" />
    <title>Набор силиконовых крышек</title>
    <meta property="og:site_name" content="Набор силиконовых крышек">
    <meta property="og:locale" content="<?php echo isset($config["language"]) ? $config["language"] : "en"; ?>">
    <meta property="og:type" content="website">
    
    
    <meta property="og:image" content="<?php echo function_exists("domain") ? domain(False, True) . "/" : ""; ?>assets/images/meta.webp">
    <meta name="twitter:image" content="<?php echo function_exists("domain") ? domain(False, True) . "/" : ""; ?>assets/images/meta.webp">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="stylesheet" href="assets/css/styles.css" />
    <script src="assets/js/scripts.js" defer></script>
    <?php function_exists('gtm_init') ? gtm_init() : ""; ?>
    <?php function_exists('fbq_init') ? fbq_init() : ""; ?>

  </head>
  <body>
    <section class="section-5-22-1">
  <span  ><span style="color:rgb(29, 29, 31);font-family:&quot;SF UI Display&quot;;font-size:28px;font-weight:700">Корейський крем пудра-кушон</span><br /></span> <span  ></span>
</section>
 <section class="section-3-5-2">
  <div>
    <h1  ><span style="font-size:18px">Эластичные, прочные и многоразовые</span></h1>
  </div>
  <div >
    <img src="assets/images/dD4LirgDhmrL9j3Q.webp">
  </div>
</section> <section class="section-4-19-3">
  <div>
    <span  >Обычная цена:</span>
    <div>
      <s><?php echo function_exists("price_old") ? price_old() : ""; ?><span  > грн</span></s>
      <span>-<?php echo function_exists("discount") ? discount() : ""; ?>%</span>
    </div>
  </div>

  <div>
    <div><?php echo function_exists("price") ? price() : ""; ?></div>
    <span  > грн</span>
  </div>
</section> <section class="section-6-27-4">
  <button  >ЗАМОВИТИ</button>
</section> <section class="section-7-34-5" ><div ><div><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_4348_362)"><path d="M22.243 5.272L18.728 1.757C17.594 0.624 16.087 0 14.485 0H9.51402C7.91202 0 6.40502 0.624 5.27102 1.757L1.75602 5.272C0.623024 6.406 -0.000976562 7.913 -0.000976562 9.515V14.486C-0.000976562 16.088 0.623024 17.595 1.75602 18.729L5.27102 22.244C6.40502 23.377 7.91202 24.001 9.51402 24.001H14.485C16.087 24.001 17.594 23.377 18.728 22.244L22.243 18.729C23.376 17.595 24 16.088 24 14.486V9.515C24 7.913 23.376 6.406 22.243 5.272ZM18.333 9.833L13.101 15.065C12.488 15.678 11.673 16.016 10.806 16.016C9.93902 16.016 9.12402 15.678 8.51102 15.065L5.72402 12.278C5.33302 11.887 5.33302 11.255 5.72402 10.864C6.11502 10.473 6.74702 10.473 7.13802 10.864L9.92502 13.651C10.396 14.122 11.217 14.121 11.687 13.651L16.919 8.419C17.31 8.028 17.942 8.028 18.333 8.419C18.724 8.81 18.724 9.442 18.333 9.833Z" fill="currentColor"/></g><defs><clipPath id="clip0_4348_362"><rect width="24" height="24" fill="white"/></clipPath></defs></svg></div><span   >Якісний гіпоалергенний матеріал</span></div><div ><div><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_4348_362)"><path d="M22.243 5.272L18.728 1.757C17.594 0.624 16.087 0 14.485 0H9.51402C7.91202 0 6.40502 0.624 5.27102 1.757L1.75602 5.272C0.623024 6.406 -0.000976562 7.913 -0.000976562 9.515V14.486C-0.000976562 16.088 0.623024 17.595 1.75602 18.729L5.27102 22.244C6.40502 23.377 7.91202 24.001 9.51402 24.001H14.485C16.087 24.001 17.594 23.377 18.728 22.244L22.243 18.729C23.376 17.595 24 16.088 24 14.486V9.515C24 7.913 23.376 6.406 22.243 5.272ZM18.333 9.833L13.101 15.065C12.488 15.678 11.673 16.016 10.806 16.016C9.93902 16.016 9.12402 15.678 8.51102 15.065L5.72402 12.278C5.33302 11.887 5.33302 11.255 5.72402 10.864C6.11502 10.473 6.74702 10.473 7.13802 10.864L9.92502 13.651C10.396 14.122 11.217 14.121 11.687 13.651L16.919 8.419C17.31 8.028 17.942 8.028 18.333 8.419C18.724 8.81 18.724 9.442 18.333 9.833Z" fill="currentColor"/></g><defs><clipPath id="clip0_4348_362"><rect width="24" height="24" fill="white"/></clipPath></defs></svg></div><span   >Вирівнювання, приховування недоліків</span></div><div ><div><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_4348_362)"><path d="M22.243 5.272L18.728 1.757C17.594 0.624 16.087 0 14.485 0H9.51402C7.91202 0 6.40502 0.624 5.27102 1.757L1.75602 5.272C0.623024 6.406 -0.000976562 7.913 -0.000976562 9.515V14.486C-0.000976562 16.088 0.623024 17.595 1.75602 18.729L5.27102 22.244C6.40502 23.377 7.91202 24.001 9.51402 24.001H14.485C16.087 24.001 17.594 23.377 18.728 22.244L22.243 18.729C23.376 17.595 24 16.088 24 14.486V9.515C24 7.913 23.376 6.406 22.243 5.272ZM18.333 9.833L13.101 15.065C12.488 15.678 11.673 16.016 10.806 16.016C9.93902 16.016 9.12402 15.678 8.51102 15.065L5.72402 12.278C5.33302 11.887 5.33302 11.255 5.72402 10.864C6.11502 10.473 6.74702 10.473 7.13802 10.864L9.92502 13.651C10.396 14.122 11.217 14.121 11.687 13.651L16.919 8.419C17.31 8.028 17.942 8.028 18.333 8.419C18.724 8.81 18.724 9.442 18.333 9.833Z" fill="currentColor"/></g><defs><clipPath id="clip0_4348_362"><rect width="24" height="24" fill="white"/></clipPath></defs></svg></div><span   >Універсальний, підлаштовується під тон шкіри</span></div></section>
 <section class="section-12-48-6">
  <h2  ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);text-align:start;font-size:18pt;font-family:Roboto, Arial;font-weight:bold">Удобно и надежно</span></h2>
  <div >
    <div ><div  ><video autoplay="true" muted="true" loop="true" playsinline="true" src="assets/videos/k7Ugj04QGffsASev.mp4" /></div><div><h3   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:12pt;font-family:Roboto, Arial">Потеряли крышку? Не беда!</span></h3><div  style="text-align:left;" ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:12pt;font-family:Roboto, Arial">Крышечки разного размера, поэтому подойдут для любой посуды или стаканов.</span></div></div></div><div ><div  ><video autoplay="true" muted="true" loop="true" playsinline="true" src="assets/videos/9Xuk89UDXoZUZr9P.mp4" /></div><div><h3   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:12pt;font-family:Roboto, Arial">Круг на квадрат? Конечно!</span></h3><div  style="text-align:left;" ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:12pt;font-family:Roboto, Arial">Крышки подходят для прямоугольной формы посуды.</span></div></div></div>
  </div>
</section> <section class="section-8-37-7">
  <h2  ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);text-align:start;font-size:18pt;font-family:Roboto, Arial;font-weight:bold">Преимущества</span></h2>
  <div >
   <div ><div  ><img src="assets/images/Fv8l3Fob5sgTepqe.webp" alt="step-1"></div><div><h3   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-weight:normal;font-size:11pt;font-family:Roboto, Arial">Упругие и прочные. Хорошо тянутся.</span></h3><span   ></span></div></div><div ><div  ><img src="assets/images/GtemvLVvq7KRobl7.webp" alt="step-2"></div><div><h3   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-weight:normal;font-size:11pt;font-family:Roboto, Arial">Не пропускают запах и жидкость.</span></h3><span   ></span></div></div><div ><div  ><img src="assets/images/AxbebsVVC7lBZntu.webp" alt="step-3"></div><div><h3   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-weight:normal;font-size:11pt;font-family:Roboto, Arial">Легко мыть и хранить.</span></h3><span   ></span></div></div><div ><div  ><img src="assets/images/Xcc1ltco3Ia0mCBe.webp" alt="step-3"></div><div><h3   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-weight:normal;font-size:11pt;font-family:Roboto, Arial">Подходят для микроволновки.</span></h3><span   ></span></div></div>
  </div>
</section> <section class="section-8-46-8">
  <h2  ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);text-align:start;font-size:18pt;font-family:Roboto, Arial;font-weight:bold">Особенности</span></h2>
  <div >
   <div ><div><h3   ><span style="font-size:11pt;font-family:Roboto, Arial">Герметичность</span></h3></div><div  ><img src="assets/images/1a7t0QHydtL29WKg.webp" alt="step-3"></div><div  style="text-align:left;" ><span style="font-size:11pt;font-family:Roboto, Arial">Герметически закрываются и подходят для хранения жидкостей.</span></div></div>
  </div>
</section> <section class="section-9-38-9">
  <h2  >Как мы работаем?</h2>
  <ul >
    <li ><div   >1</div><span   >Оставляете заявку на сайте</span></li><li ><div   >2</div><span   >Менеджер уточняет детали заказа</span></li><li ><div   >3</div><span   >Доставляем заказ в течение 1-3 дней</span></li><li ><div   >4</div><span   >Оплачиваете при получении</span></li>
  </ul>
</section> <section class="section-8-35-10">
  <h2  ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);text-align:start;font-size:18pt;font-family:Roboto, Arial;font-weight:bold">Как пользоваться?</span></h2>
  <div >
   <div ><div  ><img src="assets/images/s3Riut6AJyTsww8K.webp" alt="step-1"></div><div><h3   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">Шаг 1</span></h3><span   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">Подберите нужный размер.</span></span></div></div><div ><div  ><img src="assets/images/1J1ErpRVPlAs1wVZ.webp" alt="step-2"></div><div><h3   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">Шаг 2</span></h3><span   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">Плотно прижмите один край посуды.</span></span></div></div><div ><div  ><img src="assets/images/iVq9G7ll2FsvrkoQ.webp" alt="step-3"></div><div><h3   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">Шаг 3</span></h3><span   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">Хорошо натяните крышку на противоположные края.</span></span></div></div><div ><div  ><img src="assets/images/X5JAoWvK3xwn7AxV.webp" alt="step-3"></div><div><h3   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">Шаг 4</span></h3><span   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">Убедитесь, что нет лишнего воздуха и закройте.</span></span></div></div>
  </div>
</section> <section class="section-10-41-11">
  <h2  ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);text-align:start;font-size:18pt;font-family:Roboto, Arial;font-weight:bold">Характеристики товару</span></h2>
  <div >
    <img src="assets/images/dA8breW6kqTFVqXT.webp" alt="specifications">
  </div>
  <ul >
    <li ><div><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.81189 18C8.30095 18.0002 7.81093 17.8126 7.44994 17.4787L3.3323 13.6774C2.88923 13.2681 2.88923 12.6047 3.3323 12.1954C3.7755 11.7862 4.49393 11.7862 4.93713 12.1954L8.81189 15.7737L19.0629 6.30688C19.5061 5.89771 20.2245 5.89771 20.6677 6.30688C21.1108 6.71618 21.1108 7.37966 20.6677 7.78896L10.1738 17.4787C9.81286 17.8126 9.32284 18.0002 8.81189 18Z" fill="currentColor"/></svg></div><div><div   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:12pt;font-family:Roboto, Arial">Материал</span></div><span   ><span style="font-size:12pt;font-family:Roboto, Arial;color:rgb(102, 102, 102)">силикон</span></span></div></li><li ><div><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.81189 18C8.30095 18.0002 7.81093 17.8126 7.44994 17.4787L3.3323 13.6774C2.88923 13.2681 2.88923 12.6047 3.3323 12.1954C3.7755 11.7862 4.49393 11.7862 4.93713 12.1954L8.81189 15.7737L19.0629 6.30688C19.5061 5.89771 20.2245 5.89771 20.6677 6.30688C21.1108 6.71618 21.1108 7.37966 20.6677 7.78896L10.1738 17.4787C9.81286 17.8126 9.32284 18.0002 8.81189 18Z" fill="currentColor"/></svg></div><div><div   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:12pt;font-family:Roboto, Arial">Количество в наборе</span></div><span   ><span style="font-size:12pt;font-family:Roboto, Arial;color:rgb(102, 102, 102)">6 шт</span></span></div></li><li ><div><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.81189 18C8.30095 18.0002 7.81093 17.8126 7.44994 17.4787L3.3323 13.6774C2.88923 13.2681 2.88923 12.6047 3.3323 12.1954C3.7755 11.7862 4.49393 11.7862 4.93713 12.1954L8.81189 15.7737L19.0629 6.30688C19.5061 5.89771 20.2245 5.89771 20.6677 6.30688C21.1108 6.71618 21.1108 7.37966 20.6677 7.78896L10.1738 17.4787C9.81286 17.8126 9.32284 18.0002 8.81189 18Z" fill="currentColor"/></svg></div><div><div   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:12pt;font-family:Roboto, Arial">Цвет</span></div><span   ><span style="font-size:12pt;font-family:Roboto, Arial;color:rgb(102, 102, 102)">синий</span></span></div></li><li ><div><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.81189 18C8.30095 18.0002 7.81093 17.8126 7.44994 17.4787L3.3323 13.6774C2.88923 13.2681 2.88923 12.6047 3.3323 12.1954C3.7755 11.7862 4.49393 11.7862 4.93713 12.1954L8.81189 15.7737L19.0629 6.30688C19.5061 5.89771 20.2245 5.89771 20.6677 6.30688C21.1108 6.71618 21.1108 7.37966 20.6677 7.78896L10.1738 17.4787C9.81286 17.8126 9.32284 18.0002 8.81189 18Z" fill="currentColor"/></svg></div><div><div   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:12pt;font-family:Roboto, Arial">Диаметр крышек</span></div><span   ><span style="font-size:12pt;font-family:Roboto, Arial;color:rgb(102, 102, 102)">від 6,5 см до 20 см</span></span></div></li><li ><div><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.81189 18C8.30095 18.0002 7.81093 17.8126 7.44994 17.4787L3.3323 13.6774C2.88923 13.2681 2.88923 12.6047 3.3323 12.1954C3.7755 11.7862 4.49393 11.7862 4.93713 12.1954L8.81189 15.7737L19.0629 6.30688C19.5061 5.89771 20.2245 5.89771 20.6677 6.30688C21.1108 6.71618 21.1108 7.37966 20.6677 7.78896L10.1738 17.4787C9.81286 17.8126 9.32284 18.0002 8.81189 18Z" fill="currentColor"/></svg></div><div><div   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:12pt;font-family:Roboto, Arial">Термостойкость</span></div><span   ><span style="font-size:12pt;font-family:Roboto, Arial;color:rgb(102, 102, 102)">232°С</span></span></div></li><li ><div><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.81189 18C8.30095 18.0002 7.81093 17.8126 7.44994 17.4787L3.3323 13.6774C2.88923 13.2681 2.88923 12.6047 3.3323 12.1954C3.7755 11.7862 4.49393 11.7862 4.93713 12.1954L8.81189 15.7737L19.0629 6.30688C19.5061 5.89771 20.2245 5.89771 20.6677 6.30688C21.1108 6.71618 21.1108 7.37966 20.6677 7.78896L10.1738 17.4787C9.81286 17.8126 9.32284 18.0002 8.81189 18Z" fill="currentColor"/></svg></div><div><div   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:12pt;font-family:Roboto, Arial">Особенности</span></div><span   ><span style="font-size:12pt;font-family:Roboto, Arial;color:rgb(102, 102, 102)">герметичность, тягучесть, подходят для разогрева в микроволновке.</span></span></div></li>
  </ul>
</section> <section class="section-6-27-12">
  <button  >Заказать со скидкой</button>
</section> <section class="section-13-47-13">
  <h2  >Отзывы покупателей</h2>
  <div>
    <span data-slider-arrow="left">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2.66715 7.99997C2.6704 7.64923 2.81172 7.3139 3.06049 7.06663L5.92049 4.19997C6.0454 4.0758 6.21436 4.0061 6.39049 4.0061C6.56661 4.0061 6.73558 4.0758 6.86049 4.19997C6.92297 4.26194 6.97257 4.33567 7.00642 4.41691C7.04026 4.49815 7.05769 4.58529 7.05769 4.6733C7.05769 4.76131 7.04026 4.84844 7.00642 4.92968C6.97257 5.01092 6.92297 5.08466 6.86049 5.14663L4.66715 7.3333H11.3338C11.5106 7.3333 11.6802 7.40354 11.8052 7.52856C11.9303 7.65359 12.0005 7.82315 12.0005 7.99997C12.0005 8.17678 11.9303 8.34635 11.8052 8.47137C11.6802 8.59639 11.5106 8.66663 11.3338 8.66663H4.66715L6.86049 10.86C6.98602 10.9846 7.0569 11.154 7.05753 11.3309C7.05815 11.5079 6.98847 11.6778 6.86382 11.8033C6.73917 11.9288 6.56975 11.9997 6.39285 12.0003C6.21594 12.001 6.04602 11.9313 5.92049 11.8066L3.06049 8.93997C2.8101 8.69107 2.66864 8.35302 2.66715 7.99997Z" fill="currentColor"/>
      </svg>
    </span>
    <span data-slider-arrow="right">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12.0003 7.99997C11.9971 7.64923 11.8558 7.3139 11.607 7.06663L8.74699 4.19997C8.62208 4.0758 8.45312 4.0061 8.27699 4.0061C8.10087 4.0061 7.9319 4.0758 7.80699 4.19997C7.74451 4.26194 7.69491 4.33567 7.66107 4.41691C7.62722 4.49815 7.60979 4.58529 7.60979 4.6733C7.60979 4.76131 7.62722 4.84844 7.66107 4.92968C7.69491 5.01092 7.74451 5.08466 7.80699 5.14663L10.0003 7.3333H3.33366C3.15685 7.3333 2.98728 7.40354 2.86225 7.52856C2.73723 7.65359 2.66699 7.82315 2.66699 7.99997C2.66699 8.17678 2.73723 8.34635 2.86225 8.47137C2.98728 8.59639 3.15685 8.66663 3.33366 8.66663H10.0003L7.80699 10.86C7.68146 10.9846 7.61058 11.154 7.60995 11.3309C7.60933 11.5079 7.67901 11.6778 7.80366 11.8033C7.92831 11.9288 8.09773 11.9997 8.27464 12.0003C8.45154 12.001 8.62146 11.9313 8.74699 11.8066L11.607 8.93997C11.8574 8.69107 11.9988 8.35302 12.0003 7.99997Z" fill="currentColor"/>
      </svg>
    </span>

    <div data-slider >
     <div data-slide ><div  ><img src="assets/images/QCpNhHtAqxiNsIMv.webp" alt="review-1"></div><div><div  style="text-align:left;" ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">Силікон дуже приємний на дотик, а кришки щільно закриваються, завдяки чому нічого не проливається.</span></div><aside><div  ><img src="assets/images/pY57tAUZ3nB2j3aS.webp" alt="photo-1"></div><div><span   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:14pt;font-family:Roboto, Arial">Влад Отрошко</span></span><small   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">39 лет</span></small></div></aside></div></div><div data-slide ><div  ><img src="assets/images/MtItVnbqaNxC7LZG.webp" alt="review-1"></div><div><div  style="text-align:left;" ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">Нарешті знайшла кришки, які підходять до будь-якого посуду! Дуже зручно, що не потрібно купувати окремо для каструль, сковорідок і мисок.</span></div><aside><div  ><img src="assets/images/CaUCWiBT5oEPVQfd.webp" alt="photo-1"></div><div><span   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:14pt;font-family:Roboto, Arial">Людмила Доліна</span></span><small   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">24 лет</span></small></div></aside></div></div><div data-slide ><div  ><img src="assets/images/MQvBJnEb6ISDJy3f.webp" alt="review-2"></div><div><div  style="text-align:left;" ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">Можна використовувати в мікрохвильовці, що дуже економить час.</span></div><aside><div  ><img src="assets/images/H8gC4iIS5eyPKZqR.webp" alt="photo-2"></div><div><span   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:14pt;font-family:Roboto, Arial">Віктор Панчук</span></span><small   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">г. Киев</span></small></div></aside></div></div><div data-slide ><div  ><img src="assets/images/7vnIV9Q51Asrb9Py.webp" alt="review-3"></div><div><div  style="text-align:left;" ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">Набір складається з 6 кришок різного розміру, що дуже практично.</span></div><aside><div  ><img src="assets/images/1zUjfIwvlbwcrryV.webp" alt="photo-3"></div><div><span   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:14pt;font-family:Roboto, Arial">Євген Ковальчук</span></span><small   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">29 лет</span></small></div></aside></div></div><div data-slide ><div  ><img src="assets/images/W7idl0X9zuPH5OMC.webp" alt="review-5"></div><div><div  style="text-align:left;" ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">Кришки не плавляться від високої температури, тому можна не боятися їх пошкодити.</span></div><aside><div  ><img src="assets/images/iZdcVuu6HTu4BfKH.webp" alt="photo-5"></div><div><span   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:14pt;font-family:Roboto, Arial">Радченко Яна</span></span><small   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">г. Полтава</span></small></div></aside></div></div><div data-slide ><div  ><img src="assets/images/dJLKAmmrdjUU0T8S.webp" alt="review-5"></div><div><div  style="text-align:left;" ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">Силікон не вбирає запахи, тому кришки завжди будуть чистими.</span></div><aside><div  ><img src="assets/images/NCQwP6Q4vptFOgq2.webp" alt="photo-5"></div><div><span   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:14pt;font-family:Roboto, Arial">Лисенко Олег</span></span><small   ><span style="caret-color:rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:11pt;font-family:Roboto, Arial">г. Луцьк</span></small></div></aside></div></div>
    </div>
  </div>
</section> <section class="section-4-19-14">
  <div>
    <span  >Обычная цена:</span>
    <div>
      <s><?php echo function_exists("price_old") ? price_old() : ""; ?><span  > грн</span></s>
      <span>-<?php echo function_exists("discount") ? discount() : ""; ?>%</span>
    </div>
  </div>

  <div>
    <div><?php echo function_exists("price") ? price() : ""; ?></div>
    <span  > грн</span>
  </div>
</section> <section class="section-6-28-15">
  <form action="checkout.php" method="post" autocomplete="on" name="fT6V28B15">
    <fieldset>
      <div><input id="name" name="name" type="text" value="" autocomplete="name" placeholder="Ваше имя"  required /></div>
      <div><input id="phone" name="phone" type="tel" value="" autocomplete="tel" placeholder="Ваш номер телефона"  required /></div>
    </fieldset>
    <button type="submit"  >Заказать со скидкой</button>
  </form>
</section> <footer class="section-2-12-16">
  <div  >
    &copy; Интернет-магазин, 2024
  </div>
  <div>
    <a href="privacy-policy.html"  >
      Политика конфиденциальности
    </a>
    <a href="user-agreement.html"  >
      Пользовательское соглашение
    </a>
  </div>
</footer>
  </body>
</html>