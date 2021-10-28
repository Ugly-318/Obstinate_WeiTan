<?php

namespace Database\Seeders;

use App\Models\User;
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
        // 生成数据集合
        User::factory()->count(10)->create();

        // 单独处理第一个用户的数据
        $user = User::find(1);
        $user->name = '任晨阳';
        $user->email = '1194884851@qq.com';
        $user->avatar = 'http://www.obstinateweitan.com/uploads/images/avatars/2021-10-28/1_1635407245_iVXlrot8Jz.png';
        $user->save();
    }
}
