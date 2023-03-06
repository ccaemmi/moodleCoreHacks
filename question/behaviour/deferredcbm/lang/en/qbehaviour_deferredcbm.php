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
 * Strings for component 'qbehaviour_deferredcbm', language 'en'.
 *
 * @package    qbehaviour
 * @subpackage deferredcbm
 * @copyright  2009 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['accuracy'] = 'Accuracy';
$string['accuracyandbonus'] = 'CB Accuracy';
$string['accyincludingbonus'] = '{$a} (= Accuracy + CB Bonus)';
$string['accyignoringcertainty'] = '{$a} (= % correct, ignoring certainty)';
$string['answers'] = 'Answers';
$string['assumingcertainty'] = 'You did not select a certainty. Assuming: {$a}.';
$string['attemptwithcbm'] = 'This quiz currently doesn\'t use CBM, but the atttempt was made with CBM';
$string['attemptwithoutcbm'] = 'This quiz currently uses CBM, but this atttempt was made without CBM';
$string['averagecbmmark'] = 'CB Average mark';
$string['basemark'] = 'Base mark {$a}';
$string['breakdownbycertainty'] = 'CBM Break-down by certainty';
$string['cbmbonusexpl'] = '{$a} (for good identification of reliable and unreliable answers)';
$string['cbmbonus'] = 'CB bonus';
$string['cbmmark'] = 'CBM mark {$a}';
$string['cbmgradeexplanation'] = 'With CBM, the Moodle grade (above) can be up to 300% [NB 100% = all correct at C=1].';
$string['cbmgradewithbonus'] = 'For CBM, the grade corresponds to the CB Accuracy for the whole quiz (below).';
$string['cbmgrade'] = 'CB Grade';
$string['cbgradeoutof'] = '{$a->grade} out of {$a->maxgrade} (based on CB accuracy: maximum 100%)';
$string['cbmgrades'] = 'CBM grades';
$string['cbmgrades_help'] = 'With Certainty Based Marking (CBM), all correct with C=1 (low certainty)
        will give a Moodle Grade of 100%. Grades may be up to 300% if every question is correct with C=3 (high certainty).
        Simple Moodle Grades with CBM are not easily compared with Grades not using CBM, unless converted
        to CB Grades (below).  

**Accuracy** is the percentage correct, ignoring certainty but weighted with the values assigned to each question.
        If you successfully distinguish more and less reliable answers, this is reflected in a **CB Bonus**. The **CB Accuracy**
        (=Accuracy + Bonus) is the clearest measure of knowledge. The **CB Grade** is the CB Accuracy multiplied by the
        value assigned to the quiz.

Note that misconceptions (confident errors) can give a negative bonus (or even a negative grade). You can never expect to gain by
        hiding genuine uncertainty. As a fraction of maximum (300%), Moodle Grades with CBM are nearly always much less than
        simple grades or accuracy, so don\'t be misled into thinking you are doing badly! Think about your **Accuracy** and your
        **CB Bonus**. Practice and good judgement should yield a positive bonus, but if it is negative this signals that you need 
        to think more carefully about which things you know or can do reliably, and how to check and justify your answers.';
$string['cbmgrades_link'] = 'qbehaviour/deferredcbm/certaintygrade';
$string['certainty'] = 'Certainty';
$string['certainty_help'] = 'Certainty-Based Marking (CBM) asks how reliable you think your answer is. Choose -

Certainty             | C=1  | C=2  | C=3 
--------------------- | -------- | --------- | ---
Confidence            | **Weak** &nbsp;| &nbsp;**Mid** | **High**
**Mark (if correct)**     | &nbsp;  **1**  | &nbsp; **2**   | &nbsp; **3**
**Mark (if wrong)**       | &nbsp;  **0**  | &nbsp;**-2**   | &nbsp;**-6**
Best if P(correct) is &nbsp; &nbsp;  | **<67%** | **67-80%** &nbsp;|  **>80%**

<br/>To get good marks you must think carefully and acknowledge uncertainty. If there seems more than a 1-in-3 chance of being wrong, enter C=1 to avoid the risk of a negative mark. Don&apos;t risk -6 unless at least 80% sure. 
';
$string['certainty_link'] = 'qbehaviour/deferredcbm/certainty';
$string['certainty-1'] = 'No Idea &nbsp; ';
$string['certainty1'] = 'C=1 &nbsp; ';
$string['certainty2'] = 'C=2 &nbsp; ';
$string['certainty3'] = 'C=3  ';
$string['certaintyshort-1'] = 'No Idea';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'No idea';
$string['foransweredquestions'] = 'CBM results for just the {$a} answered questions';
$string['forentirequiz'] = 'CBM results for the whole quiz ({$a} questions)';
$string['judgementok'] = 'OK';
$string['judgementsummary'] = 'Responses: {$a->responses}. Accuracy: {$a->fraction}. (Optimal range {$a->idealrangelow} to {$a->idealrangehigh}). You were {$a->judgement} using this certainty level.';
$string['howcertainareyou'] = 'Certainty{$a->help}: {$a->choices}';
$string['maxrange'] = '{$a} (range: 3 to -6)';
$string['noquestions'] = 'No responses';
$string['overconfident'] = 'over-confident';
$string['pluginname'] = 'Deferred feedback with CBM';
$string['privacy:metadata'] = 'The Deferred feedback with CBM question behaviour plugin does not store any personal data.';
$string['slightlyoverconfident'] = 'a bit over-confident';
$string['slightlyunderconfident'] = 'a bit under-confident';
$string['totalmarks'] = 'CB total marks';
$string['underconfident'] = 'under-confident';
$string['weightx'] = 'Weight {$a}';
