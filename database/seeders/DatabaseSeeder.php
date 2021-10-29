<?php

namespace Database\Seeders;

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
       

        // User::create([
        //     'name' => 'Mohammad Iqbal Ghifari',
        //     'email' => 'iqbalghifari31@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Qiara Putri',
        //     'email' => 'Qiara@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

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

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, quaerat. Magnam assumenda dolore repudiandae temporibus dolores blanditiis libero error esse quasi modi!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, quaerat. Magnam assumenda dolore repudiandae temporibus dolores blanditiis libero error esse quasi modi! Amet esse inventore voluptatem voluptas! Inventore quaerat error excepturi sint officia, harum consectetur quidem facere placeat at incidunt necessitatibus veritatis? Ratione laudantium, quis accusantium cupiditate neque autem labore qui explicabo architecto voluptatem? Ipsum incidunt esse, eaque dolorem sunt accusantium omnis at obcaecati aliquam modi, dolorum numquam ab impedit reiciendis voluptatum aliquid officia ratione totam sapiente, saepe quas recusandae odit in? Nam suscipit nihil nemo, tempore voluptas obcaecati alias mollitia rerum! Molestias cum fugiat, qui maiores at nesciunt nisi.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, quaerat. Magnam assumenda dolore repudiandae temporibus dolores blanditiis libero error esse quasi modi!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, quaerat. Magnam assumenda dolore repudiandae temporibus dolores blanditiis libero error esse quasi modi! Amet esse inventore voluptatem voluptas! Inventore quaerat error excepturi sint officia, harum consectetur quidem facere placeat at incidunt necessitatibus veritatis? Ratione laudantium, quis accusantium cupiditate neque autem labore qui explicabo architecto voluptatem? Ipsum incidunt esse, eaque dolorem sunt accusantium omnis at obcaecati aliquam modi, dolorum numquam ab impedit reiciendis voluptatum aliquid officia ratione totam sapiente, saepe quas recusandae odit in? Nam suscipit nihil nemo, tempore voluptas obcaecati alias mollitia rerum! Molestias cum fugiat, qui maiores at nesciunt nisi.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, quaerat. Magnam assumenda dolore repudiandae temporibus dolores blanditiis libero error esse quasi modi!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, quaerat. Magnam assumenda dolore repudiandae temporibus dolores blanditiis libero error esse quasi modi! Amet esse inventore voluptatem voluptas! Inventore quaerat error excepturi sint officia, harum consectetur quidem facere placeat at incidunt necessitatibus veritatis? Ratione laudantium, quis accusantium cupiditate neque autem labore qui explicabo architecto voluptatem? Ipsum incidunt esse, eaque dolorem sunt accusantium omnis at obcaecati aliquam modi, dolorum numquam ab impedit reiciendis voluptatum aliquid officia ratione totam sapiente, saepe quas recusandae odit in? Nam suscipit nihil nemo, tempore voluptas obcaecati alias mollitia rerum! Molestias cum fugiat, qui maiores at nesciunt nisi.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, quaerat. Magnam assumenda dolore repudiandae temporibus dolores blanditiis libero error esse quasi modi!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, quaerat. Magnam assumenda dolore repudiandae temporibus dolores blanditiis libero error esse quasi modi! Amet esse inventore voluptatem voluptas! Inventore quaerat error excepturi sint officia, harum consectetur quidem facere placeat at incidunt necessitatibus veritatis? Ratione laudantium, quis accusantium cupiditate neque autem labore qui explicabo architecto voluptatem? Ipsum incidunt esse, eaque dolorem sunt accusantium omnis at obcaecati aliquam modi, dolorum numquam ab impedit reiciendis voluptatum aliquid officia ratione totam sapiente, saepe quas recusandae odit in? Nam suscipit nihil nemo, tempore voluptas obcaecati alias mollitia rerum! Molestias cum fugiat, qui maiores at nesciunt nisi.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
