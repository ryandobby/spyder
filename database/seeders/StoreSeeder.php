<?php

namespace Database\Seeders;

use App\Imports\StoresImport;
use App\Models\Store;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new StoresImport, storage_path('app/ogp_stores.xlsx'));
        $this->command->info('Imported ' . Store::count() . ' records.');
    }
}
