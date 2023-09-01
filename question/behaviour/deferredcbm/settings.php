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
 * Settings to enable CBM accuracy and bonus
 *
 * @package   qbehaviour_deferredcbm
 * @copyright
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$settings = new admin_settingpage("deferredcbmsettings", get_string('adminpagevisiblename', 'qbehaviour_deferredcbm'));

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_heading('enablecbmaccuracy', get_string('adminpagevisiblename', 'qbehaviour_deferredcbm'), ''));
    $settings->add(new admin_setting_configcheckbox('qbehaviour_deferredcbm/enableaccuracyandbonus', get_string('checkaccuracyandbonus_visiblename', 'qbehaviour_deferredcbm'), get_string ('checkaccuracyandbonus_desc', 'qbehaviour_deferredcbm'), 1));
}
