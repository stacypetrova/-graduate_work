<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\NewFile;
use App\Models\Kurs;
use App\Models\Group;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(InitialSeeder::class);

        Model::reguard();
    }
}

class InitialSeeder extends Seeder
{

    public function run()
    {
        $kurs = [
            ['name' => '1 курс','degree'=>'Бакалавр'],
            ['name' => '2 курс','degree'=>'Бакалавр'],
            ['name' => '3 курс','degree'=>'Бакалавр'],
            ['name' => '4 курс','degree'=>'Бакалавр'],
        ];
        DB::table('kurs')->delete();
        foreach ($kurs as $value) {
            Kurs::updateOrCreate($value);
        }
        $group = [
            ['name' => 'IT-431', 'kurs_id' => '1'],
            ['name' => 'IT-432', 'kurs_id' => '1'],
            ['name' => 'IT-433', 'kurs_id' => '1'],
            ['name' => 'IT-231', 'kurs_id' => '1'],
        ];
        DB::table('groups')->delete();
        foreach ($group as $value) {
            Group::updateOrCreate($value);
        }
    }
}
