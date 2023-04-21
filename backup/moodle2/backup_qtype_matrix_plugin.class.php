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

defined('MOODLE_INTERNAL') || die();

/**
 * Provides the information to backup matrix questions
 */
class backup_qtype_matrix_plugin extends backup_qtype_plugin
{

    /**
     * Returns the qtype information to attach to question element
     */
    protected function define_question_plugin_structure()
    {
        // Define the virtual plugin element with the condition to fulfill
        $plugin = $this->get_plugin_element(null, '../../qtype', 'matrix');
        // Create one standard named plugin element (the visible container)
        $name = $this->get_recommended_name();
        $pluginwrapper = new backup_nested_element($name);
        // connect the visible container ASAP
        $plugin->add_child($pluginwrapper);

        // Now create the qtype own structures
        $matrix = new backup_nested_element('matrix', array('id'), array('grademethod', 'multiple', 'shuffleanswers', 'renderer'));
        
        $matrix_cols = new backup_nested_element('cols');
        $matrix_col = new backup_nested_element('col', array('id'), array('shorttext', 'description'));
        
        $matrix_rows = new backup_nested_element('rows');
        $matrix_row = new backup_nested_element('row', array('id'), array('shorttext', 'description', 'feedback'));
        
        $matrix_weights = new backup_nested_element('weights');
        $matrix_weight = new backup_nested_element('weight', array('id'), array('rowid', 'colid', 'weight'));

        // Now the own qtype tree
        $pluginwrapper->add_child($matrix);

        $matrix->add_child($matrix_cols);
        $matrix_cols->add_child($matrix_col);
        
        $matrix->add_child($matrix_rows);
        $matrix_rows->add_child($matrix_row);
        
        $matrix->add_child($matrix_weights);
        $matrix_weights->add_child($matrix_weight);

        // set source to populate the data
        $matrix->set_source_table('question_matrix', array('questionid' => backup::VAR_PARENTID));
        $matrix_col->set_source_table('question_matrix_cols', array('matrixid' => backup::VAR_PARENTID));
        $matrix_row->set_source_table('question_matrix_rows', array('matrixid' => backup::VAR_PARENTID));

        $weight_sql = 'SELECT w.* FROM {question_matrix_weights} AS w, {question_matrix_cols} as c, {question_matrix_rows} as r, {question_matrix} m WHERE ';
        $weight_sql .= 'm.id= :matrixid AND w.rowid=r.id AND w.colid=c.id AND c.matrixid=m.id AND r.matrixid=m.id';
        $matrix_weight->set_source_sql($weight_sql, array('matrixid' => backup::VAR_PARENTID));
        // don't need to annotate ids nor files

        return $plugin;
    }

}
