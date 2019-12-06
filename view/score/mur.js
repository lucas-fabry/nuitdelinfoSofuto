class Mur{
	

	constructor(ctx){

		var trou=getRandomInt(4);
		this.murs=[];

		for(var i=0; i<4;i++){
			if(i!==trou && i==0){
				this.murs.push(new component(100,100,1000,20,"green",ctx));
			}
			else if(i!==trou && i==1){
				this.murs.push(new component(1080,100,20,1000,"green",ctx));
			}
			else if(i!==trou && i==2){
				this.murs.push(new component(100,1080,1000,20,"green",ctx));		
			}
			else if(i!==trou && i==3){
				this.murs.push(new component(100,100,20,1000 ,"green",ctx));		
			}
		}

	}

	enCollision(obj){
		var col=false;
		this.murs.forEach(function(m){
			if(m.enCollision(obj)){
				col=true;
			}
		});
		return col;
	}


	update(color,level){
		var that=this;
		var ret=false;
		this.murs.forEach(function(m){
			if(m.getWidth()>21){
				m.changerTaille(1,0,level);
			}else{
				m.changerTaille(0,1,level);
			}
			if(m.getWidth()<20 || m.getHeight()<20){
				that.murs.shift(m);
				ret=true;
			}
			m.update(color);
		});
		return ret;
	}

		setColor(){
		this.murs.forEach(function(m){
			m.setColor();
		});
	}
}




function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}
