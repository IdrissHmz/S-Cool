<template>

    <v-data-table
        :headers="headers"
        :items="marks"
        sort-by="id"
        class="elevation-1"
    >
        <template v-slot:top>
            <v-toolbar flat color="white">
                <v-toolbar-title>Marks</v-toolbar-title>
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
                                        <v-text-field v-model="editedItem.first_name" label="Mark"></v-text-field>
                                    </v-col>
                                    <v-col cols="12" sm="6" md="4">
                                        <v-text-field v-model="editedItem.last_name" label="Type"></v-text-field>
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
        props: ['marks'],
        data: () => ({
            dialog: false,
            headers: [
                {
                    text: 'id',
                    align: 'left',
                    value: 'id',
                },
                { text: 'mark', value: 'mark' },
                { text: 'type', value: 'type' },
                { text: 'Actions', value: 'action' ,sortable: false},


            ],
            editedIndex: -1,
            editedItem: {
                id: 0,
                mark: '',
                type: '',

            },
            defaultItem: {
                id: 0,
                mark: '',
                type: '',

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
                this.fetchMarks();
            },
            fetchMarks(){
                /*axios.get('/admin/dashboard/teachers')
                    .then(response=>{
                        this.teachers = response.data.data;
                    })
                console.log('fetched');*/
            },

            editItem (item) {
                this.editedIndex = this.marks.indexOf(item)
                this.editedItem = Object.assign({}, item)
                this.dialog = true
            },

            deleteItem (item) {
                const index = this.marks.indexOf(item)
                confirm('Are you sure you want to delete this item?') && this.marks.splice(index, 1)
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
                    Object.assign(this.marks[this.editedIndex], this.editedItem)
                } else {
                    this.marks.push(this.editedItem)
                }
                this.close()
            },
        },
    }
</script>

<style scoped>

</style>
