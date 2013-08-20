<?php
/* SVN FILE: $Id$ */
/**
 * [ADMIN] ウィジェットエリア管理メニュー
 *
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2013, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2013, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.views
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
?>


<tr>
	<th>ウィジェットエリア管理メニュー</th>
	<td>
		<ul class="cleafix">
			<li><?php $bcBaser->link('一覧を表示する', array('controller' => 'widget_areas', 'action' => 'index')) ?></li>
			<li><?php $bcBaser->link('新規に登録する', array('controller' => 'widget_areas', 'action' => 'add')) ?></li>
		</ul>
	</td>
</tr>