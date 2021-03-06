<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
    * Seed the application's database.
    *
    * @return void
    */
    public function run()
    {
        Model::unguard();
        
        $this->call(CompaniesSeed::class);
        $this->call(JobSeed::class);
        
        Model::reguard();
    }
}
