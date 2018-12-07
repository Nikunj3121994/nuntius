<template>
    <v-app>
        <side-bar></side-bar>
        <top-bar></top-bar>
        <v-content>
            <v-container fluid>
                <router-view></router-view>
            </v-container>
        </v-content>
        <company-dialog></company-dialog>
    </v-app>
</template>

<script>

    import SideBar from './SideBar';
    import TopBar from "./TopBar";
    import CompanyDialog from "./CompanyDialog";

    export default {
        components: {
            CompanyDialog,
            SideBar,
            TopBar
        },
        computed: {
            loading: {
                get(){
                    return this.$store.state.loading;
                }
            }
        }
    }
</script>

