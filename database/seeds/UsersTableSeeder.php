<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password'])->toArray());

        $user = User::find(1);
        $user->name = 'GameTo';
        $user->email = '1374434199@qq.com';
        $user->password = bcrypt('password');
        $user->is_admin = true;
        $user->save();
    }
}
