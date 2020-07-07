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
        'user_id' => 1,
        'image' => 'images/posts/P8hyTMM7SR0zW8ryHNiLyC2wE2NVtANki4u6wzOu.jpeg',
      ]);
        $post2 = Post::create([
        'title' => 'Second post',
        'description' => 'Here I\'m describing my second post',
        'content' => 'This is the constent of my second post',
        'category_id' => 2,
        'user_id' => 1,
        'image' => 'images/posts/CFBE18Cvwchw3UOaoX0iiZPHCJaQOykjy6X235BO.jpeg',
      ]);
        $post3 = Post::create([
        'title' => 'Third post',
        'description' => 'Here I\'m describing my third post',
        'content' => 'This is the constent of my third post',
        'category_id' => 3,
        'user_id' => 1,
        'image' => 'images/posts/S4wiotPtz4U4Y8KthGRSiopKtsgNjuBhnK2sduZH.jpeg',
      ]);
        $post4 = Post::create([
        'title' => 'Fourth post',
        'description' => 'Here I\'m describing my fourth post',
        'content' => 'This is the constent of my fourth post',
        'category_id' => 4,
        'user_id' => 1,
        'image' => 'images/posts/AP9fSAKxBLuivcLE3Au1FExUueCUuDhdxF1Nrdl9.jpeg',
      ]);

        $post1->tags()->attach([1, 2]);
        $post2->tags()->attach([3, 2]);
        $post3->tags()->attach([3, 4]);
        $post4->tags()->attach([1, 4]);
    }
}
