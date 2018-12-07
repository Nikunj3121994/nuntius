<template>
    <v-card>
        <v-tabs>
            <v-tab
                    :key="'order'"
            >
                Pedido
            </v-tab>
            <v-tab
                    :key="'logistics'"
            >
                Transporte
            </v-tab>
            <v-tab
                    v-if="manualInstallments"
                    :key="'installments'"
            >
                Parcelas
            </v-tab>
            <v-tab
                    :key="'commissions'"
            >
                Comissões
            </v-tab>
            <v-tab
                    :key="'messages'"
            >
                Mensagens
            </v-tab>
            <v-tab-item
                    :key="'order'"
            >
                <order-tab
                        v-model="order.orderTab"
                        @allowManualInstallments="allowManualInstallments"
                ></order-tab>
            </v-tab-item>
            <v-tab-item
                    :key="'logistics'"
            >
                <logistics-tab
                        v-model="order.logisticsTab"
                ></logistics-tab>
            </v-tab-item>
            <v-tab-item
                    :key="'installments'"
            >
                <installments-tab
                        v-model="order.installmentsTab"
                ></installments-tab>
            </v-tab-item>
            <v-tab-item
                    :key="'commissions'"
            >
                <commissions-tab
                        v-model="order.comissionsTab"
                ></commissions-tab>
            </v-tab-item>
            <v-tab-item
                    :key="'messages'"
            >
                <messages-tab
                        v-model="order.messagesTab"
                ></messages-tab>
            </v-tab-item>
        </v-tabs>
    </v-card>
</template>

<script>
    import OrderTab from './header/OrderTab'
    import LogisticsTab from './header/LogisticsTab'
    import InstallmentsTab from './header/InstallmentsTab'
    import CommissionsTab from './header/CommissionsTab'
    import MessagesTab from './header/MessagesTab'

    export default {
        components: {
            OrderTab,
            LogisticsTab,
            InstallmentsTab,
            CommissionsTab,
            MessagesTab
        },
        data: () => ({
            order: {
                orderTab: {},
                logisticsTab: {},
                installmentsTab: {},
                comissionsTab: {},
                messagesTab: {}
            },
            manualInstallments: true
        }),
        methods: {
            allowManualInstallments(val) {
                //this.manualInstallments = val;
            }
        },
        watch: {
            order: {
                handler(val) {
                    const data = {
                        ...val.orderTab,
                        ...val.logisticsTab,
                        ...val.installmentsTab,
                        ...val.comissionsTab,
                        ...val.messagesTab
                    };
                    this.$emit('input', data);
                },
                deep: true
            }
        }
    }
</script>