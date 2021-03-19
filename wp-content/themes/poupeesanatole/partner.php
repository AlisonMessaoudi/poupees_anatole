<?php 
/*
  Template Name: Collaborateurs
*/

get_header();

?>

<!-- SECTION 0 : PRESENTATION COLLABORATEURS -->
<main class="container site__partner">

    <!-- TITRE : LES COLLABORATEURS -->
    <div class="row collaborateurs__titre">
                
        <h2>Les Collaborateurs</h2>
    
    </div>

    <!-- COLLABORATEUR 1 -->
    <div class="row collaborateur">

        <!-- BLOC IMAGE -->
        <div class="col-lg-3 collaborateur__img">
        
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/02_portraitsPartenaires/portrait_thomasHuard.png" alt="Portrait de Thomas Huard - Porteur du projet les Poupées Anatoles"/>
        
        </div>
        
        <!-- BLOC TEXTE -->
        <div id="<?php $collaborateur->$id ?>" class="col-lg-9 collaborateur__txt">
            
            <h4>Porteur de projet</h4>

            <p>Thomas Huard

                <br/>

                <span>Designer, Créateur d'outils pédagogiques</span>

            </p>

            <!-- EN SAVOIR PLUS -->
            <input type="button" id="more" class="more" value="En savoir +" onclick="cache_affiche('collaborateur__1', this.id)">
        
                <!-- CONTENU EN SAVOIR PLUS -->
                <div id="collaborateur__1" class="more__collaborateur" style="display:none">

                    <p>Designer et illustrateur, Thomas s'est spécialisé dans la création d'outils pédagogiques et de médiation utilisés au sein de structures médico-sociales. Le compréhension des besoins des professionnels de la santé et des attentes des personnes soignées est devenu le centre de son travail pour créer des outils adaptés à leur usagers.</p>

                    <p>Site Web: <a href="www.thomashuard.com">thomashuard.com</a>

                    <br/>
                    
                    Contact: <a href="mailto:thomas@poupees-anatoles.com">thomas@poupees-anatoles.com</a></p>
                
                </div>
        
        </div>

    </div>

    <!-- COLLABORATEUR 2 -->
    <div id="sheila" class="row collaborateur">

        <!-- BLOC IMAGE -->
        <div class="col-lg-3 collaborateur__img">
        
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/02_portraitsPartenaires/portrait_sheilaWarembourg.png" alt="Portrait de Sheila Warembourg - Collaborateur du projet les Poupées Anatoles"/>
        
        </div>
        
        <!-- BLOC TEXTE -->
        <div class="col-lg-9 collaborateur__txt">
            
            <h4>Experte sexologoue</h4>

            <p>Sheila Warembourg

                <br/>

                <span>Diplômée en Sexologie et Santé Publique</span>

            </p>

            <!-- EN SAVOIR PLUS -->
            <input type="button" id="more" class="more" value="En savoir +" onclick="cache_affiche('collaborateur__2', this.id)">
        
                <!-- CONTENU EN SAVOIR PLUS -->
                <div id="collaborateur__2" class="more__collaborateur" style="display:none">

                    <p>Sheila Warembourg, accompagne les enfants, adolescents et adultes en situation de handicap et leurs familles sur des sujets liés à la vie intime, affective et la sexualité. Elle propose des formations professionnelles théoriques et pratiques et des interventions en Colloque dans des structures du Médico-Social en France et à l’étranger.</p>

                    <p>Site Web: <a href="https://sexualunderstanding.com/">www.sexualunderstanding.com/</a></p>
                
                </div>
        
        </div>

    </div>

    <!-- COLLABORATEUR 3 -->
    <div id="libreObjet" class="row collaborateur">

        <!-- BLOC IMAGE -->
        <div class="col-lg-3 collaborateur__img">
        
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/05_logoPartenaires/logo_libreObjet.png" alt="Logo de Libre Objet - Collaborateur du projet les Poupées Anatoles"/>
        
        </div>
        
        <!-- BLOC TEXTE -->
        <div class="col-lg-9 collaborateur__txt">
            
            <h4>Fabricant</h4>

            <p>Libre Objet

                <br/>

                <span>Atelier d'insertion Strasbourgeois</span>

            </p>

            <!-- EN SAVOIR PLUS -->
            <input type="button" id="more" class="more" value="En savoir +" onclick="cache_affiche('collaborateur__3', this.id)">
        
                <!-- CONTENU EN SAVOIR PLUS -->
                <div id="collaborateur__3" class="more__collaborateur" style="display:none">

                    <p>Cette structure de création emploie des personnes en voie d’insertion professionnelle et sociale.</p>

                    <p>Site Web: <a href="http://libreobjet.com/fr/">www.libreobjet.com</a></p>
                
                </div>
        
        </div>

    </div>

    <!-- COLLABORATEUR 4 -->
    <div id="mathieu" class="row collaborateur">

        <!-- BLOC IMAGE -->
        <div class="col-lg-3 collaborateur__img">
        
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/02_portraitsPartenaires/portrait_GeraldineMathieu.png" alt="Portrait de Geraldine Mathieu - Collaborateur du projet les Poupées Anatoles"/>
        
        </div>
        
        <!-- BLOC TEXTE -->
        <div class="col-lg-9 collaborateur__txt">
            
            <h4>Création des Prototypes</h4>

            <p>Géraldine Mathieu

                <br/>

                <span>Couturière</span>

            </p>
            
        </div>

    </div>

    <!-- COLLABORATEUR 5 -->
    <div id="tango" class="row collaborateur">

        <!-- BLOC IMAGE -->
        <div class="col-lg-3 collaborateur__img">
        
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/05_logoPartenaires/logo_tango&Scan.png" alt="Logo de Tango&Scan - Financeur du projet les Poupées Anatoles"/>
        
        </div>
        
        <!-- BLOC TEXTE -->
        <div class="col-lg-9 collaborateur__txt">
            
            <h4>Financeurs</h4>

            <p>Tango&Scan

                <br/>

                <span>Appel à projets</span>

            </p>
            
            <!-- EN SAVOIR PLUS -->
            <input type="button" id="more" class="more" value="En savoir +" onclick="cache_affiche('collaborateur__5', this.id)">
        
                <!-- CONTENU EN SAVOIR PLUS -->
                <div id="collaborateur__5" class="more__collaborateur" style="display:none">

                    <p>Designer et illustrateur, Thomas s'est spécialisé dans la création d'outils pédagogiques et de médiation utilisés au sein de structures médico-sociales. La compréhension des besoins des professionnels de la santé et des attentes des personnes soignées est devenu le centre de son travail pour créer des outils adaptés à leur usagers.</p>

                    <p>Site Web: <a href="www.thomashuard.com">thomashuard.com</a></p>
                
                </div>
        
        </div>

    </div>

    <!-- COLLABORATEUR 6 -->
    <div id="hulot" class="row collaborateur">

        <!-- BLOC IMAGE -->
        <div class="col-lg-3 collaborateur__img">
        
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/02_portraitsPartenaires/portrait_MarionHulot.png" alt="Portrait de Geraldine Marion Hulot - Collaborateur du projet les Poupées Anatoles"/>
        
        </div>
        
        <!-- BLOC TEXTE -->
        <div class="col-lg-9 collaborateur__txt">
            
            <h4>Création des Prototypes</h4>

            <p>Marion Hulot

                <br/>

                <span>Couturière</span>

            </p>

            <!-- EN SAVOIR PLUS -->
            <input type="button" id="more" class="more" value="En savoir +" onclick="cache_affiche('collaborateur__6', this.id)">
            
                <!-- CONTENU EN SAVOIR PLUS -->
                <div id="collaborateur__6" class="more__collaborateur" style="display:none">

                    <p>Installée à Strasbourg, Marion confectionne des vêtements contemporains qui puisent leur inspiration dans l’Histoire et les Arts visuels.</p>
                
                </div>
            
        </div>

    </div>

    <!-- COLLABORATEUR 7 -->
    <div id="messaoudi"class="row collaborateur collaborateur__last">

        <!-- BLOC IMAGE -->
        <div class="col-lg-3 collaborateur__img">
        
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/02_portraitsPartenaires/portrait_AlisonMessaoudi.png" alt="Portrait d'Alison Messaoudi - Collaborateur du projet les Poupées Anatoles"/>
        
        </div>
        
        <!-- BLOC TEXTE -->
        <div class="col-lg-9 collaborateur__txt">
            
            <h4>Développement du site internet</h4>

            <p>Alison Messaoudi

                <br/>

                <span>Developpeuse web et web-designeuse</span>

            </p>
            
            <!-- EN SAVOIR PLUS -->
            <input type="button" id="more" class="more" value="En savoir +" onclick="cache_affiche('collaborateur__7', this.id)">
        
                <!-- CONTENU EN SAVOIR PLUS -->
                <div id="collaborateur__7" class="more__collaborateur" style="display:none">

                    <p>Designer de formation, Alison s'est spécialisée dans le développement de site internet et d'outils de communication. Vous avez un projet innovant à mettre en oeuvre ? Confiez-le lui ! En alliant style et ergonomie, elle saura lui apporter un design unique et adapté ! </p>

                    <p>Site Web: <a href="www.messaoudi-alison.fr">www.messaoudi-alison.fr</a>

                    <br/>
                    
                    Contact: <a href="mailto:messaoudi.alison@gmail.com">messaoudi.alison@gmail.com</a></p>
                
                </div>
        
        </div>

    </div>

</main>

<?php get_footer() ?>