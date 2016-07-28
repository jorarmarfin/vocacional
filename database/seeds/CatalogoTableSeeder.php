<?php

use Illuminate\Database\Seeder;
use App\Models\Catalogo;

class CatalogoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catalogo::create(['idtable' => 0,'iditem' => 0, 'codigo' => 'MAE','nombre'=>'MAESTRO DE TABLAS','descripcion'=>'MAESTRO DE TABLAS','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 0,'iditem' => 1, 'codigo' => 'ROLES','nombre' => 'ROLES','descripcion'=>'Rol de lo su suarios al sistema','valor'=> null,'activo'=>true]);
        /**
         * sub tablas
         */
        Catalogo::create(['idtable' => 1,'iditem' => 1, 'codigo' => 'root','nombre' => 'root','descripcion'=>'Administrador del sistema','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 1,'iditem' => 2, 'codigo' => 'ger','nombre' => 'gerente','descripcion'=>'Gerente de la empresa ','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 1,'iditem' => 3, 'codigo' => 'dig','nombre' => 'digitador','descripcion'=>'Digitador de la empresa ','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 1,'iditem' => 4, 'codigo' => 'des','nombre' => 'despachador','descripcion'=>'Despachador de la empresa ','valor'=> null,'activo'=>true]);
    }
}
