<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        Catalogo::creating(function ($catalogo) {
            $restringir = [5,6];
            if (in_array($catalogo->idtable, $restringir)) {
            $catalogo->where('idtable', $catalogo->idtable)->update(['activo' => false]);
            }
        });
        Catalogo::updating(function ($catalogo) {
            $restringir = [5,6];
            if (in_array($catalogo->idtable, $restringir)) {
            $catalogo->where('idtable', $catalogo->idtable)->where('id','<>',$catalogo->id)->update(['activo' => false]);
            }
        });

         */
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
