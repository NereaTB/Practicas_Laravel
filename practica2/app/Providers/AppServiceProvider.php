<?php

namespace App\Providers;

use App\Models\Libro;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\LibroCRUDController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //Vamos a registrar el controlador
        //Registra esta clase
        //Opción 1 NO necesito el constructor
        $this->app->when(LibroCRUDController::class)
            ->needs(Libro::class) //Que necesita esta dependencia y sino no puede funcionar
            ->give(function () {
                return new Libro();
            });

        //Opción 2 SÍ necesito el constructor
        //$this->app->bind(LibroCRUDController::class, function () {
        //  return new Libro();
        //});
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
