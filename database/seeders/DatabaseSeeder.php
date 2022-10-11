<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'password' => bcrypt('password'),
        ]);

        \App\Models\Testimoni::factory()->create([
            'nama_reviewer' => 'Agung Setyadi',
            'foto_reviewer' => 'assets/testimoni/2cropped.png',
            'isi_review' => '“Pas cobain Nastar Tugu Nanas, Baru ujungnya udah enak banget, apalagi
            tengahnya. Teksturnya juga lembut, banyak banget isiannya. Enak bangettt”'
        ]);

        \App\Models\Testimoni::factory()->create([
            'nama_reviewer' => 'Nela',
            'foto_reviewer' => 'assets/testimoni/3cropped.png',
            'isi_review' => '“Bener loh ini enak, enak banget no comment. Harus coba enak asli.”'
        ]);

        \App\Models\Testimoni::factory()->create([
            'nama_reviewer' => 'Ibu Thianu',
            'foto_reviewer' => 'assets/testimoni/5cropped.png',
            'isi_review' => '“Seger banget! Nanasnya pas, manisnya pas seger banget, gak akan gagal deh.
            Ini salah satu produk minuman ter-enak. Masya Allah mantap!”'
        ]);

        \App\Models\Testimoni::factory()->create([
            'nama_reviewer' => 'Fitri Goes',
            'foto_reviewer' => 'assets/testimoni/6cropped.png',
            'isi_review' => '“Wah, pie nya gede banget isinya juga banyak. Ada potongan nanasnya juga,
            jadi ngga terlalu lembek. Enak !! Harus Cobain recommended banget.”'
        ]);

        \App\Models\Category::factory()->create([
            'nama_kategori' => 'Cake',
        ]);

        \App\Models\Category::factory()->create([
            'nama_kategori' => 'Pie',
        ]);

        \App\Models\Category::factory()->create([
            'nama_kategori' => 'Pastry & Cheese Stick',
        ]);
 \App\Models\Category::factory()->create([
            'nama_kategori' => 'Nastar & Cookies',
        ]);
        \App\Models\Category::factory()->create([
            'nama_kategori' => 'Dessert',
        ]);
        \App\Models\Category::factory()->create([
            'nama_kategori' => 'Drinks',
        ]);
        \App\Models\Category::factory()->create([
            'nama_kategori' => 'Frozen Food',
        ]);
        \App\Models\Category::factory()->create([
            'nama_kategori' => 'Selai',
        ]);
        \App\Models\Category::factory()->create([
            'nama_kategori' => 'Paket Hampers Goodie Bag',
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Cake Nanas Topping Mix',
            'categories_id' => 1,
            'harga' => 24000,
            'deskripsi' => 'Cake Nanas Delipel menjadi salah 1 produk unggulan kami sekaligus sebagai Best Signature From Subang. Karena buah nanas ini kami hadirkan ke dalam adonan cake, sehingga menampilkan cita rasa & tekstur cake yang unik.
            Cake buah Nanas kami ini sangat cocok bagi sahabat yang sedang mengurangi gula & tepung. Karena persentase konsentrasi tepung yang kami substitute dengan buah nanas.',
            'foto_produk1' => 'assets/product/nanastoppingmix1.png',
            'foto_produk2' => 'assets/product/nanastoppingmix2.png',
            'best_seller' => false,
            'panjang_produk' => 16,
            'lebar_produk' => 10,
            'tinggi_produk'=> 5,
            'panjang_package' => 17.5,
            'lebar_package' => 11,
            'tinggi_package'=> 5.5,
            'netto' => 580,
            'berat_total' => 634
        ]);
        \App\Models\Product::factory()->create([
            'nama_produk' => 'Cake Nanas Topping Keju',
            'categories_id' => 1,
            'harga' => 22000,
            'deskripsi' => 'Cake nanas yang ditopping dengan keju cheddar yang renyah, selain cocok dijadikan sebagai oleh-oleh khas Subang, juga cocok untuk dijadikan referensi camilan di berbagai aktifitas.',
            'foto_produk1' => 'assets/product/nanastoppingalmond1.png',
            'foto_produk2' => 'assets/product/nanastoppingalmond2.png',
            'best_seller' => false,
            'panjang_produk' => 16,
            'lebar_produk' => 10,
            'tinggi_produk'=> 5,
            'panjang_package' => 17.5,
            'lebar_package' => 11,
            'tinggi_package'=> 5.5,
            'netto' => 580,
            'berat_total' => 634
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Cake Nanas Topping Almond',
            'categories_id' => 1,
            'harga' => 32000,
            'deskripsi' => 'Cake Nanas yang kaya akan Serat buah Nanas ini jika dipadupadankan dengan Kacang Almond, udah pasti dapet double manfaat. Ditambah dengan aneka varian topping natural (coklat, keju panggang, cranberry, dan almond panggang) menambah cita rasa cake nanas yang berbeda dari cake nanas yang telah ada.',
            'foto_produk1' => 'assets/product/nanastoppingkeju1.png',
            'foto_produk2' => 'assets/product/nanastoppingkeju2.png',
            'best_seller' => false,
            'panjang_produk' => 16,
            'lebar_produk' => 10,
            'tinggi_produk'=> 5,
            'panjang_package' => 17.5,
            'lebar_package' => 11,
            'tinggi_package'=> 5.5,
            'netto' => 580,
            'berat_total' => 634
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Cake Nanas Topping Coklat',
            'categories_id' => 1,
            'harga' => 24000,
            'deskripsi' => 'Cemilan sehat dan pastinya disukai para pecinta coklat nih,, apalagi kalo bukan CAKE NANAS topping COKLAT. Topping Coklatnya yang full 😍 dan tentu saja Cake nya mengandung serat dari Buah Nanas.
            Udah pada kebayang donk sensasi rasanya gimana 💕
            Dijamin ampuh buat jadi mood booster 🍫.',
            'foto_produk1' => 'assets/product/nanastoppingcoklat1.png',
            'foto_produk2' => 'assets/product/nanastoppingcoklat2.png',
            'best_seller' => false,
            'panjang_produk' => 16,
            'lebar_produk' => 10,
            'tinggi_produk'=> 5,
            'panjang_package' => 17.5,
            'lebar_package' => 11,
            'tinggi_package'=> 5.5,
            'netto' => 580,
            'berat_total' => 634
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Cake Nanas Topping Cranberry',
            'categories_id' => 1,
            'harga' => 28000,
            'deskripsi' => 'Cake nanas variasi lain dengan topping coklat putih dan cranberry. Cake ini mempunyai perpaduan rasa manis dan asam yang memberikan kesegaran saat menikmatinya 👌.',
            'foto_produk1' => 'assets/product/nanastoppingcranberry1.png',
            'foto_produk2' => 'assets/product/nanastoppingcranberry2.png',
            'best_seller' => false,
            'panjang_produk' => 16,
            'lebar_produk' => 10,
            'tinggi_produk'=> 5,
            'panjang_package' => 17.5,
            'lebar_package' => 11,
            'tinggi_package'=> 5.5,
            'netto' => 580,
            'berat_total' => 634
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Cake Kering Nanas',
            'categories_id' => 1,
            'harga' => 30000,
            'deskripsi' => 'Bolu Kering Nanas ini merupakan Cake Nanas dalam versi kering yang diproses dengan pengawetan secara alami. Kami hadirkan sebagai jawaban bagi para sahabat yang menginginkan Cake Nanas kami dengan umur simpan lama & dapat dibawa sebagai oleh-oleh sekalipun sahabat menempuh perjalanan dalam cukup lama.
            Sangat cocok buat sahabat yang tidak terlalu suka manis & penyuka buah, karena sangat tinggi serat. Cake Kering Nanas ini menjawab kebutuhan sahabat yang ingin cemilan sehat.',
            'foto_produk1' => 'assets/product/keringnanas1.png',
            'foto_produk2' => 'assets/product/keringnanas2.png',
            'best_seller' => false,
            'panjang_produk' => 8.5,
            'lebar_produk' => 1.5,
            'tinggi_produk'=> 3.5,
            'panjang_package' => 17.5,
            'lebar_package' => 11,
            'tinggi_package'=> 5.5,
            'netto' => 450,
            'berat_total' => 500
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Cupcake Nanas',
            'categories_id' => 1,
            'harga' => 15000,
            'deskripsi' => 'Bentuk lain dari produk cake nanas Delipel – Tastynas yaitu Delipel Cupcake. 𝗖𝗨𝗣𝗖𝗔𝗞𝗘 𝗡𝗔𝗡𝗔𝗦 𝗶𝗻𝗶 𝘀𝗮𝗻𝗴𝗮𝘁 𝗯𝗶𝘀𝗮 𝗺𝗲𝗻𝗷𝗮𝗱𝗶 𝗽𝗶𝗹𝗶𝗵𝗮𝗻 𝗰𝗲𝗺𝗶𝗹𝗮𝗻 𝗳𝗮𝘃𝗼𝗿𝗶𝘁𝗲 𝗯𝗮𝗴𝗶 𝗮𝗻𝗮𝗻𝗱𝗮. 𝗕𝗮𝘀𝗶𝗰 𝗖𝗮𝗸𝗲 𝘆𝗮𝗻𝗴 𝗸𝗮𝘆𝗮 𝗮𝗸𝗮𝗻 𝘀𝗲𝗿𝗮𝘁 𝗯𝘂𝗮𝗵 𝗻𝗮𝗻𝗮𝘀 𝗶𝗻𝗶, 𝗯𝗶𝘀𝗮 𝗺𝗲𝗻𝗷𝗮𝗱𝗶 𝘀𝗼𝗹𝘂𝘀𝗶 𝗯𝗮𝗴𝗶 𝗮𝗻𝗮𝗻𝗱𝗮 𝘆𝗮𝗻𝗴 𝗸𝘂𝗿𝗮𝗻𝗴 𝘀𝘂𝗸𝗮 𝗺𝗲𝗻𝗴𝗸𝗼𝗻𝘀𝘂𝗺𝘀𝗶 𝗯𝘂𝗮𝗵.
            𝘗𝘦𝘯𝘢𝘮𝘣𝘢𝘩𝘢𝘯 𝘢𝘯𝘦𝘬𝘢 𝘵𝘰𝘱𝘱𝘪𝘯𝘨 𝘢𝘭𝘢𝘮𝘪 (𝘤𝘰𝘬𝘭𝘢𝘵, 𝘢𝘭𝘮𝘰𝘯𝘥, 𝘤𝘳𝘢𝘯𝘣𝘦𝘳𝘳𝘺 & 𝘬𝘦𝘫𝘶) 𝘮𝘦𝘮𝘱𝘦𝘳𝘤𝘢𝘯𝘵𝘪𝘬 𝘵𝘢𝘮𝘱𝘪𝘭𝘢𝘯 𝘊𝘶𝘱𝘤𝘢𝘬𝘦 𝘕𝘢𝘯𝘢𝘴 𝘪𝘯𝘪.',
            'foto_produk1' => 'assets/product/cupcakenanas1.png',
            'foto_produk2' => 'assets/product/cupcakenanas2.png',
            'best_seller' => false,
            'tinggi_produk'=> 5,
            'panjang_package' => 17.5,
            'lebar_package' => 11,
            'tinggi_package'=> 5.5,
            'netto' => 400,
            'berat_total' => 500
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Diet Cake Nanas',
            'categories_id' => 1,
            'harga' => 20000,
            'deskripsi' => 'Diet Cake Nanas versi Tastynas ini memiliki tekstur yang lembut & rasa yang unik pastinya. Pengunaan tepung Gluten Free, kandungan lemak yang rendah, menggunakan diet sugar, serta ada lapisan khusus buah nanas dengan kadar serat yang tinggi, ditambah topping almond yang merupakan kacang terbaik.
            Jadi dijamin Diet Cake ini cukup banyak memenuhi standar kebutuhan makanan sehat bagi sahabat. Terutama bagi para sahabat yang menderita Diabetes, alergi gluten ataupun sahabat yang sangat memperhatikan gaya hidup sehat.',
            'foto_produk1' => 'assets/product/dietcake1.png',
            'foto_produk2' => 'assets/product/dietcake2.png',
            'best_seller' => true,
            'panjang_produk' => 16,
            'lebar_produk' => 10,
            'tinggi_produk'=> 5,
            'panjang_package' => 17.5,
            'lebar_package' => 11,
            'tinggi_package'=> 5.5,
            'netto' => 680,
            'berat_total' => 730
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Birthday Cake Nanas',
            'categories_id' => 1,
            'harga' => 20000,
            'deskripsi' => 'Decorating Cake yang menjawab kebutuhan sahabat Tastynas: Look cake yang Cantik, Lezat, Rendah Lemak, Kaya Serat & Vitamin C dari Buah Asli !
            Persembahan spesial dari kami Decorating Cake dengan memadukan sponge cake nanas yang lembut, milky cream fla, buah nanas & strawberry segar, dan jelly nanas.
            Merupakan perpaduan yang sempurna dalam 1 sajian cake.
            AMBASSADOR CAKE ini akan menjadi sajian cake yang bukan hanya memiliki kesan indah. Namun, kaya nutrisi & manfaat bagi sahabat.
            Tastynas Ambassador Cake tercipta dari kami sebagai refleksi keindahan akan kecintaan Lokal, siap mewarnai hari-hari sahabat, baik sebagai booster mood ataupun booster imun terbaik bagi sahabat.',
            'foto_produk1' => 'assets/product/birthday1.png',
            'foto_produk2' => 'assets/product/birthday2.png',
            'best_seller' => false,
            'tinggi_produk'=> 7,
            'panjang_package' => 20.5,
            'lebar_package' => 20.5,
            'tinggi_package'=> 10,
            'netto' => 1125,
            'berat_total' => 1260
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Ambassador Cake',
            'categories_id' => 1,
            'harga' => 60000,
            'deskripsi' => 'Diet Cake Nanas versi Tastynas ini memiliki tekstur yang lembut & rasa yang unik pastinya. Pengunaan tepung Gluten Free, kandungan lemak yang rendah, menggunakan diet sugar, serta ada lapisan khusus buah nanas dengan kadar serat yang tinggi, ditambah topping almond yang merupakan kacang terbaik.
            Jadi dijamin Diet Cake ini cukup banyak memenuhi standar kebutuhan makanan sehat bagi sahabat. Terutama bagi para sahabat yang menderita Diabetes, alergi gluten ataupun sahabat yang sangat memperhatikan gaya hidup sehat. Decorating Cake dengan kombinasi varian nutrisi yang lengkap, membuat moment istimewa sahabat menjadi lebih berkualitas.',
            'foto_produk1' => 'assets/product/ambassador1.png',
            'foto_produk2' => 'assets/product/ambassador2.png',
            'best_seller' => false,
            'tinggi_produk'=> 7,
            'panjang_package' => 20.5,
            'lebar_package' => 20.5,
            'tinggi_package'=> 10,
        ]);
    }
}
