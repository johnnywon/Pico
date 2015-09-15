<?php

/**
 * Example hooks for a Pico plugin
 *
 * @author Johnny Won
 * @link @johnnywon
 * @license http://opensource.org/licenses/MIT
 */
class Pico_Emoji
{
	
    public function before_read_file_meta(&$headers)
    {
			$headers['status'] = 'status';
			$headers['updated'] = 'updated';
			$headers['highlight'] = 'highlight';
    }


}

?>
