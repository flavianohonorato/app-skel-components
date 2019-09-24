<?php


use Phinx\Seed\AbstractSeed;

class UsersSeeder extends AbstractSeed
{
    public function run()
    {
        $options = [
            'cost' => 12,
        ];

        $faker = Faker\Factory::create();
        $data = [];

        for ($i = 0; $i < 12; $i++) {
            $data[] = [
                'name'          => $faker->userName,
                'email'         => $faker->email,
                'password'      => password_hash('123456789', PASSWORD_DEFAULT, $options),
                'created_at'    => date('Y-m-d H:i:s'),
            ];
        }

        $this->table('users')
             ->insert($data)
             ->save();
    }
}
