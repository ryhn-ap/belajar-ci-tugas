<?php
    namespace App\Database\Seeds;

    use CodeIgniter\Database\Seeder;

    class UserSeeder extends Seeder {
        public function run() {
            $data = [
                [
                    'username'   => 'adminburjo',
                    'email'      => 'admin@burjonusantara.com',
                    'password'   => password_hash('1234567', PASSWORD_DEFAULT), // Password: admin123
                    'role'       => 'admin',
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'username'   => 'reyhan',
                    'email'      => 'reyhan@burjonusantara.com',
                    'password'   => password_hash('1234567', PASSWORD_DEFAULT), // Password: password321
                    'role'       => 'user',
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ]
            ];

            foreach ($data as $user) {
                $this->db->table('user')->insert($user);
            }
        }
    }
?>
