<?php
define('MAGENTO_ROOT', (dirname(__FILE__).'/../../../../..'));
$mageFilename = MAGENTO_ROOT . '/app/Mage.php';
require_once $mageFilename;

umask(0);
if ( empty($_GET['store']) ) {
    $_GET['store'] = '';
}
Mage::app( $_GET['store'] );

header("Content-type: text/css; charset: UTF-8");
?>



/* Start primary Color */

    /* Color */
        .currency_icon.selected,
        .quick-view,
        .products-grid li .add-to-links a,
        .footer_link_box .link h1,
        .block .block-subtitle,
        .sort_icon.selected,
        .show_icon.selected,
        .pager .pages .current,
        .products-list .product-name a,
        .products-list .ratings .rating-links a,
        .products-list .add-to-links li a,
        .product-essential h1,
        .product-view .product-shop .ratings .rating-links a,
        .email-friend a,
        .product-view .product-shop .add-to-links a,
        .customized .best_theme h2,
        .tabs li.active a,
        .product-view .box-tags .form-add label,
        .product-view .box-reviews dt a,
        .product-collateral .padder .form-add h3,
        .product-collateral .padder .form-add h4,
        .page-title h1, .page-title h2,
        .opc .active .step-title h2,
        .opc .active .step-title .number,
        #opc-login h4,
        .col2-set .col-1 h4,
        .f-left, .left,
        .sp-methods dt,
        .gift-messages h3,
        .gift-messages-form h4,
        .subtitle, .sub-title,
        .multiple-checkout .col2-set h2.legend,
        .multiple-checkout h3, .multiple-checkout h4,
        .sp-methods dt,
        .multiple-checkout .box h2,
        .checkout-progress li.active,
        .multiple-checkout .place-order .grand-total big,
        .multiple-checkout .place-order .grand-total .price,
        .block-account .block-content li.current,
        .dashboard .welcome-msg p strong,
        .box-account .box-head h2,
        .dashboard .box-content a,
        .dashboard .box-tags .tags strong, .dashboard .box-tags .tags ul, .dashboard .box-tags .tags ul li,
        .order-info .current,
        .link-print,
        .order-items h2,
        .fieldset .legend,
        .addresses-list h2,
        .addresses-list a,
        .product-view .product-shop .ratings .rating-links .separator,
        .my-tag-edit strong,
        #my-tags-table .special-price .price,
        .onepagecheckout_datafields .op_block_title,
        .menu_customlinks li a:hover,
        .banner .container h2,
        .product-view .product-shop .no-rating a,
        .price-box .price-label
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('primary_color') ?>; }
        
        
    /* End Color */
    
    /* BG */
        .menuwithlogo,
        div.wp-custom-menu-popup a.itemMenuName,
        .btn-remove:hover, .btn-edit:hover,
        button.button,
        div.alert a:hover,
        div.alert button:hover,
        .bx-wrapper .bx-next,
        .bx-wrapper .bx-prev,
        .products-grid .product-name a,
        .products-grid li button.button:hover,
        .footer-block,
        .block .block-title,
        #sidenav li a.active,
        #sidenav li a.show-cat:hover,
        .text-box .go,
        .ui-slider-horizontal .ui-slider-handle,
        .sorter .view-mode .grid-mode-active, .sorter .view-mode .grid-mode-active:hover,
        .sorter .view-mode .list-mode-active, .sorter .view-mode .list-mode-active:hover,
        .products-list .f-fix button.button.btn-cart:hover,
        .customized .best_theme a span,
        .product-view .product-shop button.button.btn-cart:hover,
        .cart .totals .checkout-types button.btn-checkout:hover,
        .buttons-set .back-link a,
        .block .btn-remove:hover,
        .dashboard .box-reviews .number,
        .dashboard .box-tags .number,
        .scrollup,
        .close_la:hover,
        .banner .container a
        {  background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('primary_color') ?>; }
    /* End BG */
    
    /* Border */
        div.wp-custom-menu-popup,
        #nav ul,
        .toptital,
        div.alert,
        .opc .active .step-title .number
        {  border-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('primary_color') ?>; }
    /* End border */
    
    /* Border Left */
        
        {  border-left-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('primary_color') ?>; }
    /* End Border Left */
    
    /* Border Top */
        .checkout-progress li.active,
        .menu_customlinks,
        .default-container #nav li ul li ul.shown-sub
        {  border-top-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('primary_color') ?>; }
    /* End Border Top */
    
/* End primary Color */


/* Start Secondary Color */
    /* BG */
        .header .quick-access,
        .block,
        .opc .gift-messages-form,
        .products-grid li button.button,
        .products-list .f-fix button.button.btn-cart,
        .product-view .product-shop button.button.btn-cart,
        .footer-container,
        .toolbar .sorter,
        .customized,
        .data-table thead th,
        .cart .discount, .cart .shipping,
        .cart .totals,
        .col2-set .col-1,
        .col2-set .col-2,
        .checkout-multishipping-shipping .box-sp-methods,
        .pager,
        .tags-list
        {  background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('secondary_color') ?>; }
    /* BG */
/* End Secondary Color */


/* Start button color */

    button.button,
    .buttons-set .back-link a,
    .customized .best_theme a span,
    div.alert a:hover,
    .banner .container a,
    .cart .totals .checkout-types button.btn-checkout:hover,
    .btn-remove:hover, .btn-edit:hover,
    .block .btn-remove:hover,
    #sidenav li a.active,
    #sidenav li a.show-cat:hover,
    .close_la:hover
    {  background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('buttonaerrow_color') ?>; }

/* End button color */


/*  button hover color */

    button.button:hover,
    .buttons-set .back-link a:hover,
    .customized .best_theme a span:hover,
    div.alert a,
    .banner .container a:hover,
    .cart .totals .checkout-types button.btn-checkout,
    .btn-remove, .btn-edit,
    .block .btn-remove,
    #sidenav li a.show-cat,
    .close_la
    {  background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('buttonhover_color') ?>; }

/* End button hover color */

/* border */

    /* border color */
        .header .form-search,
        input.input-text, select, textarea,
        .product-view .product-img-box .product-image,
        .products-list .product-image,
        .product-view .product-img-box .more-views li a,
        .fancy.product-view a.product-image,
        .multiple-checkout .col2-set, .multiple-checkout .col3-set,
        .checkout-multishipping-shipping .box-sp-methods
        {  border-color:  #<?php echo Mage::helper("ExtraConfig")->themeOptions('border_color') ?>; }
    /* End border color */
    
    /* left border color */
        
        {  border-left-color:  #<?php echo Mage::helper("ExtraConfig")->themeOptions('border_color') ?>; }
    /* End left border color */
    
     /* right border color */
        
        {  border-right-color:  #<?php echo Mage::helper("ExtraConfig")->themeOptions('border_color') ?>; }
     /* End right border color */
     
     /* bottom border color */
        .new-arrow,
        .page-title,
        .block-cart .block-subtitle,
        .footer .footer_link_box,
        .block-wishlist .block-content li.item,
        .products-list .productlist-area,
        .products-list li.item,
        .page-title,
        .product-view .view-name,
        .product-view .product-shop .short-description,
        .tabs,
        .data-table td,
        .data-table tbody th,
        .fancy.product-view .product-shop .product-name,
        .product-view .product-shop .add-to-box .add-to-cart,
        .box-account .box-head,
        .dashboard .box .box-title,
        .dashboard .box-info h4,
        .order-info-box h2,
        .data-table tbody.odd tr.border td, .data-table tbody.even tr.border td,
        .cart .totals table,
        .fieldset .legend,
        .addresses-list h2,
        .account-login .content h2,
        .onepagecheckout_datafields .op_block_title,
        .order-products-table tbody th, .order-products-table tbody td,
        .order-products-table tfoot td
        {  border-bottom-color:  #<?php echo Mage::helper("ExtraConfig")->themeOptions('border_color') ?>; }
     /* End bottom border color */
     
     /* End top border color */
        .block-cart .subtotal,
        .block .actions,
        .products-list .productlist-area,
        .cart .shipping .sp-methods,
        .buttons-set,
        .checkout-progress li
        {  border-top-color:  #<?php echo Mage::helper("ExtraConfig")->themeOptions('border_color') ?>; }
     /* End top border color */
/* End border */


/* Start Menu */
    /* top Menu background */
        .menuwithlogo
        {  background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('topmenu_background') ?>; }
    /* End top Menu background */
    
    /* Menu TopFonts */
        <?php $topmenu_fonts = Mage::helper("ExtraConfig")->themeOptions('topmenu_fonts'); ?>
        <?php if(isset($topmenu_fonts) && $topmenu_fonts != null && $topmenu_fonts != '--select--')   {  ?>
                
                    .default-container #nav li.level0 a.level-top,
                    div.menu a
                    {font-family: '<?php echo $topmenu_fonts; ?>'!important;}
                    
        <?php } ?>
    /* End TopMenu Fonts */
    
    /* Menu top Fonts Color */
        .default-container #nav li a,
        .toggleMenu,
        div.menu a,
        #menu-button a
        { color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('topmenu_fonts_color') ?>; }
    /* End top Menu Fonts Color */
    
    /* Menu top Fonts hover Color */
        
        .toggleMenu:hover,
        .toggleMenu.active,
        .default-container #nav li a:hover,
        .default-container #nav li.level0.active a.level-top,
        .default-container #nav li a.over,
        div.menu a:hover,
        #menu-button:hover a
        { color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('topmenu_fontshover_color') ?>; }
    /* End top Menu Fonts hover Color */
    
    /* Menu top Fonts hover bg Color */
        div.menu.act a, div.menu.active a, div.menu .parentMenu a:hover,
        #menu-button:hover,
        .toggleMenu:hover,
        .toggleMenu.active,
        .default-container #nav li a.over,
        .default-container #nav a:hover,
        .default-container #nav li.level0.active a.level-top
        { background: #<?php echo Mage::helper("ExtraConfig")->themeOptions('topmenu_fontshover_bg_color') ?>; }
    /* End top Menu Fonts hover bg Color */
    
    /* Menu background */
        #nav ul,
        div.wp-custom-menu-popup
        {  background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('menu_background') ?>; }
    /* End Menu background */
    
    /* SubMenu Fonts */
        <?php $submenu_fonts = Mage::helper("ExtraConfig")->themeOptions('submenu_fonts'); ?>
        <?php if(isset($submenu_fonts) && $submenu_fonts != null && $submenu_fonts != '--select--')   {  ?>
                
        div.wp-custom-menu-popup a.itemMenuName
        {font-family: '<?php echo $submenu_fonts; ?>'!important;}
                    
        <?php } ?>
    /* End SubMenu Fonts */
    
    /* SubMenu Fonts Color */
        div.wp-custom-menu-popup a.itemMenuName
        { color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('submenu_fonts_color') ?>; }
    /* End SubMenu Fonts Color */
    
    /* SubMenu Fonts bg Color */
        
        div.wp-custom-menu-popup a.itemMenuName
        { background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('submenu_fonts_bg_color') ?>; }
    /* End SubMenu Fonts bg Color */
    
    /* SubMenu Fonts Hover Color */
        div.wp-custom-menu-popup a.itemMenuName:hover
        { color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('submenu_fontshover_color') ?>; }
    /* End SubMenu Fonts Hover Color */
    
    /* Menu Fonts */
        <?php $menu_fonts = Mage::helper("ExtraConfig")->themeOptions('menu_fonts'); ?>
        <?php if(isset($menu_fonts) && $menu_fonts != null && $menu_fonts != '--select--')   {  ?>
                
        .default-container #nav li ul li a,
        div.wp-custom-menu-popup .itemSubMenu a.itemMenuName,
        .menu_customlinks li
        {font-family: '<?php echo $menu_fonts; ?>'!important;}
                    
        <?php } ?>
    /* End Menu Fonts */
    
    /* Menu Fonts Color */
    .default-container #nav li ul li a,
        div.wp-custom-menu-popup .itemSubMenu a.itemMenuName,
        .menu_customlinks li a,
        .menu_customlinks li
        { color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('menu_fonts_color') ?>; }
    /* End Menu Fonts Color */
    
    /* Menu Fonts Hover Color */
    .default-container #nav li ul li a:hover,
        div.wp-custom-menu-popup .itemSubMenu a.itemMenuName:hover,
        .menu_customlinks li a:hover
        { color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('menu_fontshover_color') ?>; }
    /* End Menu Fonts Hover Color */
    
    /* Menu Fontshover bg Color */
        .default-container #nav li ul li a:hover,
        .default-container #nav li ul li a.over,
        div.wp-custom-menu-popup .itemSubMenu a.itemMenuName:hover
        { background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('menu_fontshover_bg_color') ?>; }
    /* End Menu Fontshover bg Color */
    
    /* border color */
        div.wp-custom-menu-popup,
        .toptital,
        #nav ul,
        .default-container #nav li ul li ul.shown-sub
        { border-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('menu_border_color') ?>; }
    /* End border Color */
    
    /* shoppingbg */
        .header2 .shopping_bg:hover .mini-cart-div .summary-container .summary .amount span
        { background: #<?php echo Mage::helper("ExtraConfig")->themeOptions('shoppingcart_bg_color') ?>; }
    /* End shoppingbg */
/* End Menu */


/* Start Sidebar */
    
    /* Sidebar BG Color */
        <?php $sidebar_bg = Mage::helper("ExtraConfig")->themeOptions('sidebar_background_color'); ?>  
        .block
        {  background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('sidebar_background_color') ?>; }
    /* End Sidebar BG Color */
    
    /* Sidebar Title Font */
        <?php $sidebartitlefont = Mage::helper("ExtraConfig")->themeOptions('sidebar_title_fonts'); ?>
        <?php   if(isset($sidebartitlefont) && $sidebartitlefont != null && $sidebartitlefont != '--select--')   {  ?>
                
                    .block .block-title strong
                    {font-family: '<?php echo $sidebartitlefont; ?>';}
                    
        <?php } ?>
    /* End Sidebar Title Font */
    
    /* Sidebar Title fonts Color */
        .block .block-title strong
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('sidebar_title_fonts_color') ?>; }
    /* End Sidebar Title fonts Color */
    
    /* Sidebar Title fonts bg Color */
        .block .block-title
        {  background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('sidebar_title_fonts_bg_color') ?>; }
    /* End Sidebar Title fonts bg Color */

    /* Sidebar Fonts Color */
        .block-layered-nav dt,
        .block-poll label,
        .block .block-subtitle,
        .block-subscribe label,
        .block .price-box .price
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('sidebar_fonts_color') ?>; }
    /* End Sidebar Fonts Color */
    
    /* Sidebar Link Color */
        .block li a,
        .block .actions a
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('sidebar_link_color') ?>; }
    /* End Sidebar Link Color */
    
    /* Sidebar Link Hover Color */
        .block li a:hover,
        .block .actions a:hover
        { color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('sidebar_linkhover_color') ?>; }
    /* End Sidebar Link Hover Color */
    
    /* Sidebar Link Hover bg Color */
        .block li a:hover
        { background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('sidebar_linkhover_bg_color') ?>; }
    /* End Sidebar Link Hover bg Color */
    
    /* Sidebar Seperator Color */
        .block .actions,
        .block-wishlist .block-content li.item
        {  border-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('sidebar_seperator_color') ?>; }
    /* End Sidebar Seperator Color */
    
/* End Sidebar */


/* Start Header */
    /* Header BG */
    <?php
    $headerbg_color = Mage::helper("ExtraConfig")->themeOptions('headerbg_color');
    $headerbg_pattern = Mage::helper("ExtraConfig")->themeOptions('headerbg_pattern');
    $headerbg_image = Mage::helper("ExtraConfig")->themeOptions('headerbg_image');
    ?>
    
    <?php if(isset($headerbg_color) && $headerbg_color != null){  ?>
                
                            .header-container
                            {
                                  background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('headerbg_color') ?>; 
                            }
                            
                <?php } elseif(isset($headerbg_pattern) && $headerbg_pattern != null) { ?>
                    
                            .header-container
                            {
                                background-image: url(<?php echo Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA).'pattern/'.Mage::helper("ExtraConfig")->themeOptions('headerbg_pattern') ?>);
                            }    
                    
                <?php }	elseif(isset($headerbg_image) && $headerbg_image != null) { ?>
                    
                            .header-container           
                            {
                                    background-image: url(<?php echo Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA).'custom/image/'.Mage::helper("ExtraConfig")->themeOptions('headerbg_image') ?>);
                                    background-attachment: <?php echo Mage::helper("ExtraConfig")->themeOptions('headerbg_attachment') ?>;
                                     background-position: <?php echo Mage::helper("ExtraConfig")->themeOptions('headerbg_position_y') ?> <?php echo Mage::helper("ExtraConfig")->themeOptions('headerbg_position_x') ?>;
                                    background-repeat: <?php echo Mage::helper("ExtraConfig")->themeOptions('headerbg_repeat') ?>;
                                    
                                    <?php if (Mage::helper("ExtraConfig")->themeOptions('headerbg_attachment') == 'fixed')
                                        {
                                    ?>
                                        background-size: 100%;
                                    <?php	} ?>
                            }    
                    
    <?php } else{} ?>
    /* End Header BG */

    /* Header BG */
        .header .quick-access
        {  background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('header_topblock_color') ?>; }
    /* End Header BG */
    
    /* Header Link Color */
        .header .links a
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('header_link_color') ?>; }
    /* End Header Link Color */
    
    /* Header Link Hover Color */
        .header .links a:hover
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('header_linkhover_color') ?>; }
    /* End Header Link Hover Color */
    
    /* sticky header */
        <?php $sticky_header = Mage::helper("ExtraConfig")->themeOptions('sticky_header'); ?>
        <?php if($sticky_header == '0' || Mage::helper("ExtraConfig")->is_mobile() == true) { ?>
            .menuwithlogo.fixed{position: inherit;}
        <?php } ?>
    /* End sticky header */
    
/* End Header */


/* Banner */
    
    /* Banner Title Color */
        .banner .container h2
        {color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('banner_title_color') ?>;}
    /* End Banner Title Color */
    
    /* Banner Content Color */
        .banner .container p
        {color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('banner_content_color') ?>;}
    /* End Banner Title Color */
    
    /* Banner Title size */
        .banner .container h2
        {font-size: <?php echo Mage::helper("ExtraConfig")->themeOptions('banner_title_fontsize') ?>px;}
    /* End Banner Title size */
    
    /* view-more Color */
        .banner .container a
        {color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('view_color') ?>;}
    /* End view-more Color */
    
    /* view-more hover Color */
        .banner .container a:hover
        {color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('view_hover_color') ?>;}
    /* End view-more hover Color */
    
    /* view-more button Color */
        .banner .container a
        {background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('view_bg_color') ?>;}
    /* End view-more Color */
    
    /* view-more button hover Color */
        .banner .container a:hover
        {background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('view_bg_hover_color') ?>;}
    /* End view-more hover Color */
/* End Banner */

/* Start Footer */
    <?php
    $footer_background_color = Mage::helper("ExtraConfig")->themeOptions('footer_background_color');
    $footer_background_pattern = Mage::helper("ExtraConfig")->themeOptions('footer_background_pattern');
    $footer_background_image = Mage::helper("ExtraConfig")->themeOptions('footer_background_image');
    ?>
    
    <?php if(isset($footer_background_color) && $footer_background_color != null) {  ?>
            
            
                   .footer-container
                    {
                          background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('footer_background_color') ?>; 
                    }
                    
            <?php } elseif(isset($footer_background_pattern) && $footer_background_pattern != null) { ?>
            
                    .footer-container
                    {
                        background-image: url(<?php echo Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA).'pattern/'.Mage::helper("ExtraConfig")->themeOptions('footer_background_pattern') ?>);
                    }
                    
            <?php } elseif(isset($footer_background_image) && $footer_background_image != null) { ?>
            
                    .footer-container          
                    {
                            background-image: url(<?php echo Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA).'custom/image/'.Mage::helper("ExtraConfig")->themeOptions('footer_background_image') ?>);
                            background-attachment: <?php echo Mage::helper("ExtraConfig")->themeOptions('footer_background_attachment') ?>;
                             background-position: <?php echo Mage::helper("ExtraConfig")->themeOptions('footer_background_position_y') ?> <?php echo Mage::helper("ExtraConfig")->themeOptions('footer_background_position_x') ?>;
                            background-repeat: <?php echo Mage::helper("ExtraConfig")->themeOptions('footer_background_repeat') ?>;
                            
                            <?php if (Mage::helper("ExtraConfig")->themeOptions('footer_background_attachment') == 'fixed')
				{
                            ?>
				background-size: 100%;
                            <?php	} ?>
                    }    
            
    <?php } else{} ?>
    
    /* Footer Font Color */
        .footer address,
        .footer_link_box .link p
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('footer_font_color') ?>; }
    /* End Footer Font Color */
    
    /* Footer Linkbox title Color */
        
        .footer_link_box .link h1
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('footer_link_title_color') ?>; }
    /* End Footer Linkbox title Color */
    
    /* Footer Link Color */
        
        .footer a
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('footer_link_font_color') ?>; }
    /* End Footer Link Color */

    /* Footer Linkhover Color */
        .footer a:hover
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('footer_linkhover_font_color') ?>; }
    /* End Footer Linkhover Color */
    
    /* Footer Linkhover bg Color */
        .footer_link_box .link ul li a:hover
        {  background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('footer_linkhover_bg_color') ?>; }
    /* End Footer Linkhover bg Color */
    
    /* Footer border Color */
        .footer .footer_link_box
        {  border-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('footer_border_color') ?>; }
    /* End border Color */
    
    /* Footer topblock bg Color */
        .footer-block
        {  background: #<?php echo Mage::helper("ExtraConfig")->themeOptions('footer_topblock_bg') ?>; }
    /* End Footer topblock bg Color */
    
    /* Footer topblock Color */
        .footer-block .free-shipping h2,
        .footer-block .newaletter h2
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('footer_topblock_color') ?>; }
    /* End Footer topblock Color */
/* End Footer */




/* start Background Option */

<?php
$background_color = Mage::helper("ExtraConfig")->themeOptions('background_color');
$background_pattern = Mage::helper("ExtraConfig")->themeOptions('background_pattern');
$background_image = Mage::helper("ExtraConfig")->themeOptions('background_image');
?>

 <?php  if(isset($background_color) && $background_color != null) {  ?>
		
            body
                {
                    background-color:#<?php echo Mage::helper("ExtraConfig")->themeOptions('background_color') ?>;
                }
            .tabs li.active a,
            .tabs li a:hover
            {
            border-bottom-color:#<?php echo Mage::helper("ExtraConfig")->themeOptions('background_color') ?>;
            }
<?php	}  elseif(isset($background_pattern) && $background_pattern != null){ ?>
        
            body
                {
                    background-image: url(<?php echo Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA).'pattern/'.Mage::helper("ExtraConfig")->themeOptions('background_pattern') ?>);
                }    
<?php   } elseif(isset($background_image) && $background_image != null){ ?>

                body            
                {
                        background-image: url(<?php echo Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA).'custom/image/'.Mage::helper("ExtraConfig")->themeOptions('background_image') ?>);
                        background-attachment: <?php echo Mage::helper("ExtraConfig")->themeOptions('bg_attachment') ?>;
                         background-position: <?php echo Mage::helper("ExtraConfig")->themeOptions('bg_position_y') ?> <?php echo Mage::helper("ExtraConfig")->themeOptions('bg_position_x') ?>;
                        background-repeat: <?php echo Mage::helper("ExtraConfig")->themeOptions('bg_repeat') ?>;
			
			<?php if (Mage::helper("ExtraConfig")->themeOptions('bg_attachment') == 'fixed')
				{
			?>
				background-size: 100%;
			<?php	} ?>
			
                }    
        
<?php   } else { } ?>

/* End Background Option */


/* product list */
    
    /* AjaxPopup */
        <?php $ajaxpopup = Mage::helper("ExtraConfig")->themeOptions('ajaxpopup');
        if($ajaxpopup == '0'){ ?>
        .alert{display: none !important;}
        <?php } ?>
    /* End AjaxPopup */
    
    
    
    /* Show border */
        <?php $show_border = Mage::helper("ExtraConfig")->themeOptions('show_border');
        if($show_border == '1'){ ?>
            .products-grid li.item:hover, .products-list .product-image, .fancy.product-view a.product-image, .product-view .product-img-box .product-image, .product-view .product-img-box .more-views li a {  border-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('product_border') ?>; }
        <?php } elseif($show_border == '2'){ ?>
            .products-grid li.item:hover    {border:3px solid transparent;}
            .products-grid li.item {border:3px solid #E5E5E5;}
            .products-grid li.item, .products-list .product-image, .fancy.product-view a.product-image, .product-view .product-img-box .product-image, .product-view .product-img-box .more-views li a {  border-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('product_border') ?>; }
        <?php } elseif ($show_border == '3') { ?>
            .products-grid li.item:hover,
            .products-grid li.item{border:3px solid #E5E5E5;}
            .products-grid li.item:hover, .products-grid li.item, .products-list .product-image, .fancy.product-view a.product-image, .product-view .product-img-box .product-image, .product-view .product-img-box .more-views li a {  border-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('product_border') ?>; }
        <?php } elseif ($show_border == '4') { ?>
            .products-grid li.item:hover,
            .products-grid li.item{border:3px solid transparent;}
            .products-list .product-image, .product-view .product-img-box .product-image, .fancy.product-view a.product-image, .product-view .product-img-box .more-views li a {border:1px solid transparent;}
        <?php } ?>
    /* End Show border */
    
   /* Product Image BG */
        .products-grid .content_top,
        .products-list .product-image,
        .product-view .product-img-box .product-image,
        .product-view .product-img-box .more-views li a,
        .fancy.product-view a.product-image
        {  background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('product_image_bg') ?>; }
    /* End Product Image BG */
    
    /* Product content BG */
        .products-grid .productgrid-area
        {  background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('product_content_bg') ?>; }
    /* End Product content BG */
    
    /* Product Image */
        <?php
        $productimage = Mage::helper("ExtraConfig")->themeOptions('productimage');
        if($productimage == '0') { ?>
            .products-grid li.item:hover img.small-image{top:0px;}
            .products-grid .product-image img.thumbnail{display:none;}
        <?php } ?>
    /* End Product Image */
    
    /* AddtoCart button background */
        .products-grid li button.button,
        .products-list .f-fix button.button.btn-cart,
        .product-view .product-shop button.button.btn-cart
        {  background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('addtocart_bg') ?>; }
    /* End AddtoCart button background */
    
    /* AddtoCart button color */
        .products-grid li button.button,
        .products-list .f-fix button.button.btn-cart,
        .product-view .product-shop button.button.btn-cart
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('addtocart_color') ?>; }
    /* End AddtoCart button color */
    
    /* AddtoCart button hover bg */
        .products-grid li button.button:hover,
        .products-list .f-fix button.button.btn-cart:hover,
        .product-view .product-shop button.button.btn-cart:hover
        {   background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('addtocart_hover_bg') ?>; }
    /* End AddtoCart button hover bg */
    
    /* AddtoCart button hover color */
        .products-grid li button.button:hover,
        .products-list .f-fix button.button.btn-cart:hover,
        .product-view .product-shop button.button.btn-cart:hover
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('addtocart_hover_color') ?>; }
    /* End AddtoCart button hover color */
    
    /* button font */
        <?php $buttonfont = Mage::helper("ExtraConfig")->themeOptions('button_fonts'); ?>
        <?php if(isset($buttonfont) && $buttonfont != null && $buttonfont != '--select--')  {  ?>
                   
        .products-grid li button.button,
        .products-list .f-fix button.button.btn-cart,
        .product-view .product-shop button.button.btn-cart
        {font-family: '<?php echo $buttonfont; ?>';}
                
        <?php } ?>
    /* end button font */
    
    /* Product name color */
        .products-grid .product-name a,
        .products-list .product-name a,
        .product-essential h1
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('productname_color') ?>; }
    /* End Product name color */
    
    /* Product name bg color */
        .products-grid .product-name a
        {  background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('productname_bg_color') ?>; }
    /* End Product name bg color */
    
    /* Product name hover color */
        
       .products-grid .product-name a:hover,
       .products-list .product-name a:hover
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('productname_hover_color') ?>; }
    /* End Product name hover color */
    
    /* productname font */
        <?php $productnamefont = Mage::helper("ExtraConfig")->themeOptions('productname_fonts'); ?>
        <?php if(isset($productnamefont) && $productnamefont != null && $productnamefont != '--select--')  {  ?>
                   
            .products-grid .product-name a,
            .products-list .product-name a,
            .product-essential h1
            {font-family: '<?php echo $productnamefont; ?>';}
                
        <?php } ?>
    /* end productname font */
    
     /* Product price color */
        .products-grid li .price-box .price,
        .products-list .price-box .price,
        .product-view .product-shop .price-box .price
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('product_price_color') ?>; }
    /* End Product price color */
    
    /* productprice font */
        <?php $productpricefont = Mage::helper("ExtraConfig")->themeOptions('product_price_fonts'); ?>
        <?php if(isset($productpricefont) && $productpricefont != null && $productpricefont != '--select--')  {  ?>
                   
            .products-grid li .price-box .price,
            .products-list .price-box .price,
            .product-view .product-shop .price-box .price
            {font-family: '<?php echo $productpricefont; ?>';}
                
        <?php } ?>
    /* end productprice font */
    
    /* Addto links color */
        .products-grid li .add-to-links a,
        .products-list .add-to-links li a,
        .product-view .product-shop .add-to-links a
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('addto_color') ?>; }
    /* End Addto links color */
    
    /* Quickview color */
        .quick-view
        {   color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('quickview_color') ?>; }
    /* End Quickview color */
    
    /* Sale color */
        .sale
        {   color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('sale_color') ?>; }
    /* End Sale color */
    
    /* New color */
        .new
        {   color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('new_color') ?>; }
    /* End New color */
    
/* end product list */


/* Theme Fonts Settings */
    <?php
    $titlefont = Mage::helper("ExtraConfig")->themeOptions('titlefont');
    $bodyfont = Mage::helper("ExtraConfig")->themeOptions('bodyfont');
    ?>
    
    /* Title font */
        <?php if(isset($titlefont) && $titlefont != null && $titlefont != '--select--')  {  ?>
                   
            .page-title h1,
            .page-title h2,
            .new-arrow .subtitle,
            .product-essential h1
            {font-family: '<?php echo $titlefont; ?>';}
                
        <?php } ?>
    /* end Title font */
    
    /* Title color */
        .page-title h1,
        .page-title h2,
        .new-arrow .subtitle,
        .product-essential h1
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('titlefont_color') ?>; }
    /* End Title color */
    
    /* Title Font size */
        .page-title h1,
        .page-title h2,
        .new-arrow .subtitle,
        .product-essential h1
        {  font-size: <?php echo Mage::helper("ExtraConfig")->themeOptions('titlefont_size') ?>px; }
    /* End Title Font size */
    
    /* Body font */	
        <?php if(isset($bodyfont) && $bodyfont != null && $bodyfont != '--select--')  {  ?>
            
                    body,
                    a,
                    input, select option, textarea
                    {font-family: '<?php echo $bodyfont; ?>';}
                
        <?php } ?>	
    /* End Body font */
    
    /* Body font Color */
        body,
        a,
        input, select, textarea
        {  color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('bodyfont_color') ?>; }
    /* End Body font Color */
    
    /* Body font size */
        body,
        a,
        input, select, textarea
        {  font-size: <?php echo Mage::helper("ExtraConfig")->themeOptions('bodyfont_size') ?>px; }
    /* End Body font size */
/* End Theme Fonts Settings */



/* boxlayout */
    <?php $boxlayout = Mage::helper("ExtraConfig")->themeOptions('boxlayout'); ?>
    <?php if($boxlayout == '1') { ?>
        .page {width:1220px; margin: 0 auto; max-width: 100%; box-shadow: 4px 0px 6px -4px rgba(0, 0, 0, 0.25), -4px 0px 6px -4px rgba(0, 0, 0, 0.25);}
        .page{  background: #<?php echo Mage::helper("ExtraConfig")->themeOptions('boxlayout_bg') ?>; }
        .menuwithlogo.fixed{width:1220px; max-width:100%;}
    <?php } ?>
    
    <?php if($boxlayout == '2') { ?>
        .page {width:1220px; margin: 0 auto; max-width: 100%;}
        .page{  background: #<?php echo Mage::helper("ExtraConfig")->themeOptions('boxlayout_bg') ?>; }
        .menuwithlogo.fixed{width:1220px; max-width:100%;}
    <?php } ?>
/* End boxlayout */

/* Select Box */
    /* Background */
        .header_language:hover .language_box,
        .language_detail a:hover,
        .header_currency:hover .currency_box,
        .currency_detail a:hover,
        .show_box:hover,
        .show_detail a:hover,
        .sort_box:hover,
        .sort_detail a:hover
        {  background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('select') ?>; }
    /* Background */
    /* Border */
        .language_detail,
        .currency_detail,
        .sort_detail,
        .show_detail
        {  border-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('select') ?>; }
    /* Border */
/* End select box */

/* Select bg Box */
    /* Background */
        .language_detail,
        .currency_detail,
        .sort_detail,
        .show_detail
        {  background-color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('select_bg') ?>; }
    /* Background */
    
/* End select bg box */

/* Select link color */
        .language_detail a,
        .currency_detail a,
        .sort_detail a,
        .show_detail a,
        .sort_box .sort_pan,
        .show_box .show_pan,
        .language_box,
        .currency_box
        { color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('select_link_color') ?>; }
/* End select link color */

/* Select link hover color */
        .language_detail a:hover,
        .currency_icon.selected,
        .currency_detail a:hover,
        .sort_icon.selected,
        .sort_detail a:hover,
        .show_icon.selected,
        .show_detail a:hover,
        .header_language:hover .language_box,
        .header_currency:hover .currency_box,
        .sort_box:hover .sort_pan,
        .show_box:hover .show_pan
        { color: #<?php echo Mage::helper("ExtraConfig")->themeOptions('select_linkhover_color') ?>; }
/* End select link hover color */


/* Customcss */
    <?php echo Mage::helper("ExtraConfig")->themeOptions('customcss'); ?>
/* End Customcss */

/* Zoom */
    <?php if(Mage::helper("ExtraConfig")->is_mobile() == true) { ?>
    .cloud-zoom-lens,
    .cloud-zoom-big{display: none !important;}
    <?php } ?>
/* End Zoom */