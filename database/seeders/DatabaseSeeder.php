<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::truncate(); // removes all table data
//        Category::truncate(); // removes all table data
//        Post::truncate();

        // specify one user and forward to factory overrides and only have the specific user in factory
        $user = User::factory()->create([
            'name' => 'John Doe',
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
            ]
        ); // creates a Post (incl category and user from factory)

//        ** Manual factory instances below
//        $user = User::factory()->create();
//
//        $personal = Category::create([
//           'name' => 'Personal',
//           'slug' => 'personal'
//        ]);
//
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => 'My first Post',
//            'slug' => 'my-first-post',
//            'excerpt' => 'Family is Lorem ipsum dolor sit',
//            'body' => '<p>Family is Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $personal->id,
//            'title' => 'My second Post',
//            'slug' => 'my-second-post',
//            'excerpt' => 'Personal is Lorem ipsum dolor sit',
//            'body' => '<p>Personal is Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My third Post',
//            'slug' => 'my-third-post',
//            'excerpt' => 'Work is Lorem ipsum dolor sit',
//            'body' => '<p>Work is Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>'
//        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
