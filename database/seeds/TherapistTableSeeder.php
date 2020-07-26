<?php

use Illuminate\Database\Seeder;
use App\Model\Therapist;

class TherapistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Therapist::class,50)->create();
    }
}
