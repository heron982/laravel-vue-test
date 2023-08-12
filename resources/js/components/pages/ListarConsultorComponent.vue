<template>
    <div>
        <pesquisa-consultor-container-component v-for="(item, index) in consultores" :key="index"
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
    props: {
        consultores: []
    }
}
</script>
