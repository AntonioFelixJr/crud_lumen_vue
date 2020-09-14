<template>
  <div>
    <Navbar />
    <MenuTop />
    <main>
      <slot/>
    </main>
  </div>
</template>

<script>
import Navbar from '@/components/navigation/Navibar.vue'
import MenuTop from '@/components/navigation/MenuTop.vue'

export default {
  name: 'TemplatePage',
  components: {
    Navbar,
    MenuTop
  }
}
</script>

<style>

#global-varibles {
  --primary-color: #90ddf0;
  --second-color: #1895B4;
  --third-color: #2c616e;
  --fourth-color: #07393c;
  --bg-color: #F0EDEE;
}

@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
/*
 * Paleta de cores 
 * https://coolors.co/0a090c-f0edee-07393c-2c666e-90ddf0
 */

/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
  background-color: #F0EDEE;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

#app {
  font-family: 'Open Sans', sans-serif;
  /* font-family: Avenir, Helvetica, Arial, sans-serif; */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

body::-webkit-scrollbar {
  width: 0.25rem;
}

body::-webkit-scrollbar-track {
  background-color: #F0EDEE80;
}

body::-webkit-scrollbar-thumb {
  background-color: #2C666E;
}

main {
  margin-left: 4rem;
}

@media (max-width: 600px) {
  main {
    margin-left: 3rem;
    /* display: none; */
  }

}

</style>
