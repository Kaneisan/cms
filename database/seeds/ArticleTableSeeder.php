<?php

use Illuminate\Database\Seeder;

date_default_timezone_set('Asia/Jakarta');
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     //membuat 5 data
    //     factory(App\Article::class, 5)->create();
    // }
    public function run()
    {
        \App\Article::insert([
            [
            'title' => 'Bahasa Pemograman Java',
            'content' => 'Java adalah bahasa pemrograman yang dapat dijalankan di berbagai komputer termasuk telepon
                          genggam. Bahasa ini awalnya dibuat oleh James Gosling saat masih bergabung di Sun
                          Microsystems saat ini merupakan bagian dari Oracle dan dirilis tahun 1995. Bahasa ini banyak
                          mengadopsi sintaksis yang terdapat pada C dan C++ namun dengan sintaksis model objek yang lebih
                          sederhana serta dukungan rutin-rutin aras bawah yang minimal. Aplikasi-aplikasi berbasis java
                          umumnya dikompilasi ke dalam p-code (bytecode) dan dapat dijalankan pada berbagai Mesin Virtual
                          Java (JVM). Java merupakan bahasa pemrograman yang bersifat umum/non-spesifik (general purpose),
                          dan secara khusus didisain untuk memanfaatkan dependensi implementasi seminimal mungkin. Karena
                          fungsionalitasnya yang memungkinkan aplikasi java mampu berjalan di beberapa platform sistem operasi
                          yang berbeda, java dikenal pula dengan slogannya, "Tulis sekali, jalankan di mana pun". Saat ini
                          java merupakan bahasa pemrograman yang paling populer digunakan, dan secara luas dimanfaatkan dalam
                          pengembangan berbagai jenis perangkat lunak aplikasi ataupun aplikasi',
            'feature_image' => 'https://p7.hiclipart.com/preview/358/192/11/java-android-mobile-app-development-android.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],[
            'title' => 'Bahasa Pemograman Python',
            'content' => 'Python adalah bahasa pemrograman tujuan umum yang ditafsirkan, tingkat tinggi. Dibuat oleh Guido van Rossum dan pertama kali dirilis pada tahun 1991, filosofi desain Python menekankan keterbacaan kode dengan penggunaan spasi putih yang signifikan. Konstruksi bahasanya dan pendekatan berorientasi objek bertujuan untuk membantu programmer menulis kode yang jelas dan logis untuk proyek skala kecil dan besar.[28]
            Python diketik secara dinamis dan pengumpulan sampah. Ini mendukung beberapa paradigma pemrograman, termasuk pemrograman terstruktur (terutama, prosedural), berorientasi objek, dan fungsional. Python sering dideskripsikan sebagai bahasa "termasuk baterai" karena perpustakaan standarnya yang komprehensif.[29]
            Python dikandung pada akhir 1980-an sebagai penerus bahasa ABC. Python 2.0, dirilis pada tahun 2000, memperkenalkan fitur-fitur seperti pemahaman daftar dan sistem pengumpulan sampah dengan penghitungan referensi.
            Python 3.0, dirilis pada tahun 2008, adalah revisi utama dari bahasa yang tidak sepenuhnya kompatibel dengan versi sebelumnya, dan banyak kode Python 2 yang tidak berjalan tanpa modifikasi pada Python 3.
            Penerjemah Python tersedia untuk banyak sistem operasi. Komunitas programmer global mengembangkan dan memelihara CPython, implementasi referensi[30] yang gratis dan bersumber terbuka. Sebuah organisasi nirlaba, Python Software Foundation, mengelola dan mengarahkan sumber daya untuk pengembangan Python dan CPython.',
            'feature_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/1200px-Python-logo-notext.svg.png',
            'created_at' => now(),
            'updated_at' => now(),
            ],[
                'title' => 'Bahasa Pemograman HTML',
                'content' => 'Hypertext Markup Language (HTML) adalah bahasa markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet. Ini dapat dibantu oleh teknologi seperti Cascading Style Sheets (CSS) dan bahasa scripting seperti JavaScript dan VBScript.
                Peramban internet menerima dokumen HTML dari server web atau dari penyimpanan lokal dan membuat dokumen menjadi halaman web multimedia. HTML menggambarkan struktur halaman web secara semantik dan isyarat awal yang disertakan untuk penampilan dokumen.
                Elemen HTML digambarkan oleh tag, ditulis menggunakan tanda kurung sudut. Tag seperti <img /> dan <input /> langsung perkenalkan konten ke dalam halaman. Tag lain seperti <p> mengelilingi dan memberikan informasi tentang teks dokumen dan mungkin menyertakan tag lain sebagai sub-elemen. Peramban tidak menampilkan tag HTML, tetapi menggunakannya untuk menafsirkan konten halaman.
                HTML dapat menyematkan program yang ditulis dalam bahasa scripting seperti JavaScript, yang memengaruhi perilaku dan konten halaman web. Dimasukkannya CSS mendefinisikan tampilan dan tata letak konten. World Wide Web Consortium (W3C), mantan pengelola HTML dan pemelihara standar CSS saat ini, telah mendorong penggunaan CSS pada HTML presentasi eksplisit sejak 1997.[1]',
                'feature_image' => 'https://p1.hiclipart.com/preview/150/65/189/css-icon-html-icon-html5-icon-orange-line-symbol-logo-square-png-clipart.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'title' => 'Bahasa Pemograman CSS',
                'content' => 'Cascading Style Sheet (CSS) merupakan aturan untuk mengatur beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam. CSS bukan merupakan bahasa pemograman.
                Sama halnya styles dalam aplikasi pengolahan kata seperti Microsoft Word yang dapat mengatur beberapa style, misalnya heading, subbab, bodytext, footer, images, dan style lainnya untuk dapat digunakan bersama-sama dalam beberapa berkas (file).[1] Pada umumnya CSS dipakai untuk memformat tampilan halaman web yang dibuat dengan bahasa HTML dan XHTML.[1]
                CSS dapat mengendalikan ukuran gambar, warna bagian tubuh pada teks, warna tabel, ukuran border, warna border, warna hyperlink, warna mouse over, spasi antar paragraf, spasi antar teks, margin kiri, kanan, atas, bawah, dan parameter lainnya.[1] CSS adalah bahasa style sheet yang digunakan untuk mengatur tampilan dokumen.[2] Dengan adanya CSS memungkinkan kita untuk menampilkan halaman yang sama dengan format yang berbeda.[2]',
                'feature_image' => 'https://upload.wikimedia.org/wikipedia/commons/3/3c/CSS_text_representation_%28square%29.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'title' => 'Bahasa Pemograman PHP',
                'content' => 'PHP: Hypertext Preprocessor[3] adalah bahasa skrip yang dapat ditanamkan atau disisipkan ke dalam HTML.[4][5] PHP banyak dipakai untuk memprogram situs web dinamis. PHP dapat digunakan untuk membangun sebuah CMS.
                Tidak hanya berjalan melalui peladen web, PHP juga bisa menyelesaikan tugas-tugas pemrograman dalam bentuk antarmuka baris perintah (CLI).[6]',
                'feature_image' => 'https://friconix.com/jpg/fi-snsuxx-php-logo.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Game CS:GO',
                'content' => "Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago.
                CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content (de_dust2, etc.).
                Counter-Strike took the gaming industry by surprise when the unlikely MOD became the most played online PC action game in the world almost immediately after its release in August 1999, said Doug Lombardi at Valve. For the past 12 years, it has continued to be one of the most-played games in the world, headline competitive gaming tournaments and selling over 25 million units worldwide across the franchise. CS: GO promises to expand on CS' award-winning gameplay and deliver it to gamers on the PC as well as the next gen consoles and the Mac.",
                'feature_image' => 'https://pm1.narvii.com/6671/133c5cd09b0230140fa8950fc9fc51394fd8f00b_00.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'title' => 'Game Dota2',
                'content' => "The most-played game on Steam.
                Every day, millions of players worldwide enter battle as one of over a hundred Dota heroes. And no matter if it's their 10th hour of play or 1,000th, there's always something new to discover. With regular updates that ensure a constant evolution of gameplay, features, and heroes, Dota 2 has truly taken on a life of its own.

                One Battlefield. Infinite Possibilities.
                When it comes to diversity of heroes, abilities, and powerful items, Dota boasts an endless array—no two games are the same. Any hero can fill multiple roles, and there's an abundance of items to help meet the needs of each game. Dota doesn't provide limitations on how to play, it empowers you to express your own style.

                All heroes are free.
                Competitive balance is Dota's crown jewel, and to ensure everyone is playing on an even field, the core content of the game—like the vast pool of heroes—is available to all players. Fans can collect cosmetics for heroes and fun add-ons for the world they inhabit, but everything you need to play is already included before you join your first match.",
                'feature_image' => 'https://i.pinimg.com/originals/2d/cd/80/2dcd80c6f5a21a437313adde93b373d8.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'title' => 'Game Among Us',
                'content' => "Play with 4-10 player online or via local WiFi as you attempt to prepare your spaceship for departure, but beware as one or more random players among the Crew are Impostors bent on killing everyone!

                Originally created as a party game, we recommend playing with friends at a LAN party or online using voice chat. Enjoy cross-platform play between Android, iOS and PC.",
                'feature_image' => 'https://lh3.googleusercontent.com/VHB9bVB8cTcnqwnu0nJqKYbiutRclnbGxTpwnayKB4vMxZj8pk1220Rg-6oQ68DwAkqO',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'title' => 'Game PUBG',
                'content' => "PLAYERUNKNOWN'S BATTLEGROUNDS is a battle royale shooter that pits 100 players against each other in a struggle for survival. Gather supplies and outwit your opponents to become the last person standing.

                PLAYERUNKNOWN, aka Brendan Greene, is a pioneer of the battle royale genre and the creator of the battle royale game modes in the ARMA series and H1Z1: King of the Kill. At PUBG Corp., Greene is working with a veteran team of developers to make PUBG into the world's premiere battle royale experience.",
                'feature_image' => 'https://bit.ly/3ir4hJ9  ',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'title' => 'Game Team Fotress 2',
                'content' => "The most highly-rated free game of all time!
                One of the most popular online action games of all time, Team Fortress 2 delivers constant free updates—new game modes, maps, equipment and, most importantly, hats. Nine distinct classes provide a broad range of tactical abilities and personalities, and lend themselves to a variety of player skills.

                New to TF? Don’t sweat it!
                No matter what your style and experience, we’ve got a character for you. Detailed training and offline practice modes will help you hone your skills before jumping into one of TF2’s many game modes, including Capture the Flag, Control Point, Payload, Arena, King of the Hill and more.

                Make a character your own!
                There are hundreds of weapons, hats and more to collect, craft, buy and trade. Tweak your favorite class to suit your gameplay style and personal taste. You don’t need to pay to win—virtually all of the items in the Mann Co. Store can also be found in-game.",
                'feature_image' => 'https://bit.ly/3iq6PHh',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
