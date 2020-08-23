<?php

use Illuminate\Database\Seeder;

class EstabelecimentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Estabelecimento::class, 30)->create();
    }
}
