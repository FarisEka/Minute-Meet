<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/v5-font-face.min.css"
    integrity="sha512-5zrDFDfoCqAqA6xPCDWHHy8cOXlRGgCy+/wh4eUwzJXAwyvBeBzCJ4AqVlasi+Dxr5b9qabJw67ocz+qsax4eQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.ckeditor.com/4.22.1/basic/ckeditor.js"></script>
</head>

<body>
  <?php
  if (isset($_GET['page']) || isset($_GET['dashboard'])) {
    if ($_GET['page'] == "login") {
      include "view/login/login.php";
    } else if ($_GET['page'] == "register") {
      include "view/login/register.php";
    } else if ($_GET['page'] == "dashboard") {
      include "view/dashboard/menu.php";
    } else {
      include "view/login/login.php"; //kalo gaketemu pagenya, balik ke login
    }
  } else {
    header("location:index.php?page=dashboard");
  }
  ?>

  <script>
    CKEDITOR.replace('catatan');
  </script>

  <!-- path to flowbite -->

  <script src="./dist/js/main.js"></script>
  <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>