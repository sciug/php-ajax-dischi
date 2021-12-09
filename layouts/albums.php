
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
