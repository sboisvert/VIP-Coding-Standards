<?php
/**
 * Unit test class for WordPressVIPMinimum Coding Standard.
 *
 * @package VIPCS\WordPressVIPMinimum
 */

/**
 * Unit test class for the Variable Analysis sniff.
 *
 * @package VIPCS\WordPressVIPMinimum
 */
class WordPressVIPMinimum_Tests_Variables_VariableAnalysisUnitTest extends AbstractSniffUnitTest {

	/**
	 * Returns the lines where errors should occur.
	 *
	 * @return array <int line number> => <int number of errors>
	 */
	public function getErrorList() {
		return array();
	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * @return array <int line number> => <int number of warnings>
	 */
	public function getWarningList() {
		return array(
			5 => 2,
		);

	}

} // End class.