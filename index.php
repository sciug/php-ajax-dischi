<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/common.css">

</head>


<body>
<div class="header_wrapper pt-2 pb-2">

      <div class="container">
           <div class="row">
            <div class="col-sm-2">
                <div class="img-wrapper">
                    <img src="./assets/img/spotify.svg" alt="" class="img-fluid">
                </div>
                
                
            </div>
          </div>
      </div>

</div>
  

    <div id="app">

  
    <div class="container" >

    <div class="row justify-content-center">
    <div class="col-4">
      <label for="author" class="select-label">select author</label>,
       <select v-model="selectedA" name="author" id="author" class="select" @change="filterAuthor" placeholder="select author">
      
                    <option :value="album.author"  v-for="album in getFilterAuthors"><span>{{album.author}}</span></option>
                    
        </select> 
        <label for="genre" class="select-label">select genre</label>
       <select v-model="selectedG" name="genre" id="genre" class="select" @change="filterGenre" placeholder="select author">
       <option :value="album.genre"  v-for="album in getFilterAuthors"><span>{{album.genre}}</span></option>
                   
        </select>

    </div>
       
  </div>








      <div class="row gy-4 justify-content-center">
        <div
          class="col-md-6 col-xl-2"
          v-for="album in getFilterAuthors"
          :key="album.title"
        >
          <div class="album_card text-center">
            <div class="img_wrapper">
              <img :src="album.poster" :alt="album.title" class="album_img" />
            </div>

            <h5 class="text-white text-uppercase mt-3">{{ album.title }}</h5>
            <h6 class="mb-0">{{ album.author }}</h6>

            <h6 class="mt-0">{{ album.year }}</h6>
          </div>
        </div>
      </div>
    </div>

  

    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="./assets/js/app.js"></script>


</body>
</html>
