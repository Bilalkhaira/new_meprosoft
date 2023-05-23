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
        $homeParentId = NavMenu::create([
            'name' => 'Home',
            'status' => 'active'
        ]);

        $homeMenuParentId = NavMenu::create([
            'name' => 'Corporate Overview',
            'parent_id' => $homeParentId->id,
            'status' => 'active'
        ]);

        $home_nv = [
            ['name' => 'About Mesprosoft', 'parent_id' => $homeMenuParentId->id, 'status' => 'active'],
            ['name' => 'Management Team', 'parent_id' => $homeMenuParentId->id, 'status' => 'active'],
            ['name' => 'Core Values', 'parent_id' => $homeMenuParentId->id, 'status' => 'active'],
            ['name' => 'Why Mesprosoft', 'parent_id' => $homeMenuParentId->id, 'status' => 'active'],
        ];

        NavMenu::insert($home_nv);

        // Services NavMenu
        $serviceParentId = NavMenu::create([
            'name' => 'Services',
            'status' => 'active'
        ]);

        $services_nv = [
            ['name' => 'Application Migration & Conversion', 'parent_id' => $serviceParentId->id, 'status' => 'inactive'],
            ['name' => 'Enterprise Solution Consulting', 'parent_id' => $serviceParentId->id, 'status' => 'inactive'],
            ['name' => 'GST Migration', 'parent_id' => $serviceParentId->id, 'status' => 'inactive'],
            ['name' => 'IPO Compliance', 'parent_id' => $serviceParentId->id, 'status' => 'active'],
            ['name' => 'PLC MES Weigh Bridge Integration', 'parent_id' => $serviceParentId->id, 'status' => 'active'],
            ['name' => 'Resource Argumentation', 'parent_id' => $serviceParentId->id, 'status' => 'active'],
            ['name' => 'Rise with S4 HANA Implementation', 'parent_id' => $serviceParentId->id, 'status' => 'inactive'],
            ['name' => 'SAP Support', 'parent_id' => $serviceParentId->id, 'status' => 'inactive'],
            ['name' => 'Digital Manufacturing Cloud', 'parent_id' => $serviceParentId->id, 'status' => 'inactive'],
            ['name' => 'ALM(Application Life Cycle Management)', 'parent_id' => $serviceParentId->id, 'status' => 'inactive'],
            ['name' => 'SAP Fiori Development', 'parent_id' => $serviceParentId->id, 'status' => 'inactive'],
        ];
        NavMenu::insert($services_nv);

         // Product And Solutions NavMenu
         $produtParentId = NavMenu::create([
            'name' => 'Products & Solutions',
            'status' => 'active'
        ]);

        $product_nv = [
            ['name' => 'Dispatch Automation', 'parent_id' => $produtParentId->id, 'status' => 'active'],
            ['name' => 'Dynamic Machine Scheduling ', 'parent_id' => $produtParentId->id, 'status' => 'active'],
            ['name' => 'Electronic Batch Manufacturing', 'parent_id' => $produtParentId->id, 'status' => 'active'],
            ['name' => 'Handheld Mobile Bar Code', 'parent_id' => $produtParentId->id, 'status' => 'active'],
            ['name' => 'Loan Management Solution', 'parent_id' => $produtParentId->id, 'status' => 'active'],
            ['name' => 'Mespro GPS Preconfigured Analytics', 'parent_id' => $produtParentId->id, 'status' => 'active'],
            ['name' => 'Mespro Life Science CFR Part 11', 'parent_id' => $produtParentId->id, 'status' => 'active'],
            ['name' => 'Mespro Optimized MRP', 'parent_id' => $produtParentId->id, 'status' => 'active'],
            ['name' => 'Mespro Paper Less Manufacturing', 'parent_id' => $produtParentId->id, 'status' => 'active'],
            ['name' => 'Mespro X-Steps', 'parent_id' => $produtParentId->id, 'status' => 'active'],
            ['name' => 'O2C Automation', 'parent_id' => $produtParentId->id, 'status' => 'active'],
            ['name' => 'Purchase Budget Check & Approval', 'parent_id' => $produtParentId->id, 'status' => 'active'],
            ['name' => 'Smart Foundry', 'parent_id' => $produtParentId->id, 'status' => 'active'],
            ['name' => 'TS 16949 Compliant KAPA ', 'parent_id' => $produtParentId->id, 'status' => 'active'],
        ];

        NavMenu::insert($product_nv);

         // Case Study NavMenu
         $caseStudyParentId = NavMenu::create([
            'name' => 'Case Study',
            'status' => 'active'
        ]);

        $case_study_nv = [
            ['name' => 'Food Industry', 'parent_id' => $caseStudyParentId->id, 'status' => 'active'],
            ['name' => 'Digital Manufacturing', 'parent_id' => $caseStudyParentId->id, 'status' => 'active'],
            ['name' => 'Mespro Paperless Manufacturing', 'parent_id' => $caseStudyParentId->id, 'status' => 'active'],
            ['name' => 'S/4 Hana Private cloud', 'parent_id' => $caseStudyParentId->id, 'status' => 'inactive'],
            ['name' => 'S/4 Hana Conversion', 'parent_id' => $caseStudyParentId->id, 'status' => 'inactive'],
        ];

        NavMenu::insert($case_study_nv);

        $data = [
            ['name' => 'News & Event', 'status' => 'active'],
            ['name' => 'Career', 'status' => 'active'],
            ['name' => 'Contact Us', 'status' => 'active'],
        ];

        NavMenu::insert($data);

        // new data

        $services_nv2 = [
            ['name' => 'Business Consulting', 'parent_id' => $serviceParentId->id, 'status' => 'active'],
            ['name' => 'Digital Transformation With Cloud', 'parent_id' => $serviceParentId->id, 'status' => 'active'],
            ['name' => 'S/4 Hana Conversions', 'parent_id' => $serviceParentId->id, 'status' => 'active'],
            ['name' => 'Application Support', 'parent_id' => $serviceParentId->id, 'status' => 'active'],
            ['name' => 'Specific Consulting', 'parent_id' => $serviceParentId->id, 'status' => 'active'],
        ];
        NavMenu::insert($services_nv2);

        $product_nv2 = [
            ['name' => 'BTP', 'parent_id' => $produtParentId->id, 'status' => 'active'],
            ['name' => 'IOT', 'parent_id' => $produtParentId->id, 'status' => 'active'],
        ];

        NavMenu::insert($product_nv2);



    }
}
