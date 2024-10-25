<?php

// Настройки лендинга
$config = [

  'price' => 399, // Финальная цена продажи товара, больше 0 - (int | float)
  'discount' => 0.51, // Скидка в диапазоне [0 ... 1], больше 0 - (float)
  'language' => 'uk', // Код языка по стандарту RFC 5646 (локаль документа) - (string)

  // Инструменты аналитики
  'analytics' => [
    'google' => [
      'status' => False, // Статус подключения скриптов Google Tag Manager - (bool)
      'id' => '', // Tag ID для Google Tag Manager - (string)
      'conversion_id' => '' // Conversion ID для Google Tag Manager - (string)
    ],
    'facebook' => [
      'status' => False, // Статус подключения скриптов Facebook Pixel - (bool)
      'id' => '', // Pixel ID для Facebook Pixel - (string)
    ]
  ],

  // Интеграции со сторонними сервисами (передача заказов)
  'integrations' => [

    'debug' => False, // Статус вывода ответов API интеграций на страницу checkout.php - (bool)

    // EasyWeb API
    'easyweb' => [
      'status' => True, // Статус подключения интеграции EasyWeb API - (bool)
                        // Если вы хотите передавать заказы только в Telegram
                        // бот и не сохранять их в заказах EasyWeb, впишите здесь
                        // False, а в настройках Telegram бота ниже - True.
                        // Все прочие настройки для EasyWeb API должны быть также
                        // заполнены.
      'api_key' => '9e930a80486a185c06eee67b3f7e0c6f9f1a38175653445a27cbf907f88d43ae', // Ключ EasyWeb API - (string)
      'product_id' => 100034, // ID товара из EasyWeb - (int)
      'currency' => 'UAH', // Валюта - (string)

      // Telegram бот
      'tg' => [
        'status' => True // Статус подключения интеграции Telegram бот EasyWeb - (bool)
      ]
    ],

    // LP-CRM API
    'lpcrm' => [
      'status' => False, // Статус подключения интеграции LP-CRM API - (bool)
      'url' => '', // Ваша уникальная ссылка для передачи заказов в LP-CRM - (string)
      'key' => '', // Ваша ключ LP-CRM API - (string)
      'country' => 'UA', // Страна - ("UA", "KZ", "MD")
      'office' => '', // ID отдела LP-CRM - (string)
      'product_id' => '', // ID товара LP-CRM - (string)

    ]

  ]
];


?>
