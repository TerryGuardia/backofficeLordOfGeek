<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jeu;
use App\Models\Categorie;
use App\Models\Tag;
use App\Models\User;

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
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com', //password will be password
        ]);
        Categorie::factory(10)->create();
        Jeu::factory(10)->create();
        Tag::factory(50)->create();
        $jeux = Jeu::all();
        foreach ($jeux as $jeu) {
            $jeu->tags()->attach('1');
        }
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
