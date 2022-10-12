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

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Pie Nanas Mini Original',
            'categories_id' => 2,
            'harga' => 30000,
            'deskripsi' => 'PIE NANAS ini merupakan salah satu produk yang menjadi icon dari Brand kita. Juga merupakan salah satu produk ter-favorite sahabat sedari dulu. Walaupun produk ini merupakan produk yang lawas kami lounching, tapi selalu menjadi salah satu produk yang dicari sahabat ketika  mampir ke outlet kita.

            Dengan filling / isian saos nanas yang full, sampai kalau kita lihat dari tampak samping itu sangat terlihat cembung. Jadi ada nada sensasi rasa segar nanas chunk yang membuat nagih di lidah dan ada rasa bangga juga saat beli produk dengan keunggulan khas lokal 🍍 Spesial kami hadirkan untuk sahabat semua.

            Oh, iya untuk 𝘗𝘳𝘰𝘥𝘶𝘬 𝘗𝘪𝘦 𝘕𝘢𝘯𝘢𝘴 𝘪𝘯𝘪 𝘶𝘮𝘶𝘳 𝘴𝘪𝘮𝘱𝘢𝘯𝘯𝘺𝘢 𝘩𝘢𝘯𝘺𝘢 3-4 𝘩𝘢𝘳𝘪 𝘴𝘶𝘩𝘶 𝘳𝘶𝘢𝘯𝘨 𝘺𝘢. 𝘒𝘢𝘭𝘢𝘶𝘱𝘶𝘯 𝘮𝘢𝘶 𝘢𝘨𝘢𝘬 𝘭𝘢𝘮𝘢 𝘴𝘢𝘩𝘢𝘣𝘢𝘵 𝘣𝘪𝘴𝘢 𝘮𝘦𝘯𝘺𝘪𝘮𝘱𝘢𝘯𝘯𝘺𝘢 𝘥𝘪 𝘴𝘶𝘩𝘶 𝘤𝘰𝘰𝘭𝘦𝘳.',
            'foto_produk1' => 'assets/product/pienanasmini1.png',
            'foto_produk2' => 'assets/product/pienanasmini2.png',
            'best_seller' => true,
            'tinggi_produk'=> 4,
            'panjang_package' => 30,
            'lebar_package' => 15,
            'tinggi_package'=> 5,
            'netto' => 650,
            'berat_total' => 800
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Pie Nanas Mini Topping',
            'categories_id' => 2,
            'harga' => 30000,
            'deskripsi' => 'Spesial untuk sahabat pecinta PIE NANAS. Selain Pie Nanas Mini Original, ada juga varian Pie Nanas Mini Topping Mix yaa.
            Nah, PIE NANAS MINI topping ini terdiri dari topping coklat, keju & almond ya sahabat. Dalam 1 box Pie Nanas Mini topping dengan berisi 10 pcs. Dan tentunya dengan filling / isian yang full sampai kalo dilihat disamping tampak cembung

            Jadi ada nada sensasi rasa antara segar dari filling saos nanas chunk dengan varian topping.
            Buah Nanas yang kita gunakan pun 100% dari buah Nanas khas kota Subang yang disuply langsung oleh para petani nanas.

            Pie Topping ini cocok banget buat sahabat yang suka cemilan manis tapi sehat. Sangat recommended sebagai hantaran cantik untuk kolega atau sebagai cemilan sehat & kaya akan serat buah bagi keluarga.',
            'foto_produk1' => 'assets/product/pienanastopping1.png',
            'foto_produk2' => 'assets/product/pienanastopping2.png',
            'best_seller' => false,
            'tinggi_produk'=> 4,
            'panjang_package' => 30,
            'lebar_package' => 15,
            'tinggi_package'=> 5,
            'netto' => 800,
            'berat_total' => 950
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Pie Besar',
            'categories_id' => 2,
            'harga' => 30000,
            'deskripsi' => 'Kami hadirkan bagi sahabat yang akan menikmati Pie Nanas dengan keluarga ataupun kolega dengan sensasi memotong pie dengan size sesuai selera sahabat yaa. Pie Nanas (Large Series) ini sangat bisa jadi alternatif produk yang recommended. Karena content buah nya sangat tinggi ya.
            Jadi Ketika ngemil Pie Nanas versi Large series ini. Hampir 50% nya yang sahabat konsumsi adalah porsi buah nanas nya. Jadi sudah dipastikan bisa masuk dalam kategori cemilan sehat ya sahabat.',
            'foto_produk1' => 'assets/product/pienanas1.png',
            'foto_produk2' => 'assets/product/pienanas2.png',
            'best_seller' => false,
            'tinggi_produk'=> 4,
            'panjang_package' => 20,
            'lebar_package' => 20,
            'tinggi_package'=> 8,
            'netto' => 900,
            'berat_total' => 950
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Birthday Pie Nanas',
            'categories_id' => 2,
            'harga' => 24000,
            'deskripsi' => 'Untuk sahabat yang ingin merayakan moment manis bersama orang-orang tersayang ataupun ingin memberi kejutan manis. BIRTHDAY PIE NANAS ini sangat bisa jadi alternatif produk yang recomended. Karena content buah nya sangat tinggi ya, jadi dijamin akan menjadi sajian yang berkualitas bagi para sahabat kesayangan.',
            'foto_produk1' => 'assets/product/piebirth1.png',
            'foto_produk2' => 'assets/product/piebirth2.png',
            'best_seller' => false,
            'tinggi_produk'=> 4,
            'panjang_package' => 20,
            'lebar_package' => 20,
            'tinggi_package'=> 8,
            'netto' => 900,
            'berat_total' => 1000
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Cheesestick Nanas',
            'categories_id' => 3,
            'harga' => 25000,
            'deskripsi' => 'Stick yang memadukan antara gurih dari keju dengan segar dari buah nanas, yang merupakan salah satu hasil inovasi produk olahan nanas khas Subang dari kami.
            Selain harganya yang terjangkau, Delipel Cheese Stick juga memiliki umur simpan yang lama lho. Jadi, kita betul-betul sediakan ya kebutuhan sahabat yang mau cemilan gurih, enak, sehat, & kaya akan serat buah. Cheese Stick Nanas sangat bisa menjadi pilihan.
            Packaging yang menyerupai buah Nanas ini merupakan hasil karya kami yang sarat dengan filosofi nanas & tertuang dalam karya kuliner bernansa modern khas Kota Subang, sebagai representasi dari kecintaan kami akan Kota Subang dan kepada sahabat Delipelovers semua.',
            'foto_produk1' => 'assets/product/sticknanas1.png',
            'foto_produk2' => 'assets/product/sticknanas2.png',
            'best_seller' => false,
            'panjang_produk' => 9,
            'panjang_package' => 15,
            'lebar_package' => 16.5,
            'netto' => 130,
            'berat_total' => 155
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Pastry Nanas',
            'categories_id' => 3,
            'harga' => 32000,
            'deskripsi' => 'Ini dia satu produk lagi dari kami dengan konsep desain packaging sekunder yang menyerupai bentuk buah nanas🍍
            Sahabat pasti sudah pada tahu donk produk yang 1 ini. Adonan puff pastry yang renyahnya itu berlapis-lapis dengan rasa yang gurih ditambah dengan topping selai nanas homemade khas Delipel – Tastynas.
            Gak heran kalo Pastry Nanas ini masuk list salah 1 produk best seller kami. Terlebih setelah kami melakukan Product Development Process, sahabat jadi semakin cinta dengan teksturnya.
            So, dengan harga yang sangat terjangkau, sahabat sudah bisa mendapatkan produk yang berkualitas dari segi ingredients yang alami, tingkat kesulitan Teknik produksi yang cukup tinggi dan sarat dengan keotentikan produk dengan muatan lokal.',
            'foto_produk1' => 'assets/product/pastry1.png',
            'foto_produk2' => 'assets/product/pastry2.png',
            'best_seller' => false,
            'panjang_produk'=> 3,
            'lebar_produk'=> 3,
            'tinggi_produk'=> 2,
            'panjang_package' => 15,
            'lebar_package' => 16.5,
            'netto' => 130,
            'berat_total' => 160
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Nastar Klasik',
            'categories_id' => 4,
            'harga' => 22000,
            'deskripsi' => 'Sebagai signature yang menambah kesan natural dari produk Nastar Klasik kami yang membedakan dengan produk nastar dari brand yang lain, Design Packaging Sekunder selalu kami coba aplikasikan dengan rupa buah nanas. Ini sebagai filosofi bahwa kami betul-betul mengolahnya dari pangan local khas Subang, yaitu buah Nanas fresh yang disupply langsung dari petani nanas subang.
            Dan yang menambah istimewa lagi, Nastar Klasik kami ini, selain menggunakan Nanas local khas Kota Subang yang kami olah secara alami tanpa perisa, pewarna buatan, atau pengental. Olesan Nastar pun alami menggunakan kuning telur. Sehingga umur simpan Nastar kamipun tidak lebih dari 1 bulan saja. Soal rasa, sahabat tidak perlu ragu lagi, karena kami menghadirkan produk Nastar dengan cita rasa rumahan
            Semoga kehadiran produk Nastar ini dapat menghantarkan segenap cinta dari hati kami & dari hati para petani nanas lokal dalam setiap rasa dengan penuh makna.',
            'foto_produk1' => 'assets/product/nasklik1.png',
            'foto_produk2' => 'assets/product/nasklik2.png',
            'best_seller' => false,
            'tinggi_produk'=> 2,
            'tinggi_package' => 6.5,
            'netto' => 500,
            'berat_total' => 600
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Nastar Black',
            'categories_id' => 4,
            'harga' => 20000,
            'deskripsi' => 'Si Hitam yang selalu dirindukan sahabat Tastynas & Delipelovers.
            Hadirnya Black Nastar ini sebagai jawaban bagi para sahabat pecinta coklat. Karena tidak sedikit dari sahabat yang ingin menikmati nastar namun tetap ada sentuhan rasa coklatnya.
            Varian Nastar dengan aroma cokelat murni yang khas, dipadukan dengan butter & selai nanas homemad khasnya Delipel – Tastynas. Beneran bikin sensasi yang gak biasa, unik tapi bikin asik buat dicemilin terus. Belum lagi isian selainya yang gak tanggung-tanggung banyaknya, bikin sensari rasa segarnya makin berasa.
            Sebagai signature yang menambah kesan natural, Desain Packaging Sekunder pun kami coba aplikasikan dengan rupa buah nanas seperti desain packaging Nastar Klasik. Kami mencoba menambahkan kesan yang berbeda secara tampilan visual, agar sahabat semakin cinta dengan kearifan lokal Subang melalui produk Nastar yang kami hadirkan setiap hari. Semoga kehadiran varian lain dari produk Nastar ini dapat menghantarkan segenap cinta dari hati kami & dari hati para petani nanas lokal dalam setiap rasa dengan penuh makna.',
            'foto_produk1' => 'assets/product/nasblack1.png',
            'foto_produk2' => 'assets/product/nasblack2.png',
            'best_seller' => false,
            'tinggi_produk'=> 2,
            'tinggi_package' => 6.5,
            'netto' => 500,
            'berat_total' => 600
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Nastar Tugu Nanas',
            'categories_id' => 4,
            'harga' => 30000,
            'deskripsi' => 'Nastar Tugu Nanas versi Tastynas ini merupakan Natsar yang menjadi icon oleh-oleh ter-favorite dari kota Subang sebagai salah 1 kota penghasil buah nanas terbaik.
            Dengan isian selai nanas yang melimpah dan tekstur isiannya lumer di mulut. Dimana isian selai nanasnya ini asli tanpa menggunakan pengentak, tanpa menggunakan pengawet dan pemanis nya asli ya. Kandungan serat nanasnya juga tinggi yak arena serat nanas asli kita ngga pake tambahan apapun jadi memang dari nanas murni 100% ya sahabat. Ditambah pula dengan adanya sentuhan Look & Design yang berbeda seperti layaknya rupa buah Nanas Asli.',
            'foto_produk1' => 'assets/product/nastugnas1.png',
            'foto_produk2' => 'assets/product/nastugnas2.png',
            'best_seller' => true,
            'panjang_produk'=> 6.5,
            'lebar_produk'=> 4,
            'panjang_produk'=> 2,
            'lebar_package' => 19,
            'panjang_package' => 8,
            'tinggi_package' => 4,
            'netto' => 210,
            'berat_total' => 300
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Feeva Cookies',
            'categories_id' => 4,
            'harga' => 30000,
            'deskripsi' => '🍪 𝗙 𝗲 𝗲 𝘃 𝗮  𝗖 𝗼 𝗼 𝗸 𝗶 𝗲 𝘀 🍪
            ☕ ( 𝘊𝘰𝘧𝘧𝘦𝘦 𝘊𝘢𝘴𝘴𝘢𝘷𝘢 𝘊𝘰𝘰𝘬𝘪𝘦𝘴 ) 🍠

            🍪 𝗦𝗽𝗲𝗰𝗶𝗮𝗹 𝗖 𝗼 𝗼 𝗸 𝗶 𝗲 𝘀, 𝘄𝗵𝗶𝗰𝗵 𝗵𝗮𝘃𝗲 𝗟𝗼𝘄 𝗚𝗹𝘆𝗰𝗲𝗺𝗶𝗰 𝗶𝗻𝗱𝗲𝘅, 𝗟𝗼𝘄 𝗚𝗹𝘂𝘁𝗲𝗻, 𝗟𝗼𝘄 𝗳𝗮𝘁, 𝗟𝗼𝘄 𝗖𝗵𝗼𝗹𝗲𝘀𝘁𝗲𝗿𝗼𝗹 & 𝗥𝗶𝗰𝗵 𝗼𝗳 𝗙𝗶𝗯𝗲𝗿 🍠🍍☕

            Feeva Cookies ini merupakan hasil inovasi produk bagi sahabat penikmat kopi yang kami hadirkan sebagai camilan sehat, yang tinggi serat & kaya dengan muatan konten komoditas local, sehingga sangat cocok juga untuk dijadikan oleh-oleh ter-favorite khas Kota Subang.

            𝗙𝗲𝗲𝘃𝗮 𝗖𝗼𝗼𝗸𝗶𝗲𝘀 yang merupakan perpaduan dari 3 komoditas lokal yang terdiri dari 𝗸𝗼𝗽𝗶, 𝘀𝗶𝗻𝗴𝗸𝗼𝗻𝗴 & 𝗻𝗮𝗻𝗮𝘀

            𝘈𝘳𝘰𝘮𝘢 𝘥𝘢𝘯 𝘳𝘢𝘴𝘢 𝘥𝘢𝘳𝘪 𝘬𝘰𝘱𝘪 𝘢𝘴𝘭𝘪 𝘴𝘦𝘳𝘵𝘢 𝘬𝘢𝘯𝘥𝘶𝘯𝘨𝘢𝘯 𝘴𝘦𝘳𝘢𝘵 𝘥𝘢𝘳𝘪 𝘴𝘪𝘯𝘨𝘬𝘰𝘯𝘨 𝘴𝘦𝘨𝘢𝘳 & 𝘯𝘢𝘯𝘢𝘴 𝘴𝘦𝘨𝘢𝘳, 𝘫𝘢𝘥𝘪 𝘤𝘢𝘮𝘪𝘭𝘢𝘯 𝘺𝘢𝘯𝘨 𝘨𝘢𝘬 𝘣𝘪𝘢𝘴𝘢 𝘣𝘢𝘯𝘨𝘦𝘵. 𝘜𝘥𝘢𝘩 𝘮𝘢𝘴𝘶𝘬 𝘬𝘢𝘵𝘦𝘨𝘰𝘳𝘪 𝘴𝘵𝘢𝘯𝘥𝘢𝘳 𝘤𝘢𝘮𝘪𝘭𝘢𝘯 𝘣𝘦𝘳𝘬𝘶𝘢𝘭𝘪𝘵𝘢𝘴 𝘱𝘰𝘬𝘰𝘬𝘯𝘺𝘢.

            Apalagi buat para sahabat pecinta kopi sejati. Wajib nyoba deh, beneran! 😍',
            'foto_produk1' => 'assets/product/feeva1.png',
            'foto_produk2' => 'assets/product/feeva2.png',
            'best_seller' => true,
            'tinggi_produk'=> 1.5,
            'lebar_package' => 15,
            'panjang_package' => 30,
            'tinggi_package' => 5,
            'netto' => 370,
            'berat_total' => 576
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Pinneaple Dessert',
            'categories_id' => 5,
            'harga' => 20000,
            'deskripsi' => 'Dessert yang coba kami ciptakan dengan sensasi rasa & aroma buah nanas ini sangat cocok menjadi sajian penutup yang istimewa sebagai pelengkap manisnya kebersamaan dengan keluarga ataupun sahabat.
            Dengan menikmati 1 box Pineapple Dessert ini, sahabat langsung bisa merasakan sensasi perpaduan yang sempurna antara sponge cake nanas, cream susu, selai nanas homemade khas Delipel – Tastynas dengan taburan keju cheddar.
            Dessert ini sangat cocok bagi sahabat yang concern akan cemilan sehat. Karena selain kandungan serat buah nanas asli, sponge cake yang lembutnya pun sangat Rendah Lemak loh (Low Cholesterol).
            Terlebih dessert ini sangat cocok jika dinikmati dingin.
            So, Make Your Dessert Perfect with our Choco Pineapple Dessert, dear🤗',
            'foto_produk1' => 'assets/product/pineappledessert1.png',
            'foto_produk2' => 'assets/product/pineappledessert2.png',
            'best_seller' => false,
            'panjang_produk'=> 17,
            'lebar_produk'=> 11.5,
            'tinggi_produk'=> 4,
            'netto' => 470,
            'berat_total' => 500
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Choco Pinneapple Dessert',
            'categories_id' => 5,
            'harga' => 22000,
            'deskripsi' => 'Dessert terbaru dari kami ini merupakan persembahan bagi sahabat Pecinta Coklat🍫!
            Sponge Cake Nanas yang Lembut ketika dipadu dengan Cream Coklat dengan topping pure nanas & chocochips ini menjadikan Dessert ini ada sensasi segar dari serat buah nanas asli🍍.
            Sahabat juga tidak perlu merasa bersalah Ketika ngemil Choco Pineapple Dessert ini. Karena selain kandungan serat buah nanas asli, sponge cake yang lembutnya pun sangat Rendah Lemak loh (Low Cholesterol)
            Jadi Dessert ini sangat cocok bagi sahabat yang concern akan cemilan sehat.
            Terlebih dessert ini sangat cocok jika dinikmati dingin.
            So, Make Your Dessert Perfect with our Choco Pineapple Dessert, dear🤗',
            'foto_produk1' => 'assets/product/chocopineapple1.png',
            'foto_produk2' => 'assets/product/chocopineapple2.png',
            'best_seller' => false,
            'panjang_produk'=> 17,
            'lebar_produk'=> 11.5,
            'tinggi_produk'=> 4,
            'netto' => 470,
            'berat_total' => 500
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Cheesecake Nanas',
            'categories_id' => 5,
            'harga' => 22000,
            'deskripsi' => 'Cake ini adalah salah satu dessert favorit dalam bentuk frozen.
            Ngemilin 1 cup CHEESE CAKE NANAS ini bisa jadi alternatif pilihan cemilan segar, sehat & tentunya hemat dari kita. Rasanya yang unik dan tekstur yang berbeda dari cheese cake yang sudah ada beneran bisa bikin mood sahabat tetep asik. Selain sangat pas dinikmati dingin. Cheese Cake Nanas ini punya signature tersendiri dari Cheesecake yang pernah ada Perpaduan antara lapisan crumble nanas, cream cheese, selai nanas homemade, ditopping dengan ceri, & ditabur dengan keju cheddar, cocok buat dessert makan siangmu, Delipelovers ❤',
            'foto_produk1' => 'assets/product/cheesecakenanas1.png',
            'foto_produk2' => 'assets/product/cheesecakenanas2.png',
            'best_seller' => false,
            'tinggi_produk'=> 4.5,
            'netto' => 100,
            'berat_total' => 100
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Milky Juice Nanas',
            'categories_id' => 6,
            'harga' => 15000,
            'deskripsi' => 'Paduan jus nanas asli homemade dengan susu yang pasti bakal bikin harimu jadi segar dan semangat buat beraktifitas. Emang Juice Nanas botolan yang kita punya ini sangat berbeda ya dengan Juice botolan yang lain. Karena konsep kita dalam menyediakan aneka kuliner ini selain sarat dengan Local Content, juga Enak, Hemat, dan terlebih sehat.
            Pastikan minuman apapun yg kita konsumsi itu betul-betul minuman yang berkualitas yaa.. ',
            'foto_produk1' => 'assets/product/milkyjuice1.png',
            'foto_produk2' => 'assets/product/milkyjuice2.png',
            'best_seller' => false,
            'tinggi_produk'=> 13.5,
            'netto' => 230,
            'berat_total' => 279
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Sirup Nanas',
            'categories_id' => 6,
            'harga' => 15000,
            'deskripsi' => 'Sirup Nanas Tastynas ini sangat cocok sebagai bahan penyegar alami untuk sajian sop Buah, es bulbul, cincau ataupun bahan tambahan untuk puding buah.
            Sahabar bisa juga menikmati sirup nanas kami ini dengan mengkombinasikannya dengan irisan jahe & diseduh dengan air hangat. Tentu ini akan menjadi minuman yang dapat melegakan tenggorokan & baik juga untuk pencernaan, Dan tentunya bisa menjadi imun booster alami untuk sahabat konsumsi.
            Asik banget kan, Sirup Nanas Tastynas menjawab kebutuhan sahabat untuk melengkapi setiap moment yg simple, menyegarkan & sehat😍',
            'foto_produk1' => 'assets/product/sirupnanas1.png',
            'foto_produk2' => 'assets/product/sirupnanas2.png',
            'best_seller' => false,
            'tinggi_produk'=> 15,
            'netto' => 250,
            'berat_total' => 328
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Sambel Nanas Botol',
            'categories_id' => 7,
            'harga' => 15000,
            'deskripsi' => 'Sejak launching, produk SAMBEL NANAS ini menjadi salah satu incaran sahabat kesayangan nih, baik sahabat yang membeli offline ke outlet ataupun online by market place.Sambel Nanas Tastynas ini Tanpa Mengandung Minyak, jadi Zero-Cholesterol. Daan keunggulannya lainnya lagi, karena dominan terbuat dari Buah Nanas. Jadi, Sambel nya sangat kaya akan serat buah Nanas & Vitamin C alami.

            Yass, betul- betul perpaduan keunggulan yang lengkap & recommended sebagai Cocolan apapun dalam menu andalan sahabat. Untuk cocolan gorengan? Cocok! Untuk cocolan buah lagi? Cocok juga! Sebagai penyegar sajian berkuah panas? Cocok! Pokoknya serba cocok dinikmati dengan apapun.

            Jadi khusus banget kita sediakan yang special untuk sahabat, Sambel Nanas versi Botolan dengan versi baru. Praktis, tinggal cocol. Gak perlu ribet ngulek',
            'foto_produk1' => 'assets/product/sambelnanas1.png',
            'foto_produk2' => 'assets/product/sambelnanas2.png',
            'best_seller' => false,
            'tinggi_produk'=> 9.5,
            'netto' => 175,
            'berat_total' => 182
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Cireng Stick Sambel Nanas',
            'categories_id' => 8,
            'harga' => 15000,
            'deskripsi' => 'CIRENG yang kaya akan rempah local alami. Special kami hadirkan dengan bentuk stick, agar lebih mudah sahabat nikmati dengan dicocol ke sambel nanas.
            Cireng yang merupakan salah satu kuliner khas nusantara ini, kami coba adaptasikan dengan potensi local daerah Subang. Sehingga menampilkan taste, aroma, tekstur & bentuk yang sangat berbeda dari cireng yang sudah ada.
            Untuk aroma pun sangat terasa aroma rempah alami. Tektur cirengnya pun garing diluar lembut didalam yaa. Dan yang lebih istimewa nya lagi Sambel Cocolannya pun sangat segar karena berbahan dasar dari buah Nanas🍍
            Apa sih yang menjadi kelebihan dari sambelnya ?
            🍍 Sambel Nanas kami ini tanpa mengandung minyak ya sahabat, jadi sudah pasti No-Cholesterol. Bagi sahabat yang punya kolesterol tinggi? Aman donk utk dikonsumsi.😍
            🍍 Sambel sangat kaya akan serat buah Nanas & Vitamin C alami',
            'foto_produk1' => 'assets/product/cirengsambelnanas1.png',
            'foto_produk2' => 'assets/product/cirengsambelnanas2.png',
            'best_seller' => false,
            'panjang_produk'=> 10,
            'lebar_produk'=> 2,
            'tinggi_produk'=> 1.5,
            'panjang_package'=>15,
            'lebar_package'=>25,
            'berat_total' => 465
        ]);

        \App\Models\Product::factory()->create([
            'nama_produk' => 'Pempek Dos Kuah Nanas',
            'categories_id' => 8,
            'harga' => 20000,
            'deskripsi' => 'Inovasi kuliner Nusantara yang coba kami adaptasikan dengan keunggulan komparatif yang menjadi icon kota Subang ( Buah Nanas 🍍.)

            Mengapa Pempek Dos Kuah Nanas ini recomended buat sahabat:
            🍍 Karena menggunakan Rempah & bahan- bahan Alami serta Kaya akan Nutrisi.
            🍍 Kuah Nanas sangat Segar & sangat aman ke Pencernaan, karena Asam didapat dari buah Nanas Asli. Bukan dari Cuka.
            🍍 Topping terdiri dari :
            - Kacang Mede Gurih yang merupakan sumber lemak nabati, zinc, vitamin E & asam folat.
            - Potongan buah Nanas Segar yang merupakan sumber serat, vitamin C & enzym

            Sangat bisa dinikmati kapanpun, karena Pempek Dos Kuah Nanas ini tersedia dalam Frozen Food 🤗',
            'foto_produk1' => 'assets/product/pempek1.png',
            'foto_produk2' => 'assets/product/pempek2.png',
            'best_seller' => false,
            'panjang_produk'=> 11.5,
            'lebar_produk'=> 6,
            'tinggi_produk'=> 4,
            'panjang_package'=>18,
            'lebar_package'=>20,
            'berat_total' => 690
        ]);
    }
}
