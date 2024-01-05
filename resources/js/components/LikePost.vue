<template>
    <a href="#" @click="chooseLike">
        <!-- <img src="images/love.png" alt="love" /> -->
        <!-- <img src="images/like.png" alt="like" /> -->
        <i class="bi bi-hand-thumbs-up-fill" v-if="like==1"></i>
        <i class="bi bi-hand-thumbs-up" v-if="like==''"></i>
    </a>
    <span >{{ like }} like</span>
</template>
<script>
import 'bootstrap-icons/font/bootstrap-icons.css';

export default {
    data() {
        return {
            like:'',
            counter:''

        };
    },
    props:{
      post_id : Number,
      like_id : Number
    },
    mounted()
    {

    },
    methods: {
        chooseLike() {

               if(this.like===''|| (like_id !== null && like_id !== undefined) ){this.like=1;
                this.addLike();}
               else{this.like='';
               this.addLike();
            }

        },
        addLike(){
            const formData = new FormData();
            formData.append("like", this.like);
            formData.append("post_id", this.post_id);
            if(this.like===1){



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

        } else{
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
