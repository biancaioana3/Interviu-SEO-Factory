<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Jquery 3.6 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>PatShop</title>
    <script>
      $(document).ready(function(){
        $("#pf").submit(function(event){
            event.preventDefault();
            const form ="pf";
            const name = $("#name").val();
            const last_name = $("#last_name").val();
            const email = $("#email").val();
            const message = $("#message").val();
            const phone = $("#phone").val();
            const select = $("#select").val();
            const file = $("#file").val();


            console.log("Nume: " + name);
            console.log("Email: " + email);
            console.log("Mesaj: " + message);
            console.log("Telefon: " + phone);
            console.log("Select: " + select);

            $("#name").val("");
            $("#email").val("");
            $("#message").val("");
            $("#phone").val("");
            $("#select").val("");
            $("#last_name").val("");

            axios.post('post.php',{
            form,
            name,
            last_name,
            email,
            phone,
            message,
            select,
            file
            })

            .then(response => {
            console.log(response.data);
            })
            .catch(error => {
            console.error(error);
            });
        });
    });
    $(document).ready(function(){
        $("#pj").submit(function(event){
            event.preventDefault();
            
            const form ="pj";
            const name = $("#name_company").val();
            const cui = $("#cui").val();
            const email = $("#email_company").val();
            const message = $("#message_company").val();
            const phone = $("#phone_company").val();
            const select = $("#select_company").val();
            const file = $("#file_company").val();


            console.log("Nume: " + name);
            console.log("Email: " + email);
            console.log("Mesaj: " + message);
            console.log("Telefon: " + phone);
            console.log("Select: " + select);

            $("#name_company").val("");
            $("#email_company").val("");
            $("#message_company").val("");
            $("#phone_company").val("");
            $("#select_company").val("");
            $("#cui").val("");
          
            axios.post('post.php',{
            form,
            name,
            cui,
            email,
            phone,
            message,
            select,
            file
            })
            
            .then(response => {
            console.log(response.data);
            })
            .catch(error => {
            console.error(error);
            });
        });
    });
      function validateFormPF() {
        let name = document.forms["pf"]["name"].value;
        let last_name = document.forms["pf"]["last_name"].value;
        let email = document.forms["pf"]["email"].value;
        let phone = document.forms["pf"]["phone"].value;

        if (name == "") {
          alert("Numele este obligatoriu!");
          return false;
        }
        if (last_name == "") {
          alert("Prenumele este obligatoriu!");
          return false;
        }
        if (email == "") {
          alert("Email-ul este obligatoriu!");
          return false;
        }
        if (phone == "") {
          alert("Telefonul este obligatoriu!");
          return false;
        }
      }
      function validateFormPJ() {
          let name = document.forms["pj"]["name_company"].value;
          let cui = document.forms["pj"]["cui"].value;
          let email = document.forms["pj"]["email_company"].value;
          let phone = document.forms["pj"]["phone_company"].value;
        
        if (name == "") {
          alert("Numele companiei este obligatoriu!");
          return false;
        }
        if (last_name == "") {
          alert("CUI-ul este obligatoriu!");
          return false;
        }
        if (email == "") {
          alert("Email-ul este obligatoriu!");
          return false;
        }
        if (phone == "") {
          alert("Telefonul este obligatoriu!");
          return false;
        }
      }
  </script>
</head>
<body>
