<?php
/**
 * Description:
 * Created by PhpStorm.
 * User: VIjay
 * Date: 2019/4/25
 * Time: 22:04
 */

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();

        factory(Tag::class, 5)->create();
    }
}