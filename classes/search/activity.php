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
 * mod_zatuk activity class
 *
 * @package   mod_zatuk
 * @copyright 2023 Moodle India
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_zatuk\search;


/**
 * Search area for mod_zatuk activities.
 *
 * @package    mod_zatuk
 * @copyright  2016 Dan Poltawski
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class activity extends \core_search\base_activity {

    /**
     * Returns the document associated with this activity.
     *
     * Overwrites base_activity to add the provided URL as description.
     *
     * @param stdClass $record
     * @param array    $options
     * @return \core_search\document
     */
    public function get_document($record, $options = []) {
        $doc = parent::get_document($record, $options);
        if (!$doc) {
            return false;
        }
        $doc->set('description1', $record->externalurl);
        return $doc;
    }
}
