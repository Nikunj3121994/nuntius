<template>
    <v-combobox
            @input="sendPayload"
            @change="changedValue"
            v-model="select"
            :items="items"
            :label="this.label"
            :search-input.sync="search"
            :disabled="this.disabled"
    ></v-combobox>
</template>

<script>

    export default {
        data: () => ({
            items: [],
            search: null,
            select: null
        }),
        props: {
            endpoint: {
                type: String,
                required: true
            },
            label: {
                type: String,
                required: false
            },
            noAjaxSearch: {
                type: Boolean,
                required: false
            },
            initializeList: {
                type: Boolean,
                required: false
            },
            disabled: {
                type: Boolean,
                required: false,
                default: false
            },
            value: Number
        },
        methods: {
            sendPayload() {
                if (this.select.id) {
                    this.$emit('input', this.select.id);
                } else {
                    this.$emit('input', null);
                }
            },
            fetchDataFromServer(search) {
                const s = search ? search : '';
                const params = {
                    search: s
                };
                this.items = [];
                this.$http.get(this.endpoint, {params})
                    .then((response) => {
                        this.items = response.data;
                    });
            },
            changedValue(val) {
                if (val) {
                    this.$emit('change', val.id);
                }
            }
        },
        watch: {
            search(val) {

                if (this.noAjaxSearch) {
                    return;
                }

                if ((!val || val.length < 3) || this.items.findIndex(function (i) {
                    return i.text === val;
                }) >= 0) {
                    return;
                }

                this.fetchDataFromServer(val);
            }
        },
        created() {
            if (this.initializeList) {
                this.fetchDataFromServer()
            }
        }
    }
</script>

<style scoped>

</style>