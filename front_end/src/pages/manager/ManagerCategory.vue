<template>
  <div>
    <h1>
      Gerenciar Categoria
      <button>
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
          </path>
        </svg>
      </button>
    </h1>
    <div id="content">
      <TableData :listItems="categories" :listAttributes="{name: 'Nome', total:'Número de produtos'}" />
    </div>

  </div>
</template>

<script>
import TableData from "@/components/display-data/TableData";

export default {

 components: {
   TableData
  },
  data() {
    return {
      categories: []
    }
  },
  mounted() {
    const headers = {
      "content-type":"application/octet-stream"
    }

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

table, thead, tbody, tr, td {
  padding: 15px;
}

table {
  width: 70%;
  border: solid 1px black;
  
}

tr td {
  width: 35%;
}

tr td:last-child {
  width: 25%;
  padding: 5px;
}
tr td:first-child {
  width: 5%;
  padding: 5px;
}

tr td:last-child svg {
  padding-left: 15px;
  width: 20%;
}

thead {
  background-color: teal;
  color: white;
  font-size: 1.1rem;
  font-weight: 700;
}

tbody tr {
  font-size: 18px;
  font-weight: 500;
}

tbody td {
  padding: 5px;

}

tbody td svg {
  width: 15%;
  height: 15%;
}

tbody tr:nth-child(even) {
  background-color: rgba(0, 128, 128, 0.1);
}

 /* svg {
    color: black;
  } */

</style>