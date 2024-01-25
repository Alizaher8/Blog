<template>
    <a href="#" @click="chooseLike">
        <!-- <img src="images/love.png" alt="love" /> -->
        <!-- <img src="images/like.png" alt="like" /> -->
        <i class="bi bi-hand-thumbs-up-fill" v-if="like == 1"></i>
        <i class="bi bi-hand-thumbs-up" v-if="like == ''"></i>
    </a>
    <span>{{ like }} like</span>
</template>
<script>
import 'bootstrap-icons/font/bootstrap-icons.css';

export default {
    data() {
        return {
            like: '',
            counter: ''

        };
    },
    props: {
        user_auth_id: Number,
        post_id: Number,
        likes: {
            type: Array,
            required: true
        }
    },
    mounted() {
        //  const proxy = new Proxy(this.likes, handler);
        console.log(this.user_auth_id);
        for (let index = 0; index < this.likes.length; index++) {
            if (this.likes && this.likes.length > 0 && (this.likes[index].user_id === this.user_auth_id)) {
                console.log(this.user_auth_id);
                console.log(this.likes[index].user_id);

                this.like = 1;
            } else {
                console.log('Likes array is empty or undefined');
            }

        }

        console.log(this.likes.length)
    },
    methods: {
        chooseLike() {

            if (this.like === '') {
                this.like = 1;
                this.addLike();
            }
            else {
                this.like = '';
                this.addLike();
            }

        },
        addLike() {
            const formData = new FormData();
            formData.append("like", this.like);
            formData.append("post_id", this.post_id);
            if (this.like === 1) {



                console.log(this.post_id);

                axios
                    .post("/api/likes", formData,)
                    .then((response) => {
                        // Handle the response
                        // console.log(response);
                    })
                    .catch((error) => {
                        // Handle any errors
                        console.error("Error adding post:", error);
                    });

            }
            else {
                console.log(this.post_id);
                axios
                    .post("/api/likes", formData,)
                    .then((response) => {
                        // Handle the response
                        // console.log(response);
                    })
                    .catch((error) => {
                        // Handle any errors
                        console.error("Error adding post:", error);
                    });

            }
        }
    },
};
</script>
