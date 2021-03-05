<?php namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class DataInsert extends \CodeIgniter\Database\Seeder
{

        public function run()
        {

                $data = [
                  [
                      'name'          => 'Admin',
                      'description'   => 'Super Admin',
                  ],
                  [
                      'name'          => 'Member',
                      'description'   => 'Hanya User Biasa',
                  ],
                  [
                    'name'            => 'PJE',
                    'description'     => 'Penangung Jawab Event',
                  ],
                  [
                      'name'          => 'Editor',
                      'description'   => 'Tukang edit naskah',
                  ],
                  [
                      'name'          => 'Layouter',
                      'description'   => 'Tukang layout naskah',
                  ],
                  [
                      'name'          => 'Designer',
                      'description'   => 'Design cover atau poster',
                  ],
                  [
                      'name'          => 'Proofreading',
                      'description'   => 'Pengamat tulisan',
                  ],
                ];

                $this->db->table('auth_groups')->insertBatch($data);

                $data = [
                  [
                      'name'          => 'manage-profile',
                      'description'   => 'hanya bisa edit profile sendiri',
                  ],
                  [
                      'name'          => 'manage-user',
                      'description'   => 'bisa edit semua user',
                  ],
                  [
                      'name'          => 'manage-event',
                      'description'   => 'admin event',
                  ],
                ];

                $this->db->table('auth_permissions')->insertBatch($data);

// ----------------------------------- ADMIN -------------------------------------------------------
                  $data = [
                          'email'         => 'ic4l@micasa.id',
                          'username'      => 'ic4l',
                          'fullname'      => 'FAISAL M DARMAWI',
                          'nickname'      => 'Pujangga Araban',
                          'pob'           => 'Jeddah',
                          'dob'           => '1986-08-07',
                          'gender'        => 'Male',
                          'mobile'        => '+966570027737',
                          'facebook'      => 'mr.ic4l',
                          'twitter'       => 'ic4love',
                          'instagram'     => 'mr.ic4l',
                          'address'       => 'Naseem Dist, Abha, KSA',
                          'image'         => 'ic4l.jpg',
                       // 'password_hash' => '7XqkpNdU4Rg9NL4',
                          'password_hash' => '$2y$10$6AnvAoVKo46945pqgZhrc.Z3z2e/Bpn2mMHurPm3M5iiVzJApp5Qu',
                          'active'        => '1',
                          'created_at'    => date("Y-m-d h:i:sa"),
                      ];
                  $this->db->table('users')->insert($data);

                  $data = [
                          'group_id'     => '1',
                          'user_id'      => '1',
                      ];
                  $this->db->table('auth_groups_users')->insert($data);

// ----------------------------------- ADMIN -------------------------------------------------------


                  $data = [
                            'email'         => 'faradisa@micasa.id',
                            'username'      => 'faradis4',
                            'fullname'      => 'Faradisa Frada',
                            'nickname'      => 'Faradisa Frada',
                            'pob'           => 'Jeddah',
                            'dob'           => '2013-11-30',
                            'gender'        => 'Female',
                            'mobile'        => '+621211219970',
                            'password_hash' => '$2y$10$6AnvAoVKo46945pqgZhrc.Z3z2e/Bpn2mMHurPm3M5iiVzJApp5Qu',
                            'active'        => '1',
                            'image'         => 'faradisa.jpg',
                            'created_at'    => date("Y-m-d h:i:sa"),
                      ];
                  $this->db->table('users')->insert($data);

                  $data = [
                          'user_id'      => '2',
                          'group_id'     => '3',
                      ];
                  $this->db->table('auth_groups_users')->insert($data);

                  $data = [
                            'email'         => 'rafa@micasa.id',
                            'username'      => 'raf4',
                            'fullname'      => 'Rafa Frada',
                            'nickname'      => 'Rafa Frada',
                            'pob'           => 'Jeddah',
                            'dob'           => '2018-01-26',
                            'gender'        => 'Male',
                            'mobile'        => '+628855885588',
                            'password_hash' => '$2y$10$6AnvAoVKo46945pqgZhrc.Z3z2e/Bpn2mMHurPm3M5iiVzJApp5Qu',
                            'active'        => '1',
                            'image'         => 'rafa.jpg',
                            'created_at'    => date("Y-m-d h:i:sa"),
                      ];
                  $this->db->table('users')->insert($data);

                  $data = [
                          'user_id'      => '3',
                          'group_id'     => '4',
                      ];
                  $this->db->table('auth_groups_users')->insert($data);


// --------------------------- Web Configuration------------------------------------------------------------
                  $data = [
                          'name'        => 'Mi Casa Publisher',
                          'description' => 'Publisher',
                          'visi'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                          'misi'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                          'instagram'   => 'misa',
                          'facebook'    => 'micasa',
                          'twitter'     => 'micasa',
                          'whatsapp'    => '+966570027737',
                          'email'       => 'admin@micasa.id',
                          'address'     => 'Bogor',
                          'logo'        => 'micasa.png',
                          'icon'        => 'micasa.ico',
                      ];
                  $this->db->table('web_config')->insert($data);
// ---------------------------- Web Configuration-----------------------------------------------------------




//                   $data = [
//                     [
//                       'name'     			=> 'Penanggung Jawab Event',
//                       'deskjob'     	=> 'mencari peserta, mengumpulkan naskah, merapikan naskah menjadi satu file word, memeriksa bionarasi dan nama penulis, menjual buku',
//                       'fee'      			=> '7000',
//                       'note'          => 'Minimum 30 eks penjualan buku. Kurang dari 30 Eks = fee menjadi 6.000/buku'
//                       'created_at'   	=> date("Y-m-d h:i:sa"),
//                       'updated_at'   	=> date("Y-m-d h:i:sa"),
//                     ],
//                     [
//                       'name'     			=> 'Editor',
//                       'deskjob'     	=> 'Mengedit naskah yang sudah terkumpul',
//                       'fee'      			=> '100000',
//                       'created_at'   	=> date("Y-m-d h:i:sa"),
//                       'updated_at'   	=> date("Y-m-d h:i:sa"),
//                     ],
//                     [
//                       'name'     			=> 'Layouter',
//                       'deskjob'     	=> 'Layout',
//                       'fee'      			=> '50000',
//                       'created_at'   	=> date("Y-m-d h:i:sa"),
//                       'updated_at'   	=> date("Y-m-d h:i:sa"),
//                     ],
//                     [
//                       'name'     			=> 'Designer',
//                       'deskjob'     	=> 'meyakinkan semua design sepakat dengan peserta',
//                       'fee'      			=> '50000',
//                       'created_at'   	=> date("Y-m-d h:i:sa"),
//                       'updated_at'   	=> date("Y-m-d h:i:sa"),
//                     ],
//                     [
//                       'name'     			=> 'Proofreading',
//                       'deskjob'     	=> 'meyakinkan tidak ada yang typo dan membenarkan segala titik koma',
//                       'fee'      			=> '50000',
//                       'created_at'   	=> date("Y-m-d h:i:sa"),
//                       'updated_at'   	=> date("Y-m-d h:i:sa"),
//                     ],
//
//                   ];
//
//                   $this->db->table('deskjob_tbl')->insertBatch($data);






        }
}
