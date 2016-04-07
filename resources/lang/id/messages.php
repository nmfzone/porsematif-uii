<?php

return [

    'ctrl' => [
        'userMan' => [
            'usersOnThatDay' => [
                'title' => 'Pendaftar Hari Ini',
            ],
            'verified' => [
                'title' => 'List Pendaftar Terverifikasi',
            ],
            'notVerified' => [
                'title' => 'List Pendaftar Belum Terverifikasi',
            ],
            'index' => [
                'title' => 'List Team'
            ],
            'create' => [
                'title' => 'Tambah Team',
            ],
            'store' => [
                'success' => 'Team baru berhasil ditambahkan.',
            ],
            'update' => [
                'success' => [
                    'a' => 'Data anda berhasil di update.',
                    'b' => 'Data team berhasil di update.',
                ],
            ],
            'destroy' => [
                'success' => [
                    'a' => 'Team berhasil di hapus',
                    'b' => 'Pendaftar berhasil di hapus.',
                ],
                'error' => 'Team tidak bisa di hapus.',
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
                // 'success' => 'Selamat bergabung di Porsematif 2016. Silahkan klik tautan yang dikirimkan ke email anda.',
                'success' => 'Selamat bergabung di Porsematif 2016.',
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
