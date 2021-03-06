<?php
/**
 *
 * @package    mahara
 * @subpackage core
 * @author     Ruslan Kabalin <ruslan.kabalin@luns.net.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 * @copyright  (C) 2010 Lancaster University Network Services Limited
 *                      http://www.luns.net.uk
 *
 */

define('INTERNAL', 1);
// OVERWRITE 1: deletion
// define('ADMIN', 1);
// END OVERWRITE 1
define('JSON', 1);

require(dirname(dirname(dirname(__FILE__))) . '/init.php');
// OVERWRITE 2: insert
define('INSTITUTIONALADMIN', 1);
global $CFG;
if (!$CFG->current_app->hasPrivilege('EschoolAdmin'))
{
    $CFG->current_app->gcError('Unprivileged attempted access to /site/pages.php', 
            'gcpageaccessdenied');
}
// END OVERWRITE 2
require_once('group.php');
require_once('searchlib.php');

$query  = param_variable('query', '');
$offset = param_integer('offset', 0);
$limit = 10;

$data = build_grouplist_html($query, $limit, $offset, $count);
$data['count'] = $count;
$data['offset'] = $offset;
$data['query'] = $query;

json_reply(false, array('data' => $data));
