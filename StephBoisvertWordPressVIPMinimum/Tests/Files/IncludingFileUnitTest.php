<?php
/**
 * Unit test class for StephBoisvertWordPressVIPMinimum Coding Standard.
 *
 * @package VIPCS\StephBoisvertWordPressVIPMinimum
 */

namespace StephBoisvertWordPressVIPMinimum\Tests\Files;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;
/**
 * Unit test class for the IncludingFile sniff.
 *
 * @package VIPCS\StephBoisvertWordPressVIPMinimum
 */
class IncludingFileUnitTest extends AbstractSniffUnitTest {

	/**
	 * Returns the lines where errors should occur.
	 *
	 * @return array <int line number> => <int number of errors>
	 */
	public function getErrorList() {
		return array(
			5 => 1,
		);
	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * @return array <int line number> => <int number of warnings>
	 */
	public function getWarningList() {
		return array(
			9  => 1,
			11 => 1,
		);

	}

} // End class.
