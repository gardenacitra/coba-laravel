<?php

namespace App\Models;

class Post 
{
    static $blog_posts = [
        [
            "title" => 'Judul Post Pertama',
            "slug" => 'judul-post-pertama',
            "author" => "Gardena",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quasi aspernatur sapiente ipsa amet perferendis laudantium vitae? Nostrum, consequatur expedita ipsa saepe voluptatum dolore, quibusdam cum optio recusandae molestias voluptatibus."
        ],

        [
            "title" => 'Judul Post Kedua',
            "slug" => "judul-post-kedua",
            "author" => "Citra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
