<template>
  <div id="container">
    <span v-for="product in products" :key="product.id">
      <ProductCard :product="product"/>
    </span>
  </div>
</template>

<script>
import ProductCard from './ProductCard'

export default {
  components: {
    ProductCard
  },
  data() {
    return {
      products: []
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
    .then((response)=>{
      response = response.data
      response.forEach(product => {
        this.products.push(product)
      })

       console.log(this.products)

    })
    .catch((error)=>{
      console.log(error)
    })
  }
}
  
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
#container {
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: stretch;
}

#container > * {
  margin-top: 30px;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
