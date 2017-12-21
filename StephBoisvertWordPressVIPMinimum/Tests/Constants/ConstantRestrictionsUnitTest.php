<?php
/**
 * Unit test class for StephBoisvertWordPressVIPMinimum Coding Standard.
 *
 * @package VIPCS\StephBoisvertWordPressVIPMinimum
 */

namespace StephBoisvertWordPressVIPMinimum\Tests\Constants;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

/**
 * Unit test class for the ConstantRestrictions sniff.
 *
 * @package VIPCS\StephBoisvertWordPressVIPMinimum
 */
class ConstantRestrictionsUnitTest extends AbstractSniffUnitTest {

	/**
	 * Returns the lines where errors should occur.
	 *
	 * @return array <int line number> => <int number of errors>
	 */
	public function getErrorList() {
		return array(
			11 => 1,
			13 => 1,
			15 => 1,
		);
	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * @return array <int line number> => <int number of warnings>
	 */
	public function getWarningList() {
		return array(
			3 => 1,
			7 => 2,
		);

	}

} // End class.
