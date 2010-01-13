<?

/*	Copyright Deakin University 2007,2008
 *	Written by Adam Zammit - adam.zammit@deakin.edu.au
 *	For the Deakin Computer Assisted Research Facility: http://www.deakin.edu.au/dcarf/
 *	
 *	This file is part of queXF
 *	
 *	queXF is free software; you can redistribute it and/or modify
 *	it under the terms of the GNU General Public License as published by
 *	the Free Software Foundation; either version 2 of the License, or
 *	(at your option) any later version.
 *	
 *	queXF is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU General Public License for more details.
 *	
 *	You should have received a copy of the GNU General Public License
 *	along with queXF; if not, write to the Free Software
 *	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 */



/* DEFAULT CONFIGURATION FILE */

/* NOTE: Do not modify this file
 * Make your changes in the file: config.inc.php by defining any directive you wish to change
 *
 * For example, if you wish to change the ADODB_DIR, do the following in config.inc.php:
 *
 * define('ADODB_DIR', dirname(__FILE__).'/../adodb/');
 *
 */

if (!defined('DB_USER')) define('DB_USER', 'phpteleform');
if (!defined('DB_PASS')) define('DB_PASS', 'phpteleform');
if (!defined('DB_HOST')) define('DB_HOST', 'database.dcarf');
if (!defined('DB_NAME')) define('DB_NAME', 'phpteleform');
if (!defined('DB_TYPE')) define('DB_TYPE', 'mysqlt');

if (!defined('ADODB_DIR')) define('ADODB_DIR', dirname(__FILE__).'/../adodb/');

//Fill ratios of boxes (1 is empty, 0 is filled completely)
if (!defined('MULTIPLE_CHOICE_MIN_FILLED')) define('MULTIPLE_CHOICE_MIN_FILLED', 0.85);
if (!defined('MULTIPLE_CHOICE_MAX_FILLED')) define('MULTIPLE_CHOICE_MAX_FILLED', 0.60);
if (!defined('SINGLE_CHOICE_MIN_FILLED')) define('SINGLE_CHOICE_MIN_FILLED', 0.85);
if (!defined('SINGLE_CHOICE_MAX_FILLED')) define('SINGLE_CHOICE_MAX_FILLED', 0.60);

//Blank page detection
if (!defined('BLANK_PAGE_DETECTION')) define('BLANK_PAGE_DETECTION', true);
if (!defined('PROCESS_MISSING_PAGES')) define('PROCESS_MISSING_PAGES',true);

//REQUIRED: Ghostscript binary
if (!defined('GS_BIN')) define('GS_BIN', "/usr/bin/gs");

//PHP Executables (for forking when running background processes)
if (!defined('WINDOWS_PHP_EXEC')) define('WINDOWS_PHP_EXEC', "start /b php");
if (!defined('PHP_EXEC')) define('PHP_EXEC', "php");

//Temporary directory
if (!defined('TEMPORARY_DIRECTORY')) define('TEMPORARY_DIRECTORY', "/tmp");

//OCR requires CONVERT_BIN (imagemagick convert binary) and TESSERACT_BIN (tessearct binary) to be enabled
if (!defined('OCR_ENABLED')) define('OCR_ENABLED', false);
if (!defined('OCR_FILL_MIN')) define('OCR_FILL_MIN', 0.95);
if (!defined('BOX_EDGE')) define('BOX_EDGE',5); //take this many pixels of the side due to form box drawing
if (!defined('CONVERT_BIN')) define('CONVERT_BIN', "/usr/bin/convert");
if (!defined('TESSERACT_BIN')) define('TESSERACT_BIN', "/usr/bin/tesseract");

//Page size
if (!defined('PAGE_WIDTH')) define('PAGE_WIDTH',2480);
if (!defined('PAGE_HEIGHT')) define('PAGE_HEIGHT',3508);

//Display variables
if (!defined('DISPLAY_PAGE_WIDTH')) define('DISPLAY_PAGE_WIDTH',800);
if (!defined('DISPLAY_GAP')) define('DISPLAY_GAP',40); //number of pixels higher than the box group for top of page

//Box group
if (!defined('BOX_GROUP_BACKGROUND_COLOUR')) define('BOX_GROUP_BACKGROUND_COLOUR','orange'); //colour for the box group background (HTML colours)
if (!defined('BOX_GROUP_BACKGROUND_OPACITY')) define('BOX_GROUP_BACKGROUND_OPACITY',0.40);
if (!defined('BOX_OPACITY')) define('BOX_OPACITY',0.25); //opacity of a box
if (!defined('BOX_SELECT_COLOUR')) define('BOX_SELECT_COLOUR','green');
if (!defined('BOX_FOCUS_COLOUR')) define('BOX_FOCUS_COLOUR','yellow');
if (!defined('BOX_BACKGROUND_COLOUR')) define('BOX_BACKGROUND_COLOUR','white');

//Banding 
if (!defined('TEMPORARY_COLOUR')) define('TEMPORARY_COLOUR','red');
if (!defined('SINGLECHOICE_COLOUR')) define('SINGLECHOICE_COLOUR','green');
if (!defined('MULTIPLECHOICE_COLOUR')) define('MULTIPLECHOICE_COLOUR','blue');
if (!defined('TEXT_COLOUR')) define('TEXT_COLOUR','purple');
if (!defined('NUMBER_COLOUR')) define('NUMBER_COLOUR','orange');
if (!defined('BARCODE_COLOUR')) define('BARCODE_COLOUR','brown');
if (!defined('LONGTEXT_COLOUR')) define('LONGTEXT_COLOUR','pink');
if (!defined('BAND_OPACITY')) define('BAND_OPACITY',0.60);
if (!defined('BAND_DEFAULT_ZOOM')) define('BAND_DEFAULT_ZOOM',3);

//Approximate widths of page guide lines (in pixels)
if (!defined('HORI_WIDTH')) define('HORI_WIDTH',6);
if (!defined('VERT_WIDTH')) define('VERT_WIDTH',6);

//Locations of page guide lines bounding box (in pixels)
//Top left horizontal
if (!defined('TL_HORI_TLX')) define('TL_HORI_TLX',90);
if (!defined('TL_HORI_TLY')) define('TL_HORI_TLY',60);
if (!defined('TL_HORI_BRX')) define('TL_HORI_BRX',480);
if (!defined('TL_HORI_BRY')) define('TL_HORI_BRY',280);

//Top left vertical
if (!defined('TL_VERT_TLX')) define('TL_VERT_TLX',90);
if (!defined('TL_VERT_TLY')) define('TL_VERT_TLY',90);
if (!defined('TL_VERT_BRX')) define('TL_VERT_BRX',280);
if (!defined('TL_VERT_BRY')) define('TL_VERT_BRY',480);

//Top right horizontal
if (!defined('TR_HORI_TLX')) define('TR_HORI_TLX',1980);
if (!defined('TR_HORI_TLY')) define('TR_HORI_TLY',60);
if (!defined('TR_HORI_BRX')) define('TR_HORI_BRX',2370);
if (!defined('TR_HORI_BRY')) define('TR_HORI_BRY',280);

//Top right vertical
if (!defined('TR_VERT_TLX')) define('TR_VERT_TLX',2210);
if (!defined('TR_VERT_TLY')) define('TR_VERT_TLY',90);
if (!defined('TR_VERT_BRX')) define('TR_VERT_BRX',2400);
if (!defined('TR_VERT_BRY')) define('TR_VERT_BRY',480);

//Bottom left horizontal
if (!defined('BL_HORI_TLX')) define('BL_HORI_TLX',90);
if (!defined('BL_HORI_TLY')) define('BL_HORI_TLY',3190);
if (!defined('BL_HORI_BRX')) define('BL_HORI_BRX',480);
if (!defined('BL_HORI_BRY')) define('BL_HORI_BRY',3400);

//Bottom left vertical
if (!defined('BL_VERT_TLX')) define('BL_VERT_TLX',90);
if (!defined('BL_VERT_TLY')) define('BL_VERT_TLY',3000);
if (!defined('BL_VERT_BRX')) define('BL_VERT_BRX',280);
if (!defined('BL_VERT_BRY')) define('BL_VERT_BRY',3390);

//Bottom right horizontal
if (!defined('BR_HORI_TLX')) define('BR_HORI_TLX',1980);
if (!defined('BR_HORI_TLY')) define('BR_HORI_TLY',3190);
if (!defined('BR_HORI_BRX')) define('BR_HORI_BRX',2370);
if (!defined('BR_HORI_BRY')) define('BR_HORI_BRY',3400);

//Bottom right vertical
if (!defined('BR_VERT_TLX')) define('BR_VERT_TLX',2210);
if (!defined('BR_VERT_TLY')) define('BR_VERT_TLY',3000);
if (!defined('BR_VERT_BRX')) define('BR_VERT_BRX',2400);
if (!defined('BR_VERT_BRY')) define('BR_VERT_BRY',3390);

//Barcode position on page (bounding box)
if (!defined('BARCODE_TLX')) define('BARCODE_TLX',1500); //Top left X
if (!defined('BARCODE_TLY')) define('BARCODE_TLY',1); //Top left Y
if (!defined('BARCODE_BRX')) define('BARCODE_BRX',2327); //Bottom right X
if (!defined('BARCODE_BRY')) define('BARCODE_BRY',200); //Bottom right Y

//Line widths
if (!defined('VAS_LENGTH_MIN')) define('VAS_LENGTH_MIN',1200); //Length in pixels of a VAS line
if (!defined('VAS_LENGTH_MAX')) define('VAS_LENGTH_MAX',1236); //Length in pixels of a VAS line
if (!defined('VAS_BOXES')) define('VAS_BOXES',100); //Number of boxes to generate for a VAS line
if (!defined('VAS_BOX_WIDTH')) define('VAS_BOX_WIDTH',12); //width of VAS boxes generated in pixels

//Box widths
if (!defined('MIN_BOX_WIDTH')) define('MIN_BOX_WIDTH',4); //minimum width of a box in pixels

//Time to wait before checking directory for new files (in seconds)
if (!defined('PROCESS_SLEEP')) define('PROCESS_SLEEP',3600); 

//Whether to check if a scan is to be split (side by side scanning, i.e. A3 size with two pages side by side, to be split to 2 x A4)
if (!defined('SPLIT_SCANNING')) define('SPLIT_SCANNING',true);
if (!defined('SPLIT_SCANNING_THRESHOLD')) define('SPLIT_SCANNING_THRESHOLD',10);

//The length of a barcode for the page id
if (!defined('BARCODE_LENGTH_PID')) define('BARCODE_LENGTH_PID',8); //Length in chars of a barcode identifying a page

?>
