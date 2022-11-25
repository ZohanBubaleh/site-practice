<!DOCTYPE html>
<html prefix='og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# product: https://ogp.me/ns/product#' dir="ltr" lang="ru">
<head>
<meta charset="UTF-8" />
<title>Главная страница проекта Зохана по прозвищу Сладкий Бубалех</title>
<base href="http://f0746162.xsph.ru/" />						
<meta name="description" content="Сладкий Бубалех где купить в Ростове-на-Дону газировку лучшее детское шампанское" />
<meta name="keywords" content="Газированный напиток, Сладкий Бубалех, шипучка, запивон, газировка, сладкая вода, детское шампанское"/>
<meta name="viewport" content="width=device-width, initial-scale=0.1, user-scalable=yes"/>
<meta name='HandheldFriendly' content='true'/>
<meta name='MobileOptimized' content='width'/>
<meta name='apple-mobile-web-app-capable' content='yes'/>
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="f0746162.xsph.ru"/>
<meta property="og:title" content="Главная страница проекта Зохана по прозвищу Сладкий Бубалех f0746162.xsph.ru"/>
<meta property="og:url" content="f0746162.xsph.ru"/>
<meta property="og:description" content="Сладкий Бубалех где купить в Ростове-на-Дону газировку лучшее детское шампанское"/>
<meta property="og:locale" content="ru_RU"/>
<meta property="og:restrictions:age" content="14+"/>
<meta property="og:image" content="http://f0746162.xsph.ru/img/Avatar-Glaza.jpg"/>
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
         ... Зохан таки не стал изобретать велосипед, ему понятно, из чего состоит сайт, как это работает и почему именно так, а не иначе. 
             Зохан закарапузил тут все так, как ему хотелось, патамушта Зохан знает как это делать. А сколько времени сэкономленно? То-то и оно. Пойдем дальше.
            <div class="data">
               <div class="myImg">
                    <?php  echo '<img src="/img/Fizzy-Bubaleh-2.jpg" alt="Сладкий Бубалех - это Вам не фунт изюма" title="Сладкий Бубалех - это Вам не фунт изюма" width=400" height="400">'; ?>                    
               </div>
                  <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>';
                          echo $feikname . '<br>';  
                          echo 'Нахожусь в г. ', ' ', $city; ?>                                      
                    </p> 
                    <p> Я еще не встретил свою
                    <?php  echo $age;   ?>          
                    весну </p>
                    <p> Мы вместе учились-учились и научились создавать переменные, а так же проводить простые операции с ними,
                    ниже и выше, приведены примеры функций и их вывода на страницу с помощью PHP</p>
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
                    Самурай без меча, подобен Самураю с мечом, но только без меча.
                </p>
            </div>
        </div>
            <?php include 'footer.inc.php' ?>
    </div>
</body>
</html>
