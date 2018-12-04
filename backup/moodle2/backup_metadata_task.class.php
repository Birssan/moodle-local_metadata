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
 *
 * @package   local_metadata
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

require_once $CFG->dirroot . '/local/metadata/backup/moodle2/backup_metadata_stepslib.php';

class backup_metadata_task extends backup_task
{
    /**
     * Define (add) particular settings this local plugin can have
     */
    protected function define_my_settings()
    {
        // No particular settings for this local plugin
    }

    /**
     * Define (add) particular steps this local plugin can have
     */
    protected function define_my_steps()
    {
        $this->add_step(new backup_metadata_structure_step('metadata_structure', 'metadata.xml'));
    }

    /**
     * Code the transformations to perform in the local plugin in
     * order to get transportable (encoded) links
     */
    public static function encode_content_links($content)
    {
        return $content;
    }
}
