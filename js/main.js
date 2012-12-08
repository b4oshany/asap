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


