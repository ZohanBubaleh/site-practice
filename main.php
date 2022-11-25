<!DOCTYPE html>
<html prefix='og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# product: https://ogp.me/ns/product#' dir="ltr" lang="ru">
<head>
<meta charset="UTF-8" />
<title>Главная страница проекта Зохана по прозвищу Сладкий Буболех</title>
<base href="http://f0746162.xsph.ru/" />						
<meta name="description" content="Сладкий Буболех где купить в Ростове-на-Дону газировку лучшее детское щампанское" />
<meta name="keywords" content="Газированный напиток, Сладкий Буболех, шипучка, запивон, газировка, сладкая вода, детское шампанское"/>
<meta name="viewport" content="width=device-width, initial-scale=0.1, user-scalable=yes"/>
<meta name='HandheldFriendly' content='true'/>
<meta name='MobileOptimized' content='width'/>
<meta name='apple-mobile-web-app-capable' content='yes'/>
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="f0746162.xsph.ru"/>
<meta property="og:title" content="Главная страница проекта Зохана по прозвищу Сладкий Буболех zohanbuboleh.ru"/>
<meta property="og:url" content="f0746162.xsph.ru"/>
<meta property="og:description" content="Сладкий Буболех где купить в Ростове-на-Дону газировку лучшее детское щампанское"/>
<meta property="og:locale" content="ru_RU"/>
<meta property="og:restrictions:age" content="14+"/>
<meta property="og:image" content="http://f0746162.xsph.ru/img/Avatar-Glaza.jpg"/>
<meta name="cypr-verification" content="e9406c61b00e8df9a071a51f9e24de26"/>
<meta name="cypr-verification" content="43627181651f8019f600ccba2d19f1d9"/>
<meta name="msvalidate.01" content="E199666794EC9D7740D333182984537A"/>
<meta name="p:domain_verify" content="16a57f5b512a4490999accf651c1bb76"/>
<link rel="preconnect" href="//f0746162.xsph.ru/">
<link rel="preconnect" href="//google-analytics.com/">
<link rel="preconnect" href="//www.googletagmanager.com/">
<link rel="dns-prefetch" href="//f0746162.xsph.ru/">
<link rel="dns-prefetch" href="//google-analytics.com/">
<link rel="dns-prefetch" href="//www.googletagmanager.com/">
<link href="http://f0746162.xsph.ru/favicon.ico rel="icon" />
<link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="flex-container">
      <div class="header">     
                <?php include 'logo.inc.php' ?>         
                <?php include 'menu.inc.php' ?>	   
      </div>       
        <div class="about_me">
          <h1><?php  echo $p  ?></h1>
            <div class="data">
               <div class="myImg">
                    <?php  echo '<img src="/img/Avatar-Glaza.jpg" alt="Сладкий Буболех - это Вам не фунт изюма" width="350" height="350">'; ?>                    
               </div>
                  <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>' '<br>';
                          echo $feikname . '<br>' '<br>';  
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    года </p>
                    <p> Я вместе с Вами училися создавать переменные </p>
                    <p> Изучил простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 8;
                        $b = 9;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text" style="text-align: center;">
                    Самурай без меча, подобен Самураю с мечои, но только без меча.<br> 
                    Порко мадонна бесто кемале камдураля!<br> 
                    Извините, погорячился!
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>
</body>
</html>
