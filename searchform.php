<form action="/" method="get" class="show-for-large-up">
  <div class="row">
    <div class="large-12 columns">
      <div class="row collapse">
        <div class="small-9 columns">
          <input type="text" class="margin-bottom-0" name="s" id="search" value="<?php the_search_query(); ?>">
        </div>
        <div class="small-3 columns">
          <button type="submit" class="button green postfix margin-bottom-0">Search</button>
        </div>
      </div>
    </div>
  </div>
</form>

<?php // Search form for small/medium screens. Used in offcanvas nav. ?>
<form action="/" method="get" class="hide-for-large-up" style="margin-top: 2rem;">
  <div class="row">
    <div class="large-12 columns">
      <div class="row collapse">
        <div class="small-9 columns">
          <input type="text" class="margin-bottom-0" name="s" id="search" placeholder="Search" value="<?php the_search_query(); ?>">
        </div>
        <div class="small-3 columns">
          <button type="submit" class="button green postfix margin-bottom-0"><i class="fi-magnifying-glass"></i></button>
        </div>
      </div>
    </div>
  </div>
</form>