// JavaScript Document
function menuClick(data)
{
	x=document.getElementById("content");  // Find the element
	
	switch (data){
		case 'home':
			//alert('home');
			x.load("lol");    // Change the content
			break;
		case 'ques':
			//alert('question');
			x.innerHTML="oshane";    // Change the content
			break;
		case 'datav':
			//alert('datav');
			x.innerHTML="bailey";    // Change the content			
			break;
		case 'help':
			//alert('help');
			x.innerHTML="olando";    // Change the content			
			break;
	}
}
function loading(){
	 document.getElementById("chart_div").className = "loading-visible";
	  var hideDiv = function(){document.getElementById("chart_div").className = "loading-invisible";};
	  var oldLoad = window.onload;
	  var newLoad = oldLoad ? function(){hideDiv.call(this);oldLoad.call(this);} : hideDiv;
	  window.onload = newLoad;
}


