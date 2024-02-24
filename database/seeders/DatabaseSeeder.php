<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Gardena Citra',
        //     'email' => 'gardena@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sandika Galih',
        //     'email' => 'sandika@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create ([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab modi sed quod quam accusamus dolorum, nobis sunt. Vitae, est tenetur accusamus adipisci iure explicabo animi quaerat qui amet quis voluptatibus blanditiis rem, non mollitia pariatur molestiae minima et inventore enim! Consectetur quasi sit dolorem ut repellat aut dicta quas voluptatibus ullam. Debitis perferendis perspiciatis inventore, autem, neque eius itaque molestias assumenda reprehenderit eum praesentium dolor optio nihil, enim earum laudantium amet.</p><p>Rerum, deleniti dolores? Nesciunt animi aut, aperiam saepe officiis laborum quia neque quae qui numquam, facilis dolorem.</p><p>Perferendis perspiciatis labore ipsa doloremque ipsam iusto nemo reprehenderit iure et eos praesentium porro ex delectus culpa quas, neque, accusantium, at iste inventore architecto velit dolore cumque numquam? A esse modi voluptatem. Nihil perferendis, alias minima porro minus reiciendis voluptates, expedita magni praesentium obcaecati commodi numquam soluta architecto laborum deleniti, placeat eaque culpa quos harum blanditiis facere odit veritatis veniam velit.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create ([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum kedua',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab modi sed quod quam accusamus dolorum, nobis sunt. Vitae, est tenetur accusamus adipisci iure explicabo animi quaerat qui amet quis voluptatibus blanditiis rem, non mollitia pariatur molestiae minima et inventore enim! Consectetur quasi sit dolorem ut repellat aut dicta quas voluptatibus ullam. Debitis perferendis perspiciatis inventore, autem, neque eius itaque molestias assumenda reprehenderit eum praesentium dolor optio nihil, enim earum laudantium amet.</p><p>Rerum, deleniti dolores? Nesciunt animi aut, aperiam saepe officiis laborum quia neque quae qui numquam, facilis dolorem.</p><p>Perferendis perspiciatis labore ipsa doloremque ipsam iusto nemo reprehenderit iure et eos praesentium porro ex delectus culpa quas, neque, accusantium, at iste inventore architecto velit dolore cumque numquam? A esse modi voluptatem. Nihil perferendis, alias minima porro minus reiciendis voluptates, expedita magni praesentium obcaecati commodi numquam soluta architecto laborum deleniti, placeat eaque culpa quos harum blanditiis facere odit veritatis veniam velit.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create ([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum ketiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab modi sed quod quam accusamus dolorum, nobis sunt. Vitae, est tenetur accusamus adipisci iure explicabo animi quaerat qui amet quis voluptatibus blanditiis rem, non mollitia pariatur molestiae minima et inventore enim! Consectetur quasi sit dolorem ut repellat aut dicta quas voluptatibus ullam. Debitis perferendis perspiciatis inventore, autem, neque eius itaque molestias assumenda reprehenderit eum praesentium dolor optio nihil, enim earum laudantium amet.</p><p>Rerum, deleniti dolores? Nesciunt animi aut, aperiam saepe officiis laborum quia neque quae qui numquam, facilis dolorem.</p><p>Perferendis perspiciatis labore ipsa doloremque ipsam iusto nemo reprehenderit iure et eos praesentium porro ex delectus culpa quas, neque, accusantium, at iste inventore architecto velit dolore cumque numquam? A esse modi voluptatem. Nihil perferendis, alias minima porro minus reiciendis voluptates, expedita magni praesentium obcaecati commodi numquam soluta architecto laborum deleniti, placeat eaque culpa quos harum blanditiis facere odit veritatis veniam velit.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create ([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum keempat',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab modi sed quod quam accusamus dolorum, nobis sunt. Vitae, est tenetur accusamus adipisci iure explicabo animi quaerat qui amet quis voluptatibus blanditiis rem, non mollitia pariatur molestiae minima et inventore enim! Consectetur quasi sit dolorem ut repellat aut dicta quas voluptatibus ullam. Debitis perferendis perspiciatis inventore, autem, neque eius itaque molestias assumenda reprehenderit eum praesentium dolor optio nihil, enim earum laudantium amet.</p><p>Rerum, deleniti dolores? Nesciunt animi aut, aperiam saepe officiis laborum quia neque quae qui numquam, facilis dolorem.</p><p>Perferendis perspiciatis labore ipsa doloremque ipsam iusto nemo reprehenderit iure et eos praesentium porro ex delectus culpa quas, neque, accusantium, at iste inventore architecto velit dolore cumque numquam? A esse modi voluptatem. Nihil perferendis, alias minima porro minus reiciendis voluptates, expedita magni praesentium obcaecati commodi numquam soluta architecto laborum deleniti, placeat eaque culpa quos harum blanditiis facere odit veritatis veniam velit.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
