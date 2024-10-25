<?php

function gtm_init(){

  global $config;

  $status = isset($config['analytics']['google']['status']) ? $config['analytics']['google']['status'] : False;
  $tag_id = isset($config['analytics']['google']['id']) ? $config['analytics']['google']['id'] : "";

  if($status && $tag_id){
    ?>
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $tag_id; ?>"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?php echo $tag_id; ?>');
      </script>
    <?php
  }
}

function gtm_conversion(){

  global $config;

  $status = isset($config['analytics']['google']['status']) ? $config['analytics']['google']['status'] : False;
  $tag_id = isset($config['analytics']['google']['id']) ? $config['analytics']['google']['id'] : "";
  $conversion_id = isset($config['analytics']['google']['conversion_id']) ? $config['analytics']['google']['conversion_id'] : "";

  if($status && $tag_id && $conversion_id){
    ?>
      <!-- Event snippet for conversion page -->
      <script>
        gtag('event', 'conversion', {
          'send_to': '<?php echo $tag_id; ?>/<?php echo $conversion_id; ?>',
          'transaction_id': ''
        });
      </script>
    <?php
  }
}


function fbq_init(){

  global $config;

  $status = isset($config['analytics']['facebook']['status']) ? $config['analytics']['facebook']['status'] : False;
  $pixel_id = isset($config['analytics']['facebook']['id']) ? $config['analytics']['facebook']['id'] : "";

  if($status && $pixel_id){
    ?>
      <!-- Facebook Pixel Code -->
      <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?php echo $pixel_id; ?>');
        fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $pixel_id; ?>&ev=PageView&noscript=1" /></noscript>
      <!-- End Facebook Pixel Code -->
    <?php
  }
}

function fbq_conversion(){

  global $config;

  $status = isset($config['analytics']['facebook']['status']) ? $config['analytics']['facebook']['status'] : False;
  $pixel_id = isset($config['analytics']['facebook']['id']) ? $config['analytics']['facebook']['id'] : "";

  if($status && $pixel_id){
    ?>
      <script>
        fbq('track', 'Lead');
      </script>
    <?php
  }
}

?>
