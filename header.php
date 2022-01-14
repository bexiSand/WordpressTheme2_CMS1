<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title();?></title>
    
	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>

<div id="wrap">

<header id="header">
    <div class="container">
        <div class="row">
<!---------------------Logo---------------------->

<div class="col-xs-8 col-sm-6">
<?php if( is_page($page = '33') || is_page($page = '189') ) :   ?>  
    <a class="logo" href="<?php echo home_url(); ?>"><?php echo bloginfo('name'); ?></a>
<?php endif; ?>	

<?php if( !is_page($page = '33') && !is_page($page = '189') ) : ?>
 
        <?php
        $website_logo = get_field('logo_header', 'option');
        if( !empty($website_logo) ):
        ?>
        <a class="logo" href="<?php echo site_url(); ?>"><img src="<?php echo $website_logo['url']; ?>"></a>
         <?php 
        endif;
        ?>	
<?php endif; ?>	
</div>
            
<!------------------------------------------------------------------------------------------> 


            <div class="col-sm-6 hidden-xs">
                <nav class="menu">
                    <?php
						$arguments =[
						"theme_location" => "primary-menu",
						"container" => "nav",
						];

						$menuItems = wp_nav_menu($arguments);
						?>
                </nav>
            </div>
            <div class="col-xs-4 text-right visible-xs">
                <div class="mobile-menu-wrap">
                    <i class="fa fa-search"></i>
                    <i class="fa fa-bars menu-icon"></i>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-search">
    <form id="searchform" class="searchform">
        <div>
            <label class="screen-reader-text">Sök efter:</label>
            <input type="text" />
            <input type="submit" value="Sök" />
        </div>
    </form>
</div>

<nav id="nav">
    <div class="container">
        <div class="row">
<!--------------------------Breadcrumbs------------------------------>          
            
            <?php if(function_exists('breadcrumbs')): ?>
                <div class="col-xs-8">
                    <?php breadcrumbs();?>
                </div>
            <?php endif; ?>
           
<!------------------------Social Media-------------------------------->
         <div class="col-xs-4">
                <ul class="social">
                    <?php $links = get_field('social_m_header', 'option'); 
                        if( !empty($links) ):
                    ?>
                    <?php foreach($links as $sub_field): ?>
                        <li>                         
                             <a href="<?php echo $sub_field["social_m_link"]; ?>">
                                <?php echo $sub_field["social_m_icon"]; ?>
							</a>
                         </li>
                    <?php endforeach; ?>
                    <?php
                    endif;
                    ?>
                </ul>
                
	        </div>
				
<!---------------------------------------------------------------------------------->
        </div>
    </div>
</nav>