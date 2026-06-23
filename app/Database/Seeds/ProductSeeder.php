<?php
    namespace App\Database\Seeds;

    use CodeIgniter\Database\Seeder;

    class ProductSeeder extends Seeder {
        public function run(){
            $data = [
                [
                    'nama'       => 'Mie Dok-Dok',
                    'kategori'   => 'Makanan',
                    'harga'      => 13000,
                    'foto'       => 'mie_dokdok.jpg',
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'nama'       => 'Nasi Goreng Magelangan',
                    'kategori'   => 'Makanan',
                    'harga'      => 15000,
                    'foto'       => 'magelangan.jpg',
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'nama'       => 'Indomie Goreng Telur',
                    'kategori'   => 'Makanan',
                    'harga'      => 12000,
                    'foto'       => 'indomie_goreng_telur.jpg',
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'nama'       => 'Bubur Kacang Ijo',
                    'kategori'   => 'Makanan',
                    'harga'      => 12000,
                    'foto'       => 'bubur_kacang_ijo.jpg',
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'nama'       => 'Es Teh Manis',
                    'kategori'   => 'Minuman',
                    'harga'      => 4000,
                    'foto'       => 'es_teh.jpg',
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'nama'       => 'Es Jeruk Peras',
                    'kategori'   => 'Minuman',
                    'harga'      => 5000,
                    'foto'       => 'es_jeruk.jpg',
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'nama'       => 'Es Soda Gembira',
                    'kategori'   => 'Minuman',
                    'harga'      => 7000,
                    'foto'       => 'es_soda_gembira.jpg',
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'nama'       => 'Susu Jahe',
                    'kategori'   => 'Minuman',
                    'harga'      => 5000,
                    'foto'       => 'susu_jahe.jpg',
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ],
            ];
            
            foreach ($data as $item) {
                $this->db->table('product')->insert($item);
            }
        }
    }
?>
