<?php

namespace Database\Seeders;

use App\Helpers\Helper;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventarlisteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Eloquent::unguard(); // Disable all mass assignable restrictions.

        $file=storage_path("sql\inventarliste.sql"); // path to sql file in storage
        $file_data=Helper::parseSqlAddPrefix($file); // adds prefix to INSERT INTO commands
        DB::unprepared($file_data);   // runs the sql file
        $this->command->info('Inventarliste seeded!'); // console output that the table has been seeded

    }
}
