<?php
$user = GWF_Session::getUser();
$mb = Module_BAIM::getInstance();
echo GWF_Box::box($mb->lang('dl_info_b', array(GWF_Time::humanDuration(BAIM_MC::CHANGE_TIMEOUT)), $mb->lang('dl_info_t')));

$headers = array(
	array($tLang->lang('th_dl_id'), 'dl_id'),
	array($tLang->lang('th_dl_filename'), 'dl_filename'),
	array($tLang->lang('th_dl_price'), 'dl_price'),
	array($tLang->lang('th_purchases'), 'dl_purchases'),
	array($tLang->lang('th_user_name'), 'user_name'),
	array($tLang->lang('th_dl_count'), 'dl_count'),
	array($tLang->lang('th_dl_descr'), 'dl_descrs'),
	array($tLang->lang('th_vs_avg'), 'vs_avg'),
	array(),
);
echo $tVars['page_menu'];
echo '<table>';
echo GWF_Table::displayHeaders1($headers);
foreach ($tVars['downloads'] as $dl)
{
	$dl instanceof GWF_Download;
	$href = $dl->hrefDownload();
	$u = $dl->getUser();
	$v = $dl->getVotes();
	$editbtn = $dl->mayEdit($user) ? GWF_Button::edit($dl->hrefEdit(), $tLang->lang('btn_edit')) : '';
	$onclick = sprintf("return confirm('%s')", $tLang->lang('prompt_download'));
	echo GWF_Table::rowStart();
	echo sprintf('<td>%s%s</td>', $editbtn, $dl->getVar('dl_id'));
	echo sprintf('<td><a href="%s" onclick="%s">%s</a></td>', $href, $onclick, $dl->display('dl_filename'));
	echo sprintf('<td class="gwf_num">%s</td>', $dl->displayPrice());
	echo sprintf('<td class="gwf_num">%s</td>', $dl->getVar('dl_purchases'));
	if ($dl->isUsernameHidden()) {
		echo '<td></td>';
	} else {
		echo sprintf('<td><a href="%s">%s</a></td>', GWF_WEB_ROOT.'profile/'.$u->urlencode('user_name'), $u->display('user_name'));
	}
	echo sprintf('<td class="gwf_num"><a href="%s" onclick="%s">%s</a></td>', $href, $onclick, $dl->getVar('dl_count'));
	echo sprintf('<td><a href="%s" onclick="%s" title="%s">%s</a></td>', $href, $onclick, $dl->display('dl_descr'), GWF_HTML::display(Common::stripMessage($dl->getVar('dl_descr'), 50)));
	echo sprintf('<td class="gwf_num"><a id="gwf_vsba_%d" href="%s" onclick="%s">%.02f%%</a></td>', $v->getID(), $href, $onclick, $v->getAvgPercent());
	echo sprintf('<td>%s</td>', $v->displayButtons());
	echo GWF_Table::rowEnd();
}
echo '</table>';

if ($tVars['may_upload']) {
	echo GWF_Button::add($tLang->lang('btn_add'), $tVars['href_add']);
}

?>
