<?php
use App\Http\Controllers\BotManController;
use BotMan\BotMan\BotMan;
use App\Conversations\ExampleConversation;

$botman = resolve('botman');

$botman->hears('.*привет.*', function ($bot) {
    $bot->reply('Привет!');
});
$botman->hears('.*пока.*', function ($bot) {
    $bot->reply('Пока!');
});
/*
$botman->hears('/start', function (BotMan $bot) {
    $bot->startConversation(new ExampleConversation());
});
*/
$botman->fallback(function ($bot) {
    $bot->reply('Извините, не понял!');
});
