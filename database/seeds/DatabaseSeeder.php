<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\NewFile;

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
        $this->call(NewFilesSeeder::class);

        Model::reguard();
    }
}

class NewFilesSeeder extends Seeder {

    public function run()
    {
        DB::table('newfiles')->delete();
        NewFile::create([
            'title_file' => 'Первый файл',
            'kurs' => '1 курс',
            'group' => 'ИТ-433',
            'subject' => 'Периферийные устройства',
            'path_to_file' => 'path_to_file_1',
            'description' => 'Описание 1'
        ]);

        NewFile::create([
            'title_file' => 'Второй файл',
            'kurs' => '4 курс',
            'group' => 'ИТ-452',
            'subject' => 'Иностранный язык',
            'path_to_file' => 'path_to_file_2',
            'description' => 'Описание 2'
        ]);

        NewFile::create([
            'title_file' => 'Третий файл',
            'kurs' => '3 курс',
            'group' => 'ИТ-461м',
            'subject' => 'Технологии корпоративных сетей',
            'path_to_file' => 'path_to_file_3',
            'description' => 'Описание 3'
        ]);
    }
}
