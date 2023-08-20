<?php require base_path('views/partials/head.php')?>
<?php require base_path('views/partials/nav.php')?>
<?php require base_path('views/partials/banner.php')?>
 
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
   <ul>
   <?php foreach ($recipes as $recipe) : ?>
      <li>
          <a href="/recipe?sifra=<?= $recipe['sifra'] ?>" class="text-blue-500 hover:underline">
          <?=$recipe['naziv'] ?>  
          </a>
      </li>
    <?php endforeach; ?>
   </ul>
   
   <p class="mt-8">
    <a href="recipes/create" class="text-blue-500 hover:underline">Create recipe</a>
   </p>
  </div>
</main>


<?php require base_path('views/partials/footer.php')?>