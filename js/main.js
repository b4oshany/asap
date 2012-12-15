// JavaScript Document
function menuClick(data)
{
	//x=document.getElementById("content");  // Find the element

	switch (data){
		case 'home':
			x = document.getElementById('displayG');
			x.innerHTML = "<?php $displayGraph->facGraph(); ?>";
			break;
		case 'profile':
			alert('question');
			x.innerHTML="oshane";    // Change the content
			break;
		case 'about':
			alert('datav');
			x.innerHTML="bailey";    // Change the content			
			break;
		case 'help':
			alert('help');
			x.innerHTML="olando";    // Change the content			
			break;
		case 'fac':
			x = document.getElementById('displayG');
			x.innerHTML = "<?php $displayGraph->facGraph(); ?>";
			break;
		case 'dep':
			x = document.getElementById('displayG');
			x.innerHTML = "<?php $displayGraph->depGraph(); ?>";
			break;
		case 'cou':
			x = document.getElementById('displayG');
			x.innerHTML = "<?php $displayGraph->couGraph(); ?>";			
			break;
		case 'lec':
			x = document.getElementById('displayG');
			x.innerHTML = "<?php $displayGraph->lecGraph(); ?>";		
			break;
	}
}


