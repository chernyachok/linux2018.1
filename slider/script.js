var btn_prev = document.querySelector("#gallery .buttons .prev");
var btn_next = document.querySelector("#gallery .buttons .next");
var images = document.querySelectorAll("#gallery .photos img");
var count= 0;
btn_next.onclick = function(){
	images[count].className = "";
	count++;
	if(count== images.length){
		count = 0;
	}
	
	images[count].className= "showed";
}
btn_prev.onclick = function(){
	images[count].className = "";
	count--;
	if(count < 0){
		count = images.length-1;
	}
	
	images[count].className= "showed";
}