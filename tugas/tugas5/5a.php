<?php 

$mahasiswa = [
    [
        "nrp" => "223040155",
        "nama" => "Narapati Keysa Anandi",
        "email" => "narapati.223040155@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-cafe954742d93b3d882339023ca399240da58b4497ca672a8fadfe0baff67a5b-dsc-8633.png"
    ],
    [
        "nrp" => "223040018",
        "nama" => "Bhadrika Arya Putra",
        "email" => "bhadrika.223040018@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-705040234983518e26aec4852265e59878140e5d3dfc80fb13cf49157dd6e719-img-20220927-143935-5141519066088781035.jpg"
    ],
    [
        "nrp" => "223040016",
        "nama" => "Davina Putri Kusuma",
        "email" => "davina.223040016@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-ef6f00406f260e29c468eefbaa8ae7bc8ab7a63322a546915e05c4fbf5ebc3b4-img-20220927-143600-7757812424449762994.jpg"
    ],
    [
        "nrp" => "223040012",
        "nama" => "Revalian Ananda Taufan",
        "email" => "revalian.223040012@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-992c2f7d045a151d68ba432bfc8eaf4bc52aab23791df5b0ad880bd37dd835eb-pas-foto.jpeg"
    ],
    [
        "nrp" => "223040109",
        "nama" => "Anin Denin Nadia",
        "email" => "anin.223040109@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-b51ddc72304c9cb201e5909690791151d11989d0214fe9a8e36033334b0b3931-img-20230205-195500-4076372486254517280.jpg"
    ],
    [
        "nrp" => "223040038",
        "nama" => "Lisvindanu",
        "email" => "lisvindanu.223040038@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-94e0ac14a367099e67b73018b3abce76e8ce260477b3439aeaf30aa28a4f0da8-img-20221001-134516-8876588967699608800.jpg"
    ],
    [
        "nrp" => "223040113",
        "nama" => "Daffa Muhamad Rizki Ansori",
        "email" => "daffa.223040113@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-ebb2cc16601ed15be05cfa6ea50c77499485951409b25db62b2e6b8e55bff9fc-daffa-muhamad-rizki-ansori-4x6.jpg"
    ],
    [
        "nrp" => "223040025",
        "nama" => "Daffaa Aprilino",
        "email" => "daffaa.223040025@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-d63765a636ac53cf77cc21c2941ac9ee565fef1ea8ec52d4742b11432bd45c3d-img-20220928-130835-3985632523089886993.jpg"
    ],
    [
        "nrp" => "223040041",
        "nama" => "Chafidz Adlan Baidlowi",
        "email" => "chafidz.223040041@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-f16cf365e48f06bd9d1cda44a4c75d4afda6b411acb91d85beaf4c642e4ae1e4-img-20221024-205023-3080108241474344176.jpg"
    ],
    [
        "nrp" => "223040029",
        "nama" => "Ahmad Mulia Huda",
        "email" => "ahmad.223040029@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-8506ec65a9c98bb45a2341d24196a6e5945e931a98d36a2fc78cc53f5f31a056-ahmad-mulia-huda.jpeg"
    ]
    
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="<?= $mhs["gambar"]; ?>"  alt="">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>

    <?php endforeach; ?>

</body>

</html>