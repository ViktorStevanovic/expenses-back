<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Expense;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $expenses = [
            [
                'category_id' => 1,
                'amount' => 12,
                'date' => '2024-03-02',
            ],
            [
                'category_id' => 2,
                'amount' => 2.99,
                'date' => '2024-05-01',
            ],
        ];

        foreach ($expenses as $expense) {
            Expense::create($expense);
        }
    }
}
