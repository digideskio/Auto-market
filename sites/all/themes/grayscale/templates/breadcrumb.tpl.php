<?php
echo "ZZ"; 
echo $breadcrumb_delimiter;
?>

<?php if (!empty($breadcrumb)): ?>
<span class="breadcrumb"><?php print implode(''.$breadcrumb_delimeter.'', $breadcrumb) ?></span>
<?php endif; ?>

