<template>
    <div>
        <Pie :data="chartConfig" :options="chartOptions" />
    </div>
</template>

<script>
import { Chart as ChartJS, ArcElement, Tooltip, Legend } from 'chart.js'
import { Pie } from 'vue-chartjs'
ChartJS.register(ArcElement, Tooltip, Legend)
export default {
    props: ['chartConfig', 'chartOptions'],
    components: {
        Pie
    },
    name: "PizzaConsultorComponent",
}
</script>
