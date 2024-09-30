<?php
//percobaan no 11
$menu1 = array(
    "Home" => "#home",
    "About us" => array(
        "Our Team" => "#team",
        "Our story" => "#story",
        "Mission & Vision" => "#mission"
    ),
    "Service" => array(
        "Web Development" => "#web",
        "Mobile Development" => "#mobile",
        "SEO Optimization" => "#seo",
    ),
    "Contact" => "#contact",
);
//fungsi menampilkan menu
function displayMenu1($menu1){
    echo "<ul>";
    foreach($menu1 as $key => $value){
        //mengecek data menu yang ada pada array
        if(is_array($value)){
            echo "<li>$key";
            displayMenu1($value); //fungsi rekursif display menu
            echo "</li>";
        }else{
            echo "<li><a href='$value'>$key</a></li>";
        }
    }
    echo "</ul>";
}
//panggil fungsi display menu
displayMenu1($menu1);

$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
        [
            "nama" => "Wisata",
            "subMenu" => [
            [
                "nama" => "Pamtai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
        [
            "nama" => "Kuliner"
        ],
    [
            "nama" => "Hiburan"
        ]
    ]
],
[
    "nama" => "Tentang"
    ],
[
    "nama" => "Kontak"
    ],
];
//fungsi menampilkan array
function tampilkanMenuBertingkat(array $menu){
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}</li>";
    }
    echo "</ul>";
}
tampilkanMenuBertingkat($menu);

//percobaan no 12
$menu2 = array(
    "Beranda" => "#beranda",
    "Berita" => array(
        "Wisata" => array(
            "Pantai" => "#pantai",
            "Gunung" => "#gunung",
        ),
        "Kuliner" => "#kuliner",
        "Hiburan" => "#hiburan"
    ),
    "Tentang" => "#tentang",
    "Kontak" => "#Kontak",
);
//fungsi menampilkan menu
function displayMenu($menu2){
    echo "<ul>";
    foreach($menu2 as $key => $value){
        //mengecek data menu yang ada pada array
        if(is_array($value)){
            echo "<li>$key";
            displayMenu($value); //fungsi rekursif display menu
            echo "</li>";
        }else{
            echo "<li><a href='$value' style='text-decoration: none;
            '>$key</a></li>";
        }
    }
    echo "</ul>";
}
//panggil fungsi display menu
displayMenu($menu2);
?>