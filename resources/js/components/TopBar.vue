<template>
    <v-toolbar
            :clipped-left="true"
            color="blue darken-3"
            dark
            app
            fixed
    >
        <v-toolbar-title style="width: 300px" class="ml-0 pl-3">
            <v-toolbar-side-icon @click.stop="toggleDrawer"></v-toolbar-side-icon>
            <span class="hidden-sm-and-down">Nuntius</span>
        </v-toolbar-title>
        <v-spacer></v-spacer>
        <v-btn
                color="blue darken-3"
                depressed
                large
                @click="toggleCompanyDialog"
        >
            {{ companyName }} | {{ susbsidiaryName}}
        </v-btn>
        <v-btn icon @click.stop="notification = !notification">
            <v-badge left :color="notificationColor">
                <span slot="badge">{{totalNotifications}}</span>
                <v-icon>notifications</v-icon>
            </v-badge>
        </v-btn>
        <v-menu
                v-model="notification"
                :close-on-content-click="false"
                attach
                full-width
                nudge-bottom="32"
                nudge-right="20"
                left
                offset-x
                offset-y

        >
            <v-card>
                <v-list two-line>
                    <v-subheader>
                        Notificações
                    </v-subheader>
                    <template v-for="item in notifications">
                        <v-divider :key="'div' + item.subject"></v-divider>
                        <v-list-tile
                                :key="'list' + item.subject"
                                avatar
                        >
                            <v-list-tile-avatar>
                                <v-icon color="red">{{ item.avatar}}</v-icon>
                            </v-list-tile-avatar>
                            <v-list-tile-content>
                                <v-list-tile-title>{{item.title}}</v-list-tile-title>
                                <v-list-tile-sub-title>{{item.message}}</v-list-tile-sub-title>
                            </v-list-tile-content>
                        </v-list-tile>
                    </template>
                </v-list>
            </v-card>
        </v-menu>
        <v-btn icon @click.stop="menu = !menu">
            <v-icon>account_circle</v-icon>
        </v-btn>
        <v-menu
                v-model="menu"
                :close-on-content-click="false"
                attach
                full-width
                nudge-bottom="32"
                nudge-right="20"
                left
                offset-x
                offset-y

        >
            <v-card>
                <v-list>
                    <v-list-tile avatar>
                        <v-list-tile-avatar>
                            <img :src="session.user.image" alt="John">
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            <v-list-tile-title>{{ session.user.name}}</v-list-tile-title>
                            <v-list-tile-sub-title>{{ session.user.position}}</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>
                <v-divider></v-divider>
                <v-list>
                    <v-list-tile
                            :to="{name: 'myProfile'}"
                    >
                        <v-list-tile-action>
                            <v-icon>face</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-title>Meu Perfil</v-list-tile-title>
                    </v-list-tile>
                </v-list>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="primary" flat @click="menu = false">Sair</v-btn>
                </v-card-actions>
            </v-card>
        </v-menu>
    </v-toolbar>
</template>
<script>

    import {mapActions, mapGetters} from 'vuex';

    export default {
        data: () => ({
            menu: false,
            notification: false
        }),
        methods: {
            ...mapActions([
                'toggleDrawer',
                'toggleCompanyDialog'
            ])
        },
        computed: {
            ...mapGetters({
                companyName: 'getCompanyName',
                susbsidiaryName: 'getSubsidiaryName',
                session: 'getSession',
                notifications: 'getNotifications'
            }),
            totalNotifications() {
                return this.notifications.length;
            },
            hasNotifications() {
                return this.totalNotifications > 0;
            },
            notificationColor() {
                return this.hasNotifications ? 'red' : 'blue';
            }
        }
    }
</script>

<style scoped>

</style>