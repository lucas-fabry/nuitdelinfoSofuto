class Cercle{

	constructor(nbCombo,x,y){
		this.x=x;
		this.y=y;
		this.nbCombo=nbCombo;
		this.div=null;
	}

	createHTMLElement(){
		var canvas=document.getElementById("canvasJeu");
		var cercle=document.createElement("div");
		cercle.setAttribute("class", "cercle");
		var style="left:"+ this.x + "px ; bottom: "+ this.y+ "px ;";
		cercle.setAttribute("style", style);
		cercle.innerHTML=this.nbCombo;
		canvas.appendChild(cercle);
		this.div=cercle;
		cercle.addEventListener('click',()=>{
            this.delete();
        });
	}

	init(){
		this.createHTMLElement(); 

		setTimeout(() => {
			this.delete();
		}, 2000);

	}

	delete(){
		this.div.remove();
	}

}

c1=new Cercle(1,700,500);
c2=new Cercle(2,1000,1000);
c3=new Cercle(3,1300,500);
c1.init();
c2.init();
c3.init();