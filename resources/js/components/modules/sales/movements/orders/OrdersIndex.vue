<template>
    <ajax-data-table
            :endpoint="'sales/movements/orders'"
            :headers="headers"
            :actions="actions"></ajax-data-table>
</template>

<script>
    import headers from './header'
    import actions from './actions'
    import AjaxDataTable from '../../../../plugins/AjaxDataTable'

    export default {
        components: {
            AjaxDataTable
        },
        data: () => ({
            headers,
            actions
        })
    }
</script>

<style scoped>

</style>