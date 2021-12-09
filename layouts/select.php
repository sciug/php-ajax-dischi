<div class="row justify-content-center mb-5">

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