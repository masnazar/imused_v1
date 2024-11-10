<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PositionSeeder extends Seeder
{
    public function run()
    {
        // Data posisi
        $positions = [
            ['position_name' => 'Owner'],
            ['position_name' => 'Manager Operasional'],
            ['position_name' => 'Manager Marketing'],
            ['position_name' => 'Supervisor Operasional'],
            ['position_name' => 'Supervisor Marketing'],
            ['position_name' => 'Head of Customer Relationship'],
            ['position_name' => 'Head of Brand'],
            ['position_name' => 'Leader Customer Relationship'],
            ['position_name' => 'Finance'],
            ['position_name' => 'Accounting Leader'],
            ['position_name' => 'Accounting Staff'],
            ['position_name' => 'Human Resources'],
            ['position_name' => 'General Affair'],
            ['position_name' => 'KOL Admin'],
            ['position_name' => 'Social Media Specialist'],
            ['position_name' => 'Advertiser'],
            ['position_name' => 'Customer Service'],
            ['position_name' => 'Content Creator'],
            ['position_name' => 'Host Livestream'],
            ['position_name' => 'Leader Operasional'],
        ];

        // Insert data ke tabel positions
        foreach ($positions as $position) {
            $this->db->table('positions')->insert($position);
        }
    }
}
