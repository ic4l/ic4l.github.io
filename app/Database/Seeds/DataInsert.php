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
                          'email'         => 'ic4l@sego.tech',
                          'username'      => 'ic4l',
                          'fullname'      => 'FAISAL M DARMAWI',
                          'nickname'      => 'Pujangga Araban',
                          'pob'           => 'Jeddah',
                          'dob'           => '1986-08-07',
                          'gender'        => 'Male',
                          'mobile'        => '+966570027737',
                          'facebook'      => 'mr.ic4l',
                          'twitter'      => 'ic4love',
                          'instagram'      => 'mr.ic4l',
                          'address'      => 'Naseem Dist, Abha, KSA',
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


//                   $data = [
//                             'email'         => 'rosi@sego.tech',
//                             'username'      => 'rosi',
//                             'fullname'      => 'Rosi Oktaviani',
//                             'nickname'      => 'Rosi Oktaviani',
//                             'pob'           => 'Bogor',
//                             'dob'           => '2000-10-18',
//                             'gender'        => 'Female',
//                             'mobile'        => '+6285692612734',
//                             'password_hash' => '$2y$10$6AnvAoVKo46945pqgZhrc.Z3z2e/Bpn2mMHurPm3M5iiVzJApp5Qu',
//                             'active'        => '1',
//                             'image'         => 'rosi.jpg',
//                             'created_at'    => date("Y-m-d h:i:sa"),
//                       ];
//                   $this->db->table('users')->insert($data);
//
//                   $data = [
//                           'user_id'      => '2',
//                           'group_id'     => '3',
//                       ];
//                   $this->db->table('auth_groups_users')->insert($data);
//
//                   $data = [
//                             'email'         => 'mellaisyah@sego.tech',
//                             'username'      => 'Mellaisyah',
//                             'fullname'      => 'Mella Aisyah Musyafir',
//                             'nickname'      => 'Mellaisyah',
//                             'pob'           => 'Bantul',
//                             'dob'           => '2001-11-12',
//                             'gender'        => 'Female',
//                             'mobile'        => '+6285540616218',
//                             'password_hash' => '$2y$10$6AnvAoVKo46945pqgZhrc.Z3z2e/Bpn2mMHurPm3M5iiVzJApp5Qu',
//                             'active'        => '1',
//                             'image'         => 'mella.jpg',
//                             'created_at'    => date("Y-m-d h:i:sa"),
//                       ];
//                   $this->db->table('users')->insert($data);
//
//                   $data = [
//                           'user_id'      => '3',
//                           'group_id'     => '3',
//                       ];
//                   $this->db->table('auth_groups_users')->insert($data);
//
//
// // ----------------------------------- DESIGNER 6 -------------------------------------------------------
//                   $data = [
//                             'email'         => 'roil@sego.tech',
//                             'username'      => 'Roil',
//                             'fullname'      => 'Roil Kurniaman Hulu',
//                             'nickname'      => 'Bianglala Senja',
//                             'pob'           => 'Awolo',
//                             'dob'           => '2003-7-28',
//                             'gender'        => 'Male',
//                             'mobile'        => '+6282275373648',
//                             'password_hash' => '$2y$10$6AnvAoVKo46945pqgZhrc.Z3z2e/Bpn2mMHurPm3M5iiVzJApp5Qu',
//                             'active'        => '1',
//                             'image'         => 'roil.jpg',
//                             'created_at'    => date("Y-m-d h:i:sa"),
//                       ];
//                   $this->db->table('users')->insert($data);
//
//                   $data = [
//                           'user_id'      => '4',
//                           'group_id'     => '6',
//                       ];
//                   $this->db->table('auth_groups_users')->insert($data);
// // ----------------------------------- DESIGNER 6 -------------------------------------------------------
//
// // --------------------------------------- EDITOR 4 ---------------------------------------------------
//                   $data = [
//                             'email'         => 'ulfa@sego.tech',
//                             'username'      => 'Ulfa',
//                             'fullname'      => 'Ulfa Sari',
//                             'nickname'      => 'Author Gaje',
//                             'pob'           => 'Riau, Kampung Baru',
//                             'dob'           => '2004-12-18',
//                             'gender'        => 'Female',
//                             'mobile'        => '+6282210268348',
//                             'password_hash' => '$2y$10$6AnvAoVKo46945pqgZhrc.Z3z2e/Bpn2mMHurPm3M5iiVzJApp5Qu',
//                             'active'        => '1',
//                             'image'         => 'ulfa.jpg',
//                             'created_at'    => date("Y-m-d h:i:sa"),
//                       ];
//                   $this->db->table('users')->insert($data);
//
//                   $data = [
//                           'user_id'      => '5',
//                           'group_id'     => '4',
//                       ];
//                   $this->db->table('auth_groups_users')->insert($data);
// // ------------------------------------- EDITOR 4 -----------------------------------------------------
//
// // --------------------------------------- LAYOUTER 5 ---------------------------------------------------
//                   $data = [
//                             'email'         => 'enggar@sego.tech',
//                             'username'      => 'Enggar',
//                             'fullname'      => 'Enggar Putri Atmaja Ningrum',
//                             'nickname'      => 'Enggar Putri',
//                             'pob'           => 'Palu',
//                             'dob'           => '1997-5-5',
//                             'gender'        => 'Female',
//                             'mobile'        => '+6287712630007',
//                             'password_hash' => '$2y$10$6AnvAoVKo46945pqgZhrc.Z3z2e/Bpn2mMHurPm3M5iiVzJApp5Qu',
//                             'active'        => '1',
//                             'image'         => 'enggar.jpg',
//                             'created_at'    => date("Y-m-d h:i:sa"),
//                       ];
//                   $this->db->table('users')->insert($data);
//
//                   $data = [
//                           'user_id'      => '6',
//                           'group_id'     => '5',
//                       ];
//                   $this->db->table('auth_groups_users')->insert($data);
// // ------------------------------------- LAYOUTER 5 -----------------------------------------------------
//
//
//
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
