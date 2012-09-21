<!-- Header. -->
<div id="header">

    <div id="header-inside">
    
        <div id="header-inside-left">
            
            <?php if ($logo): ?>
            <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
            <?php endif; ?>
     
            <?php if ($site_name || $site_slogan): ?>
            <div class="clearfix">
            <?php if ($site_name): ?>
            <span id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></span>
            <?php endif; ?>
            <?php if ($site_slogan): ?>
            <span id="slogan"><?php print $site_slogan; ?></span>
            <?php endif; ?>
            </div><!-- /site-name-wrapper -->
            <?php endif; ?>
            
        </div>
            
        <div id="header-inside-right">
		<?php print render($page['search_area']); ?>    
        </div>
    
    </div><!-- EOF: #header-inside -->

</div><!-- EOF: #header -->

<!-- Header Menu. -->
<div id="header-menu">

<div id="header-menu-inside">
    <?php 
	if (module_exists('i18n_menu')) {
	$main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
	} else {
	$main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
	}
	print drupal_render($main_menu_tree);
	?>
</div><!-- EOF: #header-menu-inside -->

</div><!-- EOF: #header-menu -->

<!-- Banner. -->
<div id="banner">

	<?php print render($page['banner']); ?>
	
    <?php if (theme_get_setting('slideshow_display','corporateclean')): ?>
    
    <?php if ($is_front): ?>
    
    <!--slideshow-->
    <div id="slideshow">

        <!--slider-item-->
        <div class="slider-item">
            <div class="content">
                
                <!--slider-item content-->
		<div style="float:left; padding:0 30px 0 0">
                <img height="100px" class="masked" src="http://quakesim.org/sites/quakesim.org/files/pictures/field/image/Sachs.jpeg"/>
                </div>                <h2><a href="http://quakesim.org/recognition/michael-sachs-awarded-nasa-fellowship">Michael Sachs Awarded NASA Fellowship</a></h2>
                <strong>Thu, 07/28/2011 - 13:28</strong><br/>
                <br/>
                <p>Michael Sachs, a graduate student at UC Davis and QuakeSim team member has been awarded a NASA Graduate Student Fellowship for his work entitled: &quot;Virtual California Simulations for NASA InSAR Data.&quot;</p>
                <br/>
<br/>                <!--EOF:slider-item content-->
                
            </div>
        </div>
        <!--EOF:slider-item-->
    
        <!--slider-item-->
        <div class="slider-item">
            <div class="content">
                
                <!--slider-item content-->
		<div style="float:left; padding:0 30px 0 0">
                <img height="100px" class="masked" src="http://quakesim.org/sites/quakesim.org/files/pictures/field/image/hpclogo.png"/>
                </div>                <h2><a href="http://quakesim.org/media/teragrid-paying-it-forward-wake-disaster">TeraGrid: Paying it Forward in the Wake of Disaster</a></h2>
                <strong>Tue, 04/26/2011 - 11:51</strong><br/>
                <br/>...The National Science Foundation&#39;s (NSF) TeraGrid is the world&#39;s most comprehensive cyberinfrastructure in support of open scientific research. The people who support and use this resource form an unparalleled, multidisciplinary fraternity of innovators and problem solvers. ... Indiana University (IU) provided assistance to the international emergency response community via the U.S. National Aeronautics and Space Administration (NASA)-funded <a href="http://e-decider.org/">E-DECIDER</a> and <a href="http://www.quakesim.org/">QuakeSim</a> projects in the weeks following the disaster.
		<div style="display:block; padding:30px 0 10px 0;"></div>  
		<!--EOF:slider-item content-->
                
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content">
            
                <!--slider-item content-->
                <div style="float:left; padding:0 30px 0 0">
                <img height="100px" class="masked" src="http://quakesim.org/sites/quakesim.org/files/pictures/field/image/39.cover_.gif"/>
                </div>                <h2><a href="http://quakesim.org/media/nasa-funded-quake-forecast-gets-high-score-study">NASA-Funded Quake Forecast Gets High Score in Study</a></h2>
                <strong>Fri, 09/30/2011 - 08:45</strong><br/>
                <br/><p>QuakeSim&#39;s earthquake forecasting methodology scored well in a recent competition organized by the Southern California Earthquake Center. In 2005 seven forecasts were submitted to the competition. The QuakeSim forecast, led by Professor John Rundle at UC Davis was most accurate in picking the locations of future earthquakes. Results were published in the September 26, 2011 issue of the <a href="http://www.pnas.org" target="_blank">Proceedings of the National Academy of Sciences</a>.</p>
		<!--EOF:slider-item content-->
            
            </div>
        </div>
        <!--EOF:slider-item-->
        
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content">
                
                <!--slider-item content-->
                <h2><a href="http://quakesim.org/update/quakesim-participation-southern-california-earthquake-center-annual-meeting">QuakeSim Participation at the Southern California Earthquake Center Annual Meeting</a></h2>
                <strong>Wed, 09/14/2011 - 14:30</strong><br/>
                <br/><p>QuakeSim team members presented ten posters at the Southern California Earthquake Center Annual Meeting in Palm Springs on topics ranging from the El Mayor-Cucupah earthquake, transient detection, paleoseismic results, and earthquake simulators. Donnellan presented at talk on UAVSAR data, modeling, and results at the workshop on the El Mayor-Cucapah Science and Earthquake Response. Granat and Parker participated in the workshop on Automating the Transient Detection Process under Yehuda Bock&#39;s AIST project, which is led by Sharon Kedar at JPL. They used time series analysis methods developed under QuakeSim leveraging off of years of previously funded QuakeSim work. The group successfully identified the transient signal. Granat and Parker have managed to detect all the transient signals in the phases they have participated in, with no false alarms.</p>          
                <!--EOF:slider-item content-->
            
            </div>
        </div>
        <!--EOF:slider-item-->
    
    </div>
    <!--EOF:slideshow--> 
    
    <!--slider-controls-wrapper-->
    <div id="slider-controls-wrapper">
        <div id="slider-controls">
            <ul id="slider-navigation">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
    </div>
    <!--EOF:slider-controls-wrapper-->
    
    <?php endif; ?>
    
	<?php endif; ?>  

</div><!-- EOF: #banner -->


<!-- Content. -->
<div id="content">

    <div id="content-inside" class="inside">
    
        <div id="main">
            
            <?php if (theme_get_setting('breadcrumb_display','corporateclean')): print $breadcrumb; endif; ?>
            
            <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
       
            <?php if ($messages): ?>
            <div id="console" class="clearfix">
            <?php print $messages; ?>
            </div>
            <?php endif; ?>
     
            <?php if ($page['help']): ?>
            <div id="help">
            <?php print render($page['help']); ?>
            </div>
            <?php endif; ?>
            
            <?php if ($action_links): ?>
            <ul class="action-links">
            <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
            
			<?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1><?php print $title ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            
            <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
            
            <?php print render($page['content']); ?>
            
            <?php print $feed_icons; ?>
            
        </div><!-- EOF: #main -->
        
        <div id="sidebar">
             
            <?php print render($page['sidebar_first']); ?>

        </div><!-- EOF: #sidebar -->

    </div><!-- EOF: #content-inside -->

</div><!-- EOF: #content -->

<!-- Footer -->    
<div id="footer">

    <div id="footer-inside">
    
        <div class="footer-area first">
        <?php print render($page['footer_first']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area second">
        <?php print render($page['footer_second']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area third">
        <?php print render($page['footer_third']); ?>
        </div><!-- EOF: .footer-area -->
       
    </div><!-- EOF: #footer-inside -->

</div><!-- EOF: #footer -->

<!-- Footer -->    
<div id="footer-bottom">

    <div id="footer-bottom-inside">
    
    	<div id="footer-bottom-left">
        
            <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('secondary-menu', 'links', 'clearfix')))); ?>
            
            <?php print render($page['footer']); ?>
            
        </div>
        
        <div id="footer-bottom-right">
        
        	<?php print render($page['footer_bottom_right']); ?>
        
        </div><!-- EOF: #footer-bottom-right -->
       
    </div><!-- EOF: #footer-bottom-inside -->

</div><!-- EOF: #footer -->
