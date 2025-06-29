<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CompanySeeder::class,
            EmployeeSeeder::class,
            BranchSeeder::class,
            CategorySeeder::class,
            PropertyTypeSeeder::class,
            AttributeSeeder::class,
            PropertySeeder::class,
            BenefitSeeder::class,
            PropertyImageSeeder::class,
            PropertyBenefitSeeder::class,
            AddressSeeder::class,
            PricingHistorySeeder::class,
            FavoriteSeeder::class,
            ReviewSeeder::class,
            ChatSeeder::class,
            ChatMessageSeeder::class,
//            PropertyAttributeSeeder::class,
            UserImageSeeder::class,
            // Add other seeders here
        ]);
    }
}
