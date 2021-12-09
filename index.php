<?php
require __DIR__ . '/layouts/head.php';
?>

<?php
require __DIR__ . '/layouts/header.php';
?>



    <div id="app">


    <div class="container">

    <!-- //select -->

              <?php
          require __DIR__ . '/layouts/select.php';
          ?>


    <!-- //albums -->
    <?php
require __DIR__ . '/layouts/albums.php';
?>

    </div>



    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="./assets/js/app.js"></script>


</body>
</html>
