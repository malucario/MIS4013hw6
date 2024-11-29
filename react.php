<?php
Include "view-header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Background Video</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            overflow: hidden;
            width: 100%;
            height: 100%;
        }

        #video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        iframe {
            width: 100%;
            height: 100%;
            pointer-events: none; /* Prevent interaction with the video */
        }
    </style>
</head>
<body>
    <!-- YouTube Video as Background -->
    <div id="video-background">
        <iframe 
            src="https://www.youtube.com/embed/pq2SGs7cO2Y?autoplay=1&mute=1&loop=1&playlist=pq2SGs7cO2Y&controls=0&showinfo=0" 
            frameborder="0" 
            allow="autoplay; fullscreen" 
            allowfullscreen>
        </iframe>
    </div>

    <!-- Foreground Content -->
    <div class="content">
        <h1>Welcome to My Page!</h1>
        <p>This page uses a YouTube video as the background.</p>
    </div>
</body>
</html>

<?php
Include "view-footer.php";
?>
