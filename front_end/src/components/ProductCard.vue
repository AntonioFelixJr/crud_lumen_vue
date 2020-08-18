<template>
  <div class="card">
      <div class="card-image">IMAGE</div>
      <div class="card-content">{{ this.product.name }}</div>
      <div class="card-description">{{ this.product.description }}</div>
      <div class="card-footer">R$ {{ this.product.value }}</div>
  </div>
</template>

<script>
export default {
    props: {
        product: {
            tyoe: Array,
            required: true
        }
    }
}
</script>

<style scoped>

.card {
    height:300px;
    width:250px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    flex: 1 1 auto;
}

.card-image {
    height: 70%;
    border-radius: 5px 5px 0px 0px;
    background-color: #90DDF0;
}

.card-content {
    height: 10%;
    border-top: black solid 1px;
    color: rgb(20, 20, 20);
    padding-top: 10px;
}

.card-description {
    height: 10%;
    color: rgb(20, 20, 20);
    font-size: 0.6em;
}

.card-footer {
    height: 10%;
    border-radius: 0px 0px 5px 5px;
    padding-right: 50%;
    padding-top: 5%;
    font-weight: 600;
    color: rgb(20, 20, 20);
}
</style>