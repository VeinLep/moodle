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
 * Rates form
 *
 * @package    local_staffmanager
 * @copyright  2020 Ricoshae Pty Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once("$CFG->libdir/formslib.php");

class rates_form extends moodleform
{
    //Add elements to form
    public function definition()
    {
        global $CFG;


        $mform = $this->_form; // Don't forget the underscore!
        $mform->addElement('html', '<strong></strong><br><br>');


        $mform->addElement('filepicker', 'userdatafile', 'Thumbnail', get_string('file'));
        
        $mform->addElement('text', 'month', 'Nama Buku', ' size="100%" '); 
        $mform->setType('month', PARAM_TEXT);                  
        $mform->setDefault('month', '');       

        $mform->addElement('text', 'year', 'Penulis', ' size="100%" '); 
        $mform->setType('year', PARAM_TEXT);                  
        $mform->setDefault('year', '');        

        $mform->addElement('filepicker', 'userdatafile', 'EPUB',get_string('file'));

        $mform->addElement('filepicker', 'userdatafile', 'PDF',get_string('file'));
        
        $mform->addElement('filepicker', 'userdatafile', 'H5P',get_string('file'));

        $buttonarray=array();
        $buttonarray[] = $mform->createElement('submit', 'Submit', 'Save');
        $buttonarray[] = $mform->createElement('cancel');
        $mform->addgroup($buttonarray, 'buttonar', '', ' ', false);

    }
    //Custom validation should be added here
    public function validation($data, $files)
    {
        return array();
    }
}
