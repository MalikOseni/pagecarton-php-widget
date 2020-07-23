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




<div class="section">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <figure class="img-dotted-bg"><img src="/layout/pc_layout_inova/images/about_2.jpg" alt="Image" class="img-fluid"></figure>
</div>
        <div class="col-md-5 ml-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
          <h2 class="mb-4 section-title">History of &nbsp; {Organization Name}</h2>
          <p>{Background History Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip ex ea consequat.}</p>
          
        </div>
      </div>

    </div>
  </div>




  <div class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <figure class="img-dotted-bg"><img src="/layout/pc_layout_inova/images/hero_2.jpg" alt="Image" class="img-fluid"></figure>
            </div>
            <div class="col-md-5 mr-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
                <h2 class="mb-4 section-title">About &nbsp;{Organization Name}</h2>
                <p>{Short About Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius repellat, dicta at laboriosam, nemo exercitationem itaque eveniet architecto cumque, deleniti commodi molestias repellendus quos sequi hic fugiat asperiores illum. Atque, in, fuga excepturi corrupti error corporis aliquam unde nostrum quas.}</p>
                <p>{More About Accusantium dolor ratione maiores est deleniti nihil? Dignissimos est, sunt nulla illum autem in, quibusdam cumque recusandae, laudantium minima repellendus.} </p>
            </div>
        </div>
    </div>
</div>
