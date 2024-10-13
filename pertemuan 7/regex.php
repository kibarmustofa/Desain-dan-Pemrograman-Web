<?php
echo "memastikan huruf kecil dari text sample<br>";
$pattern = "/[a-z]/"; // Cocokkan huruf kecil.
$text = 'This is a Sample Text.';

if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}
echo "<br><br>";
echo "memastikan nilai patern dari text sample<br>";
$pattern = "/[0-9]+/"; // Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
echo "<br><br>";
echo "memastikan kata apple patern dari text sample<br>";
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';

$new_text = preg_replace($pattern, $replacement, $text);

echo $new_text; // Output: "I like banana pie."

echo "<br><br>";
echo "memastikan kata yang hampir cocok dari segi o	*: 0 atau lebih kali  patern dari text sample<br>";

$pattern = '/go*d/'; // Cocokkan "god", "good", "gooood", dll.
$text = 'god is good.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
echo "<br><br>";
echo "memastikan kata yang hampir cocok dari segi ?: 0 atau 1 kali  patern dari text sample<br>";

$pattern = '/go?d/'; // Cocokkan "gd", "god", "good", dll.
$text = 'god is good.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>