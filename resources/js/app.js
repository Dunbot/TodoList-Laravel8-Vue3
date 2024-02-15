import './bootstrap';
import { createApp } from "vue";
import App from './vue/app.vue';
//Iconos
/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { faPlusSquare, faTrash } from '@fortawesome/free-solid-svg-icons'

/*Import font awesome icon*/
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome"; 


/* add icons to the library */
library.add(faPlusSquare, faTrash);
//Importamos el archivo que creamos de vue y lo montamos
createApp(App).component('font-awesome-icon', FontAwesomeIcon).mount('#app')

