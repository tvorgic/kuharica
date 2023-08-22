<?php require base_path('views/partials/head.php')?>
<?php require base_path('views/partials/nav.php')?>
<?php require base_path('views/partials/banner.php')?>
 


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1><?= $recipe['naziv'] ?> By <?= $recipe['ime'] ?> <?= $recipe['prezime'] ?></h1>

        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">go back...</a>
        </p>

        <p><?= htmlspecialchars($recipe['opis']) ?></p>

        <br>
        
        <p>
            <h3>Vrijeme izrade:</h3>
            <?= htmlspecialchars($recipe['vrijeme_izrade']) ?>
        </p>






        <footer class="mt-6">
            <a href="/note/edit?sifra=<?=$recept['sifra']?>" class="inline-flex justify-center rounded-md border border-transparent bg-gray-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Edit</a>
        </footer>



    </div>
</main>
 
<?php require base_path('views/partials/footer.php')?>