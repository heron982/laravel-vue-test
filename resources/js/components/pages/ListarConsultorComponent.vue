<template>
    <div>
        <div class="alert alert-info mt-5" v-show="this.data.length < 1">
            Nenhum registro encontrado
        </div>
        <pesquisa-consultor-container-component v-for="(item, index) in data" :key="index"
                v-bind:nome="item.nome" v-bind:operacoes="item.operacoes" />
    </div>
</template>

<script>
import PesquisaConsultorContainerComponent from '../PesquisaConsultorContainerComponent.vue';
export default {
    components: {
        PesquisaConsultorContainerComponent
    },
    name: "ListarConsultorComponent",
    data() {
        return {
            emptyData: false
        }
    },
    props: {
        data: []
    }
}
</script>
