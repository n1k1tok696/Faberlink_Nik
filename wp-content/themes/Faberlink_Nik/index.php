<?php

/*
Template Name: Home
*/

?>

<?php get_header();?>

<main>
    <section class="main-page">
      <div class="left-article">
        <a href="/" class="main-logo">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/logo_icon.png" alt="Logo">
          <h2>FABERLING</h2>
        </a>
        <div class="site-title">
          <h1>Finden Sie Ihren Architekten</h1>
          <p>Von unserer Architektur-Community erhalten Sie im Wettbewerbsverfahren
            Architektur-Konzeptentwürfe die Sie begeistern werden — Sie küren den Gewinner, bezahlen einen Preis und das
            mit Preisgeld-zurück-Garantie.</p>
        </div>
        <button><span>JETZT STARTEN</span></button>
      </div>
      <div class="right-article">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/fone.jpg" alt="fone">
      </div>
    </section>
    <section class="design_concept">
      <h2>Was beinhaltet ein Architektur-Konzeptentwurf?</h2>
      <div class="blocks-in-row">
        <div>
          <img src="<?php echo get_template_directory_uri();?>/assets/images/design_concept/Union1.png" alt="Union1">
          <div>
            <h2>Handgezeichnetes Planmaterial</h2>
            <p>
              Sie erhalten Grundrisse, Ansichten (Nord, Süd, West, Ost) und einen Längs- sowie
              Querschnitt, Situationsplan mit Dachaufsicht sowie eine grobe Umgebungsgestaltung
            </p>
          </div>
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri();?>/assets/images/design_concept/Union2.png" alt="Union2">
          <div>
            <h2>Gesetzeskonform</h2>
            <p>
              Das Planmaterial entspricht den gesetzlichen Vorgaben und dem Zonenreglement vor Ort.
            </p>
          </div>
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri();?>/assets/images/design_concept/Union3.png" alt="Union3">
          <div>
            <h2>Konzeptbeschreibung</h2>
            <p>
              Sie erhalten eine Beschreibung in Text- und Skizzen-Form.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="how-to-get">
      <div>
        <img src="<?php echo get_template_directory_uri();?>/assets/images/fone.jpg" alt="Another image">
      </div>
      <div class="steps">
        <p>Erhalte Konzept-Entwürfe von Architekten in 3 einfachen Schritten</p>
        <div class="list">
          <span class="square">1</span>
          <p>Briefing erstellen und Preisgeld festlegen.</p>
        </div>
        <div class="list">
          <span class="square">2</span>
          <p>Architekten reichen Entwürfe ein, Sie geben Feedback.</p>
        </div>
        <div class="list">
          <span class="square">3</span>
          <p>Gewinner küren und Nutzungsrechte erhalten.</p>
        </div>
        <div class="button-left">
          <button>JETZT STARTEN</button>
        </div>
      </div>
    </section>
    <section>
      <p>This post from home page</p>
      <?php if (have_posts()) { while (have_posts()) { the_post();?>
        <div>
          <a href="<?php the_permalink();?>">
            <h1><?php the_title();?></h1>
          </a>
          <p>Preview: <?php the_post_thumbnail('thumbnail');?></p>
          <p>Creation time: <?php the_time('F, jS, Y');?></p>
          <p>Add category: <?php the_category( $separator = '/');?></p>
          <p>Some tags: <?php the_tags( '', '/');?></p>

          <?php the_excerpt();?>
        </div>
          <?php } 
        } ?>
    </section>
    <section>
      <p>This posts from another page</p>
      <?php 
        // параметры по умолчанию
        $posts = get_posts( array(
          'numberposts' => 2,
          'post_type'   => 'post',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

        foreach( $posts as $post ){ setup_postdata($post);
            ?>
              <div>
                <?php the_title();?>
              </div>
            <?php
        }

        wp_reset_postdata(); // сброс
      ?>
    </section>
    <section class="principles design_concept">
      <h2>Faberling steht für</h2>
      <div class="blocks-in-row">
        <div>
          <img src="<?php echo get_template_directory_uri();?>/assets/images/principles/principles1.png" alt="Union1">
          <div>
            <h2>Kreativität</h2>
            <p>
              Nutzen Sie die schöpferische Kraft unserer Architekten-Community.
            </p>
          </div>
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri();?>/assets/images/principles/principles2.png" alt="Union1">
          <div>
            <h2>Individuelle Entwürfe</h2>
            <p>
              Jeder Entwurf wird auf Ihre Bedürfnisse massgeschneidert.
            </p>
          </div>
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri();?>/assets/images/principles/principles3.png" alt="Union1">
          <div>
            <h2>Zufriedenheits-Garantie</h2>
            <p>
              Wenn Ihnen kein Entwurf gefällt, erhalten Sie Ihr Preisgeld zurück.
            </p>
          </div>
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri();?>/assets/images/principles/principles4.png" alt="Union1">
          <div>
            <h2>Effizienz</h2>
            <p>
              Mit einem Briefing erhalten Sie mehrere Entwürfe in 5 Tagen.
            </p>
          </div>
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri();?>/assets/images/principles/principles5.png" alt="Union1">
          <div>
            <h2>Preis/Leistung</h2>
            <p>
              Erhalten Sie mehrere Entwürfe zum Preis von einem.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="feedback">
      <div class="left-column">
        <div>
          <div class="image-feedback">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/fone.jpg" alt="Feedback">
          </div>
          <p class="feedback-label">Einfamilienhaus</p>
          <p class="feedback-title">Heim für die Familie mit vier Kindern</p>
          <p>123 Entwürfe</p>
        </div>
      </div>
      <div class="right-column">
        <div>
          <p class="feedback-header">Was Baufrauen & Bauherren über uns sagen...</p>
          <p class="feedback-content">
            Fräulein Glitzer ist aus der Leidenschaft für eine liebevolle,
            kreative und außergewöhnliche Kinderbetreuung geboren. Das Logo soll
            eine schöne Kindheit, Geborgenheit und Spaß widerspiegeln. Fräulein
            Glitzer kann als eine Art Fantasiefigur entwickelt werden.
          </p>
          <div>
            <img src="<?php echo get_template_directory_uri();?>/assets/images/user_logo.png" alt="user-logo">
            <p><span>Gina Dahmen</span>, 16. Dezember 2020</p>
          </div>
          <button><span>Details</span></button>
        </div>
      </div>
    </section>
    <section class="needs design_concept">
      <h2>Welche Kreativleistung benötigen Sie?</h2>
      <div class="blocks-in-row">
        <div>
          <img src="<?php echo get_template_directory_uri();?>/assets/images/needs/needs1.png" alt="Union1">
          <div>
            <h2>Neubau Einfamilienhaus</h2>
            <p>
              Erzählen Sie uns von Ihrem Traum-Einfamilienhaus (EFH).
            </p>
          </div>
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri();?>/assets/images/needs/needs2.png" alt="Union2">
          <div>
            <h2>Anbau/Aufbau Einfamilienhaus</h2>
            <p>
              Erzählen Sie uns von Ihrem Traum-Aufbau oder -Anbau.
            </p>
          </div>
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri();?>/assets/images/needs/needs3.png" alt="Union3">
          <div>
            <h2>Ihr Projekt</h2>
            <p>
              Erzählen Sie uns von Ihrem Traum-Projekt.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="brands">
      <h2>Bekannt aus</h2>
      <div class="carousel">
        <span class="arrow arrow-left">&#8592;</span>
        <div class="companies">
          <div>
            <div>
              <img src="<?php echo get_template_directory_uri();?>/assets/images/brands/brand1.png" alt="brand-logo">
            </div>
            <a href="https://wohnidee.wunderweib.de" target="_blank">wohnidee.wunderweib.de</a>
            <p class="brands-description">9 Städte-Trips in Frankreich für Architektur und Designfans</p>
            <p>28. January 2020</p>
          </div>
          <div>
            <div>
              <img src="<?php echo get_template_directory_uri();?>/assets/images/brands/brand2.png" alt="brand-logo">
            </div>
            <a href="https://freundin.de" target="_blank">freundin.de</a>
            <p class="brands-description">Das macht eine Frau langweilig, sagen Männer</p>
            <p>28. January 2020</p>
          </div>
          <div>
            <div>
              <img src="<?php echo get_template_directory_uri();?>/assets/images/brands/brand3.png" alt="brand-logo">
            </div>
            <a href="https://elle.de" target="_blank">elle.de</a>
            <p class="brands-description">Snow Down: Das sind die besten Hotels, um abseits der Piste zu entspannen</p>
            <p>28. January 2020</p>
          </div>
          <div>
            <div>
              <img src="<?php echo get_template_directory_uri();?>/assets/images/brands/brand4.png" alt="brand-logo">
            </div>
            <a href="https://vogue.de" target="_blank">vogue.de</a>
            <p class="brands-description">Barcelona: Gaudis Architektur entdecken</p>
            <p>28. January 2020</p>
          </div>
        </div>
        <p class="arrow arrow-right">&#8594;</p>
      </div>
    </section>
  </main>

<?php get_footer();?>