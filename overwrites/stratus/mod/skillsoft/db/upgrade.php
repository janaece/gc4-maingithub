<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * This file keeps track of upgrades to the olsasso module
 *
 * Sometimes, changes between versions involve alterations to database
 * structures and other major things that may break installations. The upgrade
 * function in this file will attempt to perform all the necessary actions to
 * upgrade your older installtion to the current version. If there's something
 * it cannot do itself, it will tell you what you need to do.  The commands in
 * here will all be database-neutral, using the functions defined in
 * lib/ddllib.php
 *
 * @package   mod-olsa
 * @author 	  Martin Holden
 * @copyright 2009-2011 Martin Holden
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * xmldb_skillsoft_upgrade
 *
 * @param int $oldversion
 * @return bool
 */

function xmldb_skillsoft_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager();

    $result = true;


//	// Adding missing 'intro' and 'introformat' field to table skillsoft
    if ($result && $oldversion < 2011080100) {
        $table = new xmldb_table('skillsoft');
        $summaryfield = new xmldb_field('summary', XMLDB_TYPE_TEXT, 'small', null, XMLDB_NOTNULL, null, null, 'name');

	    /// Launch rename field summary
        $dbman->rename_field($table, $summaryfield, 'intro');


        //Add intr0format
        $introformatfield = new xmldb_field('introformat', XMLDB_TYPE_INTEGER, '4', XMLDB_UNSIGNED, null, null, '1', 'intro');
		if (!$dbman->field_exists($table,$introformatfield)) {
        	$dbman->add_field($table, $introformatfield);
		}

		upgrade_mod_savepoint(true, 2011080100, 'skillsoft');
        $result = true;
    }

    if ($result && $oldversion < 2011080500) {
    	upgrade_mod_savepoint(true, 2011080500, 'skillsoft');
    	$result = true;
    }

    if ($result && $oldversion < 2011080600) {
	    	upgrade_mod_savepoint(true, 2011080600, 'skillsoft');
	    	$result = true;
    }

    if ($result && $oldversion < 2011080601) {
	    	upgrade_mod_savepoint(true, 2011080601, 'skillsoft');
	    	$result = true;
    }


    if ($result && $oldversion < 2011080602) {
	    	upgrade_mod_savepoint(true, 2011080602, 'skillsoft');
	    	$result = true;
    }

    if ($result && $oldversion < 2011090100) {
	    	upgrade_mod_savepoint(true, 2011090100, 'skillsoft');
	    	$result = true;
    }

    if ($result && $oldversion < 2011092000) {
	    	upgrade_mod_savepoint(true, 2011092000, 'skillsoft');
	    	$result = true;
    }

	if ($result && $oldversion < 2012022900) {
			// Drop the index on the skillsoft_report_results table as it may
			// prvent upgrades to Moodle 2.2 which introduces restrictive checks
			// on indexes see http://tracker.moodle.org/browse/MDL-29314
			 
			// Define index loginname-assetid-firstaccessdate (unique) to be dropped form skillsoft_report_results
	        $table = new xmldb_table('skillsoft_report_results');
	        $index = new xmldb_index('loginname-assetid-firstaccessdate', XMLDB_INDEX_UNIQUE, array('loginname', 'assetid', 'firstaccessdate'));
	
	        // Conditionally launch drop index loginname-assetid-firstaccessdate
	        if ($dbman->index_exists($table, $index)) {
	            $dbman->drop_index($table, $index);
	        }
		
	    	upgrade_mod_savepoint(true, 2012022900, 'skillsoft');
	    	$result = true;
    }

	if ($result && $oldversion < 2012081000) {
	    	upgrade_mod_savepoint(true, 2012081000, 'skillsoft');
	    	$result = true;
    }
    
    if ($result && $oldversion < 2012090700) {
    	upgrade_mod_savepoint(true, 2012090700, 'skillsoft');
    	$result = true;
    }

    if ($result && $oldversion < 2013010200) {
    	upgrade_mod_savepoint(true, 2013010200, 'skillsoft');
    	$result = true;
    }
    
    if ($result && $oldversion < 2013051400) {
    	upgrade_mod_savepoint(true, 2013051400, 'skillsoft');
    	$result = true;
    }
    
    if ($result && $oldversion < 2013091300) {
    	upgrade_mod_savepoint(true, 2013091300, 'skillsoft');
    	$result = true;
    }
    
if ($result && $oldversion < 2014051300) {
    	upgrade_mod_savepoint(true, 2014051300, 'skillsoft');
    	$result = true;
    }
    
	return $result;
}