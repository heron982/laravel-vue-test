<template>
    <div>
        <Bar :data="chartConfig" :options="chartOptions"/>
    </div>
</template>

<script>
import {
    Chart as ChartJS,
    Title,
    Tooltip,
    Legend,
    BarElement,
    CategoryScale,
    LinearScale,
Chart
} from 'chart.js'
import { Bar } from 'vue-chartjs'

ChartJS.register(CategoryScale, LinearScale, BarElement, Title, Tooltip, Legend)
export default {
    props: ['chartConfig','chartOptions'],
    name: "GraficoConsultorComponent",
    components: {
        Bar
    }
}
</script>
