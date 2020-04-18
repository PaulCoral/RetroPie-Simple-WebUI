<?php
/*
 * Use this in form process to check $_POST super global variable
 */
	
	/*
	 * DON'T USE THIS ONE. UTILITARY FUNCTION.
	 *
	 * Print error message in check functions bellow
	 * string $return_addr : the link leading to a form form corrections
	 */
	function print_error_post_msg(string $return_addr){
		echo	"<html>
					<head>
						<title>ERROR : BAD FORM POST</title>
					</head>
					<body>
						<h1>ERROR : BAD FORM POST</h1>
						<strong>Error</strong> : something went wrong. <a href=\"".$return_addr."\">Try Again</a>
					</body>
				</html>
			";
	}

	/*
	 * Stop script and print error msg if $_POST dont have $expected_count number of element
	 *
	 * int $expected_count : the expected number of elements in $_POST
	 * string $return_addr : the link leading to a form form corrections, HOME PAGE by default
	 */
	function check_post_expected(int $expected_count, $return_addr="/"){
		if(count($_POST) != $expected_count){
			print_error_post_msg($return_addr);
			exit();
		}
	}


	/*
	 * Stop programm and print error msg if $_POST has NO elements.
	 *
	 * string $return_addr : the link leading to a form form corrections, HOME PAGE by default
	 */
	function check_post_zero($return_addr="/"){
		if(count($_POST) == 0){
			print_error_post_msg($return_addr);
			exit();
		}
	}
?>
