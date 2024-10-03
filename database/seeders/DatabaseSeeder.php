<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::beginTransaction();
        try{
         User::factory(50)->create();
         $this->call([
             ContactSeeder::class,
             PortofolioSeeder::class,
             PostSeeder::class,
         ]);
         DB::commit();
        }catch(\Throwable $th){
            DB::rollBack();
            throw $th;
        }
    }
}
