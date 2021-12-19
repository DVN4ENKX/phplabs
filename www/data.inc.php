<?php
setlocale(LC_ALL, "russian");
$day = strftime('%d');
$mon = strftime('%B');
$year = strftime('%Y');
define('COPYRIGHT', 'Веб-мастер');
$hour = (int)strftime('%H');
$welcome = ''; //
if ($hour < 6) $welcome = 'Доброй ночи,';
elseif (($hour >= 6) && ($hour <= 12)) $welcome = 'Доброе утро,';
elseif (($hour > 12) && ($hour <= 18)) $welcome = 'Добрый день,';
elseif (($hour > 18) && ($hour < 24)) $welcome = 'Добрый вечер,';
$leftMenu = [
	['link' => 'Домой', 'href' => 'index.php?id=home'],
	['link'=>'О нас', 'href'=>'index.php?id=about' ],
	['link'=>'Контакты', 'href'=>'index.php?id=contact'],
	['link'=>'Таблица','href'=>'index.php?id=table']
];
?>