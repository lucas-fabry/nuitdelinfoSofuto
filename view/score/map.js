class Map{
	constructor(ctx){
		this.ctx=ctx;
		this.murs=[];
		this.color="blue";
		level=0;
		this.creerMap(2);
		this.harder(10);
	}

	harder(nbSecondes){	
		if(this.color.localeCompare("green")==0){
			this.color="blue";
		}
		else{
			this.color="green";
		}
		setTimeout(()=>{this.harder(nbSecondes*0.9)},nbSecondes*1000);
		level++;
	}

	ajoutMur(){
		this.murs.push(new Mur(this.ctx));
	}

	update(){
		var that=this;
		this.murs.forEach(function(m){
			if(m.update(that.color,level)){
				that.murs.shift(m);
			}
		});
	}

	enCollision(obj){
		var ret=false;
		if(this.murs.length>0){
			ret=this.murs[0].enCollision(obj);
		}
		if(this.murs.length>1){
			ret=ret||this.murs[1].enCollision(obj);
		}
		return ret;
	}

	creerMap(nbSecondes){
		if(!finish){
			this.ajoutMur();
			setTimeout(()=>{this.creerMap(nbSecondes*0.95)},nbSecondes*1000);
		}
	}




}
	