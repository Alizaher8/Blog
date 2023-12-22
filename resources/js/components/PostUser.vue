<template>
    <div class="fb-post1" v-for="post in allPosts" :key="post.id">
        <div class="fb-post1-container">
            <div class="fb-post1-header">
                <ul>
                    <li class="active">popular</li>
                    <li>recent</li>
                    <li>most view</li>
                </ul>
            </div>
            <div class="fb-p1-main">
                <div class="post-title">
                    <img :src="'/uploads/users/' + post.image" alt="Image">
                    <ul>
                        <li>
                            <h3> {{ post.firstname }} {{ post.lastname }}<span> </span></h3>
                        </li>
                        <li><span>{{ post.created_at }}</span></li>
                    </ul>
                    <p>
                       {{post.content}}
                        <a
                            href="https://www.youtube.com/channel/UCHhGX-DD7A8jq7J_NPGN6gA">https://www.youtube.com/channel/UCHhGX-DD7A8jq7J_NPGN6gA</a>
                    </p>
                </div>

                <div class="post-images">
                    <div class="post-images1">
                        <img :src="'/storage/photos/'+ post.photo" alt="Image">
                         <img src="images/pp2.jpg" alt="post images 02" />
                        <img src="images/pp3.jpg" alt="post images 03" />
                    </div>
                    <div class="post-images2">
                        <img src="images/pp4.jpg" alt="post images 04" />
                    </div>
                </div>

                <div class="like-comment">
                    <ul>
                        <li>
                            <img src="images/love.png" alt="love" />
                            <img src="images/like.png" alt="like" />
                            <span>22k like</span>
                        </li>
                        <li>
                            <i class="fa-regular fa-comment-dots"></i>
                            <span>555 comments</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-share-from-square"></i>
                            <span>254 share</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    data() {
        return {
            databasePosts: [],
            realTimePosts: [],
            allPosts:[],
            formattedDate: null
        };
    },
    watch: {
        realTimePosts: {
      handler: function(newPosts) {
        // When real-time Posts change, update the allPosts array
        this.$nextTick(() => {
          this.updateAllPosts();
        });
      },
      deep: true
    }

    },
    methods: {

        updateAllPosts() {
      // Update the allPosts array when real-time posts change
      this.allPosts = [...this.databasePosts];
      if (Array.isArray(this.realTimePosts)) {
        this.allPosts = [...this.allPosts, ...this.realTimePosts];
      }
    },

    },
    mounted() {
        axios.get("/api/userposts").then((response) => {
            this.databasePosts = response.data;
            console.log(response.data);
        });

        Echo.channel("PostsUsers").listen("PostsUser", (e) => {
            this.realTimePosts.push(e);
            console.log(e);
        });
    },
    computed: {
        allPosts() {
            this.allPosts= [...this.databasePosts, ...this.realTimePosts];
            return this.allPosts;
        },
    },

};
</script>

<style>
.fb-post1 {
    background: #fff;
    box-shadow: 0 2px 5px 0 #00000063;
    border-radius: 20px;
    padding: 15px 20px;
    padding-bottom: 20px;
}

.fb-post1-container {
    display: flex;
    flex-direction: column;
}

.fb-post1-header {
    padding-bottom: 10px;
    border-bottom: 2px solid #cfcfcf;
    padding-bottom: 8px;
}

.fb-post1-header ul {
    display: flex;
}

.fb-post1-header ul li {
    text-transform: uppercase;
    padding: 5px 10px;
    font-weight: 600;
    color: #6e6e6e;
    transition: 0.4s;
    cursor: pointer;
}

.fb-post1-header ul li:hover {
    color: #3d3e42;
}

.fb-post1-header .active {
    color: #000;
    border-bottom: 3px solid #1877f2;
}

.fb-p1-main {
    display: flex;
    flex-direction: column;
}

.post-title {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    margin: 15px 0;
}

.post-title img {
    width: 50px;
    border-radius: 50px;
    margin-right: 20px;
    margin-bottom: 20px;
}

.post-title ul {
    width: 87%;
    margin-bottom: 20px;
}

.post-title ul li span {
    color: #6e6e6e;
    font-weight: 400;
    font-size: 14px;
}

.post-title p {
    color: #6e6e6e;
}

.post-title p a {
    color: #4575b3;
}

.post-images {
    display: flex;
    justify-content: space-between;
}

.post-images1 {
    width: 60%;
    overflow: hidden;
}

.post-images2 {
    width: 37%;
    overflow: hidden;
}

.post-images1 img:nth-child(1) {
    width: 100%;
    margin-bottom: 10px;
    height: 200px;
    object-fit: cover;
    border-radius: 15px;
}

.post-images1 img:nth-child(2) {
    width: 47%;
    margin-right: 4%;
    height: 120px;
    object-fit: cover;
    border-radius: 15px;
}

.post-images1 img:nth-child(3) {
    width: 47%;
    height: 120px;
    object-fit: cover;
    border-radius: 15px;
}

.post-images2 img {
    width: 100%;
    height: 335px;
    border-radius: 15px;
    object-fit: cover;
}

.like-comment {
    width: 100%;
    margin-top: 15px;
}

.like-comment ul {
    display: flex;
}

.like-comment ul li {
    margin-right: 20px;
}

.like-comment ul li img {
    width: 20px;
    margin-right: -5px;
}

.like-comment ul li i {
    color: #9d9d9d;
}

.like-comment ul li span {
    color: #6e6e6e;
    margin-left: 10px;
    font-size: 14px;
}</style>
