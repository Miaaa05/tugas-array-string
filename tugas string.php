<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas String - Mia Amalia</title>
</head>
<body>
    <h1>Berlatih String di PHP</h1>
    <?php
        /*
            Soal no 1
            Tunjukkan dengan menggunakan echo berapa panjang dari string yan diberikan berikut!

            Contoh:
            $string = "PHP is never old";
            Output:
            Panjang string: 16;
            Jumlah kata: 4
        */

        echo "<h3>Soal No 1</h3>";

        echo "Hello PHP";
        $first_sentence = "Hello PHP!"; //Panjang string 10, jumlah kata: 2
        $ps = strlen($first_sentence);
        $jumlah_kata = str_word_count($first_sentence);
        echo "<br>Panjang string $ps, jumlah kata: $jumlah_kata";

        echo "<br><br>I'm ready for the challenges";
        $second_sentence = "I'm ready for the challenges"; //Panjang string: 28, jumlah kata: 5
        $ps2 = strlen($second_sentence);
        $jumlah_kata2 = str_word_count($second_sentence);
        echo "<br>Panjang string $ps2, jumlah kata: $jumlah_kata2";


        echo "<h3> Soal No 2</h3>";
        /*
            Soal No 2
            Mengambil kata pada string dan karakter-karakternya yang ada di dalamnya.

        */
        $string2 = "I Love PHP";

        echo "<label>String: </label> \"$string2\" <br>";
        echo "kata pertama: " . substr($string2, 0, 1) . "<br>" ;
        //Lanjutkan dibawah ini
        echo "Kata kedua: " . substr($string2, 2, 5) . "<br>" ;
        echo "Kata ketiga: " . substr($string2, 7, 3) . "<br>" ;

        echo "<h3> Soal No 3</h3>" ;
        /*
            Soal No 3
            Mengubah karakter atau kata yang ada di dalam sebuah string.
        */
        $string3 = "PHP is old but sexy!";
        echo "string: \"$string3\" ";
        //OUTPUT : "PHP is old but awesome"
        $rubah = str_replace("sexy!", "awesome", $string3);
        echo "<br> Hasil: \"$rubah\" ";

    ?>
</body>
</html>