<?
// if (!is_active_sidebar('sidebar-1')) {
// 	return;
// }
?>
<aside class="writingor--sidebar">
    <h2><?= __('Categories', 'writingor') ?></h2>
    <ul> <? wp_list_cats('sort_column=namonthly') ?></ul>
    <hr>
    <h2><?= __('Archives', 'writingor') ?></h2>
    <ul> <? wp_get_archives() ?></ul>
</aside>