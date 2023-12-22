<template>
        <div class="createPost">
            <div style="
                display: flex;
                justify-content: space-between;
                align-items: center;
            ">
                <h3 class="mini-heading" style="margin: 0">Create Post</h3>
                <a href="#" @click="addPost" style="
                    background: #ebfffe;
                    padding: 10px 20px 15px 20px;
                    display: flex;
                    align-items: center;
                    text-decoration: none;
                ">
                    <i style="
                        background: #00ff00;
                        color: #fff;
                        padding: 5px;
                        border-radius: 50%;
                        margin-right: 10px;
                    " class="fa-solid fa-plus"></i>
                    Add Post
                </a>
            </div>
            <div class="post-text">
                <img src="images/user.jpg" alt="user" />
                <input type="textarea" v-model="postContent" placeholder="What's on your mind, zahidul" />
            </div>
            <div class="post-icon">
                <div class="post-media">
                    <input type="file" ref="photoInput" style="display: none" @change="handleFileUpload('photo', $event)" />
                    <a href="#" style="background: #ffebed" @click="openFileInput('photo')">
                        <i style="background: #ff4154" class="fa-solid fa-camera"></i>
                        Gallery
                    </a>
                    <div class="photo-container">
                        <div v-for="(photo, index) in selectedPhotos" :key="index" class="photo-frame">
                            <img :src="photo" alt="Selected photo" />
                            <button @click="removePhoto(index)">Remove</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            postContent: "", // Initialize the data property to an empty string
            selectedPhotos: [],
        };

    },
    methods: {
        openFileInput(type) {
            if (type === "photo") {
                this.$refs.photoInput.click();
            } else if (type === "video") {
                this.$refs.videoInput.click();
            }
        },
        async handleFileUpload(type, event) {
            const file = event.target.files[0];
           // console.log(file);
            if (type === "photo") {
                // Handle photo upload
                const reader = new FileReader();
                const promise = new Promise((resolve, reject) => {
                    reader.onload = () => {
                        resolve(reader.result);
                    };
                    reader.onerror = reject;
                });
                reader.readAsDataURL(file);
                const result = await promise;
                this.selectedPhotos.push(result);
               // console.log(result);
            }
        },

        removePhoto(index) {
            this.selectedPhotos.splice(index, 1);
        },

        addPost() {
  // Create a new FormData object
  const formData = new FormData();

  // Append the post content to the FormData object
  formData.append("content", this.postContent);


  // Append any selected photos to the FormData object
  if(this.selectedPhotos.length > 0){
  this.selectedPhotos.forEach((photo) => {
    const blob = this.dataURItoBlob(photo);
    formData.append('photos[]', blob); // Use 'photos[]' to handle multiple photos
    // Retrieve the data associated with the 'photos[]' key
    const appendedBlob = formData.get('photos[]');
     });
    }
  // Send the FormData object to the backend using Axios
  axios.post('/api/posts', formData, {
  headers: {
    'Content-Type': 'multipart/form-data'
  }
})
    .then((response) => {
      // Handle the response
      // console.log(response);
    })
    .catch((error) => {
      // Handle any errors
      console.error("Error adding post:", error);
    });

  // Reset the postContent and selectedPhotos data properties
  this.postContent = "";
  this.selectedPhotos = [];
},

        dataURItoBlob(dataURI) {
            const byteString = atob(dataURI.split(",")[1]);
            const mimeString = dataURI
                .split(",")[0]
                .split(":")[1]
                .split(";")[0];
            const ab = new ArrayBuffer(byteString.length);
            const ia = new Uint8Array(ab);
            for (let i = 0; i < byteString.length; i++) {
                ia[i] = byteString.charCodeAt(i);
            }
            const blob = new Blob([ab], { type: mimeString });
            return blob;
        },
    },
};
</script>

<style scoped>
.photo-container img {
    max-width: 100%;
    max-height: 100%;
}

.photo-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 10px;
}

.photo-frame {
    position: relative;
    width: 200px;
    height: 200px;
    overflow: hidden;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.photo-frame img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.photo-frame button {
    position: absolute;
    top: 5px;
    right: 5px;
    padding: 2px 8px;
    background-color: #ff4154;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 12px;
    cursor: pointer;
}

.photo-preview {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 999;
    display: flex;
    justify-content: center;
    align-items: center;
}

.photo-preview-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.photo-preview img {
    max-width: 90%;
    max-height: 80%;
    object-fit: contain;
}

.photo-preview button {
    margin-top: 1rem;
    padding: 0.5rem 1rem;
    background-color: #ff4154;
    color: white;
    border: none;
    border-radius: 0.25rem;
    cursor: pointer;
}

.post-text {
    width: 100%;
    position: relative;
    margin-bottom: 30px;
}

.post-text img {
    width: 40px;
    border-radius: 50px;
    position: absolute;
    left: 10px;
    top: 30px;
}

.post-text input {
    padding: 20px 20px 20px 60px;
    width: 100%;
    background: var(--foreground);
    border: none;
    height: 100px;
    border-radius: 10px;
    box-shadow: 0 2px 5px 0 var(--shadow);
    color: var(--black);
}

.post-icon {
    display: flex;
    align-items: center;
}

.post-icon a {
    margin-right: 10px;
    padding: 5px;
    border-radius: 10px;
    font-size: 14px;
    color: #262626;
    font-weight: 500;
}

.post-icon a i {
    padding: 5px;
    border-radius: 5px;
    color: #fff;
}
</style>
