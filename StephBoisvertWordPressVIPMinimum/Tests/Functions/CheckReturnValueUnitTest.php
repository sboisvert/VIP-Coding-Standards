<?php
/**
 * Unit test class for StephBoisvertWordPressVIPMinimum Coding Standard.
 *
 * @package VIPCS\StephBoisvertWordPressVIPMinimum
 */

namespace StephBoisvertWordPressVIPMinimum\Tests\Functions;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

/**
 * Unit test class for the CheckReturnValue sniff.
 *
 * @package VIPCS\StephBoisvertWordPressVIPMinimum
 */
class CheckReturnValueUnitTest extends AbstractSniffUnitTest {

	/**
	 * Returns the lines where errors should occur.
	 *
	 * @return array <int line number> => <int number of errors>
	 */
	public function getErrorList() {
		return array(
			5  => 1,
			9  => 1,
			14 => 1,
			16 => 1,
			19 => 1,
			23 => 1,
		);
	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * @return array <int line number> => <int number of warnings>
	 */
	public function getWarningList() {
		return array();

	}

} // End class.
