<?php declare(strict_types=1);

add_action('wp_enqueue_scripts', function(): void
{
    wp_enqueue_style('parent-theme', sprintf('%s/style.css', get_template_directory_uri()));
});
