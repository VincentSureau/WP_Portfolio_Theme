<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vincent_Sureau_Portfolio
 */

get_header(); ?>

	<section id="primary" class="content-area <?= is_active_sidebar('sidebar-1') ? "col-lg-8": ""?>">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<section id="about" class="container">
					<h2 class="text-center">Présentation</h2>
					<h3 class="text-center">Développeur Web | PHP - Symfony - Wordpress</h3>
					<div class="row my-5">
						<div class="col-12 col-lg-6">
							<figure class="figure">
								<img src="<?= get_site_url() ?>/wp-content/themes/vincent-sureau-portfolio/images/promo-figure-alt.svg" class="figure-img img-fluid" alt="">
							</figure>
						</div>
						<div class="col-12 col-lg-6 d-flex flex-column justify-content-around align-items-center">
							<p>
								Je suis Vincent Sureau. Je suis développeur spécialisé dans la création de site web et d’applications mobiles.
							</p>
							<p>
								Je vous accompagne dans la mise en place de la stratégie numérique de votre entreprise.
							</p>
							<p>
								Basé au cœur du Var en région PACA, je me déplace sur la France entière pour concrétiser vos projets.
							</p>
							<p class="text-center">
								<a class="btn btn-primary btn-lg">
									Contact
								</a>
							</p>
						</div>
					</div>

					<div class="col-lg-8 mx-auto my-3">
							<ul class="list-star">
								<p class="text-center">
									J’ai déjà réalisé de nombreuses créations :
								</p>
								<li>
									Plateforme de mise en relation entre client et prestataires de service
								</li>
								<li>
									Outils de gestion de élèves
								</li>
								<li>
									Création de sites vitrines avec espace de gestion des membres
								</li>
								<li>
									Création de landing pages
								</li>
								<li>
									Plateforme de publication de vidéos
								</li>
								<li>
									Site de média d’actualité
								</li>
								<li>
									Création de site communautaire
								</li>
								<li>
									Missions de renfort au seins d’équipes de développeurs
								</li>
							</ul>
					</div>
				</section>
				<section id="info" class="my-5 col-lg-11 col-xl-8 mx-auto my-5">
					<div class="card-columns d-flex flex-column justify-content-center align-items-center align-items-lg-stretch flex-lg-row">
						<div class="card col-12 col-md-10 col-lg-5">
							<div class="card-body">
							<h5 class="card-title">Profil</h5>
							<table class="table-profile">
								<tbody>
									<tr>
										<th class="pb-1">Adresse:</th>
										<td class="pb-1">
											1152 chemin des Aubes Sud<br>
											83136 Forcalqueiret
										</td>
									</tr>
									<tr>
										<th class="pb-1">Phone:</th>
										<td class="pb-1">+33 (0)6 65 30 94 35</td>
									</tr>
									<tr>
										<th class="pb-1">Email:</th>
										<td class="pb-1" itemprop="email" itemtype="http://schema.org/email">Hello@Vincent-Sureau.fr</td>
									</tr>
								</tbody>
							</table>
							<div class="text-center">
								<a href="https://github.com/VincentSureau" target="_blank" class="btn btn-primary" title="profil github de Vincent Sureau">Github</a>
								<a href="https://www.linkedin.com/in/vincentsureau" target="_blank" class="btn btn-primary" title="profil linkedin de Vincent Sureau">LinkedIn</a>
							</div>
							</div>
						</div>
						<div class="card col-12 col-md-10 col-lg-3 p-0">
							<div class="card-body h-100 p-0">
								<iframe class="iframe" style="border:0;height:100%;width:100%;" src="https://www.google.com/maps/embed/v1/place?q=1152%20Chemin%20des%20Aubes%20Sud%2C%20Forcalqueiret%2C%20France&key=AIzaSyDvJdYw17Tbzi88RuJZwwI1obBJoeRltVY" allowfullscreen></iframe>
							</div>
						</div>
						<div class="card col-12 col-md-10 col-lg-4">
							<div class="card-body">
							<h5 class="card-title">Skills</h5>
							<div class="content">
								<div class="bs-component mb-1">
								<h6 class="m-0">HTML / CSS</h6>
									<div class="progress bg-light">
										<div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<h6 class="m-0">PHP</h6>
								<div class="bs-component mb-1">
									<div class="progress bg-light">
										<div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<h6 class="m-0">Symfony 4 / 5</h6>
								<div class="bs-component mb-1">
									<div class="progress bg-light">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<h6 class="m-0">Javascript</h6>
								<div class="bs-component mb-1">
									<div class="progress bg-light">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</section>

				<section id="cv" class="my-5">
					<div class="jumbotron">
					<p class="lead text-center font-weight-bold">Télécharger mon CV</p>
					<hr class="my-4">
					<p class="lead text-center">
						<a class="btn btn-primary btn-lg" href="#" role="button">Télécharger</a>
					</p>
					</div>
				</section>


				<?php $experiences = Vincent_Sureau_Portfolio__custom_query([
					"post_type" => "experience",
					"section_max_posts" => 20,
					]) 
				?>
				<?php if(!empty($experiences)): ?>
					<section id="experiences" class="container px-lg-5">
						<h2 class="text-center">Mes expériences</h2>
						<div class="card-columns">
							<?php foreach($experiences as $experience): ?>
								<?php //var_dump($experience); ?>
								<div class="card">
									<?= get_the_post_thumbnail($experience, 'experience_card', ["class" => "card-img-top"]) ?>
									<div class="card-body">
										<h3 class="card-title h4"><?= $experience->post_title ?></h3>
										<p class="card-text"><?= get_field('description', $experience->ID) ?></p>
										<p class="card-text">
											<?php foreach(get_the_terms($experience, 'Techno') as $techno): ?>
												<a href="#">#<?= $techno->name ?></a>
											<?php endforeach; ?>
										</p>
										<p class="card-text">
												<?= the_field('date', $experience->ID) ?>
										</p>
									</div>
								</div>
							<?php endforeach; ?>
						</div>				
					</section>
				<?php endif; ?>

				<?php $competences = Vincent_Sureau_Portfolio__custom_query([
					"post_type" => "competence",
					"section_max_posts" => 20,
					]) 
				?>
				<?php if(!empty($competences)): ?>
					<section id="competences" class="fluid-container my-5">
						<h2 class="text-center">Mes compétences</h2>
						<div class="d-flex flex-row flex-wrap justify-content-center align-items-strech">
							<?php foreach($competences as $competence): ?>
								<?php //var_dump($competence); ?>
								<div class="col-6 col-sm-4 col-md-3 col-xl-2 d-flex flex-column justify-content-between align-items-center">
									<div class="flex-grow-1 d-flex justify-content-center align-items-center">
										<?= get_the_post_thumbnail($competence, 'competence_card', ["class" => "img-fluid"]) ?>
									</div>
									<h3 class="h4"><?= $competence->post_title ?></h3>
								</div>
							<?php endforeach; ?>
						</div>				
					</section>
				<?php endif; ?>

				<section id="contact" class="my-5 container">
					<h2 class="text-center">Me contacter</h2>
					<div class="col-12 col-md-8 col-lg-6 mx-auto p-4 bg-duck-blue">
						<?= do_shortcode('[contact-form-7 id="155" title="Formulaire de contact Front Page"]') ?>
					</div>

				</section>
			<?php endwhile; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
