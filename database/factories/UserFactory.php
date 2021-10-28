<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $avatars = [
            'http://www.obstinateweitan.com/uploads/images/avatars/2021-10-28/1_1635407155_IB18JJfM8F.png',
            'http://www.obstinateweitan.com/uploads/images/avatars/2021-10-28/1_1635407190_YjD8oQyfRD.png',
            'http://www.obstinateweitan.com/uploads/images/avatars/2021-10-28/1_1635407213_OxixvL5YWG.png',
            'http://www.obstinateweitan.com/uploads/images/avatars/2021-10-28/1_1635407232_4PVKeqai6m.png',
            'http://www.obstinateweitan.com/uploads/images/avatars/2021-10-28/1_1635407245_iVXlrot8Jz.png'
        ];
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'avatar' => $this->faker->randomElement($avatars),
            'introduction' => $this->faker->sentence(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
