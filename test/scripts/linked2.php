<?php
session_start();
?>
<HTML>
	<HEAD>
		<TITLE>
			linking structure S1
		</TITLE>

		<script type="text/javascript">
		var i=1;
		
		function add()
		{
			
			var s=document.getElementById("cs_extra");
			var l=50+i*110;
			var m=l-30;
			s.innerHTML+="<div style=\"position: absolute; top: 250px; left: "+m+"px;\"> ---> </div><select name=\"c"+i+"\" style=\"position: absolute; top: 250px; left: "+l+"px;\"><option>slide1</option></select>";
			i++;		
		}
		</script>
	</HEAD>

	<BODY onload="try()">
		<form id="f1" action="http://localhost/test/scripts/linker2.php" method="post">
		<span style="position: absolute; top: 200px; left: 50px;">content slides:</span>
		<select name="c1" style="position: absolute; top: 250px; left: 50px;" >
		<option>slide1</option>
		<option>slide2</option>
		</select>
		<div id="cs_extra">
		
		</div>
		<span style="position: absolute; top: 200px; left: 530px;">decision slide:</span>
		<span style="position: absolute; top: 250px; left: 485px;">|  ---></span>
		<select name="decision" style="position: absolute; top: 250px; left: 550px;" >
		<option>slide1</option>
		<option>slide2</option>
		</select>
		<?
			$i=0;
			while($i<3)
			{
			$j=250+$i*100;
			$k=200+100*$i;
			$r=250+100*$i;
		?>
		
		<span style="position: absolute; top:<?echo $j;?>; left: 700px;">|  ---></span>
		<span style="position: absolute; top: <?echo $k;?>; left: 800px;">Content slide :</span>
		<select name="decision" style="position: absolute; top: <?echo $r;?>;  left: 800px;" >
		<option>slide1</option>
		<option>slide2</option>
		</select>
		<span style="position: absolute; top:<?echo $j;?>; left: 950px;">|  ---></span>
		<span style="position: absolute; top: <?echo $k;?>; left: 1000px;">Choose :</span>
		<select name="decision" style="position: absolute; top: <?echo $r;?>;  left: 1000px;" >
		<option>level1</option>
		<option>level2</option>
		</select>

		<?
			$i++;
			}
		?>
		
		
		
		<input type="submit"  value="add cs" style="position: absolute; top: 500px; left: 50px;" onMouseOver="add()">
		<input type="submit" value="link" style="position: absolute; top: 500px; left: 150px;">
		</form>
	</BODY>

</HTML>
