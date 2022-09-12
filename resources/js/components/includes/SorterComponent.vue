<template>
    <v-row class="sorter" align="center" >
      <v-col class="py-1" lg="9" md="8" sm="6" cols="12">
        <h2 class="use-text-subtitle">{{ resultLength }} artículos encontrados</h2>
      </v-col>
      <v-col class="py-1" lg="3" md="4" sm="6" cols="12">
        <div class="d-flex justify-end align-center">         
          <!-- v-if="isDesktop" -->
          <v-btn-toggle
            
            :value="view"
            class="me-4"
            @change="(e) => switchView(e)"
          >
            <v-btn small>
              <v-icon>mdi-view-grid</v-icon>
            </v-btn>
            <v-btn small>
              <v-icon>mdi-format-list-bulleted</v-icon>
            </v-btn>
          </v-btn-toggle>
          <v-select
            value="sortBySelected"
            :items="sortList"
            @change="(e) => handleSortBy(e)"
            item-text="title"
            item-value="value"
            label="Ordenar por:"
            return-object
            single-line
            persistent-hint
          />
        </div>
      </v-col>
    </v-row>
  </template>
  
  <style scoped lang="scss">
//   @import './filter';
  </style>
  
  <script>
//   import STORE from "./breakpoints.js"
  export default {
    data() {
      return {
        sortList: [
          {
            title: 'Título de la A to Z',
            value: 'title-asc'
          },
          {
            title: 'Título Z to A',
            value: 'title-desc'
          },
          {
            title: 'Precio más alto',
            value: 'price-asc'
          },
          {
            title: 'El precio más bajo',
            value: 'price-desc'
          }
        ],
        state: {
    smUp: ['smDown', 'mdDown', 'lgDown', 'xl'],
    mdUp: ['mdDown', 'lgDown', 'xl'],
    lgUp: ['lgDown', 'xl'],
    xlUp: ['xl'],
    xsDown: ['xsDown'],
    smDown: ['smDown', 'xsDown'],
    mdDown: ['mdDown', 'smDown', 'xsDown'],
    lgDown: ['lgDown', 'mdDown', 'smDown', 'xsDown']
  },
      }
    },
    mounted() {
        // console.log(STORE);
    },
    methods: {
      switchView(view) {
        this.$emit('switch-view', view)
      },
      handleSortBy(sortBySelected) {
        this.$emit('sort-by', sortBySelected)
      },
      handleOpenFilter() {
        this.$emit('open-filter')
      }
    },
    props: {
      view: {
        type: Number,
        default: 0
      },
      sortBySelected: {
        type: Object,
        required: true
      },
      resultLength: {
        type: Number,
        required: true
      }
    },
    computed: {
    
    }
  }
  </script>
  