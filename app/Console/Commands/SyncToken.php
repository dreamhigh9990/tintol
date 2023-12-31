<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use OTIFSolutions\Laravel\Settings\Models\Setting;

class SyncToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync Token with the Tintol platform';

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
        $this->line("");
        $this->line("****************************************************************");
        $this->info("Started Sync of Token with Tintol Platform");
        $this->line("****************************************************************");
        $token = User::admin()->getToken();
        if ($token !== null)
            Setting::set('Tintol',$token,'STRING');

        $this->line("****************************************************************");
        $this->info("Sync Complete !!! ");
        $this->line("****************************************************************");
        $this->line("");
    }
}
