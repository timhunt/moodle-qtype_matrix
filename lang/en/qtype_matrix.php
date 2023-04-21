<?php

// qtype strings

$string['pluginname'] = 'Matrix/Kprime';
$string['pluginnamesummary'] = 'In matrix questions various statements regarding a common subject have to be rated correctly. In Kprime questions exactly four such statements have to be correctly rated as “true” or “false”.';
$string['pluginnameadding'] = 'Adding a Matrix/Kprime question';
$string['pluginnameediting'] = 'Editing a Matrix/Kprime question';
$string['pluginname_help'] = 'Matrix questions consist of an item stem such as a question or incomplete statement, and multiple answer statements, such as corresponding answers or completions. Students rate these statements as “true” or “false”. Alternatively, custom ratings for the answer statements may be defined.
Kprime questions consist of an item stem and four corresponding answer statements. For each answer statement students have to decide whether it is right or wrong.';

$string['grademethod_help'] = '
* *Kprime*: The student receives one point, if all responses are correct, half a point if one response is wrong and the rest of responses are correct, and zero points otherwise.
* *Kprime1/0*: The student receives one point, if all responses are correct, and zero points otherwise. The scoring methods Kprime and Kprime1/0 should only be used for questions with exactly four answer statements.
* *Subpoints*: The student is awarded subpoints for each correct response.';



$string['pluginname_link'] = 'question/type/matrix';

//gradings
$string['all'] = 'Subpoints';
$string['kany'] = 'Kprime (at least one correct, no wrong answer)  ';
$string['kprime'] = "Kprime1/0";

//strings
$string['true'] = 'True';
$string['false'] = 'False';

//form
$string['multipleallowed'] = 'Allow multiple responses per answer statement?';

$string['grademethod'] = 'Scoring method';

//$string['renderer'] = 'Renderer';

$string['rowsheader'] = 'Matrix rows';
$string['rowsheader_desc'] = 'The Answer statement will be displayed, with the Description as a tooltip. Be mindful of how this will look.

Students can select multiple or single columns per row, depending on how the question has been configured, with each row receives a grade defined by one of the grading methods.

The final grade for the question is an average of their grades for each of the rows with the exception of the Kprime type where all answers have to be correct.';

$string['rows_shorttext'] = 'Answer statement';
$string['rows_description'] = 'Description';
$string['rows_feedback'] = 'Feedback';

//$string['addmorerows'] = 'Add {$a} more rows';

$string['colsheader'] = 'Matrix columns';
$string['colsheader_desc'] = 'The Response will be used when it is present, with the Description as a tooltip. Be mindful of how this will look.

Students can select multiple or single columns per row, depending on how the question has been configured, and each row receives a grade, defined by one of the grading methods.

The final grade for the question is an average of their grades for each of the rows with the exeption of the Kprime type where all answers have to be correct.';

$string['cols_shorttext'] = 'Response';
$string['cols_description'] = 'Description';

//$string['addmorecols'] = 'Add {$a} more columns';

$string['refresh_matrix'] = 'Refresh response matrix';

//$string['updatematrix'] = 'Update matrix to reflect new options';
$string['matrixheader'] = 'Response matrix';

$string['mustdefine1by1'] = 'You must define at least a 1 × 1 matrix; with either short or long answer defined for each row and column.';
$string['mustaddupto100'] = 'The sum of all non negative weights in each row must be 100%.';
$string['weightednomultiple'] = 'It does not make sense to choose weighted grading with multiple answers not allowed.';
$string['oneanswerperrow'] = 'You must provide an answer for each row.';

$string['shuffleanswers'] = 'Shuffle answer statements?';
$string['shuffleanswers_help'] = 'If enabled, the order of the answer statements is randomly shuffled for each attempt, provided that “Shuffle within questions” in the activity settings is also enabled.';
$string['show_non_kprime_gui'] = 'Show graphical user interface for options which are not strictly kprime matrix options (more than four rows, more than two columsn, multiple options).';

$string['allow_dnd_ui'] = 'Allow usage of Drag &amp; Drop UI';
$string['allow_dnd_ui_descr'] = 'If allowed, the teachers will have the possibility to enable the Drag &amp; Drop feature to any Matrix questions';
$string['use_dnd_ui'] = 'Use drag &amp; drop?';
$string['privacy:metadata'] = 'The Kprime/Matrix Question Type plugin does not store any personal data.';

