<template>
  <transition name="slide-fade">
    <div class="modal" v-show="visible">
      <div class="modal-header">
        <span class="close-btn" @click="closeModal">&times;</span>
        <h1>{{ title }}</h1>
      </div>
      <div class="modal-content">
        <slot />
      </div>
      <div class="modal-footer">
        <div class="button-group">
          <button @click="clearFields" class="button-modal btn-clear">Limpar</button>
          <button class="button-modal">Salvar</button>
        </div>
      </div>
    </div>

  </transition>
</template>

<script scoped>
export default {
  props: ['title'],
  data() {
    return {
      visible: true,
      class: false,
      inputs: 0,
      textareas: 0,
      selects: 0
    }
  },
  methods: {
    clearFields() {
      this.inputs.forEach(input => {
        input.value = ""
      });

      this.textareas.forEach(textarea => {
        textarea.value = ""
      });

      this.selects.forEach(select => {
        select.selectedIndex = 0
      });
    },
    closeModal() {
      this.$emit('closeModal')
    }
  },
  mounted() {
    let elementActual = this.$el

    this.inputs = elementActual.getElementsByTagName('input')
    this.textareas = elementActual.getElementsByTagName('textarea')
    this.selects = elementActual.getElementsByTagName('select')
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
  text-align: left;
}

.form-group > label {
  font-weight: 900;
  letter-spacing: 0.1rem;
  width: 150px;
  margin-bottom: 5px;
}

.button-modal {
  color: white;
  background-color: #1895B4;
  border-radius: 4px;
  padding: 8px;
  border: 0px;
  font-size: 0.9rem;
  font-weight: bold;
  margin-left: 20px;
}

.btn-clear {
 background-color: #302a2574;
}

.form-group {
  width: 50%;
  text-align: left;
  flex-grow: 1;
  flex-shrink: 1;
  flex-basis: auto;
  margin-top: 10px;
  display: flex;
  justify-content: flex-start;
  flex-wrap:wrap;
}

.button-group {
  width: 100%;
  text-align: left;
  flex-grow: 1;
  flex-shrink: 1;
  flex-basis: auto;
  display: flex;
  justify-content: flex-end;
  flex-wrap:wrap;
}

.modal-header {
  position: relative;
  background-color:teal;
  border-radius: 10px  10px 0px 0px;
  padding: 20px;
  margin: auto;
  width: 75%;
  font-weight: 700;
  color: #F0EDEE;
  letter-spacing: 0.1rem;
}

.modal-content {
  position: relative;
  background-color: #F0EDEE;
  padding: 20px;
  margin: auto;
  width: 75%;

}
.modal-footer {
  position: relative;
  background-color:teal;
  padding: 20px;
  margin: auto;
  border-radius: 0px 0px 10px 10px;
  padding: 20px;
  margin: auto;
  width: 75%;
  font-weight: 700;
  color: #F0EDEE;
  letter-spacing: 0.1rem;
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

.modal form {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-items: flex-start;
  flex-wrap: wrap;
}

.form-group > input, .form-group > input:focus {
  width: 80%;
  font-size: 16px;
  height: 1.5rem;
  margin: 0.5rem;
  background-color: #F0EDEE;
  border-top: 0px;
  border-left: 0px;
  border-right: 0px;
  outline-width: 0;

  flex-grow: 1;
}

.form-group > select {
  -webkit-appearance: none;
 -moz-appearance: none;
  appearance: none;
  width: 80%;
  height: 1.5rem;
  margin: 0.5rem;
  background-color: #FFF;
  border-top: 0px;
  border-left: 0px;
  border-right: 0px;
  flex-grow: 1;
  flex-shrink: 1;
  font-size: 14px;
  letter-spacing: 0.05rem;
  background-color: teal;
  color: white;
  padding-left: 5px;

  
}
.form-group > select > option {
  font-size: 14px;
  letter-spacing: 0.1rem;
  background-color: teal;
}

.form-group > select:active {
  background-color: #2c616e;
}

.form-group > select:hover {
  background-color: #2c616e;
}

.form-group > select:focus {
  border-top: 0px;
  border-left: 0px;
  border-right: 0px;
  outline: -webkit-focus-ring-color auto 0px;
}

.form-group > textarea {
  flex-grow: 2;
  flex-shrink: 1;

  margin-top: 10px;
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