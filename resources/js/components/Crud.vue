<template>

        <v-data-table
            :headers="headers"
            :items="teachers"
            sort-by="id"
            class="elevation-1"
        >
            <template v-slot:top>
                <v-toolbar flat color="white">
                    <v-toolbar-title>Teachers</v-toolbar-title>
                    <v-divider
                        class="mx-4"
                        inset
                        vertical
                    ></v-divider>
                    <v-spacer></v-spacer>
                    <v-dialog v-model="dialog" max-width="500px">
                        <template v-slot:activator="{ on }">
                            <v-btn color="primary" dark class="mb-2" v-on="on">New Item</v-btn>
                        </template>
                        <v-card>
                            <v-card-title>
                                <span class="headline">{{ formTitle }}</span>
                            </v-card-title>

                            <v-card-text>
                                <v-container>
                                    <v-row>
                                        <v-col cols="12" sm="6" md="4">
                                            <v-text-field v-model="editedItem.id" label="ID"></v-text-field>
                                        </v-col>
                                        <v-col cols="12" sm="6" md="4">
                                            <v-text-field v-model="editedItem.first_name" label="First Name"></v-text-field>
                                        </v-col>
                                        <v-col cols="12" sm="6" md="4">
                                            <v-text-field v-model="editedItem.last_name" label="Last Name"></v-text-field>
                                        </v-col>
                                        <v-col cols="12" sm="6" md="4">
                                            <v-text-field v-model="editedItem.email" label="Email"></v-text-field>
                                        </v-col>
                                        <v-col cols="12" sm="6" md="4">
                                            <v-text-field v-model="editedItem.module" label="Module"></v-text-field>
                                        </v-col>
                                    </v-row>
                                </v-container>
                            </v-card-text>

                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="blue darken-1" text @click="close">Cancel</v-btn>
                                <v-btn color="blue darken-1" text @click="save">Save</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-dialog>
                </v-toolbar>
            </template>
            <template v-slot:item.action="{ item }">
                <v-icon
                    small
                    class="mr-2"
                    @click="editItem(item)"
                >
                    edit
                </v-icon>
                <v-icon
                    small
                    class="mr-2"
                    @click="deleteItem(item)"
                >
                    delete
                </v-icon>
            </template>
            <template v-slot:no-data>
                <v-btn color="primary" @click="initialize">Reset</v-btn>
            </template>
        </v-data-table>


</template>

<script>
    export default {
        props: ['teachers'],
        data: () => ({
            dialog: false,
            headers: [
                {
                    text: 'id',
                    align: 'left',
                    value: 'id',
                },
                { text: 'First name', value: 'first_name' },
                { text: 'Last name', value: 'last_name' },
                { text: 'Email', value: 'email' },
                { text: 'Module', value: 'module' ,sortable: false},
                { text: 'Actions', value: 'action' ,sortable: false},

            ],
            editedIndex: -1,
            editedItem: {
                id: 0,
                first_name: '',
                last_name: '',
                email: '',
                module: '',
            },
            defaultItem: {
                id: 0,
                first_name: '',
                last_name: '',
                email: '',
                module: '',
            },
        }),

        computed: {
            formTitle () {
                return this.editedIndex === -1 ? 'New Item' : 'Edit Item'
            },
        },

        watch: {
            dialog (val) {
                val || this.close()
            },
        },

        created () {
            this.initialize()
        },

        methods: {
            initialize () {
                this.fetchTeachers();
            },
            fetchTeachers(){

            },

            editItem (item) {
                this.editedIndex = this.teachers.indexOf(item)
                this.editedItem = Object.assign({}, item)
                this.dialog = true
            },

            deleteItem (item) {
                const index = this.teachers.indexOf(item)
                confirm('Are you sure you want to delete this item?') && this.teachers.splice(index, 1)
            },

            close () {
                this.dialog = false
                setTimeout(() => {
                    this.editedItem = Object.assign({}, this.defaultItem)
                    this.editedIndex = -1
                }, 300)
            },

            save () {
                if (this.editedIndex > -1) {
                    Object.assign(this.teachers[this.editedIndex], this.editedItem)
                } else {
                    this.teachers.push(this.editedItem)
                }
                this.close()
            },
        },
    }
</script>

<style scoped>

</style>
