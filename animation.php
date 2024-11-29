<?php
Include "view-header.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>First animation of animejs</title>
        <script src=
"https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js">
        </script>
    </head>
    <body>
        <div style="background: blue; 
                    height: 40px; 
                    width: 40px;">
        </div>
        <script>
            let animation = anime({
                targets: "div",
                translateX: 150,
                height: "80px",
                width: "80px",
                duration: 2000,
                easing: "linear",
                direction: "alternate",
                loop: true,
            });
        </script>
    </body>
</html>

<?php
Include "view-footer.php";
?>
