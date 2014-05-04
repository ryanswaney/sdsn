jQuery(window).load(function() {
  jQuery("[data-match-height]").each(function() {
    var parentRow = jQuery(this),
        childrenCols = jQuery(this).find("[data-height-watch]"),
        childHeights = childrenCols.map(function(){ return jQuery(this).outerHeight(); }).get(),
        tallestChild = Math.max.apply(Math, childHeights);
        childrenCols.css('min-height', tallestChild);
  });
});