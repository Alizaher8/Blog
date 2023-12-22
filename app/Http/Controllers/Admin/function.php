<?php
//     public function store(Request $request)
// {   // dd(Auth::id());
//     // Validate the request data
//     $user = User::where('id',Auth::id())->first();
//     dd($user->id);
//     $validatedData = $request->validate([
//         'content' => 'required|string',
//     ]);

//     // Log the request data
//   // Log::info('Received request data:', $validatedData);

//     // Create a new post

//     //if (Auth::check()) {
//         // Create the post with the associated user_id
//         $post = Post::create([
//             'content' => $validatedData['content'],
//             'user_id' => Auth::id()
//             // Add any other fields you want to save to the database
//         ]);
//         // Return a response or redirect as needed
//    // } else {
//         // Handle the case where the user is not authenticated
//         // Return a response or redirect to the login page
//       //  return response()->json(['user not auth']);
//    // }

//     // Log the created post
//   // Log::info('Created post:', $post);
//    // Log the created post
//   // Log::info('Created post', ['post' => $post->toArray()]);


//     // Return a response indicating success
//     return response()->json(['message' => 'Post added successfully'], 201);
// }

// addPost() {
//     // Access the postContent data property here and use it in your logic
//     const postData = {
//         content: this.postContent  // Use the postContent value in your logic
//     };

//     // Send a POST request to your backend
//     axios.post('/api/posts', postData)
//         .then((response) => {
//             // Handle the response
//             console.log(response);
//         })
//         .catch(error => {
//             // Handle any errors
//             console.error('Error adding post:', error);
//         });
// }
// //     addPost() {
// //   const postData = {
// //     content: this.postContent  // Use the postContent value in your logic
// //   };

// //   // Get the CSRF token from the meta tag in your HTML
// //   const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

// //   // Send a POST request to your Laravel backend
// //   axios.post('/api/posts', postData, {
// //     headers: {
// //       'X-CSRF-TOKEN': csrfToken
// //     }
// //   })
// //     .then((response) => {
// //       // Handle the response
// //       console.log(response);
// //     })
// //     .catch(error => {
// //       // Handle any errors
// //       console.error('Error adding post:', error);
// //     });
// // }


?>
 <a href="#" style="background: #ccdcff" @click="openFileInput('video')">
                        <i style="background: #0053ff" class="fa-solid fa-video"></i>
                        Video
                    </a>
                    <a href="#" style="background: #d7ffef">
                        <i style="background: #00d181" class="fa-solid fa-location-dot"></i>
                        Location</a>

                    <a href="#" style="background: #cff3ff">
                        <i style="background: #04c3ff" class="fa-solid fa-gift"></i>
                        Gift</a>

                    <a href="#" style="background: #fff4d1">
                        <i style="background: #ffca28" class="fa-solid fa-face-grin-beam"></i>
                        Feeling / Acrivity</a>
                        <input type="file" ref="videoInput" style="display: none" @change="handleFileUpload('video', $event)" />
                        // Log::info('File name: ' . $fileName);
    // Log::info('File size: ' . strlen($blob));
    // Log::info('File MIME type: image/jpeg');
    // $blob = $request->getContent(); // Access the raw binary data from the request
    // $fileName1 = uniqid() . '.jpg';
    // Log::info($blob);

    // file_put_contents(public_path('uploads' . $fileName1), $blob);


    //    if ($photos) {
    //        foreach ($photos as $photo) {

    //                $fileName = uniqid() . '.' . $photo->getClientOriginalExtension();
    //              //  $this->saveImage($fileName,'uploads/users');
    //                Log::info('File name: ' . $fileName);


                   // Generate a unique file name
            //     $photo->move(public_path('uploads/users'), $fileName); // Move the uploaded file to the desired location
            //     $fileSize = $photo->getSize(); // Get the file size
            //     $fileMimeType = $photo->getMimeType(); // Get the MIME type

            //   //  Log the file information
            //     Log::info('File name: ' . $fileName);
            //     Log::info('File size: ' . $fileSize);
            //     Log::info('File MIME type: ' . $fileMimeType);

             //  Handle each photo individually (e.g., store it, process it, etc.)
             //  Example: $photo->store('photos');
         //  }
      // }

//
//Check if the retrieved data matches the original Blob
    if (appendedBlob.size === blob.size && appendedBlob.type === blob.type) {
      console.log('Blob data has been successfully appended to the FormData object');
    } else {
      console.log('Error: Blob data was not appended to the FormData object');
    }
