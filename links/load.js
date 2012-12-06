/*
This file contains the interactivity or javascript function of the setup/installation page of asap, be careful in modifying it
because this is where most of the files are sent to be created such as the connect.inc.php file.
-- The dsiplay option of each installation step is control the showSelect and ulclick function
--  the choData function is used to send the database information to the de_setup_check which will be used to create the database
connection information as well as the information of site
*/

function ulclick(menu){
	//checking the element id to determine which value to be shown after the save and continue button is pressed
	switch (menu){
		case 'sinfo':
			x = document.getElementById("sinfo");
			if(x.style.display.value != "none"){
				x.style.display = "none";
				document.getElementById("datainfo").style.display = "block";
			}
			break;
		case 'datainfo':
			x = document.getElementById("datainfo");
			if(x.style.display.value != "none"){
				x.style.display = "none";
				document.getElementById("sprofile").style.display = "block";
			}
			break;
		case 'sprofile':
			x = document.getElementById("sprofile");
			if(x.style.display.value != "none"){
				x.style.display = "none";
				document.getElementById("installing").style.display = "block";
			}
			break;
	}
}

//The below function is an ajax function, that is used to post data to a given file
function choData(formname, formcnt)
{	
	//collect the form id and number of form elements in the form
	formid = document.getElementById(formname);
	formelements = formid.getElementsByTagName("input");
	alert(formelements[0].value);
	alert(formelements[1].value);
	alert(formelements[2].value);
			
	//y=x.getElementsByTagName("input")[formcnt].value;
	
	
	//alert(formcnt);
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  //alert(formcnt);
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  //alert(formcnt);
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{//display the response information of the select.php in the given element id
		document.getElementById('message').innerHTML=xmlhttp.responseText;
		//alert(formcnt);
		}
	  }
	//setting the parms default value to be posted and 
	
	params = 'formvalue='+formname+'';
	for ($i = 0; $i < formcnt	; $i++){
		if((formelements[$i].value != '') || (formelements[(formcnt-1)].value == '')){
			params = params + "_" + formelements[$i].value;
			ulclick(formname);
		}else{
			alert('Please fill in all the required fills')
		}
	}
	
	//alert(params);
	//setting the file to post the values to, and how the values are handled
	s = "db_setup_check.php";
	xmlhttp.open("POST",s,true);
	xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded')
	xmlhttp.send(params);
	
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
	 // var s = "select.php?q=";
	  var s = "../../links/select.php?q=";
	xmlhttp.open("GET",s+str,true);
	xmlhttp.send();
}


