const inputs = document.querySelectorAll('.input');


function focusFunc(){
	let parent = this.parentNode.parentNode;
	parent.classList.add('focus');
}

function blurFunc(){
	let parent = this.parentNode.parentNode;
	if (this.value == ""){
		parent.classList.remove('focus');	
	}
}

inputs.forEach(input =>{
	input.addEventListener('focus', focusFunc);
	input.addEventListener('blur', blurFunc);
})

function myFunction(){
	var x = document.getElementById("myInput")
	var y = document.getElementById("show")
	var z = document.getElementById("hide")

	if(x.type === 'password'){
		x.type = "text";
		y.style.display = "block";
		z.style.display = "none";
	}
	else{
		x.type = "password";
		y.style.display = "none";
		z.style.display = "block";
	}
}
		