<template>
    <div>
        <a @click="like" v-show="!Liked" class="cursor-pointer">like</a>
        <a @click="unlike" v-show="Liked" class="cursor-pointer">unlike</a>
        {{likeable_id}}
        {{likeable_type}} 
    </div>
</template>

<script>
export default {
    props: [
        'likeable_id',
        'likeable_type',
    ], 

    computed: {
        Liked() {
            return true
        }
    },

    methods: {
        like() {
            axios.post('/like', {
                likeable_id: this.likeable_id,
                likeable_type: this.likeable_type,
                }).then(response => {
                    console.log(response)
                }).catch(err => {
                    console.log(err)
                })
        },

        unlike() {

        }
    }
}
</script>