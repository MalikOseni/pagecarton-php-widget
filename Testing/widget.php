<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    Testing_widget
 * @copyright  Copyright (c) 2020 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: widget.php Sunday 19th of July 2020 07:28PM hosmaad@gmail.com $
 */

/**
 * @see PageCarton_Widget
 */

class Testing_widget extends PageCarton_Widget
{
	
    /**
     * Access level for player. Defaults to everyone
     *
     * @var boolean
     */
	protected static $_accessLevel = array( 0 );
	
    /**
     * 
     * 
     * @var string 
     */
	protected static $_objectTitle = 'my test widget'; 

    /**
     * Performs the whole widget running process
     * 
     */
	public function init()
    {    
		try
		{ 
            //  Code that runs the widget goes here...

            //  Output demo content to screen
             $this->setViewContent( '<h1>Hello Malik</h1>' ); 
             $this->setViewContent( self::__('
             <a onClick="ayoola.spotlight.showLinkInIFrame(\''.Ayoola_Application::getUrlPrefix().
             '/tools/classplayer/get/name/Ayoola_Object_List/\' 
                 href="javascript:;">Widgets</a><p> This is a PageCarton testing to understand PHP</p>
             ')); 
             $this->setViewContent( '<p style="font-size:smaller;">' . __FILE__ . '</p>' ); 

             // end of widget process
          
		}  
		catch( Exception $e )
        { 
            //  Alert! Clear the all other content and display whats below.
        //    $this->setViewContent( '<p class="badnews">' . $e->getMessage() . '</p>' ); 
            $this->setViewContent( '<p class="badnews">Theres an error in the code</p>' ); 
            return false; 
        }
	}
	// END OF CLASS
}




