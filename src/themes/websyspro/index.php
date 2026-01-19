<?php

if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <article style="text-align:center;">
            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <div><?php the_content(); ?> fdsfsdfsd</div>
        </article>
        <?php
    }
} else {
    echo '<p>Nenhum post encontrado.</p>';
}