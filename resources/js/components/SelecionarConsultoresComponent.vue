<template>
    <div>
        <table>
            <tr bgcolor="#fafafa">
                <td nowrap="nowrap" bgcolor="#efefef">
                    <div align="right"><strong>Consultores</strong></div>
                </td>
                <td>
                    <table align="center">
                        <tr>
                            <td><select multiple size="8" name="list1" id="list1" style="width:280"
                                    v-model="list1Selecionado">
                                    <option v-for="(item, index) in this.list1" :key="index" :value="item.co_usuario">{{
                                        item.co_usuario }}</option>

                                </select>
                            </td>
                            <td align="center" valign="middle"><input name="button" type="button" @click="setList2"
                                    value=">>">
                                <br>
                                <input name="button" type="button" @click="setList1" value="<<">
                            </td>
                            <td><select multiple size="8" name="list2" id="list2" style="width:280"
                                    v-model="list2Selecionado">
                                    <option v-for="(item, index) in this.list2" :key="index" :value="item.co_usuario">{{
                                        item.co_usuario }}</option>
                                </select>
                                <input type="hidden" name="lista_analista" value="">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</template>

<script>
export default {
    name: "SelecionarConsultoresComponent",
    data() {
        return {
            list1: {},
            list2: {},
            list1Selecionado: [],
            list2Selecionado: []
        }
    },
    methods: {
        setList2() {
            // console.log(this.list1Selecionado)
            // console.log(this.list1);
            // console.log(this.list1Selecionado);
            for (let x = 0; x < this.list1.length; x++) {
                if (this.list1[x].co_usuario) {
                    if (this.list1[x].co_usuario == this.list1Selecionado) {
                        // console.log(this.list1[x].co_usuario);
                        this.list2Selecionado.push(this.list1[x]);
                        delete this.list1[x];
                    }
                }
            }
            // this.list1.forEach(element => {
            //     if(element.co_usuario === this.list1Selecioando) {
            //         this.list1Selecioando.push(element.co_usuario);
            //         delete element.co_usuario;
            //     }

            // });
        },
        setList1() {
            console.log(this.list2Selecioando);
            this.list2.forEach(element => {
                console.log(element);
            });
        }
    },
    async mounted() {
        const { data } = await axios.get('/consultores_disponiveis');
        this.list1 = data;
    }
}
</script>
