<?php

use Illuminate\Database\Seeder;
use App\Movie;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */



    public function run()
    {


    //  self::seedCatalog();
    //  $this->command->info('Tabla catálogo inicializada con datos!');
      self::seedUsers();
      $this->command->info('Tabla usuarios inicializada con datos!');
    }
    private function seedCatalog(){
      Movie::truncate();
      foreach( self::$arrayPeliculas as $pelicula ) {
        $p = new Movie;
        $p->title = $pelicula['title'];
        $p->year = $pelicula['year'];
        $p->director = $pelicula['director'];
        $p->poster = $pelicula['poster'];
        $p->rented = $pelicula['rented'];
        $p->synopsis = $pelicula['synopsis'];
        $p->save();
      }
    }

    private function seedUsers(){
      User::truncate();
        $u = new User;
        $u->name="usuario1";
        $u->email="usuario1@dosmares.es";
        $u->password="usuario";
        $u->save();
        $u2 = new User;
        $u2->name="usuario2";
        $u2->email="usuario2@dosmares.es";
        $u2->password="usuario";
        $u2->save();

    }
}
