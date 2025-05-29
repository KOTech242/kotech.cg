<?php include 'includes/head.php'; ?>
  <section id="intro">

    <div class="container">
        <div class="row">
          <style>
              .custom-solutions-box {
                background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
                color: #fff;
                padding: 40px 30px;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
                position: relative;
                overflow: hidden;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                height: 100%;
              }
              .custom-solutions-box:hover {
                transform: translateY(-5px);
                box-shadow: 0 15px 40px rgba(0, 0, 0, 0.6);
              }
              .custom-solutions-box::before {
                content: "🌐";
                position: absolute;
                font-size: 180px;
                color: rgba(255, 255, 255, 0.03);
                right: 20px;
                top: 10px;
                z-index: 0;
              }
              .custom-solutions-box .content {
                position: relative;
                z-index: 1;
              }
              .custom-solutions-box h3 {
                font-size: 2em;
                margin-bottom: 20px;
              }
              .custom-solutions-box .highlight {
                color: #00d8ff;
              }
              .custom-solutions-box .lead {
                font-size: 1.15em;
                margin-bottom: 25px;
                line-height: 1.6;
              }
              .custom-solutions-box .features {
                list-style: none;
                padding-left: 0;
                font-size: 1.1em;
              }
              .custom-solutions-box .features li {
                margin-bottom: 15px;
                display: flex;
                align-items: center;
              }
              .custom-solutions-box .features i {
                margin-right: 10px;
                color: #00d8ff;
                font-size: 1.2em;
              }

          </style>

          <!-- Colonne gauche : contenu stylisé -->
          <div class="span6">
            <div class="custom-solutions-box">
              <div class="content">
                <h5>
                  <strong style='color:white'>Votre entreprise, <span class="highlight">réinventée par la technologie</span></strong>
                </h5>
                <p class="lead">
                  Nous concevons pour vous, des applications web et mobiles performantes, des logiciels sur mesure,
                  et assurons la protection de vos systèmes informatiques. Donnez une longueur d'avance à votre transformation numérique.
                </p>
                <ul class="features">
                  <li><i class="fas fa-code"></i> Développement d'applications web, mobiles et logiciels métiers</li>
                  <li><i class="fas fa-shield-alt"></i> Sécurité informatique & cybersécurité</li>
                  <li><i class="fas fa-search-dollar"></i> Conseils stratégiques et audit des systèmes d'information</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Colonne droite : slides (inchangé) -->
          <div class="span6">
            <div class="group section-wrap upper" id="upper">
              <div class="section-2 group">
                <ul id="images" class="rs-slider">
                  <li class="group">
                    <a href="#">
                      <img src="assets/img/slides/refine/slide1.png" alt="" />
                    </a>
                  </li>
                  <li class="group">
                    <a href="#" class="slide-parent">
                      <img src="assets/img/slides/refine/slide2.png" alt="" />
                    </a>
                  </li>
                  <li class="group">
                    <img src="assets/img/slides/refine/slide3.png" alt="" />
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>

    </div>

  </section>


  <section id="maincontent">
    <div class="container">
      <div class="row">
          <div class="span4">
            <div class="features">
              <div class="icon">
                <i class="icon-bg-light icon-circled icon-desktop icon-5x active"></i>
              </div>
              <div class="features_content">
                <h3>Applications Web et Logiciel</h3>
                <p>
                  Création de solutions web dynamiques, évolutives et adaptées à vos besoins métiers. Nos applications sont rapides, sécurisées et optimisées pour tous les appareils.
                </p>
              </div>
            </div>
          </div>

          <div class="span4">
            <div class="features">
              <div class="icon">
                <i class="icon-bg-light icon-circled icon-mobile-phone icon-5x active"></i>
              </div>
              <div class="features_content">
                <h3>Applications Mobiles</h3>
                <p>
                  Nous développons des applications Android et iOS intuitives et performantes pour renforcer votre présence mobile et améliorer l'expérience utilisateur.
                </p>
              </div>
            </div>
          </div>

          <div class="span4">
            <div class="features">
              <div class="icon">
                <i class="icon-bg-light icon-circled icon-shield icon-5x active"></i>
              </div>
              <div class="features_content">
                <h3>Sécurité & Audit informatique</h3>
                <p>
                  Audit complet de votre système d'information, mise en place de stratégies de sécurité informatique et accompagnement dans la conformité aux normes internationales.
                </p>
              </div>
            </div>
          </div>
        </div>

      <!-- blank divider -->
      <div class="row">
        <div class="span12">
          <div class="blank10"></div>
        </div>
      </div>

      <section id="cta" style="background-color: #1a1a1a; color: #fff; padding: 60px 0; text-align: center;">
        <div class="container">
          <h2 style="font-size: 2.5em; margin-bottom: 20px;color: #fff;">
            💡 Offre Spéciale : Audit de sécurité GRATUIT !
          </h2>
          <p style="font-size: 1.2em; max-width: 700px; margin: 0 auto 30px;">
            Pour toute entreprise souhaitant sécuriser son système informatique ou lancer un projet numérique, nous offrons un audit gratuit de vos systèmes. C’est le moment d’agir !
          </p>
          <a href="#contact" class="btn btn-primary btn-lg" style="background-color: #007bff; color: #fff; padding: 15px 30px; font-size: 1.1em; border-radius: 8px;">
            Demandez votre audit gratuit
          </a>
        </div>
      </section>


      <div class="row">
        <div class="span6">
          <h4>What people say about us</h4>
          <div class="testmonial_slider">
            <ul class="slides">
              <li>
                <div class="testimonial_item">
                  <p>
                    Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.
                  </p>
                  <span class="author">Johny doe</span>
                  <span class="occupation">Graphic and HTML Web Designer</span>
                  <!-- end testmonial -->
                </div>
              </li>
              <li>
                <div class="testimonial_item">
                  <p>
                    Aenean commodo ligula eget dolor. Aenean massa.
                  </p>
                  <span class="author">John Doe</span>
                  <span class="occupation">CEO Engineer</span>
                  <!-- end testmonial -->
                </div>
              </li>
              <li>
                <div class="testimonial_item">
                  <p>
                    libero quam euismod quam, sed sodales purus nisl eget felis. Pellentesque elit massa, cursus id.
                  </p>
                  <span class="author">Roro Still</span>
                  <span class="occupation">New In Field</span>
                  <!-- end testmonial -->
                </div>
              </li>
            </ul>
            <!-- end testmonial slider -->
          </div>
          <div class="blank"></div>

          <h4>Our satisfied clients</h4>
          <ul class="clients">
            <li>
              <a href="#">
									<img src="assets/img/dummies/clients/client1.png" class="client-logo" alt="" />
								</a>
            </li>
            <li>
              <a href="#">
									<img src="assets/img/dummies/clients/client2.png" class="client-logo" alt="" />
								</a>
            </li>
            <li>
              <a href="#">
									<img src="assets/img/dummies/clients/client3.png" class="client-logo" alt="" />
								</a>
            </li>

          </ul>

        </div>

        <div class="span6">
          <h4>Our services</h4>
          <!-- start: Accordion -->
          <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
								<i class="icon-caret-down"></i> Social media optimization </a>
              </div>
              <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                  on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                  raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
								<i class="icon-caret-right"></i> Web design and development </a>
              </div>
              <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                  on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                  raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
								<i class="icon-caret-right"></i> Business strategy and management </a>
              </div>
              <div id="collapseThree" class="accordion-body collapse">
                <div class="accordion-inner">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                  on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                  raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
          <!--end: Accordion -->
        </div>
      </div>



    </div>
  </section>
 <?php include 'includes/foot.php'; ?>