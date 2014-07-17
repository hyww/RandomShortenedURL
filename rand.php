<?php
echo '
	<title>Random PPT Link Generator</title>
	<meta charset="UTF-8" />
';

echo '
	<script>
	function open_in_new_tab_and_reload(url)
	{
	  //Open in new tab
	  window.open(url , \'_blank\');
	  //focus to thet window
	  window.focus();
	  //reload current page
	  location.reload();
	}
	</script>
';


$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@~';

$string = '';
$random_string_length = 4;


for ($i = 0; $i < $random_string_length; $i++) {
	$string .= $characters[rand(0, strlen($characters) - 1)];
}
echo '
<center>
	<table width="800" height="600">
		<tr><td align="center" valign="center">
';


echo '
			<a href="#" onclick="open_in_new_tab_and_reload(\''.'http://ppt.cc/'.$string.'\')" >Press here~</a></br>
		</td></tr>
	</table>
</center>
';
?>