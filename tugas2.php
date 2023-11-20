<?php

$PerusahaanTeknologi = [
    "Jenis 1" => ["Nama" => "Microsoft","Deskripsi" => "Microsoft Corporation adalah perusahaan multinasional Amerika Serikat yang berpusat di Redmond, Washington, Amerika Serikat yang mengembangkan, membuat, memberi lisensi, dan mendukung berbagai produk dan jasa terkait dengan komputer.","Asal Negara" => "Amerika Serikat","Gambar" => "https://d1fmx1rbmqrxrr.cloudfront.net/zdnet/optim/i/edit/ne/2017/01/microsoft-campus__w630.jpg"],
    "Jenis 2" => ["Nama" => "Apple Inc","Deskripsi" => "Apple Inc. adalah perusahaan teknologi multinasional yang berpusat di Cupertino, California, yang merancang, mengembangkan, dan menjual barang elektronik konsumen, perangkat lunak komputer, dan layanan daring.","Asal Negara" => "Amerika Serikat","Gambar" => "https://media.licdn.com/dms/image/C4D12AQFNv_KSo_VCwQ/article-cover_image-shrink_600_2000/0/1638142508773?e=2147483647&v=beta&t=SoxCwfG_3-FF8YnKRQNmBv0k0zOPe26PI6-1Nda-GrE"],
    "Jenis 3" => ["Nama" => "Alphabet Inc","Deskripsi" => "Alphabet Inc. adalah perusahaan induk konglomerat teknologi multinasional Amerika yang berkantor pusat di Mountain View, California. Perusahaan ini dibentuk melalui restrukturisasi Google pada tanggal 2 Oktober 2015, dan menjadi perusahaan induk Google dan beberapa mantan anak perusahaan Google.Alphabet adalah perusahaan teknologi terbesar ketiga di dunia berdasarkan pendapatan dan salah satu perusahaan paling berharga di dunia.","Asal Negara" => "Amerika Serikat","Gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Googleplex_HQ_%28cropped%29.jpg/1024px-Googleplex_HQ_%28cropped%29.jpg"],
    "Jenis 4" => ["Nama" => "Samsung Group","Deskripsi" => "Samsung Electronics Co., Ltd. adalah sebuah perusahaan elektronik multinasional yang berkantor pusat di Distrik Yeongtong, Suwon, Korea Selatan. Perusahaan ini adalah inti dari chaebol Samsung, karena menyumbang 70% dari total pendapatan grup tersebut pada tahun 2012.","Asal Negara" => "Korea Selatan","Gambar" => "https://halowee.com/wp-content/uploads/2023/02/Samsung.png"],
    "Jenis 5" => ["Nama" => "Tencent Holdings Ltd.","Deskripsi" => "Tencent Holdings Ltd., juga dikenal sebagai Tencent, adalah perusahaan induk konglomerat teknologi multinasional China. Didirikan pada tahun 1998, anak perusahaannya secara global memasarkan berbagai layanan dan produk yang berhubungan dengan Internet, termasuk dalam hiburan, kecerdasan buatan, dan teknologi lainnya","Asal Negara" => "China","Gambar" => "https://images.bisnis.com/posts/2021/04/18/1382663/tencent-reuters.jpg"],
    "Jenis 6" => ["Nama" => "Meta Platform","Deskripsi" => "Meta Platforms, Inc., disingkat sebagai Meta dan sebelumnya dikenal juga sebagai Facebook, Inc. hingga 28 Oktober 2021, adalah sebuah layanan jejaring sosial berkantor pusat di Menlo Park, California, Amerika Serikat yang diluncurkan pada bulan Februari 2004.","Asal Negara" => "Amerika Serikat","Gambar" => "https://www.stocksbnb.com/wp-content/uploads/2022/08/meta-logo-1.png"],
    "Jenis 7" => ["Nama" => "Intel","Deskripsi" => "ntel Corporation adalah perusahaan multinasional dan perusahaan teknologi Amerika yang berkantor pusat di Santa Clara, California, di Silicon Valley.","Asal Negara" => "Amerika Serikat","Gambar" => "https://www.thoughtco.com/thmb/xA0zo7FUyCKKiuR39yl56V2y5so=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/intel-logo-56a6fa195f9b58b7d0e5ce3a.png"],
    "Jenis 8" => ["Nama" => "Taiwan Semiconductor Manufacturing Co","Deskripsi" => "Taiwan Semiconductor Manufacturing Company, Limited adalah sebuah perancang dan produsen semikonduktor berbasis kontrak multinasional asal Taiwan.","Asal Negara" => "Taiwan","Gambar" => "https://upload.wikimedia.org/wikipedia/en/6/63/Tsmc.svg"],
    "Jenis 9" => ["Nama" => "Cisco Systems Inc","Deskripsi" => "Cisco Systems, Inc. adalah sebuah konglomerat teknologi multinasional yang berkantor pusat di San Jose, California, Amerika Serikat. Cisco mengembangkan, memproduksi, dan menjual perangkat keras jaringan, perangkat lunak jaringan, peralatan telekomunikasi, serta produk dan jasa berteknologi tinggi lainnya.","Asal Negara" => "Amerika Serikat","Gambar" => "https://cdn.britannica.com/90/194590-050-503325E5/building-Cisco-Systems.jpg"],
    "Jenis 10" => ["Nama" => "International Business Machines Corporation (IBM)","Deskripsi" => "International Business Machines Corporation adalah sebuah perusahaan Amerika Serikat yang memproduksi dan menjual perangkat keras dan perangkat lunak komputer. IBM didirikan pada 16 Juni 1911, beroperasi sejak 1888 dan berpusat di Armonk, New York, Amerika Serikat.","Asal Negara" => "Amerika Serikat","Gambar" => "https://innovation.co.id/wp-content/uploads/2023/05/9dfe1610958bf0d9d6ffebc0e85ecad7.jpeg"]
 ];

    echo "<p><b><center>DAFTAR PERUSAHAAN TEKNOLOGI:</center></b></p>";

    echo "<table border='1' style='text-align:center;'>";
    echo "<tr><th>No</th><th>Nama</th><th>Deskripsi</th><th>Asal Negara</th><th>Gambar</th></tr>";
    $nomor = 1;
    foreach ($PerusahaanTeknologi as $jenis) {
    echo "<tr>";
    echo "<td>$nomor</td>";
    echo "<td>" . $jenis["Nama"] . "</td>";
    echo "<td>" . $jenis["Deskripsi"] . "</td>";
    echo "<td>" . $jenis["Asal Negara"] . "</td>";
    echo "<td><img src='" . $jenis["Gambar"] . "' alt='" . $jenis["Nama"] . "' width='400'></td>";
    echo "</tr>";
    $nomor++;
}
echo "</table>";
?>