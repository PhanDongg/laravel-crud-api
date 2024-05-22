<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Models\Category;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            [
                'title' => 'Money',
                'description' => 'Have a nice day.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Travel',
                'description' => 'No pain no again.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Houses',
                'description' => 'Nothing impossible.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        // Category::insert($category);
        foreach ($categories as $category) {
            $category['slug'] = Str::slug($category['title']); // Tạo slug từ tiêu đề bài viết
            DB::table('categories')->insert($category);
        }
    }
}
