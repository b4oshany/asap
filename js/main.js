// JavaScript Document
function menuClick(data)
{
x=document.getElementById("sidebar");  // Find the element
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