<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'Design'],
            ['name' => 'Development'],
            ['name' => 'Marketing'],
            ['name' => 'SEO'],
            ['name' => 'Writing'],
            ['name' => 'Consulting'],
        ];
        Tag::insert($tags);
    }
}
