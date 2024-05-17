<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Models\Post;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Capabilities Today',
                'description' => 'We tirelessly troubleshoot to eliminate choke points',
                'content' => 'We tirelessly troubleshoot to eliminate choke points, prevent stock depletion, streamline unnecessary redundancies, and make delays a thing of the past.',
                'author' => 'David Đông',
                'category' => 'Money',
                'status'=> 'Publish',
                'created_at' => Carbon::now(),//có cả giờ
                'updated_at' => Carbon::now(),
                'image' => 'images/unnamed.jpg',
                'category_id' => 1, // Khóa ngoại trỏ đến category có id = 1

            ],
            [
                'title' => 'Mission Today',
                'description' => 'Our mission is to design, build and implement innovative.',
                'content' => 'We tirelessly troubleshoot to eliminate choke points, prevent stock depletion, streamline unnecessary redundancies, and make delays a thing of the past.',
                'author' => 'David Đông',
                'category' => 'Travel',
                'status'=> 'Publish',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image' => 'images/unnamed.jpg',
                'category_id' => 2, // Khóa ngoại trỏ đến category có id = 2
            ],
            [
                'title' => 'Vision Today',
                'description' => 'APL Logistics seeks to be a premier, profitable provider of global supply-chain services to help enable sustainable trade.',
                'content' => 'We tirelessly troubleshoot to eliminate choke points, prevent stock depletion, streamline unnecessary redundancies, and make delays a thing of the past.',
                'author' => 'David Đông',
                'category' => 'Houses',
                'status'=>'Publish',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image' => 'images/unnamed.jpg',
                'category_id' => 3, // Khóa ngoại trỏ đến category có id = 2
            ],
            [
                'title' => 'Vision Today',
                'description' => 'APL Logistics seeks to be a premier, profitable provider of global supply-chain services to help enable sustainable trade.',
                'content' => 'We tirelessly troubleshoot to eliminate choke points, prevent stock depletion, streamline unnecessary redundancies, and make delays a thing of the past.',
                'author' => 'David Đông',
                'category' => 'Houses',
                'status'=>'Draft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'image' => 'images/unnamed.jpg',
                'category_id' => 2, // Khóa ngoại trỏ đến category có id = 2
            ],
        ];
        // Post::insert($posts);
        foreach ($posts as $post) {
            $post['slug'] = Str::slug($post['title']); // Tạo slug từ tiêu đề bài viết
            DB::table('posts')->insert($post);
        }
    }
}
