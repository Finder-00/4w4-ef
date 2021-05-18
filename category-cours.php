<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */

get_header();
?>
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					echo '<h1 class="page-title">' . single_cat_title( '', false ) . '</h1>';
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->


			<section class="cours"> <!-- Contenue de toutes les sessions --> 

			<!-- Session1 -->
			<section class="session1">
				<h1>1</h1> <!-- no session -->
				<?php $precedent = "XXXXXX";

				while ( have_posts() ) :
					the_post();
					convertirTableau($tPropriété);
					if (in_array($tPropriété['session'], ['1'])):?>
							<?php get_template_part( 'template-parts/content', 'cours');?>
					<?php endif ?>
					<?php	
					$precedent = $tPropriété['typeCours'];
				endwhile;?>
			</section>

			<section class="session2">
				<h1>2</h1> <!-- no session -->
				<?php $precedent = "XXXXXX";
				while ( have_posts() ) :
					the_post();
					convertirTableau($tPropriété);
					if (in_array($tPropriété['session'], ['2'])):?>
									<?php get_template_part( 'template-parts/content', 'cours');?>
					<?php endif ?>
					<?php	
					$precedent = $tPropriété['typeCours'];
				endwhile;?>
			</section>

			<section class="session3">
				<h1>3</h1> <!-- no session -->
				<?php $precedent = "XXXXXX";
				while ( have_posts() ) :
					the_post();
					convertirTableau($tPropriété);
					if (in_array($tPropriété['session'], ['3'])):?>
							<?php get_template_part( 'template-parts/content', 'cours');?>
						<?php endif ?>
					<?php	
					$precedent = $tPropriété['typeCours'];
				endwhile;?>
			</section>

			<section class="session4">
				<h1>4</h1> <!-- no session -->
				<?php $precedent = "XXXXXX";
				while ( have_posts() ) :
					the_post();
					convertirTableau($tPropriété);
					if (in_array($tPropriété['session'], ['4'])):?>
							<?php get_template_part( 'template-parts/content', 'cours');?>
						<?php endif ?>	
					<?php	
					$precedent = $tPropriété['typeCours'];
				endwhile;?>
			</section>

			<section class="session5">
				<h1>5</h1> <!-- no session -->
				<?php $precedent = "XXXXXX";
				while ( have_posts() ) :
					the_post();
					convertirTableau($tPropriété);
					if (in_array($tPropriété['session'], ['5'])):?>
							<?php get_template_part( 'template-parts/content', 'cours');?>
						<?php endif ?>
					<?php	
					$precedent = $tPropriété['typeCours'];
				endwhile;?>
			</section>

			<section class="session6">
				<h1>6</h1> <!-- no session -->
				<?php $precedent = "XXXXXX";
				while ( have_posts() ) :
					the_post();
					convertirTableau($tPropriété);
					if (in_array($tPropriété['session'], ['6'])):?>
							<?php get_template_part( 'template-parts/content', 'cours');?>
						<?php endif ?>	
					<?php	
					$precedent = $tPropriété['typeCours'];
				endwhile;?>
			</section>


			</section> <!-- fin section cours -->
		<?php endif; ?>
	

	</main><!-- #main -->

<?php 
// get_sidebar();
get_footer();

function convertirTableau(&$tPropriété)
{
	/*
	$titre = get_the_title(); 
	// 582-1W1 Mise en page Web (75h)
	$sigle = substr($titre, 0, 7);
	$nbHeure = substr($titre,-4,3);
	$titrePartiel =substr($titre,8,-6);
	$session = substr($titre, 4,1);
	// $contenu = get_the_content();
	// $resume = substr($contenu, 0, 200);
	$typeCours = get_field('type_de_cours');
*/

	$tPropriété['titre'] = get_the_title(); 
	$tPropriété['sigle'] = substr($tPropriété['titre'], 0, 7);
	$tPropriété['nbHeure'] = substr($tPropriété['titre'],-4,3);
	$tPropriété['titrePartiel'] = substr($tPropriété['titre'],8,-6);
	$tPropriété['session'] = substr($tPropriété['titre'], 4,1);
	$tPropriété['typeCours'] = get_field('type_de_cours');
}


function class_composant($typeCours){

	if (in_array($typeCours, ['1'])){
		return 'class="session1"';
	}
	elseif (in_array($typeCours, ['2'])){
		return 'class="session2"';
	}
	elseif (in_array($typeCours, ['3'])){
		return 'class="session3"';
	}
	elseif (in_array($typeCours, ['4'])){
		return 'class="session4"';
	}
	elseif (in_array($typeCours, ['5'])){
		return 'class="session5"';
	}
	elseif (in_array($typeCours, ['6'])){
		return 'class="session6"';
	}
}
