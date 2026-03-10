<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Method 1: Halaman utama profil
    public function index() {
        $profile = [
            'nama' => 'Nola Ristiyanti',
            'email' => 'nolaristiyanti@gmail.com',
            'pekerjaan' => 'Web Developer',
            'skills' => ['PHP', 'Laravel', 'MySQL', 'JavaScript'],
            'sosmed' => [
                'github' => 'https://github.com/nolaristiyanti',
                'linkedin' => 'https://www.linkedin.com/in/nola-ristiyanti/'
            ]
        ];

        return view('profile.index', compact('profile'));
    }

    // Method 2 : Halaman tentang saya
    public function about() {
        $about = [
            'bio' => 'Saya adalah seorang developer yang passionate dalam membangun aplikasi web.',
            'pengalaman' => '2 tahun',
            'pendidikan' => 'S1 Teknik Informatika',
            'hobi' => ['Coding', 'Membaca', 'Gaming']
        ];

        return view('profile.about', compact(('about')));
    }

    // Method 3 : Halaman portofolio
    public function portofolio() {
        $projects = [
            [
                'nama' => 'E-Commerce App',
                'deskripsi' => 'Aplikasi toko online dengan Laravel',
                'teknologi' => ['Laravel', 'MySQL', 'Bootstrap'],
                'status' => 'Selesai'
            ],
            [
                'nama' => 'Blog Platform',
                'deskripsi' => 'Platform blogging dengan fitur komentar',
                'teknologi' => ['Laravel', 'Vue.js', 'Tailwind'],
                'status' => 'Dalam Pengembangan'
            ],
            [
                'nama' => 'API Gateway',
                'deskripsi' => 'REST API untuk aplikasi mobile',
                'teknologi' => ['Laravel', 'Redis', 'JWT'],
                'status' => 'Selesai'
            ]
        ];

        return view('profile.portofolio', compact('projects'));
    }

    // Method 4 : Halaman contact
    public function contact() {
        return view('profile.contact');
    }
}
