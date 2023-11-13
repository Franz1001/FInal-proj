<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php.css">
    <title>Chinese Zodiac Table</title>
</head>
<body>
    <h1>Chinese Zodiac Signs and Years</h1>
    <table>
        <thead>
            <tr>
                <?php
                // Chinese Zodiac signs
                $zodiacSigns = ["Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Goat", "Monkey", "Rooster", "Dog", "Pig"];

                // Display column headers with Zodiac signs
                foreach ($zodiacSigns as $sign) {
                    echo "<th><img src='images/{$sign}.jpg' alt='{$sign}'><br>{$sign}</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                // Start year
                $startYear = 1912;
                // Current year
                $currentYear = date("Y");

                // Display years below the appropriate column heading
                for ($year = $startYear; $year <= $currentYear; $year++) {
                    echo "<td>{$year}</td>";
                }
                ?>
            </tr>
        </tbody>
    </table>
</body>
</html>
