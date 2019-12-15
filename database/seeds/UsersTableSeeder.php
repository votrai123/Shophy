<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'id' => 1,
            'full_name' => 'bich tram',
            // 'birth' => '',
            'email' => 'bichtramthui@gmail.com',
            'password' => bcrypt('bichtram'),
            'phone' => '0902516351',
            'address' => 'nha con tram',
            'admin' => 1,
            'remember_token' => 1,
        ];

        User::insert($users);
    }
}
