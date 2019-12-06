class component{

	constructor(x,y,width,height,color,ctx){
		this.x=x;
		this.y=y;
		this.width=width;
		this.height=height;
		this.color=color;
		this.ctx=ctx;

		ctx.fillStyle=color;
		ctx.fillRect(x,y,width,height);
	}



	getX(){
		return this.x;
	}	

	getY(){
		return this.y;
	}

	getWidth(){
		return this.width;
	}

	getHeight(){
		return this.height;
	}

	changerTaille(x,y,level){
	
		var wid=x*deltaTime/3*(0.66+level/3);
		var hei=y*deltaTime/3*(0.66+level/3);
		this.width-=wid;
		this.height-=hei;
		if(this.x>600){
			this.x-=wid/2+hei/2;
		}
			else{
		this.x+=wid/2+hei/2;
		}
		if(this.y>600){
			this.y-=hei/2+wid/2;
		}
			else{
		this.y+=hei/2+wid/2;}

	}

	enCollision(obj){
		if(this.x-obj.width+5<obj.x && obj.x<this.x+this.width-5 && this.y-obj.height+5<obj.y && obj.y<this.y+this.height-5){
			return true;
		}
		return false;
	}

	changeCoord(x,y){
		this.x=x;
		this.y=y;	
	}

	tourner(){
		
	}

	update(color){
		this.ctx.fillStyle=color;
		this.ctx.fillRect(this.x,this.y,this.width,this.height);
	}
}
