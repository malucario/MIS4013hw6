<?php
Include "view-header.php";
?>

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js"></script>
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }
        .bouncing-box {
            background: blue;
            height: 40px;
            width: 40px;
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>
</head>

<h1>Learning JavaScript Libraries!</h1>
<p>This is using anime.js. Watch this box bounce around until it hits the corner perfectly.</p>

<body>
    <div class="bouncing-box"></div>
    <script>
        const box = document.querySelector('.bouncing-box');
        let x = 0; 
        let y = 0; 
        let dx = 2; 
        let dy = 2; 

        function bounce() {
            const boxWidth = box.offsetWidth;
            const boxHeight = box.offsetHeight;
            const windowWidth = window.innerWidth;
            const windowHeight = window.innerHeight;

            x += dx;
            y += dy;

            if (x + boxWidth >= windowWidth || x <= 0) {
                dx *= -1; 
            }
            if (y + boxHeight >= windowHeight || y <= 0) {
                dy *= -1; 
            }
            
            anime({
                targets: box,
                translateX: x,
                translateY: y,
                duration: 20,
                easing: 'linear',
            });

            requestAnimationFrame(bounce);
        }

        bounce();
    </script>
</body>

<?php
Include "view-footer.php";
?>
