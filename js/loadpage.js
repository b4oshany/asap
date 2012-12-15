
$(document).ready(function(){
	//alert('ok');
	
	//initial content
	$('#content').load('links/info/home.php #displayC');
	var curMenu = $('#menuBar ul li')[0].style.background='green';
	
	//menu click content load
	$('#menuBar ul li a').click(function(){
		var page = $(this).attr('href');
		switch(page){
			case 'home':
				for(i=0; i<8; i++){
					curMenu = $('#menuBar ul li')[i].style.background='black';
				}
				curMenu = $('#menuBar ul li')[0].style.background='green';
				break;
			case 'profile':
				for(i=0; i<8; i++){
					curMenu = $('#menuBar ul li')[i].style.background='black';
				}
				curMenu = $('#menuBar ul li')[1].style.background='green';
				break;
			case 'about':
				for(i=0; i<8; i++){
					curMenu = $('#menuBar ul li')[i].style.background='black';
				}
				curMenu = $('#menuBar ul li')[2].style.background='green';
				break;
			case 'help':
				for(i=0; i<8; i++){
					curMenu = $('#menuBar ul li')[i].style.background='black';
				}
				curMenu = $('#menuBar ul li')[3].style.background='green';
				break;
			case 'faculties':
				for(i=0; i<8; i++){
					curMenu = $('#menuBar ul li')[i].style.background='black';
				}
				curMenu = $('#menuBar ul li')[4].style.background='green';
				break;
			case 'departments':
				for(i=0; i<8; i++){
					curMenu = $('#menuBar ul li')[i].style.background='black';
				}
				curMenu = $('#menuBar ul li')[5].style.background='green';
				break;
			case 'courses':
				for(i=0; i<8; i++){
					curMenu = $('#menuBar ul li')[i].style.background='black';
				}
				curMenu = $('#menuBar ul li')[6].style.background='green';
				break;
			case 'lecturers':
				for(i=0; i<8; i++){
					curMenu = $('#menuBar ul li')[i].style.background='black';
				}
				curMenu = $('#menuBar ul li')[7].style.background='green';
				break;
		}
		$('#content').load('links/info/'+page+'.php #displayC');
		return false;
	});
})
