<template>
    <v-card :class="[orientation, type]" class="product-card" width="300">
      <a :href="href" v-ripple class="hidden-link">Ruta a ver producto {{title}}</a>
      <figure>
        <v-img :src="img" :alt="title" aspect-ratio="1.7"
          contain ></v-img>
      </figure>
      <div class="desc m-3">
        <div class="text">
          <h6 class="title pb-2 text-truncate">{{ title }}</h6>
          <p class="use-text-paragraph">
            {{ desc }}
          </p>
        </div>
        <div>
          <div class="property">
            <div class="rating" v-if="rating > 0">
              <v-rating
                :value="rating"
                color="orange lighten-3"
                background-color="grey"
                length="5"
                readonly
                size="24"
              />
            </div>
            <div v-else>Sin calificacion</div>
            <strong v-if="price > 0">${{ price }}</strong>
            <strong v-else>Sin precio</strong>
          </div>
          <v-btn :href="href" block class="button" outlined color="primary">
            {{ 'common.btn_detail' }}
          </v-btn>
        </div>
      </div>
    </v-card>
  </template>
  
  <style lang="scss" scoped>
//   @import './product-card';
  </style>
  
  <script>
  export default {
    props: {
      type: {
        type: String,
        default: 'full' // available props: full, rounded, over, oval
      },
      img: {
        type: String,
        required: true
      },
      title: {
        type: String,
        required: true
      },
      desc: {
        type: String,
        required: true
      },
      rating: {
        type: Number,
        default: 0
      },
      price: {
        type: Number,
        default: 0
      },
      orientation: {
        type: String,
        default: 'portrait'
      },
      href: {
        type: String,
        default: '#'
      }
    }
  }
  </script>
  