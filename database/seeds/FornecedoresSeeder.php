<?php

use Illuminate\Database\Seeder;
use App\Fornecedores;

class FornecedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Fornecedores::class, 50)->create();

    }
}
