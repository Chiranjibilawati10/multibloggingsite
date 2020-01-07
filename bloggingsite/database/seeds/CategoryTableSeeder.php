<?php
use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Javascript =  new Category();
        $Javascript->name = 'Javascript';
        $Javascript->slug = 'Javascript';
        $Javascript->save();

        $Java =  new Category();
        $Java->name = 'Java';
        $Java->slug = 'Java';
        $Java->save();

        $Node =  new Category();
        $Node->name = 'Node';
        $Node->slug = 'Node';
        $Node->save();
    }
}
