<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "First Post Title",
            "slug" => "first-post-title",
            "author" => "Afiq Harith",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet molestias expedita repellat recusandae sunt nam, sapiente at placeat architecto excepturi, quis et perspiciatis nesciunt quisquam quos laboriosam nihil eaque officia.",
        ],
        [
            "title" => "Second Post Title",
            "slug" => "second-post-title",
            "author" => "Amirul",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, reiciendis quisquam molestias quia nesciunt voluptate deserunt mollitia corporis, aliquid pariatur voluptates, laboriosam autem impedit ab. Sed quaerat dicta itaque ad soluta, consectetur dolore minima cupiditate, labore, optio assumenda? In rem illo itaque atque beatae sed necessitatibus eius sint quaerat facere, et sunt? Dignissimos, molestias nesciunt et iure possimus placeat. Similique animi nulla dignissimos repellendus, sint amet. Delectus dolores excepturi voluptatem. Aperiam facere cum nihil suscipit incidunt cumque exercitationem, vero culpa minus ad atque enim debitis quos deleniti fugit voluptatibus tempora.",
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug){
       $posts = static::all();
    return $posts -> firstWhere('slug', $slug);
    }
}
