<?php

	class Cosby {

		/* Get a single Bill */
		static function single($no) {
			echo "<div class='col-lg-3 col-md-12 center' style='min-height: 200px;'>";
			echo "<img class='thumbnail' src='http://www.placecosby.com/250/200/?image=" . $no . "'>";
			echo "</div>";
		}

		/* Make a whole row of Cosbys. Accepts column count argument, but 4 is default and reccomended. */
		static function row($col = 4) {
			echo "<div class='row'>";
			for ($i = 0; $i < $col; $i++) {
				$no = rand(0, 29);
				Cosby::single($no);
				error_log('added row');
			}
			echo "</div>";
		}

	}