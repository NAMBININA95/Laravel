<?php

use Illuminate\Database\Seeder;
/* use Illuminate\Database\Seeder\UserTableSeeder;
use Illuminate\Database\Seeder\PostsTableSeeder; */

/**
 * Le dossiers seeds sert à ajouter des données dans table au lieu de créer 
 * un formulaire ou ecrire dans nos base de données
 *
 * Pour les erreur que les seeds sont introuvables ou n'existe pas 
 * ecrire en console composer dump-autoload ou creer le meme file de 
 * meme nom et ça devra marcher */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
