<?php
// Admin panel setup
function wp_lazy_embeds_admin_menu() {
    add_menu_page(
        'WP Lazy Embeds',
        'Lazy Embeds',
        'manage_options',
        'wp-lazy-embeds',
        'wp_lazy_embeds_admin_page',
        'dashicons-images-alt2',
        80
    );
}
add_action('admin_menu', 'wp_lazy_embeds_admin_menu');

function wp_lazy_embeds_admin_page() {
    ?>
    <div class="wrap">
        <h1>WP Lazy Embeds Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('wp_lazy_embeds_options');
            do_settings_sections('wp-lazy-embeds');
            submit_button();
            ?>
        </form>
        <hr>
        <h2>Fallback Animation Preview</h2>
        <p>Default: Glass-style placeholder</p>
        <select id="wp-lazy-fallback-select" name="wp_lazy_fallback">
            <option value="glass">Glass Style</option>
            <option value="spinner1">Spinner 1</option>
            <option value="spinner2">Spinner 2</option>
            <option value="spinner3">Spinner 3</option>
        </select>
        <div id="wp-lazy-fallback-preview" style="margin-top:10px;"></div>
    </div>

    <script>
    document.getElementById('wp-lazy-fallback-select').addEventListener('change', function() {
        var val = this.value;
        document.getElementById('wp-lazy-fallback-preview').innerHTML = '<div class="wp-lazy-embed-fallback '+val+'"></div>';
    });
    </script>
    <?php
}
?>