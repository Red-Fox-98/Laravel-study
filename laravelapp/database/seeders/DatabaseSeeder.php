<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\File;
use App\Models\User;
use Database\Factories\RoleFactory;
use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::factory()->create(['name' => 'admin']);
        Role::factory()->create(['name' => 'teacher']);
        Role::factory()->create(['name' => 'student']);

        User::factory()->count(100)->create();

        File::factory()->count(100)->create();

        User::factory()->create(
            [
                'email' => 'red_fox@mail.ru',
                'password' => bcrypt('123abc321')
            ]
        );

        User::factory()->create(
            [
                'email' => 'fox@mail.ru',
                'password' => bcrypt('321abc123')
            ]
        );
    }
}
