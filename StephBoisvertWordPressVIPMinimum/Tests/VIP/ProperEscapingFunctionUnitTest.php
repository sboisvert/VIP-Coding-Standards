<?php
/**
 * Unit test class for StephBoisvertWordPressVIPMinimum Coding Standard.
 *
 * @package VIPCS\StephBoisvertWordPressVIPMinimum
 */

namespace StephBoisvertWordPressVIPMinimum\Tests\VIP;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

/**
 * Unit test class for the ProperEscapingFunction sniff.
 *
 * @package VIPCS\StephBoisvertWordPressVIPMinimum
 */
class ProperEscapingFunctionUnitTest extends AbstractSniffUnitTest {

	/**
	 * Returns the lines where errors should occur.
	 *
	 * @return array <int line number> => <int number of errors>
	 */
	public function getErrorList() {
		return array(
			3  => 1,
			5  => 1,
			15 => 1,
			17 => 1,
			21 => 1,
			23 => 1,
			33 => 1,
			37 => 1,
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
