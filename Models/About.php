<?php

namespace App\Models;

class About
{
    private static $blog_about = [
            "tittle" => "About",
            "name" => "Muhammad Alam Basallamah",
            "email" => "basalamahalam@gmail.com",
            "about" => "Seorang programmer pemula dari bandung yang sedang berusaha",
            "img" => "Alam.jpg"
    ];

    public static function all() {
        return collect(self::$blog_about); //pake self karna static kalau tidak pake this-> dan ini menggunakan collection
    }
}
