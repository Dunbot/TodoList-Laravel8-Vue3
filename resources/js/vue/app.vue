
<!-- Este es nuestro punto de entrada de vue -->
<template>
    <div class="todoListContainer"> <!-- Contenedor de todo lo que haremos -->
        <div class="heading">
            <h2 id="title">Todo List</h2>
            <add-item-form v-on:reloadList="getList()"/> <!--Llamamos a add item form-->
        </div>
        <list-view :items="items"
            v-on:reloadList="getList()"
        /> <!-- Podemos usar de las dos formas una etiqueta o las dos-->
    </div>
</template>

<script>
//Importamos el cuestionario
import addItemForm from './addItemForm.vue';
import listView from './listView.vue';



export default{
    components:{
        addItemForm,
        listView
    },
    data: function () {
        return {
            items : []
        }
    },
    methods: {
        getList(){
            axios.get('api/items').then(
                response => {
                    this.items = response.data;
                }
            ).catch( error => {
                console.log(error);
            })
        }
    },

    created() {
        this.getList();
    }
}

</script>

<style scoped>
    .todoListContainer{
        width: 350px;
        margin: auto;
    }
    .heading{
        background: #e6e6e6;
        padding: 10px;

    }
    #title{
        text-align: center;
    }


</style>
