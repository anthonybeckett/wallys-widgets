<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $values = [250, 500, 1000, 2000, 5000];

        foreach ($values as $value) {
            \App\Models\Widget::create([
                'qty' => $value
            ]);
        }
    }
}
