<?php
	
mysql> select id, fac_id, fac_name, orate, date_format(date(date), '%b %Y') as d
ate from faculties where (fac_id = 'fh' or fac_id = 'fms') and date < curdate()
and date > date_sub(curdate(), interval 2 year) order by fac_id;
	
?>