<?php

use App\Category;
use Illuminate\Database\Seeder;

class SeederCategoriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
    		['name'=>'World','created_at'=>now(),'updated_at'=>now()],
			['name'=>'U.S.','created_at'=>now(),'updated_at'=>now()],
			['name'=>'Technology','created_at'=>now(),'updated_at'=>now()],
			['name'=>'Design','created_at'=>now(),'updated_at'=>now()],
			['name'=>'Culture','created_at'=>now(),'updated_at'=>now()],
			['name'=>'Business','created_at'=>now(),'updated_at'=>now()],
			['name'=>'Politics','created_at'=>now(),'updated_at'=>now()],
			['name'=>'Opinion','created_at'=>now(),'updated_at'=>now()],
			['name'=>'Science','created_at'=>now(),'updated_at'=>now()],
			['name'=>'Health','created_at'=>now(),'updated_at'=>now()],
			['name'=>'Style','created_at'=>now(),'updated_at'=>now()],
			['name'=>'Travel','created_at'=>now(),'updated_at'=>now()]
		]);
    }
}
