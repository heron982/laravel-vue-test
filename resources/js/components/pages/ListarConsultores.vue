<template>
    <div>
        Listar consultores
        <pesquisa-consultor-container-component/>
    </div>
</template>

<script>
import PesquisaConsultorContainerComponent from '../PesquisaConsultorContainerComponent.vue';
export default {
    name: 'ListarConsultores',
    components:{PesquisaConsultorContainerComponent},
    mounted() {
        //pegar os dados no endpoint
    }
}
</script>
