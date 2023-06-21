<?php

namespace Database\Seeders;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Throwable;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    try {
      User::factory()
        ->count(100)
        ->has(Seller::factory()
          ->hasSales(30))
        ->create();
    } catch (Throwable $e) {
      echo "Erro durante a execução do UserSeeder: " . $e->getMessage() . "\n";
      echo "Classe: " . get_class($e) . "\n";
      echo "Arquivo: " . $e->getFile() . "\n";
      echo "Linha: " . $e->getLine() . "\n";
      // Outras ações de tratamento de erro, se necessário
    }
  }
}
