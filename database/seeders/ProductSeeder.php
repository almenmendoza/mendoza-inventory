<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Amoxicillin 500mg',
                'sku' => 'MED-AMX-001',
                'description' => 'Antibiotic capsule for bacterial infections',
                'category' => 'Antibiotics',
                'quantity' => 150,
                'reorder_level' => 20,
                'unit_price' => 12.50,
                'supplier' => 'PharmaCorp',
            ],
            [
                'name' => 'Lisinopril 10mg',
                'sku' => 'MED-LIS-002',
                'description' => 'Blood pressure control tablet',
                'category' => 'Cardiovascular',
                'quantity' => 4,
                'reorder_level' => 10,
                'unit_price' => 8.00,
                'supplier' => 'HealthCare Inc',
            ],
            [
                'name' => 'Paracetamol 500mg',
                'sku' => 'MED-PAR-003',
                'description' => 'Pain reliever and fever reducer',
                'category' => 'Analgesics',
                'quantity' => 300,
                'reorder_level' => 50,
                'unit_price' => 5.00,
                'supplier' => 'PharmaCorp',
            ],
            [
                'name' => 'Metformin 850mg',
                'sku' => 'MED-MET-004',
                'description' => 'Blood sugar management for diabetes',
                'category' => 'Antidiabetic',
                'quantity' => 3,
                'reorder_level' => 15,
                'unit_price' => 15.00,
                'supplier' => 'MediSupply Co',
            ],
            [
                'name' => 'Ibuprofen 400mg',
                'sku' => 'MED-IBU-005',
                'description' => 'Anti-inflammatory pain reliever',
                'category' => 'Analgesics',
                'quantity' => 80,
                'reorder_level' => 25,
                'unit_price' => 7.50,
                'supplier' => 'PharmaCorp',
            ],
            [
                'name' => 'Cetirizine 10mg',
                'sku' => 'MED-CET-006',
                'description' => 'Antihistamine for allergy relief',
                'category' => 'Antihistamine',
                'quantity' => 5,
                'reorder_level' => 20,
                'unit_price' => 6.00,
                'supplier' => 'HealthCare Inc',
            ],
            [
                'name' => 'Mefenamic Acid 500mg',
                'sku' => 'MED-MEF-007',
                'description' => 'Pain reliever for moderate symptoms',
                'category' => 'Analgesics',
                'quantity' => 45,
                'reorder_level' => 15,
                'unit_price' => 9.50,
                'supplier' => 'MediSupply Co',
            ],
            [
                'name' => 'Ascorbic Acid (Vitamin C)',
                'sku' => 'MED-VIT-008',
                'description' => 'Immune system booster supplement',
                'category' => 'Vitamins',
                'quantity' => 200,
                'reorder_level' => 30,
                'unit_price' => 3.50,
                'supplier' => 'PharmaCorp',
            ],
            [
                'name' => 'Multivitamins + Iron',
                'sku' => 'MED-MVI-009',
                'description' => 'Daily vitamin and mineral supplement',
                'category' => 'Vitamins',
                'quantity' => 2,
                'reorder_level' => 10,
                'unit_price' => 15.00,
                'supplier' => 'HealthCare Inc',
            ],
            [
                'name' => 'Loperamide 2mg',
                'sku' => 'MED-LOP-010',
                'description' => 'Anti-diarrheal relief medication',
                'category' => 'Antidiarrheal',
                'quantity' => 60,
                'reorder_level' => 15,
                'unit_price' => 4.00,
                'supplier' => 'MediSupply Co',
            ],
            [
                'name' => 'Oral Rehydration Salts',
                'sku' => 'SUP-ORS-011',
                'description' => 'Electrolyte replacement powder',
                'category' => 'Supplements',
                'quantity' => 0,
                'reorder_level' => 20,
                'unit_price' => 18.00,
                'supplier' => 'MediSupply Co',
            ],
            [
                'name' => 'Losartan 50mg',
                'sku' => 'MED-LOS-012',
                'description' => 'Antihypertensive medication',
                'category' => 'Cardiovascular',
                'quantity' => 8,
                'reorder_level' => 15,
                'unit_price' => 10.00,
                'supplier' => 'HealthCare Inc',
            ],
            [
                'name' => 'Amlodipine 5mg',
                'sku' => 'MED-AML-013',
                'description' => 'Calcium channel blocker for BP',
                'category' => 'Cardiovascular',
                'quantity' => 90,
                'reorder_level' => 20,
                'unit_price' => 7.50,
                'supplier' => 'PharmaCorp',
            ],
            [
                'name' => 'Salbutamol Nebule',
                'sku' => 'MED-SAL-014',
                'description' => 'Bronchodilator for asthma relief',
                'category' => 'Respiratory',
                'quantity' => 35,
                'reorder_level' => 10,
                'unit_price' => 25.00,
                'supplier' => 'MediSupply Co',
            ],
            [
                'name' => 'Alcohol 70% Isopropyl (500ml)',
                'sku' => 'SUP-ALC-015',
                'description' => 'Antiseptic disinfectant solution',
                'category' => 'Antiseptic',
                'quantity' => 18,
                'reorder_level' => 5,
                'unit_price' => 75.00,
                'supplier' => 'PharmaCorp',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}