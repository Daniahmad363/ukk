<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi Perpustakaan</title>
  <style>
    body { font-family: Arial, sans-serif; background-color: #f4f4f9; }
    .form-container { padding: 20px; margin: 50px auto; background: white; width: 300px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
    input, button { width: 100%; padding: 10px; margin: 10px 0; }
    button { background-color: #4CAF50; color: white; border: none; cursor: pointer; }
    button:hover { background-color: #45a049; }
  </style>
</head>
<body>

<div class="form-container">
  <h2>Registrasi Pengguna</h2>
  <form id="registration-form">
    <input type="text" id="fullname" placeholder="Nama Lengkap" required>
    <input type="email" id="email" placeholder="Email" required>
    <input type="text" id="phone" placeholder="Telepon" required>
    <input type="password" id="password" placeholder="Password" required>
    <input type="password" id="confirm-password" placeholder="Konfirmasi Password" required>
    <button type="submit">Daftar</button>
  </form>
</div>

<h2>Daftar Pengguna</h2>
<div id="user-list"></div>

<script>
document.getElementById('registration-form').addEventListener('submit', function(e) {
  e.preventDefault();
  
  const user = {
    fullname: document.getElementById('fullname').value,
    email: document.getElementById('email').value,
    phone: document.getElementById('phone').value,
    password: document.getElementById('password').value,
  };

  let users = JSON.parse(localStorage.getItem('users')) || [];
  users.push(user);
  localStorage.setItem('users', JSON.stringify(users));
  
  document.getElementById('registration-form').reset();
  displayUsers();
});

function displayUsers() {
  const users = JSON.parse(localStorage.getItem('users')) || [];
  const userList = document.getElementById('user-list');
  userList.innerHTML = '';
  users.forEach((user, index) => {
    userList.innerHTML += `
      <div>
        ${user.fullname} (${user.email}) 
        <button onclick="deleteUser(${index})">Hapus</button>
      </div>
    `;
  });
}

function deleteUser(index) {
  let users = JSON.parse(localStorage.getItem('users')) || [];
  users.splice(index, 1);
  localStorage.setItem('users', JSON.stringify(users));
  displayUsers();
}

displayUsers();
</script>

</body>
</html>
