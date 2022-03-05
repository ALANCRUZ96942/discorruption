<?php
namespace App\Http\Controllers;
   
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
   
class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
        $botman->reply("Hola, ¿En qué te puedo ayudar?");

        $botman->hears('{message}', function($botman, $message) {
   
            if ($message == 'Denunciar') {
                $this->askName($botman);
            }
            
            else{
                $botman->reply("Hola, ¿En qué te puedo ayudar?");
            }
   
        });
   
        $botman->listen();
    }
   
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hola, qué tipo de denuncia', function(Answer $answer) {
   
            $name = $answer->getText();
   
            $this->say('Procesando denuncia '.$name);
        });
    }
}