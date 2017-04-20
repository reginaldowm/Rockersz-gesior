<img id="ContentBoxHeadline" class="Title" src="layouts/tibiacom/images/header/headline-serverinfo.gif" alt="Contentbox headline"><?php
if(!defined('INITIALIZED'))
	exit;
	$main_content .= '<br><center>
		<table border="0" cellpadding="4" cellspacing="1" width="95%">
			<tr bgcolor="'.$config['site']['vdarkborder'].'">
				<td colspan="2"><font class="white"><b>Status</b></font></td>
			</tr>
			<tr bgcolor="'.$config['site']['vdarkborder'].'">
				<td width="50%"><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td>Server Status:</td><td><font class="green">ONLINE</font></td>
			</tr>
		</table>
		<br>';
	$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="95%">
			<tr bgcolor="'.$config['site']['vdarkborder'].'">
				<td colspan="2"><font class="white"><b>Rates</b></font></td>
			</tr>
			<tr bgcolor="'.$config['site']['vdarkborder'].'">
				<td><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td width="50%">Experience</td><td>Stage 300x</td><br>
			</tr>
			<tr bgcolor="'.$config['site']['lightborder'].'">
				<td>Skill</td><td>40x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td>Magic</td><td>10x</td>
			</tr>
			<tr bgcolor="'.$config['site']['lightborder'].'">
				<td>Loot</td><td>4x</td>
			</tr>
		</table><br>';

	$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="95%">
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td colspan="2"><font class="white"><b>Info Server</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td width="50%"><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>World Type</td><td>RPG/PVP</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Server motd</td><td>'.$config['server']['motd'].'</td>
		</tr>
	</table><br>';
	$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="95%">
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td colspan="2"><font class="white"><b>Frags</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td width="50%"><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>White Skull Time</td><td>7 Minutos</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Frags Time</td><td>3 Horas</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Frags to Red Skull</td><td> 6 Frags</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Frags to Black Skull</td><td> 9 Frags</td>
		</tr>
	</table><br>';
	$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="95%">
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td colspan="2"><font class="white"><b>Onther information</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td width="50%"><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Premium</td><td> Free</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Bank System</td><td>Ativo</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Guild halls</td><td>Inativo</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Kick Time</td><td>15 Minutos</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>PZ Lock</td><td>60 Segundos</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Free Bless Level</td><td>100</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Level to buy house</td><td>100</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Level to create guild</td><td>1</td>
		</tr>
		<!--
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td></td><td></td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td></td><td></td>
		</tr>
		-->
	</table><br>';
	$main_content .= '</center>';