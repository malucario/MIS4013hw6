<!DOCTYPE html>
<?php
Include "view-header.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <style>
            html, body {
                overflow: hidden;
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
            }
            #renderCanvas {
                width: 100%;
                height: 100%;
                touch-action: none;
            }
        </style>

        <script src="https://cdn.babylonjs.com/babylon.js"></script>

    </head>
	<h1>Babylon Object</h1>
	<p>This is using Babylon.js to create a 3D object.</p>

   <body>

	<canvas id="renderCanvas"></canvas>

	<script>
        const canvas = document.getElementById("renderCanvas");
        const engine = new BABYLON.Engine(canvas, true); 
        const createScene = function () {
            const scene = new BABYLON.Scene(engine);
            const camera = new BABYLON.FreeCamera("camera1", 
                new BABYLON.Vector3(0, 5, -10), scene);
            camera.setTarget(BABYLON.Vector3.Zero());
            camera.attachControl(canvas, true);
            const light = new BABYLON.HemisphericLight("light", 
                new BABYLON.Vector3(0, 1, 0), scene);
            light.intensity = 0.7;
            const sphere = BABYLON.MeshBuilder.CreateSphere("sphere", 
                {diameter: 2, segments: 32}, scene);
            sphere.position.y = 1;
            const ground = BABYLON.MeshBuilder.CreateGround("ground", 
                {width: 6, height: 6}, scene);
            return scene;
        };
        const scene = createScene(); 
        engine.runRenderLoop(function () {
                scene.render();
        });
        window.addEventListener("resize", function () {
                engine.resize();
        });
	</script>

   </body>

<?php
Include "view-footer.php";
?>

</html>
