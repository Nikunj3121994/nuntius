<template>
    <v-dialog v-model="dialog" persistent max-width="600px">
        <company-form></company-form>
    </v-dialog>
</template>

<script>

    import CompanyForm from "./CompanyForm";
    export default {
        components: {CompanyForm},
        computed: {
            dialog: {
                get() {
                    return this.$store.state.companyDialog;
                },
                set(val) {
                    this.$store.commit('updateCompanyDialog', val);
                }
            }
        }
    }
</script>

<style scoped>

</style>