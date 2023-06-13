<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
        $model->insert([
            'username' => 'admin',
            'useremail' => 'ahmad05102001@gmail.com',
            'userpassword' => password_hash('ahmad112', PASSWORD_DEFAULT),
        ]);
    }
}
