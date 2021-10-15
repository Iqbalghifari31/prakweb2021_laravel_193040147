<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Iqbal Ghifari",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem natus totam cum hic explicabo mollitia, ut magni eligendi voluptatem aliquid vitae voluptate. Repellat eveniet illum quo ullam aut vero corporis, obcaecati distinctio deserunt asperiores beatae rem! Sint nulla, fuga iste consequuntur neque cum, voluptatibus sed, dolores dignissimos quidem delectus eveniet dicta cupiditate quasi veniam exercitationem explicabo blanditiis vero error? Id quidem consequatur, tempora laborum temporibus illum necessitatibus accusamus amet exercitationem excepturi quaerat atque reprehenderit maxime adipisci est porro nisi perspiciatis."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Tatang Solihun",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque veritatis, quidem debitis nobis error laborum maxime repudiandae consectetur, laudantium voluptatum, libero unde recusandae autem expedita labore alias veniam amet perferendis a sunt quam rem nemo dolorum. Quaerat omnis suscipit impedit aliquid sequi id, ipsam blanditiis aspernatur nulla eveniet aut deserunt at necessitatibus accusamus illo voluptatum itaque. Reiciendis, minima? Laboriosam impedit expedita deleniti illum cum exercitationem atque ipsum dolorem possimus, doloremque, laborum rem porro animi consequuntur ex ducimus dolorum obcaecati velit itaque. Neque pariatur quis, ullam quam architecto corporis excepturi provident rem exercitationem debitis, aliquam, nobis reprehenderit culpa aspernatur rerum incidunt.
        "
    ]
    ];


    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $blog_posts = static::all();
        return $blog_posts->firstWhere('slug', $slug);
    }
}
