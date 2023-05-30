<?php

namespace Database\Seeders\Skijasi\Commerce\Theme;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use NadzorServera\Skijasi\Models\Configuration;

class CommerceThemeConfigurationsSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @throws Exception
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        try {
            $settings = [
                0 => [
                    'key'          => 'logoTextLightTheme',
                    'display_name' => 'Logo Text Light Theme',
                    'value'        => 'photos/shares/logo.webp',
                    'details'      => '',
                    'type'         => 'upload_image',
                    'order'        => 1,
                    'group'        => 'commerceThemePanel',
                    'can_delete'   => 0,
                ],
                1 => [
                    'key'          => 'themeTitle',
                    'display_name' => 'Theme Title',
                    'value'        => 'Skijasi Commerce',
                    'details'      => '',
                    'type'         => 'text',
                    'order'        => 2,
                    'group'        => 'commerceThemePanel',
                    'can_delete'   => 0,
                ],
                2 => [
                    'key'          => 'themeSubtitle',
                    'display_name' => 'Theme Subtitle',
                    'value'        => 'Theme for Skijasi Commerce Module',
                    'details'      => '',
                    'type'         => 'text',
                    'order'        => 3,
                    'group'        => 'commerceThemePanel',
                    'can_delete'   => 0,
                ],
                3 => [
                    'key'          => 'logoTheme',
                    'display_name' => 'Logo Theme',
                    'value'        => 'photos/shares/favicon.png',
                    'details'      => '',
                    'type'         => 'upload_image',
                    'order'        => 4,
                    'group'        => 'commerceThemePanel',
                    'can_delete'   => 0,
                ],
                4 => [
                    'key'          => 'transactionUniqueCode',
                    'display_name' => 'Transaction Unique Code',
                    'value'        => 3,
                    'details'      => '',
                    'type'         => 'number',
                    'order'        => 5,
                    'group'        => 'commerceThemePanel',
                    'can_delete'   => 0,
                ],
                5 => [
                    'key'          => 'sampleProofOfTransaction',
                    'display_name' => 'Sample Proof of Transaction',
                    'value'        => '',
                    'details'      => '',
                    'type'         => 'upload_image',
                    'order'        => 6,
                    'group'        => 'commerceThemePanel',
                    'can_delete'   => 0,
                ],
                6 => [
                    'key'          => 'appName',
                    'display_name' => 'App Name',
                    'value'        => 'Commerce Theme',
                    'details'      => '',
                    'type'         => 'text',
                    'order'        => 7,
                    'group'        => 'commerceThemePanel',
                    'can_delete'   => 0,
                ],
                7 => [
                    'key'          => 'tos',
                    'display_name' => 'Term of Service',
                    'value'        => '',
                    'details'      => '',
                    'type'         => 'editor',
                    'order'        => 8,
                    'group'        => 'commerceThemePanel',
                    'can_delete'   => 0,
                ],
                8 => [
                    'key'          => 'commerceThemeFavicon',
                    'display_name' => 'Commerce Theme Favicon',
                    'value'        => 'photos/shares/logo-144px.png',
                    'details'      => '',
                    'type'         => 'upload_image',
                    'order'        => 9,
                    'group'        => 'commerceThemePanel',
                    'can_delete'   => 0,
                ],
                9 => [
                    'key'          => 'logoTextDarkTheme',
                    'display_name' => 'Logo Text Dark Theme',
                    'value'        => 'photos/shares/logo.webp',
                    'details'      => '',
                    'type'         => 'upload_image',
                    'order'        => 10,
                    'group'        => 'commerceThemePanel',
                    'can_delete'   => 0,
                ],
                10 => [
                    'key'          => 'privacy',
                    'display_name' => 'Privacy',
                    'value'        => '',
                    'details'      => '',
                    'type'         => 'editor',
                    'order'        => 11,
                    'group'        => 'commerceThemePanel',
                    'can_delete'   => 0,
                ],
                11 => [
                    'key'          => 'facebookUrl',
                    'display_name' => 'Facebook URL',
                    'value'        => '#',
                    'details'      => '',
                    'type'         => 'text',
                    'order'        => 12,
                    'group'        => 'commerceThemePanel',
                    'can_delete'   => 0,
                ],
                12 => [
                    'key'          => 'instagramUrl',
                    'display_name' => 'Instagram URL',
                    'value'        => '#',
                    'details'      => '',
                    'type'         => 'text',
                    'order'        => 13,
                    'group'        => 'commerceThemePanel',
                    'can_delete'   => 0,
                ],
                13 => [
                    'key'          => 'twitterUrl',
                    'display_name' => 'Twitter URL',
                    'value'        => '#',
                    'details'      => '',
                    'type'         => 'text',
                    'order'        => 14,
                    'group'        => 'commerceThemePanel',
                    'can_delete'   => 0,
                ],
            ];

            foreach ($settings as $key => $value) {
                Configuration::where('key', $value['key'])->delete();
                Configuration::create($value);
            }
            DB::commit();
        } catch (Exception $e) {
            throw new Exception('Exception occur '.$e);
            DB::rollBack();
        }
    }
}
