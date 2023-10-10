<!DOCTYPE html>
<html>
    <head>
        <title>Conversión de valores entre tipos</title>
        <meta name="viewport" content="width=device-width">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <h2>Funciones de librería</h2>
        <table>
            <tr>
                <td> round(0.50)</td>
                <td class="conversion"><?php var_dump( round(0.50)); ?></td>
            </tr>
            <tr>
                <td>round(-4.60)</td>
                <td class="conversion"><?php var_dump(round(-4.60)); ?></td>
            </tr>
            <tr>
                <td>pow(2,4)</td>
                <td class="conversion"><?php var_dump(pow(2,4)); ?></td>
            </tr>
            <tr>
                <td> intdiv(5, 2)</td>
                <td class="conversion"><?php var_dump( intdiv(5, 2)); ?></td>
            </tr>
            <tr>
                <td>decbin("140")</td>
                <td class="conversion"><?php var_dump(decbin("140")); ?></td>
            </tr>
            <tr>
                <td>ceil(0.40)</td>
                <td class="conversion"><?php var_dump( ceil(0.40)); ?></td>
            </tr>
            <tr>
                <td>ceil(-5.1)</td>
                <td class="conversion"><?php var_dump(ceil(-5.1)); ?></td>
            </tr>
            <tr>
                <td>max(22, 14, 68, 18, 15)</td>
                <td class="conversion"><?php var_dump(max(22, 14, 68, 18, 15)); ?></td>
            </tr><tr>
                <td>mt_rand()</td>
                <td class="conversion"><?php var_dump(mt_rand()); ?></td>
            </tr>
            <tr>
                <td>pi()</td>
                <td class="conversion"><?php var_dump(pi()); ?></td>
            </tr>
            <tr>
                <td>sqrt(9)</td>
                <td class="conversion"><?php var_dump(sqrt(9)); ?></td>
            </tr>
            <tr>
                <td>floor(5.8)</td>
                <td class="conversion"><?php var_dump(floor(5.8)); ?></td>
            </tr>
            <tr>
                <td>floor(-5.9)</td>
                <td class="conversion"><?php var_dump(floor(-5.9)); ?></td>
            </tr>
            <tr>
                <td>chunk_split("Hello world!",1,".")</td>
                <td class="conversion"><?php var_dump(chunk_split("Hello world!",1,".")); ?></td>
            </tr>
            <tr>
                <td>chr(52)</td>
                <td class="conversion"><?php var_dump(chr(52)); ?></td>
            </tr>
            <tr>
                <td>count_chars("Hello World!", 3)</td>
                <td class="conversion"><?php var_dump(count_chars("Hello World!", 3)); ?></td>
            </tr>
            <tr>
                <td>explode(" ", "Hello world. It\'s a beautiful day.")</td>
                <td class="conversion"><?php var_dump(explode(" ", "Hello world. It\'s a beautiful day.")); ?></td>
            </tr>
            <tr>
                <td>htmlspecialchars("This is some <b>bold</b> text.")</td>
                <td class="conversion"><?php var_dump(htmlspecialchars("This is some <b>bold</b> text.")); ?></td>
            </tr>
            <tr>
                <td>ltrim("Hello World!", "Hello")</td>
                <td class="conversion"><?php var_dump(ltrim("Hello World!", "Hello")); ?></td>
            </tr>
            <tr>
                <td>ord("hello")</td>
                <td class="conversion"><?php var_dump(ord("hello")); ?></td>
            </tr>
            <tr>
                <td>str_repeat("Wow",13)</td>
                <td class="conversion"><?php var_dump(str_repeat("Wow",13)); ?></td>
            </tr>
            <tr>
                <td>str_replace("world","Peter","Hello world!")</td>
                <td class="conversion"><?php var_dump(str_replace("world","Peter","Hello world!")); ?></td>
            </tr>
            <tr>
                <td>str_split("Hello")</td>
                <td class="conversion"><?php var_dump(str_split("Hello")); ?></td>
            </tr>
            <tr>
                <td>str_word_count("Hello world!")</td>
                <td class="conversion"><?php var_dump(str_word_count("Hello world!")); ?></td>
            </tr>
            <tr>
                <td>strcmp("Hello world!","Hello world!")</td>
                <td class="conversion"><?php var_dump(strcmp("Hello world!","Hello world!")); ?></td>
            </tr>
            <tr>
                <td>strpos("I love php, I love php too!","php")</td>
                <td class="conversion"><?php var_dump(strpos("I love php, I love php too!","php")); ?></td>
            </tr>
            <tr>
                <td>strrev("Hello World!")</td>
                <td class="conversion"><?php var_dump(strrev("Hello World!")); ?></td>
            </tr>
            <tr>
                <td>strspn("Hello world!","kHlleo")</td>
                <td class="conversion"><?php var_dump(strspn("Hello world!","kHlleo")); ?></td>
            </tr>
            <tr>
                <td>strtoupper("Hello WORLD!")</td>
                <td class="conversion"><?php var_dump(strtoupper("Hello WORLD!")); ?></td>
            </tr>
            <tr>
                <td>substr("Hello world",6)</td>
                <td class="conversion"><?php var_dump(substr("Hello world",6)); ?></td>
            </tr>
            <tr>
                <td>strlen("Hello")</td>
                <td class="conversion"><?php var_dump(strlen("Hello")); ?></td>
            </tr>
            <tr>
                <td>(string) 0</td>
                <td class="conversion"><?php var_dump((string) 0); ?></td>
            </tr>
            <tr>
                <td>(string) 012</td>
                <td class="conversion"><?php var_dump((string) 012); ?></td>
            </tr>
            <tr>
                <td>(string) 0.23</td>
                <td class="conversion"><?php var_dump((string) 0.23); ?></td>
            </tr>
        </table>
    </body>
</html>
