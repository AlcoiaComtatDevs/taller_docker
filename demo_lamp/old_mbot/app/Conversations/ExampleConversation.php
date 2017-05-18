<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use Mpociot\BotMan\Answer;
use Mpociot\BotMan\Button;
use Mpociot\BotMan\Conversation;
use Mpociot\BotMan\Question;
use Illuminate\Support\Facades\Log;

class ExampleConversation extends Conversation
{
    protected $_question;
    /**
     * First question
     */
    public function askReason()
    {
        $question = Question::create("Huh - you woke me up. What do you need?")
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons([
                Button::create('Tell a joke')->value('joke'),
                Button::create('Give me a fancy quote')->value('quote'),
            ]);

        $this->_question = $question;

        return $this->ask($question, function (Answer $answer) {

            //Log::info(print_r($this,true));
            Log::info(print_r($this->_question,true));
            Log::info(print_r($answer,true));


            if ($answer->isInteractiveMessageReply()) {


                if ($answer->getValue() === 'joke') {
                    $joke = json_decode(file_get_contents('http://api.icndb.com/jokes/random'));
                    //$this->say($joke->value->joke);
                    $this->say("chistaco");
                } else {
                    $this->say(Inspiring::quote());
                }
            }
        });
    }

    /**
     * Start the conversation
     */
    public function run()
    {
        $this->askReason();
    }

}