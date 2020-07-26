<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UnewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data faker indo
     //   $faker = Faker::create('id_ID');
    // data dummmy 10 record
        
       
        	DB::table('unews')->insert([
        		'judul' => "12 Petugas di Blora Positif COVID-19, KPU: Sebelum Kerja Tak Terjangkit ",
        		'gambar' => "https://akcdn.detik.net.id/community/media/visual/2019/11/15/df8d50eb-0422-4f45-9395-43be3ed3a165_169.jpeg?w=700&q=90",
        		'isi' => 'Jakarta - Komisioner Komisi Pemilihan Umum (KPU) Ilham Saputra mengatakan semua calon petugas pemutakhiran data pemilih (PPDP) Pemilu 2020 yang melakukan pencocokan dan penelitian (coklit) sudah melakukan rapid tes virus Corona. Ilham juga bicara soal petugas KPU Blora, Jawa Tengah.
"Saya lihat mereka sudah pakai sarung tangan, face shield, masker, dan juga seluruhnya sudah siap semua. Ini sudah berjalan. Bahkan PPDP kami juga sebelum terjun ke lapangan sudah dilakukan rapid tes. Kalau ada orang yang terkena rapid test karena masa kerja PPDP hanya 1 bulan itu langsung kita ganti," kata kata Ilham di diskusi virtual Polemik bertajuk "Menghitung Kualitas Pilkada Saat Pandemi" yang disiarkan di YouTube MNC Trijaya pada Sabtu (25/7/2020).'

        	]);

        
       
            DB::table('unews')->insert([
                'judul' => "Polda Metro Jaya Ungkap Kematian Editor Metro TV Yodi Prabowo",
                'gambar' => "https://akcdn.detik.net.id/community/media/visual/2020/07/25/polda-metro-jaya-ungkap-kematian-editor-metro-tv-yodi-prabowo_169.jpeg?w=700&q=90",
                'isi' => 'Jakarta - Polda Metro Jaya mengumumkan hasil penyelidikan kasus kematian editor Metro TV Yodi Prabowo, Sabtu (25/7). Polisi menyimpulkan kematian Yodi akibat bunuh diri.'

            ]);

         DB::table('unews')->insert([
                'judul' => "Ketentuan Sholat Idul Adha 2020/1441 H Sesuai Ketentuan MUI dan Kemenag",
                'gambar' => "https://akcdn.detik.net.id/community/media/visual/2019/06/03/f8374979-ec3f-4283-b9cb-6dca872ec54d_169.jpeg?w=700&q=90",
                'isi' => "Jakarta -Seluruh muslim di Indonesia akan merayakan Idul Adha 2020/1441 H, yang jatuh pada Jumat (31/7/2020). Idul Adha dirayakan di tengah pandemi COVID-19 yang kasusnya masih menunjukkan peningkatan. Majelis Ulama Indonesia atau MUI dan Kementerian Agama (Kemenag) telah menyusun ketentuan perayaan Idul Adha. Ketentuan mencakup rukun sholat Idul Adha di tengah pandemi corona. 'Sholat Idul Adha hukumnya sunnah muakkadah yang menjadi salah satu syi'ar keagamaan (syi'ar min sya'air al-Islam),'tulis MUI dalam Fatwa Tentang Sholat Idul Adha dan Penyembelihan Hewan Kurban Saat Wabah COVID-19."

            ]);

         DB::table('unews')->insert([
                'judul' => "Bertambah 1.868, Total Kasus Positif Corona di RI Per 25 Juli Jadi 97,286 ",
                'gambar' => "https://akcdn.detik.net.id/community/media/visual/2020/05/14/5b62005d-4ba1-446e-a150-d3e111c13aed_169.jpeg?w=700&q=90",
                'isi' => 'Jakarta -Kasus positif virus Corona (COVID-19) di Indonesia per 25 Juli 2020 bertambah 1.868. Dengan penambahan tersebut, total kasus positif virus Corona di Indonesia 97.286.
                Data penambahan kasus positif virus Corona di Indonesia pada Sabtu (25/7/2020) ini dipublikasikan di situs covid19.go.id. Pasien sembuh pada 25 Juli 2020 ini bertambah 1.781 orang, sehingga total menjadi 53.945. Sementara itu, data pasien meninggal per hari ini ada 89 orang, sehingga total menjadi 4.665.'

            ]);

         DB::table('unews')->insert([
                'judul' => "FDA Temukan 77 Hand Sanitizer Berbahaya, Waspada Kandungan Ini Berisiko Fatal",
                'gambar' => "https://akcdn.detik.net.id/community/media/visual/2020/05/16/637c0392-8917-4311-aed6-33672d5ecd92_169.png?w=700&q=90",
                'isi' => 'Jakarta -Memakai hand sanitizer menjadi opsi di saat fasilitas untuk mencuci tangan tidak tersedia. Namun, mencuci tangan dengan sabun dan air mengalir tetap menjadi langkah yang paling dianjurkan untuk mencegah virus Corona dibandingkan selalu memakai hand sanitizer. Baru-baru ini, Food and Drug Administration (FDA) Amerika Serikat menambah daftar produk hand sanitizer yang dinilai beracun. Setidaknya ada lebih dari 70 produk hand sanitizer yang ditemukan mengandung metanol, kandungan ini berbahaya saat terserap kulit.
                    Sebelumnya, FDA memang telah mengeluarkan peringatan terkait kandungan metanol yang ditemukan dalam beberapa produk hand sanitizer Juni lalu. Bahkan dalam kadar tertentu, jenis alkohol ini bisa berdampak fatal seperti kebutaan, hingga kematian jika tidak sengaja tertelan.'

            ]);

         DB::table('unews')->insert([
                'judul' => "Getaran Seismik Bumi Berkurang Drastis Selama Lockdown Wabah Corona",
                'gambar' => "https://akcdn.detik.net.id/community/media/visual/2020/07/25/getaran-seismik-bumi-berkurang-drastis-selama-lockdown-wabah-corona.jpeg?w=700&q=90",
                'isi' => 'Jakarta -Kebijakan kuncian atau lockdown untuk meredam penyebaran wabah Covid-19 di seluruh dunia telah menyebabkan berkurangnya getaran seismik yang disebabkan oleh aktivitas manusia dalam waktu paling lama yang pernah tercatat.
                    Pengurangan getaran ini membantu mempertajam kemampuan para ilmuwan untuk mendengarkan sinyal alamiah bumi dan mendeteksi gempa bumi, demikian ungkap sebuah studi yang diterbitkan pada hari Kamis (23/07).
                    Di dalam bumi, terdapat getaran yang bergerak menyebar ibarat gelombang. Getaran seismik ini berasal dari peristiwa gempa bumi, gunung berapi, angin dan sungai serta dari aktivitas manusia seperti perjalanan dan kegiatan industri.'

            ]);

        
        
    }
}
