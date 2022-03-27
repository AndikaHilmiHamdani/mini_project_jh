<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // faq
        DB::table('content')->insert([


            'subject' => 'SEO Management',
            'content' => 'Manfaatkan plugin SEO premium untuk membangun SEO on page websitemu dengan mudah, dilengkapi dengan fitur analisa dan auto-suggestion.'
        ]);
        DB::table('content')->insert([


            'subject' => 'Whatsapp Chat',
            'content' => 'Mudahkan pengunjung untuk menghubungimu atau bisnismu dengan fitur chat to Whatsapp. Tinggal masukkan nomor tujuan pelayanan kamu, selesai.'
        ]);
        DB::table('content')->insert([


            'subject' => 'Form Builder',
            'content' => 'Ingin membuat funnel? Atau sekedar membuat pengunjung mendaftar newsletter? Bisa banget, form builder kami siap diintegrasikan dengan puluhan email provider.'
        ]);
        DB::table('content')->insert([


            'subject' => 'Pro Slider Builder',
            'content' => 'Kamu punya banya promo untuk ditampilkan di halaman depan? Kami siapkan plugin slider profesional yang bisa kamu desain sesukamu. Dijamin promomu pasti "eye-catching"'
        ]);
        DB::table('content')->insert([


            'subject' => 'Pro Popup Buildert',
            'content' => 'Kamu bisa buat popup yang muncul saat pengunjung hendak pergi dari websitemu. Atau saat mereka sudah berada dalam satu halaman selama sekian detik. Tentukan sesukamu.'
        ]);
        DB::table('content')->insert([


            'subject' => 'Ads Banner Builder',
            'content' => 'Mudahkan pengunjung untuk menghubungimu atau bisnismu dengan fitur chat to Whatsapp. Tinggal masukkan nomor tujuan pelayanan kamu, selesai.'
        ]);
        DB::table('content')->insert([


            'subject' => 'Email Sender',
            'content' => 'Dengan fitur ini, website kamu bisa mengirim sebuah email otomatis saat mereka mengisi form. Artinya, kamu tidak perlu bayar lagi untuk mengirim sebuah email responder.'
        ]);
        DB::table('content')->insert([


            'subject' => 'AMP Page',
            'content' => 'Website dengan AMP Page menjadi prioritas algoritma Google. Pernah buka link berita dari Google? Nah, biasanya halaman pertama yang kamu buka adalah halaman AMP.'
        ]);
    }
}
