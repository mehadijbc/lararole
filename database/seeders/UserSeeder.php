<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('users')->insert([
        'name'=>'hasan',
        'email'=>'hasan@gmail.com',
        'password'=> '123456'

      ]);
        // $user = User::where('email','hasan@gmail.com');
        //
        // if (is_null($user)) {
        //   $user = new App\Models\User();
        //   $user->name = 'hasan';
        //   $user->email = 'hasan@gmail.com';
        //   $user->password = Hash::make('123456');
        //   $user->save();
        // }

    }

}
