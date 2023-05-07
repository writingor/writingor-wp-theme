<?
$dir = get_template_directory_uri();
?>

<? get_header() ?>

<main class="writingor--main" id="writingor--main">
    <div class="writingor--container">
        <br>
        <br>
        <br>
        <p><b><a href="/"><?= esc_html__('To home page', 'writingor') ?></a></b></p>
        <h1><? the_title() ?></h1>
        <? the_content() ?>
        <br>
        <br>
    </div>
</main>

<? get_footer() ?>
