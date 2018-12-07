<template>
    <v-menu
            :close-on-content-click="false"
            v-model="menu"
            :nudge-right="40"
            lazy
            transition="scale-transition"
            offset-y
            full-width
            max-width="290px"
            min-width="290px"
    >
        <v-text-field
                slot="activator"
                v-model="dateFormatted"
                :label="this.label"
                persistent-hint
                :prepend-icon=" this.noIcon === false ? 'event' : ''"
                @blur="date = parseDate(dateFormatted)"
                :readonly="this.readonly"
        ></v-text-field>
        <v-date-picker v-model="date" no-title @input="sendPayload"></v-date-picker>
    </v-menu>
</template>

<script>

    import {formatDate, parseDate} from '../../plugins/dateExtended';

    export default {
        props: {
            label: {
                type: String,
                required: false,
                default: null
            },
            readonly: {
                type: Boolean,
                required: false,
                default: false
            },
            noIcon: {
                type: Boolean,
                required: false,
                default: false
            }
        },
        data: vm => ({
            date: new Date().toISOString().substr(0, 10),
            dateFormatted: vm.formatDate(new Date().toISOString().substr(0, 10)),
            menu: false
        }),
        watch: {
            date(val) {
                console.log(this.date);
                this.dateFormatted = this.formatDate(this.date)
            }
        },
        methods: {
            sendPayload() {
                this.menu = false;
                if (this.date) {
                    this.$emit('input', this.date);
                } else {
                    this.$emit('input', null);
                }
            },
            formatDate(date) {
                return formatDate(date);
            },
            parseDate(date) {
                return parseDate(date);
            }
        },
        mounted() {
            this.sendPayload();
        }
    }
</script>

<style scoped>

</style>