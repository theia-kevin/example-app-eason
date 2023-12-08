<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\HeaderRepository;
use App\Models\Header;

class HeaderSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (Header::count() > 0) {
            return;
        }

        app(HeaderRepository::class)->create([
            'title' => [
                'en' => 'Header',
                // add other languages here
            ],
            'description' => [
                'en' => '',
                // add other languages here
            ],
            'published' => false,
        ]);
    }
}
