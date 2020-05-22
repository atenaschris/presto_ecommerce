<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class MakeUserAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'presto:MakeUserAdmin';
    

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rendi un utente admin' ;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $email = $this->ask('Inserisci la mail dell\' utente che vuoi far diventare admin:');
        $user =User::where('email',$email)->first();

        if (!$user) {
            $this->error ("utente che ha questa mail {$email} non trovato");
            return ;
        }

        $user->roles = 2;
        $user->save();
        $this->info("L'utente {$user->name} è ora un admin");
    }
}
