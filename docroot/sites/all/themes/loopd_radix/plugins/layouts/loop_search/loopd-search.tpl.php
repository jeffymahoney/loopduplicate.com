<?php
/**
 * @file
 * Template for LoopDuplicate Search.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>
<div id="main-content" class="main-content panel-display clearfix <?php if (!empty($classes)) {
  print $classes;
} ?><?php if (!empty($class)) {
  print $class;
} ?>" <?php if (!empty($css_id)) {
  print "id=\"$css_id\"";
} ?>>

  <div class="container">
    <div class="row">
      <div id="search-filters" class="col-sm-4 col-md-3 sidebar panel-panel search-filters">
        <?php print $content['sidebar']; ?>
      </div>
      <div id="search-results" class="col-sm-8 col-md-9 content panel-panel search-results">
        <?php print $content['contentmain']; ?>
      </div>
    </div>
  </div>

</div>
