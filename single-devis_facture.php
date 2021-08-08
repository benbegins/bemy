<?php get_header('facturation'); 

if(have_posts()):

    while(have_posts()): the_post();

    $type_de_document = get_the_terms($post->ID, 'types_de_document'); 
?>


<div class="facture text-xs leading-tight">

    <!-- LOGO -->
    <div class="absolute top-0 right-0 w-24">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 36">
            <g id="Groupe_16" data-name="Groupe 16" transform="translate(-2136.308 1926.801)">
              <g id="Groupe_8" data-name="Groupe 8" transform="translate(2176.543 -1919.832)">
                <g id="Groupe_7" data-name="Groupe 7">
                  <path
                    id="Tracé_8"
                    data-name="Tracé 8"
                    d="M2225.769-1916a8.957,8.957,0,0,0-7.128,3.465A6.533,6.533,0,0,0,2212.5-1916a7.822,7.822,0,0,0-6.339,3.386v-2.913H2205l-6.324,19.552v1.749h7.482V-1905.8c0-2.324,1.259-3.544,3.032-3.544s2.913,1.221,2.913,3.544v11.576h7.482V-1905.8c0-2.324,1.3-3.544,3.071-3.544s2.914,1.221,2.914,3.544v11.576h7.482V-1908.2C2233.053-1913.163,2230.3-1916,2225.769-1916Z"
                    transform="translate(-2198.678 1915.998)"
                  />
                </g>
                <path
                  id="Tracé_9"
                  data-name="Tracé 9"
                  d="M2262.92-1894.358l-8.348-20.907h7.835l4.253,12.835,4.016-12.835h7.678l-10.818,28.743h-7.573Z"
                  transform="translate(-2218.515 1915.738)"
                />
              </g>
              <g id="Groupe_10" data-name="Groupe 10" transform="translate(2136.308 -1926.801)">
                <path
                  id="Tracé_10"
                  data-name="Tracé 10"
                  d="M2143.79-1900.656v2.6h-7.482V-1926.8h7.482v10.277a7.819,7.819,0,0,1,6.457-3.307c5.08,0,9.45,4.212,9.45,11.024v.079c0,6.93-4.37,11.143-9.41,11.143A8,8,0,0,1,2143.79-1900.656Zm8.544-8.033v-.079a4.5,4.5,0,0,0-4.371-4.8,4.492,4.492,0,0,0-4.331,4.8v.079c0,2.835,1.93,4.843,4.331,4.843C2150.4-1903.846,2152.334-1905.815,2152.334-1908.689Z"
                  transform="translate(-2136.308 1926.801)"
                />
                <g id="Groupe_9" data-name="Groupe 9" transform="translate(25.744 6.969)">
                  <path
                    id="Tracé_11"
                    data-name="Tracé 11"
                    d="M2183.421-1902.808h6.121l3.689-11.4a10.8,10.8,0,0,0-6.265-1.786c-6.3,0-10.75,4.922-10.75,11.143v.079c0,6.272,4.252,10.59,10.4,11.021l1.808-5.588c-.133.008-.256.039-.393.039A4.4,4.4,0,0,1,2183.421-1902.808Zm3.584-7.678c2.048,0,3.425,1.5,3.7,3.858h-7.4C2183.7-1908.95,2185.035-1910.486,2187-1910.486Z"
                    transform="translate(-2176.215 1915.998)"
                  />
                </g>
              </g>
            </g>
        </svg>
    </div>


    <!-- COORDONNEES BEMY -->
    <section class="mb-10">
        <div class="w-1/3">
            <p>
                <strong>BEMY (GIE)</strong>
            </p>
            <p class="mt-2">
                3 mail Picasso<br>
                44000 Nantes<br>
                FRANCE<br>
                Siret : 889 967 782 00018
            </p>
            <p class="mt-2">
                <a href="https://bemy.studio">bemy.studio</a><br>
                <a href="mailto:hello@bemy.studio">hello@bemy.studio</a>
            </p>
        </div>
    </section>


    <!-- COORDONNEES CLIENT -->
    <section class="mb-16">
        <div class="w-1/3 ml-auto">
            <?php 
                $client = get_the_terms( $post->ID, 'clients' );
                $coordonnees_client = get_field('coordonnees', 'clients_' . $client[0]->term_id);
            ?>
            <p>
                <strong class="uppercase"><?php echo $client[0]->name; ?></strong>
            </p>
            <p class="mt-2 text-italic">
                <?php echo $coordonnees_client; ?>
            </p>
        </div>
    </section>


    <!-- DESCRIPTION PROJET -->
    <section class="mb-16">
        <div class="w-3/4">
            <h1 class="font-bold text-xl"><?php echo $type_de_document[0]->name; ?> N° <?php the_field('numero'); ?> du <?php the_date('d-m-Y'); ?></h1>
            <h2 class="text-base"><?php the_title(); ?></h2>
            <?php 
                $description_projet = get_field('description_du_projet');
                if($description_projet):
            ?>
                <p class="mt-5 italic opacity-50"><?php echo $description_projet; ?></p>
            <?php
                endif;
            ?>
        </div>
    </section>


    <!-- CHIFFRAGE -->
    <section class="leading-normal">

        <!-- PREMIERE LIGNE -->
        <div class="facture__chiffrage">
            <div class="border-b py-1">
                <p>Désignation</p>
            </div>
            <div class="border-b py-1 text-right">
                <p>Montant €HT</p>
            </div>
        </div>
        
        <!-- DETAIL CHIFFRAGE -->
        <?php 
            if(have_rows('chiffrage')):
                while(have_rows('chiffrage')): the_row();

                $titre_ligne = get_sub_field('titre_de_la_ligne');
                $prix_ligne = get_sub_field('prix');
                $description_ligne = get_sub_field('description');
        ?>
        <div class="facture__chiffrage mt-5">
            <div class="">
                <p class="uppercase"><?php echo $titre_ligne; ?></p>
                <p class="ml-5"><?php if($description_ligne){echo $description_ligne;} ?></p>
            </div>
            <div class="text-right">
                <p><?php if($prix_ligne){echo $prix_ligne;} ?></p>
            </div>
        </div>
        <?php
                endwhile;
            endif;
        ?>

        <!-- TOTAL -->
        <div class="facture__chiffrage mt-5">    
            <div></div>
            <div class="border-b py-1 text-right">
                <p>Total €HT</p>
            </div>
        </div>
        <div class="facture__chiffrage mt-2">    
            <div></div>
            <div class="py-1 text-right font-bold text-sm">
                <p><?php the_field('total'); ?></p>
            </div>
        </div>

    </section>


    <!-- FOOTER -->
    <section class="text-center mt-20">
        <p class="mb-2 italic opacity-50">TVA non applicable. Art. 293B du CGI</p>
        <?php 
            // Affiche le RIB uniquement si on est sur un facture
            if($type_de_document[0]->slug === "facture"):
        ?>
        <footer class="facture__footer pt-5 border-t">
            <p class="font-bold">Règlement par virement</p>
            <p>IBAN : FR76 1695 8000 0154 6840 6619 715</p>
            <p>BIC/SWIFT : QNTOFRP1XXX</p>
        </footer>
        <?php 
            endif;
        ?>
    </section>

   

</div>


<?php 
    endwhile;
endif;

get_footer('facturation'); 
?>