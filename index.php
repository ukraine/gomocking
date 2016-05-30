<?

$langs['en'] = "

title	Website wireframes:
brandName	Mockingbird
getYourIdeas	Get your ideas
outOfYourHead	out of your head.
tryFree	Try creating wireframes for free
welcome	Welcome
tagline	Mock up an application and show what's important:
taglineDescription	<span>the idea</span>, <span>the information</span>, <span>the interaction.</span>
feature1	Mock up your idea fast
feature2	Link and click between pages 
feature3	Collaborate live
feature1Description	Drag and drop UI elements to the page, then rearrange and resize. Go from idea to mockup in minutes.
feature2Description	Link multiple mockups together and preview them interactively to get a feel for the flow of your application.
feature3Description	Share a link, and clients and teammates can edit wireframes with you in real time. No more emailing images back and forth.
or	or
tryFree2	Try it for free
login	log in
pricing	Pricing
privacy	Privacy
terms	Terms
help	Help
contact	Contact us
tweet	Tweet us
companyName	by Some Character LLC
ru	Русский
en	English

";

$langs['ru'] = "

title	Макеты сайтов:
brandName	Mockingbird
getYourIdeas	Вытащи идеи
outOfYourHead	из своей головы
tryFree	Начни делать макеты бесплатно
welcome	Добро пожаловать
tagline	Сделай макет приложения и отрази ключевые элементы:
taglineDescription	<span>идею</span>, <span>информацию</span>, <span>взаимодействие</span>
feature1	Быстро накидай<br> макет идеи
feature2	Линкуй и переключайся между страницами
feature3	Работай с коллегами в онлайн режиме
feature1Description	Перетаскивай элементы интерфейса на страницу, затем меняй их расположение и размер. Воплоти идею в макет приложения за считанные минуты.
feature2Description	Пролинкуй между собой макеты и перемещайся по ним в один клик. Просматривай их в интерактивном режиме, чтобы прочувствовать работу твоего приложения.
feature3Description	Поделись ссылкой на макет, чтобы твои клиенты и партнеры могли менять его вместе с тобой в режиме реального времени. Забудь об обмене файлами по электронке.
or	или
tryFree2	Попробуй бесплатно
login	авторизуйся
pricing	Цены
privacy	Конфиденциальность
terms	Соглашение
contact	Напиши нам
tweet	Твитни нам
help	Поддержка
companyName	Севрис от Some Character LLC
ru	Русский
en	English


";

$currentLanguage = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);				// browser detecton
if (!empty($_GET['hl']))	$currentLanguage = @$_GET['hl'];					// by the GET parameter
if (!array_key_exists($currentLanguage, $langs)) $currentLanguage = "en";	// what happens if we don't have the lang version requested

define("HL",$currentLanguage);

// echo HL;

function convertSourceTextIntoArray($sourceText) {

	$sourceText = explode("\n",trim($sourceText));

	foreach($sourceText as $key=>$val) { $properties = explode("\t",$val); $arr[$properties['0']]=$properties['1']; }

	return $arr;

}

$languages[$currentLanguage] = convertSourceTextIntoArray($langs[$currentLanguage]);

echo $languages['ru']['tagLine'];

header('Content-Type: text/html; charset=utf-8');

?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html class="wf-creteround-i4-active wf-creteround-n4-active wf-fftisasanswebpro-n4-active wf-fftisasanswebpro-n5-active wf-fftisasanswebpro-n7-active wf-active" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<script src="Website-wireframes-Mockingbird_files/analytics.js" async=""></script><script>
		  document.documentElement.className = document.documentElement.className.replace('no-js', '');
		</script>
		<title><?=$languages[$currentLanguage]['title']?> <?=$languages[$currentLanguage]['brandName']?></title>
		<link rel="shortcut icon" href="https://gomockingbird.com/static/images/favicon.ico">
		<script src="Website-wireframes-Mockingbird_files/rvq3ubp.js"></script>
<style type="text/css">.tk-ff-tisa-sans-web-pro{font-family:"ff-tisa-sans-web-pro",sans-serif;}.tk-crete-round{font-family:"crete-round",sans-serif;}</style><link media="all" href="Website-wireframes-Mockingbird_files/l.css" rel="stylesheet"><script>try{Typekit.load();}catch(e){}</script>
		<script type="text/javascript" src="Website-wireframes-Mockingbird_files/jquery.js"></script>

		<script type="text/javascript" src="Website-wireframes-Mockingbird_files/bootstrap.js"></script>
		<script type="text/javascript" src="Website-wireframes-Mockingbird_files/application.js"></script>
		<meta name="google-site-verification" content="f-c_Zn1cXsHUU9g7evHHZGqcb9D72b8KT090IvT_VC0">
		
		
<link rel="stylesheet" href="Website-wireframes-Mockingbird_files/home.css">
<script type="text/javascript" src="Website-wireframes-Mockingbird_files/home.js"></script>

  <meta name="description" content="Mockingbird helps you you create and share clickable wireframes. Use it to make mockups of your website or application in minutes.">

	</head>
	<body>
		
      <section id="app-demo">
          <div class="everything-but-toolbar">
            <div style="display: block;" class="animation-element-panel"></div>
            <div class="headlines">
                <h2><?=$languages[$currentLanguage]['brandName']?></h2>
                <h3><?=$languages[$currentLanguage]['getYourIdeas']?></h3>
                <h3><?=$languages[$currentLanguage]['outOfYourHead']?><span class="animation-cursor non-animating animating"></span></h3>
                
                <a class="try-it" href="https://gomockingbird.com/try"><span class="arrow"><?=$languages[$currentLanguage]['tryFree']?><span></span></span></a>
            </div>

            <div style="top: 440px; left: 100px; display: none;" class="animation-pointer"></div>
            <div style="top: 180px; left: 220px; display: none;" class="animation-grabby-hand-open"></div>
            
            <div style="top: 146px; left: 430px; display: none;" class="animation-welcome-text selected">
              <span><?=$languages[$currentLanguage]['welcome']?></span>
            <div style="display: none;" class="animation-grabby-hand-grabbing"></div></div>
          </div>
          <div class="animation-toolbar fade">
            <div></div>
          </div>
    </section>
    <section id="tagline">
      <h1>
        <?=$languages[$currentLanguage]['tagline']?>
      </h1>
      <p>
        <?=$languages[$currentLanguage]['taglineDescription']?>
      </p>
    </section>
    <section id="features">
      <div>
        <img class="circle-1" alt="Create mockups with drag and drop" src="Website-wireframes-Mockingbird_files/homepage-circle-1.png">
        <h2><?=$languages[$currentLanguage]['feature1']?></h2>
        <p>
          <?=$languages[$currentLanguage]['feature1Description']?>
        </p>
      </div>
      <div>
        <img class="circle-2" alt="Add multiple pages to your mockup" src="Website-wireframes-Mockingbird_files/homepage-circle-2.png">
        <h2><?=$languages[$currentLanguage]['feature2']?></h2>
        <p>
          <?=$languages[$currentLanguage]['feature2Description']?>
        </p>
      </div>
      <div>
        <img class="circle-3" alt="Share your mockup with collaborators" src="Website-wireframes-Mockingbird_files/homepage-circle-3.png">
        <h2><?=$languages[$currentLanguage]['feature3']?></h2>
        <p>
          <?=$languages[$currentLanguage]['feature3Description']?>
        </p>
      </div>
    </section>
    
      

<footer>
	<div id="try-it">
		
			<a class="try-it" href="https://gomockingbird.com/try"><?=$languages[$currentLanguage]['tryFree2']?></a> <?=$languages[$currentLanguage]['or']?>
			<a class="log-in" href="https://gomockingbird.com/login"><?=$languages[$currentLanguage]['login']?></a>
		
	</div>

	<nav>
		<a href="https://gomockingbird.com/pricing"><span><?=$languages[$currentLanguage]['pricing']?></span></a>
		<a href="https://gomockingbird.com/privacy"><span><?=$languages[$currentLanguage]['privacy']?></span></a>
		<a href="https://gomockingbird.com/terms"><span><?=$languages[$currentLanguage]['terms']?></span></a>
		<a href="https://gomockingbird.com/help"><span><?=$languages[$currentLanguage]['help']?></span></a>
		
	</nav>

	<nav class="secondary">
		<a href="mailto:contact@gomockingbird.com"><?=$languages[$currentLanguage]['contact']?></a>
		<a href="https://twitter.com/gomockingbird"><?=$languages[$currentLanguage]['tweet']?></a>
		<a href="?hl=ru"><?=$languages[$currentLanguage]['ru']?></a>
		<a href="?hl=en"><?=$languages[$currentLanguage]['en']?></a>
	</nav>

	<span><?=$languages[$currentLanguage]['companyName']?></span>

</footer>

    

			<script type="text/javascript" src="Website-wireframes-Mockingbird_files/js.js"></script>


	
</body></html>