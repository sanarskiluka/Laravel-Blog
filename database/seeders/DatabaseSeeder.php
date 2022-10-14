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
        $user = User::factory()->create([
            'name' => "John Doe"
        ]);
        $userReal = User::factory()->create([
            'name' => "Luka Sanarski"
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);
        Post::factory(8)->create([
            'user_id' => $userReal->id
        ]);
    }
}
