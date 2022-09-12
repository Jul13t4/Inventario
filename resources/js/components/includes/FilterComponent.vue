<template>
    <aside class="filter">
      <div class="filter-block">
        <v-list>
          <v-subheader class="title-filter">Filtrar categorías</v-subheader>
          <v-list-item-group
            :value="filterCategory"
            @change="(e) => changeCategory(e)"
            color="primary"
          >
            <v-list-item value="all">
              <v-list-item-title>
                {{ 'Listar todo' }}
              </v-list-item-title>
            </v-list-item>
            <v-list-item value="cat-a">
              <v-list-item-title>Categoría a</v-list-item-title>
            </v-list-item>
            <v-list-item value="cat-b">
              <v-list-item-title>Categoría b</v-list-item-title>
            </v-list-item>
            <v-list-item value="cat-c">
              <v-list-item-title>Categoría c</v-list-item-title>
            </v-list-item>
            <v-list-item value="cat-d">
              <v-list-item-title>Categoría d</v-list-item-title>
            </v-list-item>
            <v-list-item value="cat-e">
              <v-list-item-title>Categoría e</v-list-item-title>
            </v-list-item>
            <v-list-item value="cat-f">
              <v-list-item-title>Categoría f</v-list-item-title>
            </v-list-item>
          </v-list-item-group>
        </v-list>
      </div>
      <div class="filter-block">
        <v-subheader class="title-filter">Clasificación</v-subheader>
        <v-list-item-group
          :value="filterRating"
          @change="(e) => changeRating(e)"
          color="primary"
        >
          <v-list-item :value="0">
            <v-list-item-title>Toda la clasificación</v-list-item-title>
          </v-list-item>
          <v-list-item :value="1">
            <v-list-item-content>
              <v-list-item-title>
                <v-icon color="orange">mdi-star</v-icon>
                <v-icon>mdi-star</v-icon>
                <v-icon>mdi-star</v-icon>
                <v-icon>mdi-star</v-icon>
                <v-icon>mdi-star</v-icon>
              </v-list-item-title>
              <v-list-item-subtitle>Minimum 1 star rating</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
          <v-list-item :value="2">
            <v-list-item-content>
              <v-list-item-title>
                <v-icon color="orange">mdi-star</v-icon>
                <v-icon color="orange">mdi-star</v-icon>
                <v-icon>mdi-star</v-icon>
                <v-icon>mdi-star</v-icon>
                <v-icon>mdi-star</v-icon>
              </v-list-item-title>
              <v-list-item-subtitle>Minimum 2 star rating</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
          <v-list-item :value="3">
            <v-list-item-content>
              <v-list-item-title>
                <v-icon color="orange">mdi-star</v-icon>
                <v-icon color="orange">mdi-star</v-icon>
                <v-icon color="orange">mdi-star</v-icon>
                <v-icon>mdi-star</v-icon>
                <v-icon>mdi-star</v-icon>
              </v-list-item-title>
              <v-list-item-subtitle>Minimum 3 star rating</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
          <v-list-item :value="4">
            <v-list-item-content>
              <v-list-item-title>
                <v-icon color="orange">mdi-star</v-icon>
                <v-icon color="orange">mdi-star</v-icon>
                <v-icon color="orange">mdi-star</v-icon>
                <v-icon color="orange">mdi-star</v-icon>
                <v-icon>mdi-star</v-icon>
              </v-list-item-title>
              <v-list-item-subtitle>Minimum 4 star rating</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
          <v-list-item :value="5">
            <v-list-item-content>
              <v-list-item-title>
                <v-icon color="orange">mdi-star</v-icon>
                <v-icon color="orange">mdi-star</v-icon>
                <v-icon color="orange">mdi-star</v-icon>
                <v-icon color="orange">mdi-star</v-icon>
                <v-icon color="orange">mdi-star</v-icon>
              </v-list-item-title>
              <v-list-item-subtitle>Minimum 5 star rating</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
        </v-list-item-group>
      </div>
      <div class="filter-block">
        <h3 class="title-filter">Etiquetas de filtro</h3>
        <span class="btn-tag">
          <input
            id="tag_one"
            type="checkbox"
            v-model="filterTag"
            :checked="filterTag.indexOf('tag-one')>-1"
            @click="collectTag(filterTag)"
            value="tag-one"
          />
          <label v-ripple for="tag_one">Etiqueta uno</label>
        </span>
        <span class="btn-tag">
          <input
            id="tag_two"
            type="checkbox"
            v-model="filterTag"
            :checked="filterTag.indexOf('tag-two')>-1"
            @click="collectTag(filterTag)"
            value="tag-two"
          />
          <label v-ripple for="tag_two">Etiqueta dos</label>
        </span>
        <span class="btn-tag">
          <input
            id="tag_three"
            type="checkbox"
            v-model="filterTag"
            :checked="filterTag.indexOf('tag-three')>-1"
            @click="collectTag(filterTag)"
            value="tag-three"
          />
          <label v-ripple for="tag_three">Etiqueta tres</label>
        </span>
        <span class="btn-tag">
          <input
            id="tag_four"
            type="checkbox"
            v-model="filterTag"
            :checked="filterTag.indexOf('tag-four')>-1"
            @click="collectTag(filterTag)"
            value="tag-four"
          />
          <label v-ripple for="tag_four">Etiqueta cuatro</label>
        </span>
      </div>
      <div class="filter-block">
        <h3 class="title-filter">Rango de filtro</h3>
        <v-text-field class="input-price" v-model="from" placeholder="$ From" />
        &nbsp; - &nbsp;
        <v-text-field class="input-price" v-model="to" placeholder="$ To" />
        <v-btn
          color="primary"
          :elevation="0"
          small
          block
          @click="changeRange({from, to})"
        >
          Aplicar
          <v-icon class="use-rtl-flip">mdi-chevron-right</v-icon>
        </v-btn>
      </div>
      <div class="filter-block">
        <v-list>
          <v-subheader class="title-filter">Comprobación de filtro</v-subheader>
          <v-list-item @click="handleCheckAll">
            <v-list-item-content>
              <v-list-item-title>Seleccionar todo</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          <v-list-item-group
            :value="filterCheck"
            @change="(e) => changeCheck(e)"
            multiple
            active-class=""
          >
            <v-list-item value="check-a">
              <template #default="{ active }">
                <v-list-item-action>
                  <v-checkbox :input-value="active"></v-checkbox>
                </v-list-item-action>
  
                <v-list-item-content>
                  <v-list-item-title>Marca A</v-list-item-title>
                </v-list-item-content>
              </template>
            </v-list-item>
            <v-list-item value="check-b">
              <template #default="{ active }">
                <v-list-item-action>
                  <v-checkbox :input-value="active"></v-checkbox>
                </v-list-item-action>
  
                <v-list-item-content>
                  <v-list-item-title>Cheque B</v-list-item-title>
                </v-list-item-content>
              </template>
            </v-list-item>
            <v-list-item value="check-c">
              <template #default="{ active }">
                <v-list-item-action>
                  <v-checkbox :input-value="active"></v-checkbox>
                </v-list-item-action>
  
                <v-list-item-content>
                  <v-list-item-title>Verificar C</v-list-item-title>
                </v-list-item-content>
              </template>
            </v-list-item>
            <v-list-item value="check-d">
              <template #default="{ active }">
                <v-list-item-action>
                  <v-checkbox :input-value="active"></v-checkbox>
                </v-list-item-action>
  
                <v-list-item-content>
                  <v-list-item-title>Comprobar D</v-list-item-title>
                </v-list-item-content>
              </template>
            </v-list-item>
            <v-list-item value="check-e">
              <template #default="{ active }">
                <v-list-item-action>
                  <v-checkbox :input-value="active"></v-checkbox>
                </v-list-item-action>
  
                <v-list-item-content>
                  <v-list-item-title>Comprueba E</v-list-item-title>
                </v-list-item-content>
              </template>
            </v-list-item>
            <v-list-item value="check-f">
              <template #default="{ active }">
                <v-list-item-action>
                  <v-checkbox :input-value="active"></v-checkbox>
                </v-list-item-action>
  
                <v-list-item-content>
                  <v-list-item-title>Comprueba F</v-list-item-title>
                </v-list-item-content>
              </template>
            </v-list-item>
          </v-list-item-group>
        </v-list>
      </div>
      <div class="filter-block">
        <v-list>
          <v-subheader class="title-filter">Filtro de Radio</v-subheader>
          <v-radio-group
            :value="filterRadio"
            @change="(e) => changeRadio(e)"
          >
            <v-list-item>
              <v-radio :label="'Lista completa'" value="all" />
            </v-list-item>
            <v-list-item>
              <v-radio value="radio-a" label="Radio A" />
            </v-list-item>
            <v-list-item>
              <v-radio value="radio-b" label="Radio B" />
            </v-list-item>
            <v-list-item>
              <v-radio value="radio-c" label="Radio C" />
            </v-list-item>
            <v-list-item>
              <v-radio value="radio-d" label="Radio D" />
            </v-list-item>
            <v-list-item>
              <v-radio value="radio-e" label="Radio E" />
            </v-list-item>
            <v-list-item>
              <v-radio value="radio-f" label="Radio F" />
            </v-list-item>
          </v-radio-group>
        </v-list>
      </div>
    </aside>
  </template>
  
  <style scoped>
    .filter-block {
        margin-bottom: 50px;
    }
    .btn-tag{
    position: relative;
    cursor: pointer;
}
.btn-tag input {
    opacity: 0;
    position: absolute;
}
.btn-tag input:checked + label {
    color: #FFF;
    background: orange;
}
.btn-tag label {
    display: inline-block;
    padding: 1px 6px;
    margin: 4px;
    border-radius: 8px;
    border: 1px solid var(--v-primary-base);
    cursor: pointer;
    position: relative;
    transition: all 0.3s ease;
}
  </style>
  
  <script>
  export default {
    data() {
      return {
        from: 0,
        to: 100,
        filterTag: ['tag-one', 'tag-two', 'tag-three', 'tag-four']
      }
    },
    methods: {
      changeRating(filterRating) {
        this.$emit('change-rating', filterRating)
      },
      changeCategory(filterCategory) {
        this.$emit('change-category', filterCategory)
      },
      changeRadio(filterRadio) {
        this.$emit('change-radio', filterRadio)
      },
      changeCheck(filterCheck) {
        this.$emit('change-check', filterCheck)
      },
      changeFrom(from) {
        this.$emit('change-from', from)
      },
      changeTo(to) {
        this.$emit('change-to', to)
      },
      changeTag(filterTag) {
        this.$emit('change-tag', filterTag)
      },
      changeRange(val) {
        this.$emit('change-range', val)
      },
      collectTag(val) {
        this.$emit('collect-tag', val)
      }
    },
    props: {
      filterRating: {
        type: Number,
        default: 0
      },
      filterCategory: {
        type: String,
        required: true
      },
      filterRadio: {
        type: String,
        required: true
      },
      filterCheck: {
        type: Array,
        required: true
      },
      handleCheckAll: {
        type: Function,
        required: true
      }
    }
  }
  </script>
  