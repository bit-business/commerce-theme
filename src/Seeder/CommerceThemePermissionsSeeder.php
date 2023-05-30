<?php

namespace Database\Seeders\Skijasi\Commerce\Theme;

use Illuminate\Database\Seeder;
use NadzorServera\Skijasi\Models\Permission;

class CommerceThemePermissionsSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $keys = [
            'browse_theme_commerce_configurations',
        ];

        foreach ($keys as $key) {
            Permission::firstOrCreate([
                'key'        => $key,
                'table_name' => null,
            ]);
        }
    }
}
