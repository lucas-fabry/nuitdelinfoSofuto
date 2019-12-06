function expand() {
	var liste = Array.from(document.getElementsByClassName("expandButton"));
	liste.forEach(function(e){
		e.addEventListener("click", function(){aggrandir(e)});
	});
}

function aggrandir(e) {
	console.log('coucou');
	if (e.parentNode.style.height!='200px') {
		e.parentNode.style.height = '200px';
	}
	else {
		e.parentNode.style.height='100%';
	}
	
}

window.onload = expand();