<?php
//percobaan no 13
$loremIpsum ="Lorem ipsum dolor sit amet consectur adipisicing elit.
        Voluptatem reprhenderit nobis veritatis commodi fugiat molestias
        impedit under ipsum voluptatum corrupti minus site excepturi nostrum
        quisquam quis impedit eum nulla optio.";
echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum). "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" .strtoupper($loremIpsum) . "</p>";
echo "<p>" .strtolower($loremIpsum) . "</p>";
?>