<!DOCTYPE html>
<html lang="id">
<hd>
    <meta charset="UTF-8">
    <meta name="viewport" content="">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="styles.css">
   <style>
   
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    flex-direction: column;
}


.login-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
    margin-bottom: 30px;
}


.input-group {
    margin-bottom: 15px;
    text-align: left;
}

.input-group label {
    font-size: 14px;
    color: #333;
    margin-bottom: 5px;
    display: block;
}

.input-group input {
    width: 100%;
    padding: 8px;
    font-size: 14px;
    border-radius: 5px;
    border: 1px solid #ddd;
    margin-top: 5px;
}


button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}


#error-message {
    color: red;
    margin-top: 10px;
}


#user-data-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

#user-list {
    margin-top: 20px;
}

.user-item {
    padding: 10px;
    margin-bottom: 10px;
    background-color: #f9f9f9;
    border-radius: 5px;
    border: 1px solid #ddd;
}

button.delete-btn {
    background-color: #f44336;
    border: none;
    padding: 5px;
    cursor: pointer;
}

button.delete-btn:hover {
    background-color: #d32f2f;
}

   </style>
    
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm" action="http://localhost/UKK2025/dashbord" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="dhani123" name="username" daniajaa>
            </div>
            <div class="input-group">
                <label for="daniajaa">Password</label>
                <input type="text" id="daniajaa" name="daniajaa" daniajaa>
            </div>
            <button type="submit">Masuk</button>
        </form>
        <div id="error-message"></div>
    </div>
    <script src="script.js"></script>
    <style></style>

</body>
</html>
