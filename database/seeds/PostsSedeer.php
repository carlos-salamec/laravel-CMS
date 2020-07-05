<?php

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Database\Seeder;

class PostsSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post1 = Post::create([
        'title' => 'First post',
        'description' => 'Here I\'m describing my first post',
        'content' => 'This is the constent of my first post',
        'category_id' => 1,
        'image' => 'posts/1.jpg',
      ]);
        $post2 = Post::create([
        'title' => 'Second post',
        'description' => 'Here I\'m describing my second post',
        'content' => 'This is the constent of my second post',
        'category_id' => 2,
        'image' => 'posts/2.jpg',
      ]);
        $post3 = Post::create([
        'title' => 'Third post',
        'description' => 'Here I\'m describing my third post',
        'content' => 'This is the constent of my third post',
        'category_id' => 3,
        'image' => 'posts/3.jpg',
      ]);
        $post4 = Post::create([
        'title' => 'Fourth post',
        'description' => 'Here I\'m describing my fourth post',
        'content' => 'This is the constent of my fourth post',
        'category_id' => 4,
        'image' => 'posts/4.jpg',
      ]);

        $post1->tags()->attach([1, 2]);
        $post2->tags()->attach([3, 2]);
        $post3->tags()->attach([3, 4]);
        $post4->tags()->attach([1, 4]);
    }
}
