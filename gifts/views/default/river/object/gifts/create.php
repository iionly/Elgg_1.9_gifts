<?php
/**
 * Elgg Gifts plugin
 * Send gifts to you friends
 *
 * @package Gifts
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Christian Heckelmann
 * @copyright Christian Heckelmann
 * @link http://www.heckelmann.info
 *
 * updated for Elgg 1.8 and 1.9 by iionly (iionly@gmx.de)
 */

// THANK YOU DDFUSION
// Added Fix from DDFusion

$performed_by = $vars['item']->getSubjectEntity();
$performed_on = $vars['item']->getObjectEntity();
$object = $vars['item']->getObjectEntity();

$person_link = "<a href=\"{$performed_by->getURL()}\">{$performed_by->name}</a>";
$object_link = "<a href=\"{$performed_on->getURL()}\">{$performed_on->name}</a>";
$gift = "<a href=\"".elgg_get_site_url()."gifts/".elgg_get_logged_in_user_entity()->username."/index\">".elgg_echo("gifts:gift")."</a>";

$string = elgg_echo("gifts:river", array($object_link, $gift))  . " <a href=\"{$performed_by->getURL()}\">" . $performed_by->name . "</a> ";

echo elgg_view('river/elements/layout', array(
        'item' => $vars['item'],
        'message' => $string,
));