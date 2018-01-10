<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class admin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:set {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a Admin for ur self';

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
        //
        $User = new User();
        $User -> name = "adminer".$this->argument('email');;
        $User -> email = $this->argument('email');
        $User -> level = 5;
        $User -> password = hash::make($this->argument('password'));
        $User -> save();
        $this->line('----------------------Add Admin complete----------------------');
        $this->line('Email:'.$this->argument('email'));
        $this->line('Password:'.$this->argument('password'));
        $this->line('/---------------------Add Admin complete---------------------/');
    }
}
