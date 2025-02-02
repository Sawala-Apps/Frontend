<?php

// ganti token biar ga hardcode
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOiJuYWRpbiIsImVtYWlsIjoibmFkaW5AZ21haWwuY29tIiwiaWF0IjoxNzM4NTA2MzUzLCJleHAiOjE3Mzg1NDIzNTN9.GkZrb0F7vv7UQVdITtnXBbsmq4V4g5bWgrxZMbtZvr8';

$apiUrl = "https://backend-production-c986.up.railway.app/feeds";

// Menggunakan cURL untuk request API
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $token",
    "Content-Type: multipart/form-data"
]);

$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
    exit;
}
curl_close($ch);

// Decode JSON response
$data = json_decode($response, true);

// Memeriksa apakah data 'feeds' ada dan tidak kosong
if (isset($data['feeds']) && is_array($data['feeds'])) {
    $posts = $data['feeds'];
} else {
    $posts = [];
    echo "No posts available or invalid data structure.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed Page</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega:wght@100..900&display=swap" rel="stylesheet">
</head>
<body class="bg-white bg-[linear-gradient(to_right,#80808033_1px,transparent_1px),linear-gradient(to_bottom,#80808033_1px,transparent_1px)] bg-[size:70px_70px] font-sans items-center flex flex-col">
    <div class="w-[62%] flex flex-col items-center">
    <main class="container mx-auto flex flex-col items-center">
    <?php include '../includes/header.php'; ?>
        <?php
        include '../partials/create-feed.php';
            foreach ($posts as $post) {
                include '../partials/feed-card.php';
            }
        ?>
    </main>
    </div>
    <script>
    // const token = localStorage.getItem("token");
    // axios.get("https://backend-production-c986.up.railway.app/feeds", {
    //     headers: {
    //         "Authorization": `Bearer ${token}`,
    //         "Content-Type": "multipart/form-data"
    //     }
    // })
    // .then(function (response) {
    //     alert("Berhasil mendapatkan postingan");
    //     console.log(response.data);
    //     // looping pake js harus buat ulang ui disini
    // })
    // .catch(function (error) {
    //     alert("Gagal mendapatkan postingan");
    //     console.error(error);
    // });

    const token = localStorage.getItem('token'); 
    console.log(token)

    axios.post( window.location.href , { token: token }, {
        headrs: {
            'Content-Type': 'application/json'
        }
    })
        .then(response => {
            console.log(response.data);
        })
        .catch(error => {
            console.error(error);
        });

</script>

</body>
</html>
