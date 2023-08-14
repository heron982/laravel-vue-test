<template>
    <div>
        <table class="mt-5" cellspacing=1 cellpadding=3 width="100%"
            bgcolor=#cccccc  id="pesquisaAvancada">
        <tbody>
            <tr bgcolor=#efefef>
            <td colspan=5><span class="style3">{{ nome }}</span> </td>
            </tr>
            <tr bgcolor=#fafafa>
            <td nowrap><div align="center"><strong>Per&iacute;odo</strong></div></td>
            <td><div align="center"><strong>Receita L&iacute;quida </strong></div></td>
            <td><div align="center"><strong>Custo Fixo </strong></div></td>
            <td><div align="center"><strong>Comiss&atilde;o</strong></div></td>
            <td><div align="center"><strong>Lucro</strong></div></td>
            </tr>
            <tr bgcolor=#fafafa v-for="(item, index) in getOperacoes" :key="index">
                <td nowrap>{{ new Date(item.periodo).toLocaleString('default', { month: 'long', year: 'numeric' }) }}</td>
                <td><div align="right">{{ item.renda_liquida.toLocaleString("pt-BR", { style: "currency", currency: "BRL"}) }}</div></td>
                <td><div align="right">-{{ item.custo_fixo.toLocaleString("pt-BR", { style: "currency", currency: "BRL"}) }}</div></td>
                <td><div align="right">-{{ item.comissao.toLocaleString("pt-BR", { style: "currency", currency: "BRL"}) }}</div></td>
                <td><div align="right" :class="[{ negativo : item.lucro < 0 }]">{{ item.lucro.toLocaleString("pt-BR", { style: "currency", currency: "BRL"}) }}</div></td>
            </tr>
            <!-- <tr bgcolor=#fafafa>
            <td nowrap>Fevereiro de 2007 </td>
            <td><div align="right">R$ 25.000,00</div></td>
            <td><div align="right">- R$ 2.000,00</div></td>
            <td><div align="right">- R$ 2.500,00</div></td>
            <td><div align="right">R$ 20.500,00</div></td>
            </tr> -->
            <!-- <tr bgcolor=#efefef>
            <td nowrap bgcolor="#efefef"><strong>SALDO</strong></td>
            <td><div align="right"><font color="#000000">R$ 26.500,00</font></div></td>
            <td><div align="right"><font color="#000000">- R$ 4.000,00</font></div></td>
            <td><div align="right"><font color="#000000">- R$ 3.500,00</font></div></td>
            <td><div align="right"><font color="#0000FF">R$ 19.000,00</font></div></td>
            </tr> -->
        </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: {
        nome: String,
        operacoes: Array
    },
    data() {
        return {
        }
    },
    mounted() {

    },
    computed: {
        getOperacoes() {
            return this.operacoes;
        }
    },
    name: "PesquisaConsultorContainerComponent",
}
</script>

<style>
.negativo {
    color: #FF0000;
}
</style>
