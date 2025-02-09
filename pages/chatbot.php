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
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega:wght@100..900&display=swap" rel="stylesheet">
</head>
<body class="bg-white bg-[linear-gradient(to_right,#80808033_1px,transparent_1px),linear-gradient(to_bottom,#80808033_1px,transparent_1px)] bg-[size:70px_70px] font-sans items-center flex flex-col">

<div class="w-[62%] flex flex-col items-center">
    <main class="container mx-auto flex flex-col items-center">
        <?php include '../includes/header.php'; ?>
        
    <section class="chat-window">
        <button class="close">x close</button>
        <div class="chat">
            <div class="model">
                <p>Hi, how can I help you?</p>
            </div>
            
        </div>
        <div class="input-area">
            <input placeholder="Ask me anything..." type="text">
            <button>
                <img src="send-icon.png" alt="send">
            </button>
        </div>
    </section>

    <div class="chat-button">
        <img src="chat-icon.png" alt="start chat">
    </div>

        <?php include '../includes/footer-feed.php'; ?>
    </main>
</div>

<script type="importmap">
        {
          "imports": {
            "@google/generative-ai": "https://esm.run/@google/generative-ai"
          }
        }
    </script>
    
    <script type="module" src="main.js"></script>
    
</body>
</html>
