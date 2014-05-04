<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */
?>
<?php 
  Starkers_Utilities::get_template_parts(
    array(
      'template-parts/headers/tpl_header_site',
      'template-parts/headers/tpl_header_branding',
      'template-parts/navigation/tpl_nav_topbar',
      'template-parts/navigation/tpl_nav_offcanvas'
    )
); ?>

<div class="page-header">
  <div class="row">
    <div class="small-12 columns">
      <span>Error: 404</span>
      <h1 class="page-title">Page Not Found</h1>
    </div>
  </div>
</div>

<?php
  Starkers_Utilities::get_template_parts(
    array(
      'template-parts/footers/tpl_footer_branding',
      'template-parts/footers/tpl_footer_site'
    ) 
); ?>