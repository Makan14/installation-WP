</main>
<?php wp_footer() ?>
<footer class="container-fluid">
<div class="row">
        <!-- celle de gauche -->
        <div class="orange col-6"> <?php dynamic_sidebar('bas-gauche') ?> </div>

        <!-- celle de droite -->
        <div class="violet col-6"> <?php dynamic_sidebar('bas-droit') ?> </div>

    </div>
</footer>


<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>