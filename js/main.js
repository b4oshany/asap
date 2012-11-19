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

function ulclick(menu){
	switch (menu){
		case 'sprofile':
			x = document.getElementById("sinfo");
			if(x.style.display.value != "none"){
				x.style.display = "none";
				document.getElementById("datainfo").style.display = "block";
			}
			break;
		case 'sdatabase':
			x = document.getElementById("datainfo");
			if(x.style.display.value != "none"){
				x.style.display = "none";
				document.getElementById("tabsetup").style.display = "block";
			}
			break;
		case 'stables':
			x = document.getElementById("sinfo");
			if(x.style.display.value != "none"){
				x.style.display = "none";
				document.getElementById("datainfo").style.display = "block";
			}
			break;
		case 'slinktab':
			alert('we');
			break;
		case 'iprofile':
			alert('os');
			break;
		case 'configure':
			alert('we');
			break;
		case 'finish':
			alert('we');
			break;
	}
}

function showSelect(str, id)
{
	if (str=="")
	  {
		  document.getElementById("txtHint").innerHTML="";
		  return;
	  } 
	if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
	  }
	else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById(id).innerHTML=xmlhttp.responseText;
		}
	  }
	  var s = "select.php?q=";
	xmlhttp.open("GET",s+str,true);
	xmlhttp.send();
}