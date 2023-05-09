<form role="search" method="get" action="<?= esc_url(home_url('/')) ?>" class="writingor--searchform-1">
    <input type="search" class="form-control border-0" placeholder="<?= esc_attr__('Search', 'writingor') ?>" name="s" value="<?= esc_attr(get_search_query()) ?>">
    <button class="writingor--button-5"><?= esc_html__('Go', 'writingor') ?></button>
</form>