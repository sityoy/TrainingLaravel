<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Tio Irfan Antoni",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi non dignissimos voluptas quae illo, incidunt explicabo, ad doloremque consectetur quia totam facere, alias tempora aliquam molestiae autem minus reiciendis aspernatur vel ipsam laboriosam?
            Ipsum voluptatem nisi numquam dolorum, ratione obcaecati amet tempora reprehenderit unde? Neque itaque possimus eius assumenda architecto eos minus modi,
            quos libero commodi excepturi quo cupiditate cum iusto ad. Voluptatem quibusdam dolorem doloribus dolor tempora animi ut deleniti odit architecto doloremque in nostrum, eveniet esse sapiente molestiae."
        ],

        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dimas",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam cum assumenda cupiditate delectus amet veritatis quam voluptates vel provident impedit repellat ducimus, aut, commodi blanditiis doloremque excepturi sequi eveniet sunt exercitationem, eum unde quis quisquam voluptas.
            Enim sequi minima dolorum voluptatem assumenda, explicabo suscipit esse pariatur reprehenderit fuga libero odio quae earum nostrum inventore deserunt numquam eius. Quia eligendi aliquid adipisci unde facere! Corporis porro doloribus, quo repellat, ducimus molestiae quas, dolorum aliquam corrupti officiis in quaerat.
            Aliquid itaque, veniam excepturi modi officia laboriosam praesentium vel sint quaerat blanditiis voluptates atque enim eos quam! Error, quidem. Sunt error ratione rerum."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        //    $post = [];
        //    foreach($posts as $p) {
        //         if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

    return $posts->firstWhere('slug', $slug);
    }
}
