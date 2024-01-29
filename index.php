<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnowFlake Calculator</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Snowflake logo.png" type="image/png">
    <script src="script.js"></script>
</head>
<body class="transition-fade">

<header class="header">
        <a href="#" class="logo">
            <img src="Snowflake logo.png" alt="Logo Image">
            SnowFlake Studio
        </a>

        <nav class="navbar">
            <a href="C:\Users\denij\Desktop\Stuff\Snowflake studios\Project Snow Web\index.html">Home</a>
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
    <form action="Calc.php" method="post">
        <input type="text" name="num1" placeholder="Enter number 1" required>
        <input type="text" name="num2" placeholder="Enter number 2" required>
        <select name="operator" required>
            <option value="">Select operator</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
</div>

</body>
</html>