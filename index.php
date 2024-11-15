<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pustaka Kita</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <h1>Pustaka Kita</h1>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Genre</a></li>
            <li><a href="#">Populer</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
        <div class="auth">
            <a href="#" id="loginBtn">Login/Masuk</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-text">
            <h2>Membaca Buku Dimanapun dan Kapanpun</h2>
            <p>Kami menyediakan genre buku apa saja. Untuk kalangan remaja, kami berfokus pada pembacaan buku fiksi maupun non-fiksi yang pengguna ingin baca.</p>
            <button class="cta-btn">Mulai Membaca</button>
        </div>
        <div class="hero-image">
            <img src="image 3.png" alt="Reading Illustration">
        </div>
    </div>

    <!-- Daily Books Section -->
    <div class="daily-books">
        <h2>Buku Populer Mingguan</h2>
        <div class="day-tabs">
            <a href="#">Senin</a>
            <a href="#">Selasa</a>
            <a href="#">Rabu</a>
            <a href="#">Kamis</a>
            <a href="#">Jumat</a>
            <a href="#">Sabtu</a>
            <a href="#">Minggu</a>
        </div>
        <div class="book-list">
            <div class="book-item">
                <img src="book1.png" alt="Book 1">
                <h3>Jodoh Untuk Arjuna</h3>
            </div>
            <div class="book-item">
                <img src="book2.png" alt="Book 2">
                <h3>Bintang Milik Angkasa</h3>
            </div>
            <div class="book-item">                <img src="book3.png" alt="Book 3">
                <h3>Let'sn Talk About Everthing Again</h3>
            </div>
            <div class="book-item">
                <img src="book4.png" alt="Book 4">
                <h3>Cinderella Tanpa Nama</h3>
            </div>
        </div>
    </div>

    <!-- New Books Section -->
    <div class="new-books">
        <h2>New Book</h2>
        <div class="new-book-list">
            <div class="new-book-item">
                <img src="newbook1.png" alt="New Book 1">
                <h3>Skool of Street</h3>
                <p>63,775</p>
            </div>
            <div class="new-book-item">
                <img src="newbook2.png" alt="New Book 2">
                <h3>My Best Friend is an Eldritch Horror</h3>
                <p>43,345</p>
            </div>
            <div class="new-book-item">
                <img src="newbook3.png" alt="New Book 3">
                <h3>In Between</h3>
                <p>176,841</p>
            </div>
            <div class="new-book-item">
                <img src="newbook4.png" alt="New Book 4">
                <h3>You Will Love Me Again</h3>
                <p>153,498</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
   

    <!-- Login Modal -->
<div id="loginModal" class="modal">
    <div class="modal-content">
       <span style="margin-left: 200px;" id="closeLogin">
        <i class="fa-solid fa-x"></i>
       </span>
        <h2>Login</h2>
        <form id="loginForm">
            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="Enter your email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" placeholder="Enter your password" required>

            <!-- Forgot Password Link -->
            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>

            <!-- Sign in Button -->
            <button onclick="showSnackbar()">Login</button>
            <div id="snackbar">Login Berhasil &#x2764;</div>

            <script>
                // script.js
function showSnackbar() {
  // Get the snackbar DIV
  const snackbar = document.getElementById('snackbar');
  
  // Add the "show" class to make it visible
  snackbar.classList.add('show');
  
  // After 3 seconds, remove the "show" class
  setTimeout(function() {
    snackbar.classList.remove('show');
  }, 3000);
}

                
            </script>

            <!-- Social Media Login -->
            <div class="social-login">
                <button type="button" class="social-btn apple">Sign in with Apple</button>
                <button type="button" class="social-btn facebook">Sign in with Facebook</button>
                <button type="button" class="social-btn google">Sign in with Google</button>
            </div>

            <!-- Link to Register -->
            <div class="register-link">
                <p>Don't have an account yet? <a href="#" id="mybutton" onclick="openRegisterModal()">Come on, register</a></p>
            </div>
        </form>
    </div>
</div>


    <!-- Register Modal -->
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span style="margin-left: 200px;" id="closeRegister">
                <i class="fa-solid fa-x"></i>
               </span>
            <h2>Create Your Account Now</h2>
            <p>Complete your data below to join our business</p>
            <form id="registerForm">
                <label for="regEmail">Email:</label>
                <input type="email" id="regEmail" placeholder="Enter your email" required>
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" placeholder="Enter your full name" required>
                <label for="regPassword">Password:</label>
                <input type="password" id="regPassword" placeholder="Enter your password" required>
                <label for="confirmPassword">Re-type Password:</label>
                <input type="password" id="confirmPassword" placeholder="Re-enter your password" required>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
     <!-- About Us Section -->
     <div class="about-us">
        <h2>Tentang Kami</h2>
        <p>Pustaka Kita adalah platform yang menyediakan ribuan buku fiksi dan non-fiksi untuk para pembaca di segala usia. Kami berkomitmen untuk memberikan pengalaman membaca terbaik kapan saja dan di mana saja.</p>
    </div>

    <!-- Testimonials Section -->
    <div class="testimonials">
        <h2>Apa Kata Mereka</h2>
    <div class="testimonial-item">
        <p>"Pustaka Kita membantu saya menemukan buku-buku baru dengan mudah! Sangat direkomendasikan."</p>
        <h4>- Andi, Pembaca Setia</h4>
    </div>
    <div class="testimonial-item">
        <p>"Platform ini punya koleksi yang sangat lengkap! Saya bisa membaca kapan saja."</p>
        <h4>- Siti, Penggemar Buku</h4>
    </div>
    </div>
    <footer>
        <div class="social-media">
            <a href="#"><img src="instagram.png" alt="Instagram"></a>
            <a href="#"><img src="twiter.png" alt="twiter"></a>
            <a href="#"><img src="facebook.png" alt="Facebook"></a>
        </div>
    </footer>
    <script>
        // Get the modal elements
        const loginModal = document.getElementById('loginModal');
        const registerModal = document.getElementById('registerModal');

        // Get the buttons that open the login and register modals
        const loginBtn = document.getElementById('loginBtn');
        const registerBtn = document.getElementById('registerBtn');

        // Get the close buttons for the modals
        const closeLogin = document.getElementById('closeLogin');
        const closeRegister = document.getElementById('closeRegister');

        document.addEventListener('DOMContentLoaded', function() {
            const loginBtn = document.getElementById('loginBtn');
            const loginModal = document.getElementById('loginModal');
            const closeLogin = document.getElementById('closeLogin');

            if (loginBtn) {
                loginBtn.onclick = function() {
                    loginModal.style.display = 'block';
                }
            }

            if (closeLogin) {
                closeLogin.onclick = function() {
                    loginModal.style.display = 'none';
                }
            }

            window.onclick = function(event) {
                if (event.target == loginModal) {
                    loginModal.style.display = 'none';
                }
            }
            if (closeRegister) {
                closeRegister.onclick = function() {
                    registerModal.style.display = 'none';
                }
            }
            window.onclick = function(event) {
                if (event.target == registerModal) {
                    registerModal.style.display = 'none';
                }
            }
        });
        // Open the login modal
        loginBtn.onclick = function() {
            loginModal.style.display = 'block';
        }

        // Open the register modal
        registerBtn.onclick = function() {
            registerModal.style.display = 'block';
        }

        // Close the login modal
        closeLogin.onclick = function() {
            loginModal.style.display = 'none';
        }

        // Close the register modal
        closeRegister.onclick = function() {
            registerModal.style.display = 'none';
        }

        // Close the modal when clicking outside of the content
        window.onclick = function(event) {
            if (event.target == loginModal) {
                loginModal.style.display = 'none';
            }
            if (event.target == registerModal) {
                registerModal.style.display = 'none';
            }
        }

        // Function to switch from login to register modal
        function openRegisterModal() {
            loginModal.style.display = 'none';
            registerModal.style.display = 'block';
        }
    </script>

</body>
</html>
