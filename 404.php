<?php get_header(); ?>

<div class="page-404">

    <section class="container">
      <div class="py-40 flex flex-col justify-center min-h-screen relative">
        <h1 class="text-3xl">
          4<span class="text-bemy-red">0</span>4
		</h1>
		<p class="text-lg">
    <?php 
    if (pll_current_language() == "en"){
      echo "Don't panic! Page is just missing.";
    } else {
      echo "Pas de panique, la page a sans doute juste été déplacée.";
    } 
    ?>
    </p>
		<div class="relative inline-block mt-12">
          <a href="<?php echo pll_home_url(); ?>" class="btn btn-primary relative"><?php pll_e("Retour à l'accueil"); ?></a>  
        </div>
      </div>
    </section>


</div>
<?php get_footer(); ?>
