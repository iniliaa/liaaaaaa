<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .calculator {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            padding: 8px;
            width: 100%;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        p {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
    <title>Perkalian</title>
</head>
<body>

<?php
$result = "";

if (isset($_POST['submit'])) {
    $input = $_POST['input'];
    $result = "Hasil perkalian dengan 5: " . ($input * 5);
}
?>

<div class="calculator">
    <form method="post">
        <label for="input">Masukkan angka:</label>
        <input type="number" name="input" id="input" required>
        <button type="submit" name="submit">Hitung</button>
    </form>
    <p><?php echo $result; ?></p>
</div>

</body>
</html>