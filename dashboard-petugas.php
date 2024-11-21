<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Dashboard</title>
    <link rel="stylesheet" href="dashboard.css" />
  </head>
  <body>
    <div id="sidebar">
      <h2>Dashboard</h2>
    </div>
    <div class="div1">
      <ul>
        <li><a href="#reports">Home / Setting</a></li>
        <li><a href="/buku/buku.php">Buku</a></li>
        <li><a href="#overview">Overview</a></li>
        <li><a href="#analytics">Analytics</a></li>
        <li><a onclick="showTable()">Reports</a></li>
        <li>
          <a href="logout.php" onclick="myFunction()">Log Out</a>
          <script>
            function myFunction() {
              let pil = confirm("apakah anda yakin untuk logout?");
            }
          </script>
        </li>
      </ul>
    </div>

    <div id="main-content">
      <h1>Welcome To Dashboard</h1>

      <section id="overview">
        <div class="card">
          <h2>Overview</h2>
        </div>
      </section>

      <section id="analytics">
        <div class="card">
          <h2>Analytics</h2>
        </div>
      </section>

      <section id="reports">
        <div class="card">
          <h2>Reports</h2>
        </div>
       
        
      </section>
    </div>
  </body>
</html> 
