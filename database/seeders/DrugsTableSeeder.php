<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Drug;

class DrugsTableSeeder extends Seeder
{
    public function run()
    {
        // Add drug entries
        Drug::create([
            'drugId' => 'D001',
            'name' => 'Paracetamol',
            'batchNumber' => 'B001',
            'manufacturer' => 'Pharma Inc.',
            'expiryDate' => '2025-12-31',
        ]);

        Drug::create([
            'drugId' => 'D002',
            'name' => 'Ibuprofen',
            'batchNumber' => 'B002',
            'manufacturer' => 'HealthCorp',
            'expiryDate' => '2024-05-20',
        ]);

        Drug::create([
            'drugId' => 'D003',
            'name' => 'Amoxicillin',
            'batchNumber' => 'B003',
            'manufacturer' => 'BioMed Solutions',
            'expiryDate' => '2026-03-15',
        ]);
    }
}
