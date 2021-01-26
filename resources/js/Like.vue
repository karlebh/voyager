<template>
    <div>
        <a @click="like" v-show="!liked" class="cursor-pointer text-green-700 font-extrabold text-3xl">like</a>
        <a @click="unlike" v-show="liked" class="cursor-pointer text-red-700 font-extrabold text-3xl">unlike</a>
        <span v-show="count > 0" class="text-purple-700 font-extrabold">{{count}}</span>
    </div>
</template>

<script>
export default {
    props: [
        'likeable_id',
        'likeable_type',
        'is_liked',
        'like_count',
    ], 

    data() {
        return {
            count : this.like_count,
            liked : this.is_liked,
        }
    },

    methods: {
        like() {
            axios.post('/like', {
                likeable_id: this.likeable_id,
                likeable_type: this.likeable_type,
                })
                this.liked = true
                this.count++
        },

        unlike() {
            axios.post('/unlike', {
                likeable_id: this.likeable_id,
                likeable_type: this.likeable_type,
                })
                this.liked = false
                this.count--
        }
    }
}
</script>