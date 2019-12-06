

var joueur;
var gauche=false;
var droite=false;
var tri=0;
var mur;
var request;
var finish=false;
var lastDate=Date.now();
var deltaTime=1;
var map;
var angle=1;
var divScore;
var divLevel;
var score=0;
var level=0;

function startGame() {
  divScore=document.getElementById("score");
  divLevel=document.getElementById("level");
  myGameArea.start();
  joueur= new Joueur(myGameArea.context);
  map=new Map(myGameArea.context);
  console.log(joueur.getX());
  updateGameArea(lastDate);

}

var myGameArea = {
  canvas : document.createElement("canvas"),
  start : function() {
    this.canvas.width = 1200;
    this.canvas.height = 1200;
    this.canvas.id="canvas";

    this.context = this.canvas.getContext("2d");
    this.canvas.setAttribute("style","border:solid");
    document.body.insertBefore(this.canvas, document.body.childNodes[0]);
  },
  clear : function() {
    this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
  }
}




function updateGameArea(timestamp) {
  myGameArea.clear();
  deltaTime=Date.now()-lastDate;
  controleJoueur()
  if(getRandomInt(100)<1/deltaTime){
    angle=angle*-1;
  }

  myGameArea.context.save();
  myGameArea.context.translate(600,600);
  myGameArea.context.rotate(deltaTime/10*0.03*angle);
  myGameArea.context.translate(-600,-600);
  myGameArea.context.save();

  score+=deltaTime/10;
  divScore.innerHTML="score : ";
  divScore.innerHTML+=Math.floor(score);
  divLevel.innerHTML="niveau : ";
  divLevel.innerHTML+=level;

  joueur.update();
  map.update();
  myGameArea.context.restore();
  if(map.enCollision(joueur.component)){
    finish=true;
  }
  if(!finish){
  lastDate=Date.now();
  request=requestAnimationFrame(updateGameArea);
   }


}

function controleJoueur(){
    if(droite && !gauche){
    tri-=0.1*deltaTime/10;

  }
  if (gauche && !droite){
    tri+=0.1*deltaTime/10;
  }
}

document.onkeydown = function(e) {
    switch (e.keyCode) {
        case 37:
            gauche=true;
            break;
        case 39:
            droite=true;
            break;
    }
};

document.onkeyup = function (e) {
    switch (e.keyCode) {
        case 37:
            gauche=false;
            break;
        case 39:
            droite=false;
            break;
    }
};


window.onload=startGame();