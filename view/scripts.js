function expand() {
	var liste = Array.from(document.getElementsByClassName("expandButton"));
	liste.forEach(function(e){
		e.addEventListener("click", aggrandir(e));
	});
}

function aggrandir(e) {
	console.log('coucou');
	e.parentNode.style.height='100%';
}

window.onload = expand();