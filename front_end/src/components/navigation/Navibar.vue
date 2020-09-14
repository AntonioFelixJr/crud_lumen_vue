<template>
  <nav class="navbar">
      <ul class="navbar-nav">
        <li class="logo">
          <a href="#" class="nav-link">
            <span class="link-text logo-text">Awesome!</span>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-double-right" class="svg-inline--fa fa-angle-double-right fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z"></path></svg>
          </a>
        </li>

        <li class="nav-item">
          <router-link class="nav-link" :to="{name: 'home'}">  
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home" class="svg-inline--fa fa-home fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z">
              </path>
            </svg>
            <span class="link-text">Home</span>
          </router-link>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-basket" class="svg-inline--fa fa-shopping-basket fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor" d="M576 216v16c0 13.255-10.745 24-24 24h-8l-26.113 182.788C514.509 462.435 494.257 480 470.37 480H105.63c-23.887 0-44.139-17.565-47.518-41.212L32 256h-8c-13.255 0-24-10.745-24-24v-16c0-13.255 10.745-24 24-24h67.341l106.78-146.821c10.395-14.292 30.407-17.453 44.701-7.058 14.293 10.395 17.453 30.408 7.058 44.701L170.477 192h235.046L326.12 82.821c-10.395-14.292-7.234-34.306 7.059-44.701 14.291-10.395 34.306-7.235 44.701 7.058L484.659 192H552c13.255 0 24 10.745 24 24zM312 392V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm112 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm-224 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24z">
              </path>
            </svg>
            <span class="link-text">Comprar</span>
          </a>
        </li>

        <li class="nav-item" >
          <span @click="managerSub = !managerSub"  class="nav-link">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
              </path>
            </svg>
            <span  class="link-text">Gerenciar</span>
          </span>
          <ul class="nav-sub-link">
            <li v-show="managerSub" class="link-sub-text">  
              <router-link  :to="{name: 'gerenciarCategorias'}">
                Gerenciar Categorias
              </router-link>
            </li>
            <li v-show="managerSub" class="link-sub-text">
                <router-link  :to="{name: 'gerenciarProdutos'}">
                  Gerenciar Produtos
                </router-link>
            </li>
          </ul>
        </li>


      </ul>
  </nav>
</template>

<script>
export default {
  data() {
    return {
      managerSub: false
    }
  },
  watch: {
    managerSub(value) {
      console.log(value)
    }
  }

}
</script>

<style scoped>
  #varibles {
    --transition-speed: 600ms;
  }
  
  .navbar {
    width: 4rem;
    height: 100vh;
    position: fixed;
    z-index: 99;
    background-color: #0a090c;
    transition: width 300ms ease;
  }

  .navbar-nav {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .nav-item {
    width: 100%;
  }

  .nav-item:last-child {
    margin-top: auto;
  }

  .nav-link {
    display: flex;
    align-items: center;
    height: 4rem;
    color: #2c616e;
    text-decoration: none;
    filter: grayscale(100%) opacity(0.7);
    transition: var(--transition-speed);
  }

  .nav-link:hover {
    filter: grayscale(0%) opacity(1);
    background-color: #07393c;
    color: #90ddf0;
  }

  .link-text {
    display: none;
    margin-left: 1.5rem;
    overflow: visible;
  }

  .nav-link svg {
    min-width: 1.5rem;
    margin: 0 1.1rem;
  }

  .navbar:hover {
    width: 16rem;
  }

  .navbar:hover .link-text {
    display: block;
  }

  .navbar:hover .link-sub-text {
    display: block;
  }


  .fa-primary {
    color: #2c666e;
  }

  .fa-secondary {
    color: #07393C;

  }

  .fa-primary,
  .fa-secondary {
    transition: var(--transition-speed);
  }

  .logo {
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 1rem;
    text-align: center;
    color: #1895B4;
    background-color: #1895B4;
    font-size: 1.5rem;
    letter-spacing: 0.3ch;
    width: 100%;
  }

  .logo svg {
    color: white;
  }

  .logo .logo-text {
    color: white;
  }

  .nav-sub-link {
    display: flex;
    align-items: flex-start;
    flex-direction: column;
    overflow: hidden;


  }

  .link-sub-text {
    display: none;
    width: 70%;
    text-decoration: none;
    color: #2c616e;
    filter: grayscale(100%) opacity(0.7);
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 5rem;
    text-align: left;
    overflow: hidden;
  }

  .link-sub-text a {
    text-decoration: none;
    color: #2c616e;
    height: 100%;
    width: 100%;
  }

  /* .link-sub-text a:link,
  .link-sub-text a:active,
  .link-sub-text a:visited,
  .link-sub-text a:hover
  {
    text-decoration:none;
    filter: grayscale(0%) opacity(1);
    color: #90ddf0;



  } */

  .link-sub-text:hover  {
    filter: grayscale(0%) opacity(1);
    color: #90ddf0;
    background-color: #07393c;
  }


  .link-sub-text a:hover  {
    color: #90ddf0;
  }


  /* .link-sub-text a {
    filter: grayscale(0%) opacity(1);
    color: #90ddf0;

  } */


  @media (max-width: 600px) {
    .navbar {
      width: 3rem;
      /* display: none; */

    }

    .nav-link {
      height: 3rem;
    }

    .nav-link svg {
      min-width: 1.2rem;
      margin: 0 0.8rem;
    }

  }

</style>