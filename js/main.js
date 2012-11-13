// JavaScript Document
function menuClick(data)
{
x=document.getElementById("content");  // Find the element
	switch (data){
		case 'home':
			x.load("lol");    // Change the content
			break;
		case 'ques':
			x.innerHTML="oshane";    // Change the content
			break;
		case 'datav':
			x.innerHTML="bailey";    // Change the content
			break;
		case 'help':
			x.innerHTML="olando";    // Change the content
			break;
		}
}