<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Result </title>
    <link rel="stylesheet" href="../css/Result.css">
    <link rel="stylesheet" href="../css/Sidebar.css">
    <link rel="stylesheet" href="../css/font-6/css/all.css">
</head>

<body>
    <nav>
        <?php
        include('../content/sidebar-content/sidebar-staff.php');
        ?>

        <div class="header-content">
            <?php
            include('../content/header.php');
            ?>
        </div>
    </nav>


    <div class="container">
        <?php
        include('../content/content-result.php');
        ?>
    </div>


    <script>
        const navBar = document.querySelector("nav");
        menuBtns = document.querySelectorAll(".menu-icon");
        overlay = document.querySelector(".overlay");

        menuBtns.forEach((menuBtn) => {
            menuBtn.addEventListener("click", () => {
                navBar.classList.toggle("open");
            });
        });
    </script>

</body>

</html>