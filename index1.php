<?php 
include __DIR__ . '/db.php';
// var_dump($albums);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- FONTAWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

  <!-- AXIOS -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <link rel="stylesheet" href="./assets/style.css">

  <title>php-ajax-dischi</title>
</head>
<body>

  <div id="app">
    <!-- HEADER -->
    <header>
      <div class="my-header">
        <div>
          <i class="fa-brands fa-spotify"></i>
        </div>
        
        <div class="k_group">
          <select name="genre" id="inputGroupSelect04"
          v-model="selected">
          <select v-model="selected">
            <option value="all">all</option>
            <option v-for="genere in generi" :value="genere">{{genere}}</option>
          </select>
          </select>
        </div>
      </div>
    </header>

    <main>
      <div class="k_container py-5">
        <!-- CICLARE LA CARD -->
          <?php foreach($albums as $album) : ?>
          <div class="k_card">
            <img src="<?php echo $album['image'] ?>">
            <div class="title-card"><?php echo $album['title'] ?></div>
        
            <div class="singer-year">
              <div><?php echo $album['artist'] ?></div>
              <div><?php echo $album['releaseYear'] ?></div>
            </div>
          </div>
        <?php endforeach; ?>
        

        <!-- //CICLARE LA CARD -->
        </div>

      <!-- <div v-else class="album-container2"> -->
        LOAD COMP
      
    </main>

  </div>
        
        
      
      



  <!-- VUE -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="./script.js"></script>
</body>
</html>