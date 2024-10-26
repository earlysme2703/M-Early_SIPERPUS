<?php

namespace Database\Seeders;
use App\Models\Bookshelf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Query Builder
      DB::table('bookshelves')->insert([
        [
            'code' => 'RAK01',
            'name' => 'Informatika'
        ], 
        [
            'code' => 'RAK02',
            'name' => 'Sipil'
        ], 
        [
            'code' => 'RAK03',
            'name' => 'Industri'
        ]
      ]);

        //ORM
        Bookshelf::create([
            'code' => 'RAK03',
            'name' => 'Industri'
        ]);
    }
}
