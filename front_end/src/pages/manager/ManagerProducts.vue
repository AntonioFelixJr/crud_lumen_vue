<template>
  <div>
    <h1>
      Gerenciar Produtos
      <button @click="modal = !modal">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
          </path>
        </svg>
      </button>
    </h1>
    <div id="content">
      <TableData :listItems="products" :listAttributes="{name: 'Nome', value:'Preço em R$', category: 'Categoria'}" />
    </div>
    <ModalData @closeModal="modal = false" title="Cadastrar Produtos" v-show="modal">
        <form>
          <div class="form-group">
            <label for="product-name">Nome:</label>
            <input name="product-name" type="text" placeholder="Digite o nome do produto">
          </div>
          <div class="form-group">
            <label for="category-product">Categoria:</label>
            <select name="category-product">
              <option value=""></option>
              <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
            </select>
          </div>
          <div class="form-group">
            <label for="product-value">Valor:</label>
            <input name="product-value" type="text" placeholder="Digite o valor do produto">
          </div>
          <div class="form-group">
            <label for="product-value">Imagem:</label>
            <input name="product-image" type="file" title="imagem">
          </div>
          <div class="form-group">
            <label for="product-value">Descrição:</label>
            <textarea name="product-description" cols="115" rows="10" spellcheck="true"></textarea>
          </div>
        </form>
    </ModalData>
  </div>
</template>

<script>
import TableData from "@/components/display-data/TableData";
import ModalData from "@/components/display-data/ModalData";

export default {

 components: {
   TableData,
   ModalData
  },
  data() {
    return {
      products: [],
      categories: [],
      modal: false
    }
  },
  watch: {
    modal: function(n) {
      console.log(n)
    }
  },
  mounted() {
    const headers = {
      "content-type":"application/octet-stream"
    }

    this.$http.get(
      this.$endpoint + 'products/',
      headers
    )
    .then((response)=> {
      response = response.data
      let count = 1
      response.forEach(product => {
        product.number = count++
        this.products.push(product)
      })
    })
    .catch((error)=> {
      console.log(error)
    })

    this.$http.get(
      this.$endpoint + 'categories/',
      headers
    )
    .then((response)=> {
      response = response.data
      let count = 1
      response.forEach(category => {
        category.number = count++
        this.categories.push(category)
      })
        console.log(this.categories);
    })
    .catch((error)=> {
      console.log(error)
    })
  }
}
</script>

<style scoped>

#content {
  display: flex;
  flex-direction: column;
  align-content: center;
  align-items: center;
}

h1 {
  text-align: left;
  letter-spacing: 0.1rem;
  margin: 3rem;
  padding-bottom: 10px;
  font-size: 1.5rem;
  font-weight: 700;
  border-bottom: double 1px black;
}


button {
  width: 30px;
  height: 30px;
  color: white;
  align-self:  flex-start;
  background-color:teal;
  border-radius: 4px;
  padding: 8px;
  border: 0px;
  font-size: 1rem;
  font-weight: bold;
}
</style>