<?php

/**
 * Per row grading. The total grade is the average of grading received 
 * for reach one of the rows.
 * 
 * Any correct and no wrong answer to get 100% otherwise 0
 *
 * @copyright (c) 2011 University of Geneva
 * @license GNU General Public License - http://www.gnu.org/copyleft/gpl.html
 * @author Laurent Opprecht
 */
class qtype_matrix_grading_any extends qtype_matrix_grading
{

    const TYPE = 'any';

    public static function get_name()
    {
        return self::TYPE;
    }

    public static function get_title()
    {
        return qtype_matrix::get_string(self::TYPE);
    }

    /**
     * Factory 
     * 
     * @return qtype_matrix_grading_any
     */
    public static function create()
    {
        static $result = false;
        if ($result)
        {
            return $result;
        }
        return $result = new self();
    }

    /**
     * Grade a specific row
     * 
     * @param qtype_matrix_question     $question
     * @param object                    $row
     * @param array                     $answers
     * @return float 
     */
    public function grade_row($question, $row, $answers)
    {
        $is_row_correct = false;
        foreach ($question->cols as $col)
        {
            $is_correct = $question->is_correct($row, $col);
            $is_answered = $question->is_answered($answers, $row, $col);
            if ($is_answered && !$is_correct)
            {
                $is_row_correct = false;
                break;
            }
            if ($is_answered && $is_correct)
            {
                $is_row_correct = true;
            }
        }
        return $is_row_correct ? 1 : 0;
    }

    public function validation($data)
    {
        return array();
    }

}