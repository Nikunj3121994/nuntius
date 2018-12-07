<template>
    <v-card>
        <v-card-title>
            <span class="headline">Selecione a Empresa/Filial</span>
        </v-card-title>
        <v-card-text>
            <v-container grid-list-md>
                <v-layout wrap>
                    <v-flex xs12 sm12>
                        <v-select
                                :items="companies"
                                label="Empresa"
                                required
                                v-model="companyId"
                        ></v-select>
                    </v-flex>
                    <v-flex xs12 sm12>
                        <v-select
                                v-model="subsidiaryId"
                                :items="subsidiaries"
                                label="Filial"
                                required
                        ></v-select>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-card-text>
        <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn color="error" @click="toggleCompanyDialog">Cancelar</v-btn>
            <v-btn color="info" @click="changeCompany({companyId,subsidiaryId})">Confirmar</v-btn>
        </v-card-actions>
    </v-card>
</template>

<script>
    import {mapGetters, mapActions} from 'vuex';

    export default {
        computed: {

            companyId: {
                get() {
                    return this.$store.state.companyDialogData.companyId;
                },
                set(val) {
                    this.$store.commit('updateCompanyDialogCompanyId', val);
                }
            },
            subsidiaryId: {
                get() {
                    return this.$store.state.companyDialogData.subsidiaryId;
                },
                set(val) {
                    this.$store.commit('updateCompanyDialogSubsidiaryId', val);
                }
            },
            ...mapGetters({
                companies: 'getCompanies',
                subsidiaries: 'getSubsidiaries'
            })
        },
        methods: {
            ...mapActions([
                'changeCompany',
                'toggleCompanyDialog'
            ])
        }
    }
</script>

<style scoped>

</style>