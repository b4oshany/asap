
<html>
<head>
<script>
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
</script>
</head>
<body>

<form>
	<form>
		<select name="courses" onchange="showSelect(this.value, 'display')">
			<option value="">Select a course:</option>
			<option value="COMP2240">COMP2240</option>
			<option value="COMP2250">COMP2250</option>
		</select>
	</form>
</div>
<div id="display">

</div> 

</body>
</html>