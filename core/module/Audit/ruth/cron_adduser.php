<?php
function setup_chall($entry, $fullpath, $username)
{
	if ($entry === 'install_user.php')
	{
		$home = '/home/user/'.$username;
		require_once $fullpath;
	}
}

function getUID($username)
{
	$susername = escapeshellarg($username);
	$uid = exec("id {$susername}");
	$pusername = preg_quote($username);
	if (1 !== preg_match("/(\\d+)\\({$pusername}\\)/", $uid, $matches))
	{
		return false;
	}
	return $matches[1];
}

$query = "SELECT * FROM war_audit_add_user";
$uidfile = GWF_CORE_PATH.'module/Audit/ruth/lastwcid';
if (false === ($result = $db->queryRead($query)))
{
	die('DB ERROR 1');
}
while (false !== ($row = $db->fetchAssoc($result)))
{
	
	$username = $row['username'];
	if (false === ($uid = getUID($username)))
	{
		$nextuid = file_get_contents($uidfile);
		$nextuid++;
		$uid = $nextuid;
		file_put_contents($uidfile, $uid);
	}
	system("/root/wechall/adduser.sh {$uid} {$username} {$row['password']}");
	GWF_File::filewalker(GWF_CORE_PATH.'module/Audit/challs', 'setup_chall', true, $username);
	
}

$db->free($result);

$db->truncateTable('war_audit_add_user');
?>