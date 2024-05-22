<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $comment = [
        [
            'post_id' => 1,
            'name' => 'Phan Dong',
            'content' => 'Have a nice day.',
        ],
        [
            'post_id' => 2,
            'name' => 'Phan Dong',
            'content' => 'very good.',
        ]
        ];
            Comment::insert($comment);
    }
}
