<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::all();
        $users = User::all();
        foreach ($posts as $post) {
            foreach ($users as $user) {
                Comment::factory()->create([
                    'user_id' => $user,
                    'post_id' => $post,
                ]);
            }
        }
        
    }
}
