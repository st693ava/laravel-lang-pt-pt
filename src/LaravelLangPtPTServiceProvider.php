<?php
namespace GookWs\LaravelLangPtPT;
use Illuminate\Support\ServiceProvider;
class LaravelLangPtPTServiceProvider extends ServiceProvider
{
    /**
    * Publishes translation files.
    *
    * @return  void
    */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/pt_PT.json' => resource_path('lang/pt_PT.json'),
            __DIR__ . '/pt_PT' => resource_path('lang/pt_PT'),
        ], 'laravel-lang-pt-pt');
    }
}
