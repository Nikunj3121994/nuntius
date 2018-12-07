<template>
    <v-card>
        <v-card-title>
            <v-layout row>
                <v-flex xs6 sm4 md6>
                    <router-link
                            v-if="newAction"
                            :to="{ name: newAction.name}"
                            tag="button">
                        <v-btn
                                color="info"
                                :disabled="loading"
                        >
                            {{ newAction.title}}
                        </v-btn>
                    </router-link>
                    <v-menu offset-y v-if="serverActions || routerActions">
                        <v-btn
                                slot="activator"
                                color="primary"
                                dark
                        >
                            Ações
                        </v-btn>
                        <v-list>
                            <v-list-tile
                                    v-for="(item, index) in serverActions"
                                    :key="'btn'+index"
                                    @click="executeAction(item)"
                            >
                                <v-list-tile-title>{{ item.title }}</v-list-tile-title>
                            </v-list-tile>
                            <router-link v-for="(action,i) in routerActions"
                                         :to="{ name: action.name}" tag="button"
                                         :key="'btn-l' + i">
                                <v-list-tile
                                        :key="'rli' + i"
                                >
                                    <v-list-tile-title>{{ action.title }}</v-list-tile-title>
                                </v-list-tile>
                            </router-link>
                        </v-list>
                    </v-menu>
                </v-flex>
                <v-flex xs6 sm4 md3>
                    <v-select
                            v-model="search.field"
                            :items="searchColumns"
                            item-text="text"
                            item-value="value"
                    >
                    </v-select>
                </v-flex>
                <v-flex xs6 sm4 md3 ml-2>
                    <v-text-field
                            v-model="search.query"
                            append-icon="search"
                            label="Busca"
                            single-line
                            hide-details
                            @click:append="fetchDataFromApi"
                    ></v-text-field>
                </v-flex>

            </v-layout>
        </v-card-title>
        <v-data-table
                :headers="headers"
                :items="items"
                :pagination.sync="pagination"
                :total-items="totalItems"
                :loading="loading"
                class="elevation-1"
        >
            <template slot="items" slot-scope="props">
                <td v-for="(setting,i) in dataColumns" :key="'td' + i">{{ setDataToColumn(props.item,setting) }}</td>
                <td>
                    <v-menu bottom left>
                        <v-btn
                                slot="activator"
                                icon
                        >
                            <v-icon>more_vert</v-icon>
                        </v-btn>

                        <v-list>
                            <router-link v-for="(action,i) in routerRowActions"
                                         :to="{ name: action.name, params: {id: props.item.id}}" tag="li"
                                         :key="i">
                                <v-list-tile
                                        :key="'rl' + i"
                                >
                                    <v-list-tile-title>
                                        <button>{{ action.title }}</button>
                                    </v-list-tile-title>
                                </v-list-tile>
                            </router-link>
                            <v-list-tile
                                    v-for="(action,i) in serverRowActions"
                                    @click="executeAction(action,props.item.id)"
                                    :key="'lt' + i"
                            >
                                <v-list-tile-title>{{ action.title }}</v-list-tile-title>
                            </v-list-tile>
                        </v-list>
                    </v-menu>
                </td>
            </template>
            <template slot="no-data">
                <p class="text-xs-center">Sem dados</p>
            </template>
        </v-data-table>
    </v-card>
</template>

<script>

    import formatMoney from '../../plugins/formatMoney'

    export default {
        props: [
            'headers',
            'endpoint',
            'actions'
        ],
        data: () => ({
            totalItems: 0,
            pagination: {},
            search: {
                field: 'numero',
                query: ''
            },
            loading: true,
            items: []
        }),
        watch: {
            pagination() {
                this.fetchDataFromApi()
            },
        },
        computed: {
            dataColumns() {
                return this.headers.filter((obj) => {
                    return obj.value !== 'action'
                })
            },
            searchColumns() {
                return this.headers.filter((obj) => {
                    return obj.searchable === true;
                })
            },
            newAction() {
                return this.actions.find((obj) => {
                    return obj.new
                });
            },
            routerActions() {
                return this.actions.filter((obj) => {
                    return obj.router && !obj.row && !obj.new
                });
            },
            serverActions() {
                return this.actions.filter((obj) => {
                    return !obj.router && !obj.row
                });
            },
            routerRowActions() {
                return this.actions.filter((obj) => {
                    return obj.router && obj.row
                });
            },
            serverRowActions() {
                return this.actions.filter((obj) => {
                    return !obj.router && obj.row
                });
            }
        },
        methods: {
            setDataToColumn(line, settings) {
                if (settings.type === "date") {
                    let data = new Date(line[settings.value]);
                    return data.toLocaleDateString('pt-BR');
                }else if(settings.type === "number") {
                    return formatMoney(line[settings.value],2,',','.')
                }
                return line[settings.value];
            },
            fetchDataFromApi() {
                this.loading = true;
                const params = {...this.pagination, ...this.search};
                this.$http.get(this.endpoint, {params})
                    .then(response => {
                        this.items = response.data.data;
                        this.totalItems = response.data.total;
                        this.loading = false
                    })
            },
            executeAction(action, id) {

                let mustGoOn = true;
                let actionEndpoint = this.endpoint + '/';

                if (id) {
                    if (action.endpoint) {
                        actionEndpoint += action.endpoint + '/' + id
                    } else {
                        actionEndpoint += id
                    }
                }

                if (action.askBefore) {
                    mustGoOn = confirm(action.askModal.message)
                }

                if (mustGoOn) {
                    this.$http.request({
                        method: action.method,
                        url: actionEndpoint
                    }).then((response) => {
                        console.log(response);
                    })
                }

            }
        }
    }
</script>

<style scoped>

</style>