<?php
use App\Http\Controllers\BotManController;
use BotMan\BotMan\BotMan;
use App\Conversations\ExampleConversation;

$botman = resolve('botman');

$botman->hears('.*������.*', function ($bot) {
    $bot->reply('������!');
});
$botman->hears('.*����.*', function ($bot) {
    $bot->reply('����!');
});
/*
$botman->hears('/start', function (BotMan $bot) {
    $bot->startConversation(new ExampleConversation());
});
*/
$botman->fallback(function ($bot) {
    $bot->reply('��������, �� �����!');
});
