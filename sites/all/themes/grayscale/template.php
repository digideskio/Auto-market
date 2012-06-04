
 <?php 

/*
 * Returns HTML for a breadcrumb trail.
 *
 * @param $variables
 *   An associative array containing:
 *   - breadcrumb: An array containing the breadcrumb links.
 */

/*  function grayscale_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
echo '++BreadCrum++';
  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $output .= '<div class="breadcrumb">' . implode(' »***>> ', $breadcrumb) . '</div>';
    return $output;
  }
}
 */

/**
* Implements $themeenginename_preprocess_$hook().
* Variables we set here will be available to the breadcrumb template file.
*/
function grayscale_preprocess_breadcrumb(&$variables) {
$variables['breadcrumb_delimiter'] = '#';
}

