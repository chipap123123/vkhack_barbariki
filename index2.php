<!DOCTYPE html>
<html>
<head>
  <title></title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   

</head>
<body>
    

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="font-size:60px">Связь</h2>
          <p></p>
        </div>

        <div class="row">

          <?php 
            $connect1 = mysqli_connect("127.0.0.1","root","","Hakaton");
           ?>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch mx-auto">
            <form action="insert.php" method="GET"  class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Ваше имя</label>
                  <input type="text" name="name" class="form-control" id="name"  >
                 
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Ваш номер телефона</label>
                  <input type="text" class="form-control" name="number" id="" >
                  
                </div>
              </div>
             
              <div class="form-group">
                <label for="name">Опишите свою проблему</label>
                <textarea class="form-control" name="message" rows="10"  ></textarea>
               
              </div>
              <div class="text-center"><button type="submit">Отправить</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
</body>
</html>