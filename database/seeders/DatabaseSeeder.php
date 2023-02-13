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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Afiq Harith',
            'username' => 'AfiqHarith',
            'email' => 'afiqharith15@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        
        User::create([
            'name' => 'Ahmad Azim',
            'username' => 'AhmadAzim',
            'email' => 'azim123@gmail.com',
            'password' => bcrypt('24680'),
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::create([
            'title' => 'First Title',
            'slug' => 'first-title',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam quis ipsa sed neque dolores recusandae aut, eius saepe, First Title',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam quis ipsa sed neque dolores recusandae aut, eius saepe, provident odit autem, iusto doloremque blanditiis voluptatem natus? Obcaecati unde expedita distinctio sit quos eum quia vel corrupti in quod quibusdam hic labore nisi esse repellendus rem blanditiis, perferendis soluta facere maxime dicta optio qui magnam! Quod, iusto. Labore cupiditate libero eos voluptates eveniet, nostrum sunt numquam explicabo laudantium ad, laborum aliquid facilis autem modi voluptatibus iste laboriosam. Expedita animi eos eius nesciunt et vel adipisci commodi nobis ab, molestiae tempora quos, provident laboriosam. Numquam neque quia porro molestias in! Aliquid, possimus.',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Second Title',
            'slug' => 'second-title',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum enim quaerat, unde quod accusamus blanditiis animi voluptates optio odio iure! Second Title',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum enim quaerat, unde quod accusamus blanditiis animi voluptates optio odio iure! Possimus, debitis! Quos nostrum iusto sint beatae dolorum soluta eveniet eum earum nobis consequatur delectus consectetur dolore quibusdam hic similique explicabo libero sapiente repellat, aperiam deserunt repellendus? Odit placeat, nobis at explicabo sequi rerum quam molestiae saepe, rem quidem ducimus minus eligendi. Voluptatem accusantium, possimus, facilis ducimus totam odit sit ex debitis delectus tempore omnis facere, reiciendis illo dicta. Corrupti debitis odio, adipisci pariatur eaque, reiciendis esse repudiandae suscipit cupiditate animi placeat, praesentium repellendus. Esse et eaque inventore, dignissimos aspernatur odio nesciunt harum aperiam, hic veritatis sed sit similique ut nobis recusandae? Deserunt necessitatibus quo excepturi dolor facilis molestias pariatur amet quaerat voluptate error nisi quas, dolorem aliquid mollitia reprehenderit sed tempore fuga ducimus perferendis maiores consectetur vitae odio. Itaque nobis ut, assumenda excepturi voluptatem voluptas molestiae quas modi odio.',
            'category_id' => 1,
            'user_id' => 2,
        ]);

        Post::create([
            'title' => 'Third Title',
            'slug' => 'third-title',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia deleniti dicta est repellat vero rem itaque in excepturi porro quis molestias perferendis tempore, Third Title',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia deleniti dicta est repellat vero rem itaque in excepturi porro quis molestias perferendis tempore, atque minus aliquid officia labore nulla minima maiores. Minus natus rem ipsam doloribus ipsa suscipit nulla voluptatum eos? Suscipit in dignissimos, vel modi voluptate dicta quasi, ipsum doloremque dolorum, quae voluptatibus accusantium ullam quaerat fugiat facilis. Vero, quo tempora eligendi quidem pariatur amet repudiandae magni nobis totam quis aspernatur reprehenderit? Omnis accusantium sed itaque, deserunt enim mollitia ipsam vel eos, laboriosam aliquam cupiditate ab error saepe distinctio.',
            'category_id' => 2,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Forth Title',
            'slug' => 'forth-title',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis autem quo adipisci, perferendis illum distinctio sit cum nihil, ullam rem perspiciatis! Magni repellendus quasi cum, Forth Title',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis autem quo adipisci, perferendis illum distinctio sit cum nihil, ullam rem perspiciatis! Magni repellendus quasi cum, quibusdam rerum illum suscipit debitis quisquam commodi itaque dolore eos laboriosam vel a doloribus numquam, animi alias mollitia, voluptatem incidunt aperiam? Assumenda quo quidem aperiam eaque dicta ad dolorum illum accusantium quasi. Assumenda totam aspernatur cumque quod perferendis sed at pariatur saepe quo, natus hic deserunt unde eius mollitia molestiae, temporibus eveniet culpa explicabo repudiandae.',
            'category_id' => 2,
            'user_id' => 2,
        ]);
    }
}
