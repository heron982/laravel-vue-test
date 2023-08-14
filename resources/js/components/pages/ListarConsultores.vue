<template>
    <div>
        <table width="100%" cellpadding="3" cellspacing="1" bgcolor="#cccccc" id="pesquisaAvancada">
            <tbody>
                <tr bgcolor="#fafafa">
                    <td width="10%" nowrap="nowrap" bgcolor="#efefef">
                        <div align="right"><strong>Per&iacute;odo</strong></div>
                    </td>
                    <td>
                        <font color="black">
                            <select v-model="mes_inicio">
                                <option v-for="(item, index) in this.meses" :key="index" :value="item">{{ item }}</option>
                            </select>
                            <select v-model="ano_inicio">
                                <option v-for="(item, index) in this.anos" :key="index" :value="item">{{ item }}</option>
                            </select>

                            <select v-model="mes_final">
                                <option v-for="(item, index) in this.meses" :key="index" :value="item">{{ item }}</option>
                            </select>
                            <select v-model="ano_final">
                                <option v-for="(item, index) in this.anos" :key="index" :value="item">{{ item }}</option>
                            </select>
                        </font>
                    </td>
                    <td width="20%" rowspan="2">
                        <div align="center">
                            <font color="black">

                                <button @click="listarConsultores"
                                    style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_relatorio.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC">Relatorio</button>

                                <button @click="switchComponentGrafico()"
                                    style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_grafico.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC">Gráfico</button>


                                <button @click="switchComponentPizza()"
                                    style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_pizza.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC">Pizza</button>

                            </font>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <selecionar-consultores-component ref="listarComponente" />
        <component :is="componenteAtual" :data="this.consultores" :chartConfig="this.chartConfig"
            :chartOptions="this.chartOptions">
        </component>

    </div>
</template>

<script>
import PesquisaConsultorContainerComponent from '../PesquisaConsultorContainerComponent.vue';
import ListarConsultorComponent from './ListarConsultorComponent.vue';
import SelecionarConsultoresComponent from '../SelecionarConsultoresComponent.vue';
import GraficoConsultorComponent from './GraficoConsultorComponent.vue';
import PizzaConsultorComponent from './PizzaConsultorComponent.vue';

export default {
    name: 'ListarConsultores',
    components: {
        PesquisaConsultorContainerComponent,
        ListarConsultorComponent,
        SelecionarConsultoresComponent,
        GraficoConsultorComponent,
        PizzaConsultorComponent
    },
    data() {
        return {
            mes_inicio: 'Fev',
            ano_inicio: '2004',
            mes_final: 'Mai',
            ano_final: '2005',
            meses: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
            anos: ['2003', '2004', '2005', '2006', '2007'],
            consultores: [],
            componenteAtual: ListarConsultorComponent,
            labels: [],
            rendas: [],
            chartConfig: {
                labels: [],
                datasets: []
            },
            chartOptions: {
                responsive: true,
            },
            grafico_cores: [
                { cor: 'red', qtd: 0 },
                { cor: 'yellow', qtd: 0 },
                { cor: 'orange', qtd: 0 },
                { cor: 'green', qtd: 0 },
                { cor: 'pink', qtd: 0 },
                { cor: 'blue', qtd: 0 }
            ]
        }
    },
    mounted() {
        //pegar os dados no endpoint+
    },
    computed: {
        exibirConsultores() {
            return this.consultores.length > 0 ? true : false;
        },
    },
    methods: {
        getClienteCor() {
            let cor = null;
            while (cor == null) {
                let index = Math.floor(Math.random() * 5);
                if (this.grafico_cores[index].qtd < 1) {
                    cor = this.grafico_cores[index].cor;
                    this.grafico_cores[index].qtd = this.grafico_cores[index].qtd + 1;
                }
            }

            return cor;
        },
        switchComponentGrafico() {
            for (let x = 0; x < this.grafico_cores.length; x++) {
                this.grafico_cores[x].qtd = 0;
            }
            const months = {
                'jan.': 0,
                'fev.': 0,
                'mar.': 0,
                'abr.': 0,
                'mai.': 0,
                'jun.': 0,
                'jul.': 0,
                'ago.': 0,
                'set.': 0,
                'out.': 0,
                'nov.': 0,
                'dez.': 0
            }

            let clientes = [];

            for (let i in this.consultores) {
                let cliente = {
                    label: this.consultores[i].nome,
                    backgroundColor: this.getClienteCor(),
                    data: []
                };
                for (let m in months) {
                    for (let x in this.consultores[i].operacoes) {
                        let mes = new Date(this.consultores[i].operacoes[x].periodo).toLocaleString('pt-BR', { month: 'short' });
                        if (mes == m) {
                            months[m]++;
                            cliente.data.push(this.consultores[i].operacoes[x].renda_liquida);
                        }
                    }
                }


                clientes.push(cliente);
            }

            this.chartConfig.datasets = clientes;

            let months_filtered = [];
            for (let i in months) {
                if (months[i] > 0) {
                    months_filtered.push(i);
                }
            }

            this.chartConfig.labels = months_filtered;
            this.componenteAtual = GraficoConsultorComponent;
        },
        switchComponentPizza() {
            for (let x = 0; x < this.grafico_cores.length; x++) {
                this.grafico_cores[x].qtd = 0;
            }
            const somas = [];
            const labels = [];
            const cores = [];
            let soma_total = 0;
            for(let i in this.consultores) {
                let soma = 0;
                for(let x in this.consultores[i].operacoes) {
                    soma += this.consultores[i].operacoes[x].renda_liquida;
                }
                soma_total += soma;
            }

            for(let i in this.consultores) {

                let soma = 0;
                for(let x in this.consultores[i].operacoes) {
                    soma += this.consultores[i].operacoes[x].renda_liquida;
                }
                labels.push(this.consultores[i].nome);
                cores.push(this.getClienteCor());
                somas.push(soma * 100 / soma_total);
            }

            this.chartConfig.labels = labels;
            this.chartConfig.datasets = [
                {
                    backgroundColor: cores,
                    data: somas
                }
            ];

            this.componenteAtual = PizzaConsultorComponent;
        },
        async listarConsultores() {
            this.componenteAtual = ListarConsultorComponent;
            let consultores = this.$refs.listarComponente.getConsultores();


            let inicio = `${this.mes_inicio} ${this.ano_inicio}`;
            let final = `${this.mes_final} ${this.ano_final}`;

            const { data } = await axios.post('/consultores', {
                inicio: {
                    mes: this.mes_inicio,
                    ano: this.ano_inicio
                },
                final: {
                    mes: this.mes_final,
                    ano: this.ano_final
                },
                consultores: consultores
            });


            this.consultores = data;
        },
        getConsultoresSelecionados(consultores) {
        }
    }
}
</script>
