<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaticPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\StaticPage::updateOrCreate(
            ['slug' => 'terms-conditions'],
            [
                'title' => 'Terms & Conditions',
                'content' => '<h3>Terms & Conditions</h3><p>Your terms and conditions content goes here...</p>',
                'is_active' => true,
            ]
        );

        \App\Models\StaticPage::updateOrCreate(
            ['slug' => 'privacy-policy'],
            [
                'title' => 'Privacy Policy',
                'content' => '<h3>Privacy Policy</h3><p>Your privacy policy content goes here...</p>',
                'is_active' => true,
            ]
        );
    }
}
