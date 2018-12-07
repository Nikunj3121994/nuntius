<template>
    <v-navigation-drawer
            :clipped="true"
            v-model="drawer"
            absolute
            temporary
    >
        <v-list>
            <v-list-tile
                    v-for="item in simpleMenu"
                    :key="item.title"
                    :to="{ name: item.route}"
            >
                <v-list-tile-action>
                    <v-icon>{{ item.icon }}</v-icon>
                </v-list-tile-action>
                <v-list-tile-content>
                    <v-list-tile-title>{{ item.title }}</v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
            <v-list-group
                    v-for="item in nestedMenu"
                    v-model="item.active"
                    :key="item.title"
                    :prepend-icon="item.icon"
                    no-action
            >
                <v-list-tile slot="activator">
                    <v-list-tile-content>
                        <v-list-tile-title>{{ item.title }}</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
                <v-list-group
                        v-for="sub in item.children"
                        :key="sub.title"
                        :append-icon="sub.icon"
                        no-action
                        sub-group
                >
                    <v-list-tile slot="activator">
                        <v-list-tile-content>
                            <v-list-tile-title>{{ sub.title }}</v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                    <v-list-tile
                            v-for="subItem in sub.children"
                            :key="subItem.title"
                            :to="{ name: subItem.route}"
                    >
                        <v-list-tile-content>
                            <v-list-tile-title>{{ subItem.title }}</v-list-tile-title>
                        </v-list-tile-content>

                        <v-list-tile-action>
                            <v-icon>{{ subItem.icon }}</v-icon>
                        </v-list-tile-action>
                    </v-list-tile>
                </v-list-group>

            </v-list-group>
        </v-list>
    </v-navigation-drawer>
</template>

<script>

    import {mapGetters} from 'vuex';

    export default {
        computed: {
            drawer: {
                get() {
                    return this.$store.state.drawer;
                },
                set(val) {
                    this.$store.commit('updateDrawer', val);
                }
            },
            ...mapGetters({
                nestedMenu: 'getNestedMenuItems',
                simpleMenu: 'getSimpleMenuItem'
            })
        },
        methods: {}
    }
</script>

<style scoped>

</style>