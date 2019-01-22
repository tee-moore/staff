<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Worker;
use Illuminate\Support\Facades\DB;

class WorkersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 50; $i++){

            $gender    = $faker->randomElement(['male', 'female']);
            $folder    = ($gender == 'male') ? 'men' : 'women';
            $parent_id = ($i == 1) ? 0 : $this->getParent();
            $level     = ($parent_id == 0) ? 1 : $this->getLevel($parent_id);

            $worker = new Worker();
            $worker->first_name = $faker->firstName($gender);
            $worker->last_name = $faker->lastName;
            $worker->phone = $faker->numerify('(###) ###-####');
            $worker->email = strtolower($worker->first_name .'.'. $worker->last_name) .'@'. $faker->freeEmailDomain;
            $worker->avatar = $folder .'/'. random_int(1 , 99 );
            $worker->position_id = random_int(1 , 100 );
            $worker->salary = mt_rand(10000, 200000) / 10;
            $worker->hiring_date = $faker->date($format = 'Y-m-d');
            $worker->parent_id = $parent_id;
            $worker->level = $level;
            $worker->save();
        }
    }

    /**
     * @return int
     * @throws Exception
     */
    public function getParent()
    {
        $min_id = DB::table('workers')->min('id');
        $max_id = DB::table('workers')->max('id');
        $id = random_int ($min_id , $max_id);
        $model = Worker::find($id);
        if($model->level == 5){
            $id = $this->getParent();
        }
        return $id;
    }

    /**
     * @param $id
     * @return int
     */
    public function getLevel($id)
    {
        $model = Worker::find($id);
        return $model->level + 1;
    }
}
