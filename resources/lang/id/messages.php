<?php

return [

    'ctrl' => [
        'userMan' => [
            'usersOnThatDay' => [
                'title' => 'Pendaftar Hari Ini',
            ],
            'verified' => [
                'title' => 'Daftar User Terverifikasi',
            ],
            'notVerified' => [
                'title' => 'Daftar User Belum Terverifikasi',
            ],
            'create' => [
                'title' => 'Tambah User',
            ],
            'store' => [
                'success' => 'User baru berhasil ditambahkan.',
            ],
            'update' => [
                'success' => [
                    'a' => 'Data anda berhasil di update.',
                    'b' => 'Data user berhasil di update.',
                ],
            ],
            'destroy' => [
                'success' => [
                    'a' => 'Account anda berhasil di hapus.',
                    'b' => 'User berhasil di hapus.',
                ],
            ],
        ],
        'teamMember' => [
            'create' => [
                'title' => 'Tambah Anggota',
            ],
            'edit' => [
                'title' => 'Edit Anggota',
            ],
            'store' => [
                'success' => 'Anggota berhasil ditambah.',
                'error' => 'Maaf ada kesalahan sistem :(',
            ],
            'update' => [
                'success' => 'Data anggota berhasil di update.',
                'error' => 'Maaf ada kesalahan sistem :(',
            ],
            'destroy' => [
                'success' => 'Anggota berhasil dihapus.',
            ],
            'alhbr' => [
                'error' => 'Silahkan daftar kompetisi terlebih dahulu',
            ],
        ],
        'user' => [
            'index' => [
                'title' => 'Detail Team',
            ],
            'update' => [
                'success' => 'Data team berhasil di update.',
            ],
            'alhbr' => [
                'error' => 'Silahkan daftar kompetisi terlebih dahulu',
            ]
        ],
        'auth' => [
            'registration' => [
                'success' => 'Selamat bergabung di Porsematif 2016. Silahkan klik tautan yang dikirimkan ke email anda.',
            ],
            'email_verify' => [
                'success' => 'Selamat email anda telah terverifikasi.',
                'error' => 'Maaf kode konfirmasi yang anda masukkan tidak sesuai dengan user manapun.',
            ]
        ],
        'competition_registration' => [
            'index' => [
                'title' => 'Lengkapi Pendaftaran',
            ],
            'register' => [
                'title' => 'Daftar Kompetisi',
                'error' => 'Error, terdapat kompetisi yang sudah terverifikasi. Silahkan hubungi panitia.',
                'success' => 'Selamat anda berhasil terdaftar di kompetisi yang anda pilih.'
            ],
            'upload' => [
                'success' => 'File berhasil di upload.',
                'empty' => 'Form masih kosong. Masukkan sesuatu.',
            ],
            'alhbr' => [
                'error' => 'Silahkan daftar kompetisi terlebih dahulu',
            ],
        ],
        'gallery' => [
            'store' => [
                'success'  => 'Gambar berhasil di upload.',
            ],
        ],
    ],

];
