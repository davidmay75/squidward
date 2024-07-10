<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\WeatherJob;

class WeatherCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:weather-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
  
        $msg = "What up\nHere's yo weatha playa";

        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg,70);

        // send email
        // $today = NOW(-5);
        $today = date('d-m-Y');;
        // dd($today);
        mail("davidmaysoftware@gmail.com","Weather for {$today}",$msg);
    
        // dispatch(new WeatherJob);
    }
}
