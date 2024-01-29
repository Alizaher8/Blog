<template>
<div>
  <a @click="showPopup">Show Comments</a>
  <div v-if="isPopupOpen" class="popup-overlay" @click="closePopup">
    <div class="popup" @click.stop>
      <span class="close" @click="closePopup">&times;</span>
      <h2>Comments</h2>
      <div class="comment-container">
        <div v-for="comment in comments" :key="comment.id" class="comment">
          <div class="comment-balloon">{{ comment.text }}</div>
        </div>
      </div>
      <div class="comment-input-container">
        <input type="text" v-model="newComment" placeholder="Write a comment...">
        <button @click="addComment">Send</button>
      </div>
    </div>
  </div>
</div>

     </template>

  <script>
  export default {
    data() {
      return {
        isPopupOpen: false,
        comments: [], // Assuming you have an array of comments
        newComment: ""
      };
    },
    props: {
        user_auth_id: Number,
        post_id: Number,

    },
    mounted()
    {   if(typeof this.newComment!=='undefined'){
        Echo.channel("CommentPost").listen("CommentPost", (e) => {
            this.comments.push({ id: this.comments.length + 1, text: e.comment });

            console.log(e);
        });
    }
    },
    methods: {
      showPopup() {
        this.isPopupOpen = true;
      },
      closePopup() {
        this.isPopupOpen = false;
      },
      addComment() {
        const formData = new FormData();
        if (this.newComment) {
//          this.comments.push({ id: this.comments.length + 1, text: this.newComment });
            formData.append("comment", this.newComment);
            formData.append("post_id", this.post_id);
            this.newComment = "";
            axios
                    .post("/api/comments", formData,)
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
    }

  };
  </script>

  <style>
  .popup-overlay {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 999;
  }

  .popup {
    background: white;
    padding: 30px;
    border: 1px solid #ccc;
    border-radius: 10px;
    position: relative;
    width: 400px;
    font-size: 18px;
    overflow-y: auto; /* Add scrollbar when content overflows vertically */
    max-height: 300px; /* Set a maximum height for the comments section */
}

  .close {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
    font-size: 24px;
  }
  .comment-container {
    margin-bottom: 50px; /* Adjust margin to make space for the comment input */
  }

  .comment-balloon {
    margin-bottom: 10px;
    position: relative;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #f2f2f2;
  }

  .comment-input-container {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    display: flex;
    align-items: center;
    padding: 10px;
    background-color: white;
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
  }

  .comment-input-container input {
    flex: 1;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-right: 10px;
  }

  .comment-input-container button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: white;
    cursor: pointer;
  }
  </style>
