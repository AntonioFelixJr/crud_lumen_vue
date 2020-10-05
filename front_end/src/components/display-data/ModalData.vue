<template>
  <transition name="slide-fade">

    <div class="modal" v-show="visible">
      <div class="modal-header">
        <span class="close-btn" @click="closeModal">&times;</span>
        <h1>I am the Header</h1>
      </div>
      <div class="modal-content">
        <form >
          <input name="product-name" type="text" placeholder="Digite o nome do produto">
          <input name="product-value" type="text" placeholder="Digite o valor do produto">
        </form>
        <p>this is the text inside the modal</p>
      </div>
      <div class="modal-footer">
        <h2>I am the Footer</h2>
      </div>
    </div>

  </transition>
</template>

<script>
export default {
  data() {
    return {
      visible: true,
      class: false
    }
  },
  methods: {
    closeModal() {
      this.$emit('closeModal')
    }
  }
}
</script>

<style>

.modal {
  display: block;
  position: fixed;
  padding-top: 50px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-header {
  position: relative;
  background-color: rgb(38, 123, 168);
  border-radius: 10px  10px 0px 0px;
  padding: 20px;
  margin: auto;
  width: 75%;
}

.modal-content {
  position: relative;
  background-color: white;
  padding: 20px;
  margin: auto;
  width: 75%;

}
.modal-footer {
  position: relative;
  background-color: rgb(218, 205, 255);
  padding: 20px;
  margin: auto;
  border-radius: 0px 0px 10px 10px;
  width: 75%;

}

.close-btn {
  float: right; 
  color: lightgray; 
  font-size: 32px;  
  font-weight: bold;
}

.close-btn:hover {
  color: darkgray;
}

@-webkit-keyframes animatetop {
  from {
    top: -300px;
    opacity: 0;
  }
  to {
    top: 0; 
    opacity: 1;
  }
}

@keyframes animatetop {
  from {
    top: -300px;
    opacity: 0;
  }
  to {
    top: 0;
    opacity: 1;
  }
}

@-webkit-keyframes animate-background {
  from {
    background-color: rgba(0, 0, 0, 0.0);
  } 
  to {
    background-color: rgba(0, 0, 0, 0.5);
  }
}

@keyframes animate-background {
  from {
    background-color: rgba(0, 0, 0, 0.0);
  }
  to {
    background-color: rgba(0, 0, 0, 0.5);
  }
}

.slide-fade-enter, .slide-fade-enter-active {
    animation: animatetop 0.4s, animate-background 1s;
}

.slide-fade-leave-active {
animation: animatetop 0.4s reverse, animate-background 1s reverse;  opacity: 0;
}

</style>