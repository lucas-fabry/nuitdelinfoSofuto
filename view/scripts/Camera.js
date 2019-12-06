Camera = function(game, canvas) {
    // La scène du jeu
    this.scene = game.scene;
    // Initialisation de la caméra
    this._initCamera(this.scene, canvas);
};


Camera.prototype = {
    _initCamera : function(scene, canvas) {
        // On crée la caméra
        //this.camera = new BABYLON.FreeCamera("camera", new BABYLON.Vector3(0, 5, -10), scene);
        // On demande à la caméra de regarder au point zéro de la scène
        //this.camera.setTarget(BABYLON.Vector3.Zero());
        // On affecte le mouvement de la caméra au canvas
        //this.camera.attachControl(canvas, true);

        //var camera = new BABYLON.ArcRotateCamera("ArcRotateCamera", 100, 1, 100, new BABYLON.Vector3(0, 0, 0), scene);
        var camera = new BABYLON.FreeCamera("camera1", new BABYLON.Vector3(0, -12, 30), scene);
        camera.checkCollisions = true;
        camera.attachControl(canvas, true);
        camera.applyGravity = true;
    }
};
