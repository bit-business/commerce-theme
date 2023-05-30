<?php

namespace NadzorServera\Skijasi\Theme\CommerceTheme\Providers;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use NadzorServera\Skijasi\Theme\CommerceTheme\SkijasiCommerceTheme;
use NadzorServera\Skijasi\Theme\CommerceTheme\Commands\SkijasiCommerceThemeSetup;
use NadzorServera\Skijasi\Theme\CommerceTheme\Facades\SkijasiCommerceTheme as FacadesSkijasiCommerceTheme;

class CommerceThemeProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make(Kernel::class);

        $loader = AliasLoader::getInstance();
        $loader->alias('SkijasiCommerceTheme', FacadesSkijasiCommerceTheme::class);

        $this->app->singleton('skijasi-commerce-theme', function () {
            return new SkijasiCommerceTheme();
        });

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'commerce-theme');
        $this->loadRoutesFrom(__DIR__.'/../Routes/api.php');
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');

        $this->publishes([
            __DIR__.'/../Seeder'                           => database_path('seeders/Skijasi/Commerce/Theme'),
            __DIR__.'/../Config/skijasi-commerce-theme.php' => config_path('skijasi-commerce-theme.php'),
            __DIR__.'/../Tailwind/'                        => base_path(),
            __DIR__.'/../Images/'                          => storage_path('app/public/files/shares'),
            __DIR__.'/../resources/customization/'         => resource_path('js/skijasi/theme/commerce-theme/'),
        ], 'SkijasiCommerceTheme');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConsoleCommands();
    }

    /**
     * Register the commands accessible from the Console.
     */
    private function registerConsoleCommands()
    {
        $this->commands(SkijasiCommerceThemeSetup::class);
    }
}
