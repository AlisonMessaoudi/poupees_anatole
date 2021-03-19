<?php while (have_posts()) : the_post(); ?>

<!-- COLLABORATEUR -->
<div class="row collaborateur">

    <!-- BLOC IMAGE -->
    <div class="col-lg-3 collaborateur__img">

        <img src="<?php the_post_thumbnail_url();?>" alt=""/>

    </div>

    <!-- BLOC TEXTE -->
    <div id="#huard" class="col-lg-9 collaborateur__txt">
        
        <h4><?php get_post_meta(get_the_ID(), 'metabox_typeCollaboration', true); ?></h4>

        <p><?php get_post_meta(get_the_ID(), 'metabox_nomCollaborateur', true); ?>

            <br/>

            <span><?php get_post_meta(get_the_ID(), 'metabox_specialiteCollaborateur', true); ?></span>

        </p>

        <!-- EN SAVOIR PLUS -->
        <input type="button" id="more" class="more" value="En savoir +" onclick="cache_affiche('collaborateur__1', this.id)">

            <!-- CONTENU EN SAVOIR PLUS -->
            <div id="collaborateur__1" class="more__collaborateur" style="display:none">

                <p><?php get_post_meta(get_the_ID(), 'metabox_presentationCollaborateur', true); ?></p>

                <p>Site Web: <a href="<?php get_post_meta(get_the_ID(), 'metabox_siteCollaborateur', true); ?>"><?php get_post_meta(get_the_ID(), 'metabox_siteCollaborateur', true); ?></a>

                <br/>
                
                Contact: <a href="mailto:<?php get_post_meta(get_the_ID(), 'metabox_emailCollaborateur', true); ?>"><?php get_post_meta(get_the_ID(), 'metabox_emailCollaborateur', true); ?></a></p>
            
            </div>

    </div>

</div>

<?php endwhile; ?>