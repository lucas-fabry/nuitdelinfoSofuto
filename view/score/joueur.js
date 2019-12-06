
class Joueur{

	constructor(ctx){
		this.component=new component(575,575,50,50,"red",ctx);
	}



	getX(){
		return this.component.getX();
	}

	getY(){
		return this.component.getY();
	}

	update(){
		this.changerCoord();
		this.component.update("red");

	}

	changerCoord(){
		this.component.changeCoord(Math.cos(tri)*250+600,Math.sin(tri)*250+600);
	}
}