<?php

namespace Database\Seeders\Skijasi\Commerce\Theme;

use Illuminate\Database\Seeder;

class SkijasiCommerceThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CommerceThemeMenusSeeder::class,
            CommerceThemeFixedMenuItemSeeder::class,
            CommerceThemePermissionsSeeder::class,
            CommerceThemeProductCategories::class,
            CommerceThemeConfigurationsSeeder::class,
            CommerceThemeContentSeeder::class,
        ]);
    }
}
