<?php

namespace App\Console\Commands;

use App\Jobs\SendEmailToUsers;
use App\Models\Notify\Email;
use Illuminate\Console\Command;

class AutoEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:sendEmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $emailsToSend = Email::where('published_at', '=', now())->get();
        foreach ($emailsToSend as $emailToSend) {
            SendEmailToUsers::dispatch($emailToSend);
        }
    }
}
