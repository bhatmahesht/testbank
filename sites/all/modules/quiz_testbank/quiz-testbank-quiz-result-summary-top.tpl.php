<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * $result_id => stores result id
 * $result => Stores details about result
 * $quiz => Information about the quiz that result belongs to
 * $user => Information about teh user who took the quiz
 */
?>

<div id ="quiz_results_summary_top">
		<h3>
				<?php print $quiz->title ?>
		</h3>
		<div> Quiz Start Time : <?php print date('M d Y H:i:s', $result->time_start); ?> <br>
				Quiz End Time : <?php print date('M d Y H:i:s' , $result->time_end) ?> <br>
				Total items : <?php print $quiz->total_questions ?> <br>
				Correct items : <?php print $result->correct_questions ?> <br>
				Passing Score for the Quiz : <?php print $quiz->pass_rate ?> <br>
				Score Taken by the User : <?php print $result->score ?> <br>
		</div>
</div>