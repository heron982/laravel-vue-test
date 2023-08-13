<template>
    <div>
        <Bar :data="chartConfig" :options="chartOptions" v-show="loadGraph"/>
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
    props: ['data'],
    name: "GraficoConsultorComponent",
    components: {
        Bar
    },
    mounted() {

        // console.log(this.data);
        const months = {
            'jan.':0,
            'fev.':0,
            'mar.':0,
            'abr.':0,
            'mai.':0,
            'jun.':0,
            'jul.':0,
            'ago.':0,
            'set.':0,
            'out.':0,
            'nov.':0,
            'dez.':0
        }

        let clientes = [];

        for(let i in this.data) {
            let cliente = {
                label: this.data[i].nome,
                backgroundColor: 'blue',
                data: []
            };
            // console.log(this.data[i].operacoes);
            for(let m in months) {
                for(let x in this.data[i].operacoes) {
                    let mes = new Date(this.data[i].operacoes[x].periodo).toLocaleString('pt-BR', { month: 'short' });
                    if(mes == m) {
                        months[m]++;
                        cliente.data.push(this.data[i].operacoes[x].renda_liquida);
                    }
                    // console.log('debug atual');
                    // console.log(new Date(m).getMonth());
                    // console.log({
                    // 'nome': this.data[i].nome,
                    // 'mes': mes,

                    // })
                // months[new Date(this.data[i].operacoes[x].periodo).toLocaleString('pt-BR', { month: 'short' })].push({
                //     nome: this.data[i].nome,
                //     renda: this.data[i].operacoes[x].renda_liquida
                // });
                // months[].push()
                }
            }


            clientes.push(cliente);
        }

        this.chartConfig.datasets = clientes;

        let months_filtered = [];
        for(let i in months) {
            if(months[i] > 0) {
                months_filtered.push(i);
            }
            // console.log(i);
        }

        this.chartConfig.labels = months_filtered;

        console.log(this.chartConfig.labels);
        console.log(this.chartConfig.datasets);
    },
    computed: {
        loadGraph() {
            if(this.chartConfig.datasets.length && this.chartConfig.labels.length > 0) {
                console.log('ativou!');
                return true;
            };
            console.log('nao ativou');
            return false;
        }
    },
    data() {
        return {
            labels: [],
            rendas: [],
            chartConfig: {
                labels: [],
                datasets: []
            },
            chartOptions: {
                responsive: true,
            }
        }
    }
}
</script>
