Moteur = function(canvasId) {

    // Canvas et engine défini ici
    var canvas = document.getElementById(canvasId);
    var engine = new BABYLON.Engine(canvas, true);
    var _this = this;

    // On initie la scène avec une fonction associé à l'objet Moteur
    this.scene = this._initScene(engine);

    // Permet au jeu de tourner
    var _camera = new Camera(_this, canvas);
    var _rendu = new Rendu(_this);
    engine.runRenderLoop(function () {
        _this.scene.render();
    });

    // Ajuste la vue 3D si la fenetre est agrandi ou diminué
    window.addEventListener("resize", function () {
        if (engine) {
            engine.resize();
        }
    },false);
};


Moteur.prototype = {
    // Prototype d'initialisation de la scène
    _initScene : function(engine) {
        var scene = new BABYLON.Scene(engine);
        scene.clearColor=new BABYLON.Color3(0,0,0);
        return scene;
    }
};

// Page entièrement chargé, on lance le jeu
document.addEventListener("DOMContentLoaded", function () {
    new Moteur('renderCanvas');
}, false);
