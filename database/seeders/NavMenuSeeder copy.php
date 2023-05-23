<?php

namespace Database\Seeders;

use App\Models\NavMenu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NavMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Home NavMenu
        $parent_id = NavMenu::create([
            'name' => 'Home',
        ]);

        $parent_id = NavMenu::create([
            'name' => 'Corporate Overview',
            'parent_id' => $parent_id->id,
        ]);

        $home_nv = [
            ['name' => 'About Mesprosoft', 'parent_id' => $parent_id->id],
            ['name' => 'Management Team', 'parent_id' => $parent_id->id],
            ['name' => 'Core Values', 'parent_id' => $parent_id->id],
            ['name' => 'Why Mesprosoft', 'parent_id' => $parent_id->id],
        ];

        NavMenu::insert($home_nv);

        // Services NavMenu
        $parent_id = NavMenu::create([
            'name' => 'Services',
        ]);

        $services_nv = [
            ['name' => 'Business Consulting', 'parent_id' => $parent_id->id],
            ['name' => 'Digital Transformation With Cloud', 'parent_id' => $parent_id->id],
            ['name' => 'S/4 Hana Conversion', 'parent_id' => $parent_id->id],
            ['name' => 'Application Support', 'parent_id' => $parent_id->id],
            ['name' => 'Specific Consulting', 'parent_id' => $parent_id->id],
            ['name' => 'IPO Compliance', 'parent_id' => $parent_id->id],
            ['name' => 'PLC MES Weigh Bridge Integration', 'parent_id' => $parent_id->id],
            ['name' => 'Resource Argumentation', 'parent_id' => $parent_id->id],
            
        ];
        NavMenu::insert($services_nv);

         // Product And Solutions NavMenu
         $parent_id = NavMenu::create([
            'name' => 'Products & Solutions',
        ]);

        $product_nv = [
            ['name' => 'Dispatch Automation', 'parent_id' => $parent_id->id],
            ['name' => 'Dynamic Machine Scheduling ', 'parent_id' => $parent_id->id],
            ['name' => 'Electronic Batch Manufacturing', 'parent_id' => $parent_id->id],
            ['name' => 'Handheld Mobile Bar Code', 'parent_id' => $parent_id->id],
            ['name' => 'Loan Management Solution', 'parent_id' => $parent_id->id],
            ['name' => 'Mespro GPS Preconfigured Analytics', 'parent_id' => $parent_id->id],
            ['name' => 'Mespro Life Science CFR Part 11', 'parent_id' => $parent_id->id],
            ['name' => 'Mespro Optimized MRP', 'parent_id' => $parent_id->id],
            ['name' => 'Mespro Paper Less Manufacturing', 'parent_id' => $parent_id->id],
            ['name' => 'Mespro X-Steps', 'parent_id' => $parent_id->id],
            ['name' => 'O2C Automation', 'parent_id' => $parent_id->id],
            ['name' => 'Purchase Budget Check & Approval', 'parent_id' => $parent_id->id],
            ['name' => 'Smart Foundry', 'parent_id' => $parent_id->id],
            ['name' => 'TS 16949 Compliant KAPA', 'parent_id' => $parent_id->id],
            ['name' => 'BTP', 'parent_id' => $parent_id->id],
            ['name' => 'IOT', 'parent_id' => $parent_id->id],
        ];

        NavMenu::insert($product_nv);

         // Case Study NavMenu
         $parent_id = NavMenu::create([
            'name' => 'Case Study',
        ]);

        $case_study_nv = [
            ['name' => 'Food Industry', 'parent_id' => $parent_id->id],
            ['name' => 'Digital Manufacturing', 'parent_id' => $parent_id->id],
            ['name' => 'Mespro Paperless Manufacturing', 'parent_id' => $parent_id->id],
        ];

        NavMenu::insert($case_study_nv);

        $data = [
            ['name' => 'News & Event'],
            ['name' => 'Career'],
            ['name' => 'Contact Us'],
        ];

        NavMenu::insert($data);
    }
}
