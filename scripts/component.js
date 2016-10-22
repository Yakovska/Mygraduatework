function Component(){
	
	this.elem = null;//link all elements of the interface works with JS-component
	this.init = function(sSelector){//initialize the basic properties elem
		this.elem = $(sSelector); 
		if(!this.elem.length){//error debugger access to the main selector
			alert("Can't access element by selector: " + sSelector);
		}
		this.find = function(sSelector){// selector  - class, registered in the find elem
			var findResult = this.elem.find(sSelector);
			if(findResult.length){
			return findResult;}
			else{
			alert("Can't find element by selector: " + sSelector);}
		}
	}
}