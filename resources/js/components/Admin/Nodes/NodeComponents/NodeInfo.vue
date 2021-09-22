<template>
    <div>
        <div class="flex flex-row">
            <div class="text-xl flex-none">{{node.name}}</div>

            <div v-if="crowd_status" class="flex-none">
                <div class="bg-safeWalk text-white px-1 rounded-sm ml-3"
                    v-if="crowd_status == 1">safe-to-walk</div>

                <div class="bg-semiSafeWalk text-white px-1 rounded-sm ml-3"
                    v-else-if="crowd_status == 2">semi-safe-to-walk</div>

                <div class="bg-safeStay text-white px-1 rounded-sm ml-3"
                    v-else-if="crowd_status == 3">safe-to-stay</div>

                <div class="bg-semiSafeStay text-white px-1 rounded-sm ml-3"
                    v-else-if="crowd_status == 4">semi-safe-to-stay</div>

                <div class="bg-notSafe text-white px-1 rounded-sm ml-3"
                    v-else-if="crowd_status == 5">not-safe</div>

                <div class="bg-crowded text-white px-1 rounded-sm ml-3"
                    v-else-if="crowd_status == 6">crowded</div>
            </div>

            <div class="flex-grow"></div>

            <button @click="deleteNode"
                class="flex-none hover:text-red-700 focus:outline-none mr-3">Delete node</button>
        </div>

        <div class="flex flex-row">
            <div>floor: {{node.floor}}</div>

            <div class="ml-8">area: {{node.area}}</div>

            <div class="ml-8">
                users: <span v-if="num_users && !showUsersForm">{{num_users}}</span>
                       <span v-else-if="!num_users" class="text-gray-400">null</span>
            </div>

            <div class="flex flex-row">
                <form @submit.prevent="changeUsers" v-if="showUsersForm">
                    <div class="flex flex-row">
                        <div class="pr-3 flex-grow">
                            <label for="num_users" class="sr-only">Users</label>
                            <input type="number" name="num_users" id="num_users" placeholder="users" v-model="num_users"
                                class="bg-gray-200 focus:outline-none ml-3 w-12" required>
                        </div>

                        <div class="flex-none">
                            <button class="bg-green-500 text-white rounded px-1 focus:outline-none hover:shadow-lg"
                                type="submit" >Change</button>
                        </div>
                    </div>
                </form>

                <Button @btn-click="toggleChangeForm"
                    :text="showUsersForm ? 'Close' : 'Change'"
                    :textColor="showUsersForm ? 'text-red-600' : 'text-blue-800'" />
            </div>

            <div class="ml-8">
                area/users: <span v-if="node.num_users">{{calculateAreaUser()}}</span>
                       <span v-else-if="!node.num_users" class="text-gray-400">null</span>
            </div>
        </div>
    </div>
</template>

<script>
import Button from './Button'

export default {
    name: 'NodeInfo',
    components: {
        Button
    },
    props: {
        node: null
    },
    data() {
        return {
            showUsersForm: false,
            num_users: this.node.num_users,
            crowd_status: this.node.crowd_status_id
        }
    },
    methods: {
        //user = a person connected to WiFi AP

        calculateAreaUser() {
            return (this.node.area / this.num_users).toFixed(2)
        },
        toggleChangeForm() {
            this.showUsersForm = !this.showUsersForm
        },
        async changeUsers() {
            var request = {
                num_users: parseInt(this.num_users)
            }

            await axios.put(`/api/node/setusers/${this.node.id}`, request).then((response)=>{
                this.crowd_status = response.data.crowd_status_id
                this.toggleChangeForm()
            }).catch((error) => {
                console.log(error.response.data);
            })
        },
        async deleteNode() {
            if (confirm(`Do you want to delete "${this.node.name}"?`)) {
                //This function should be disabled at the end of development period

                // axios.delete(`/api/node/delete/${this.node.id}`).then((response)=> {
                //     window.location.reload()
                // }).catch((error) => {
                //     console.log(error.response.data.errors);
                // })
            }
        }
    }
}
</script>

<style scoped>
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
