<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnowFlake Calculator</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="C:\Users\denij\Desktop\Stuff\Snowflake studios\Project Snow Web\Snowflake logo.png" type="image/png">
    <script src="script.js"></script>
</head>
<body class="transition-fade">

<header class="header">
        <a href="#" class="logo">
            <img src="Snowflake logo.png" alt="Logo Image">
            SnowFlake Studio
        </a>

        <nav class="navbar">
            <a href="index.html">Home</a>
            <a href="about.html"></a>

            <!-- Dropdown Structure -->
            <div class="dropdown">
                <button class="dropbtn">Cheat Sheet</button>
                <div class="dropdown-content">
                    <a href="cheatsheet-html.html">HTML</a>
                    <a href="cheatsheet-css.html">CSS</a>
                    <a href="cheatsheet-php.html">PHP</a>
                    <a href="cheatsheet-js.html">JavaScript</a>
                    <!-- Add more languages as needed -->
                </div>
            </div>

            <div class="dropdown2">
                <button class="dropbtn2">Projects</button>
                <div class="dropdown-content">
                    <a href="http://localhost:8080">Calculator</a>
                    <!-- Add more navigation items as needed -->
                </div>
            </div>            
        </nav>
    </header>

<div class="calculator">
    <?php
    if (isset($_POST['operator'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 == 0) {
                    $result = "Cannot divide by zero";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = "Invalid operator";
                break;
        }

        echo "<h2>Result: $result</h2>";
    }
    ?>
    <a href="index.php">Go Back</a>
</div>

</body>
</html>
