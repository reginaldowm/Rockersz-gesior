<img id="ContentBoxHeadline" class="Title" src="layouts/tibiacom/images/header/headline-team.gif" alt="Contentbox headline">
<?php
if(!defined('INITIALIZED'))
	exit;

$list = $SQL->query('SELECT ' . $SQL->fieldName('name') . ', ' . $SQL->fieldName('id') . ', ' . $SQL->fieldName('group_id') . ' FROM ' . $SQL->tableName('players') . ' WHERE ' . $SQL->fieldName('group_id') . ' IN (' . implode(',', $config['site']['groups_support']) . ') ORDER BY ' . $SQL->fieldName('group_id') . ' DESC');


$main_content .= "<table border=0 cellpadding=4 cellspacing=1 width=100%>

<tr><td class=\"white\" align=\"center\" bgcolor=\"#505050\"><b>Contact Information</b></td></tr>

<tr><td bgcolor=\"#D4C0A1\"><table border=\"0\" cellpadding=\"8\">
<tr><td>Support Skype:</td><td><a>SEM SKYPE NO MOMENTO</a></td></tr>
<tr><td>Support Email:</td><td><a>materiaotglobal@gmail.com</a></td></tr>
</td></tr></table></td></tr>";

$main_content .= "<br>";
$main_content .= "<table border=0 cellpadding=4 cellspacing=1 width=100%>

<tr><td class=\"white\" align=\"center\" bgcolor=\"#505050\"><b>Disclaimer</b></td></tr>

<tr><td bgcolor=\"#D4C0A1\"><table border=\"0\" cellpadding=\"8\"><tr><td>
Materia é um servidor alternativo, copiando em sua grande maioria o conteúdo disponibilizado na internet, da pioneira CipSoft.
Não nos responsabilizamos por perda de lucros ou má aplicação dos nossos clientes.
Se algum de nossos clientes forem pegos fazendo algo ilegal, que prejudique ao servidor, ou outros clientes, será punido; com ou sem aviso prévio.
</td></tr><tr><td>
(MAteria is a mirror , copying mostly content available on the Internet , the pioneer CipSoft.
Not responsible for lost profits or misapplication of our customers.
If any of our customers are caught doing something illegal , detrimental to the server, or other customers , will be punished ; with or without notice).
</td></tr><tr><td>
Hoje, a equipe Materia está subdividida da seguinte maneira, e seus horarios são estes:
<tr><td class=\"white\" align=\"center\" bgcolor=\"#505050\"><b>TEAM</b></td></tr>
</td></tr><tr><td>
*[ADM] Folks. 
</td></tr><tr><td>
All time (ON GAME, EMAIL AND FORUM)
</td></tr><tr><td>
</td></tr><tr><td>
</td></tr><tr><td>
*[GOD] Muffyn. 
</td></tr><tr><td>
All time on email and forum
</td></tr><tr><td>
</td></tr><tr><td>
</td></tr><tr><td>
>>GAME MASTER:
</td></tr><tr><td>
*SEM GM NO MOMENTO.
</td></tr><tr><td> 
(19:00-00:00) ON GAME
</td></tr><tr><td>
</td></tr><tr><td>
</td></tr><tr><td>
*Tutores:
(SEM TUTORES)
</td></tr></table></td></tr>";
$main_content .= "<br><br>";


$main_content .= "<table border=0 cellspacing=1 cellpadding=4 width=100%>
	<td class=\"white\" colspan=\"3\" align=\"center\" bgcolor=\"#505050\"><b>Support Team</b></td>
	 <tr bgcolor=\"#D4C0A1\"><td width=\"100%\"><b>Name</b></td><td><b>Group</b></td></tr>";

foreach($list as $i => $supporter)
{
	$bgcolor = (($i++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
	$main_content .= '<tr bgcolor="'.$bgcolor.'"><td>'.htmlspecialchars($supporter['name']).'</a></td><td>' . htmlspecialchars(Website::getGroupName($supporter['group_id'])) . '</td></tr>';
}

$main_content .= "<br><br>";
$main_content .= "</table>";