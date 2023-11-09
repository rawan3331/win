<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>
<?php
include './parts/header.php';
?>
<body>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
     <div class="col-md-5 p-lg-5 mx-auto my-5">
     <img src="images/r1.png" style="border-radius: 50%; vertical-align: middle;width: 200px;height: 200px;" alt="" >
       <h1 class="display-4 fw-normal text-danger">اربح معنا </h1>
       <p class="lead fw-normal">باقي على فتح التسجيل</p>
       <div id="demo"></div>
       <p class="lead fw-normal text-info">للسحب على  نسخة مجانيةمن برنامج</p>
       <a class="btn btn-outline-secondary" href="#">Coming soon</a>
     </div>
     <div class="container">
     <ul class="list-group">
      <li class="list-group-item list-group-item-danger" aria-current="true">NEW PRODUCTS</li>
      <li class="list-group-item">Blueberry Cake</li>
      <li class="list-group-item">Crocan Cake</li>
      <li class="list-group-item">Kinder Cake</li>
      <li class="list-group-item">Carrot Cake</li>
     </ul>

     </div>
     </div>


    <div class="position-relative overflow-hidden  text-center ">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="mb-3">
              <label  class="form-label">الاسم الاول </label>
              <input type="text" name="firstname" id="firstname" class="form-control"  aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text error"><?PHP echo $errors['firstNameError']?></div>
            </div>
            <div class="mb-3">
              <label  class="form-label">الاسم الثاني </label>
              <input type="text" name="lastname" id="lastname" class="form-control"  aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text error"></div>
            </div>
            <div class="mb-3">
              <label  class="form-label">البريد الالكتروني</label>
              <input type="email" name="email" id="email" class="form-control"  aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text error"></div>
            </div>
            
           <button type="submit" name="submit" class="btn btn-danger">ارسال العلومات</button>
        </form>
      </div>
    </div>

    <div class="loader-con">
      <div id="loader">
          <canvas id="circularLoader" width="200" height="200"></canvas>
      </div>
    </div>


    <!-- Button trigger modal -->
    <div class="d-grid gap-2 col-6 mx-auto my-5">
    <button type="button" id="winner" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
اختار الرابح
</button>
</div>
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php foreach ($users as $user) : ?>
            
            <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']).'  '.htmlspecialchars($user['lastName']); ?></h1>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>








    <!-- <div id="cards" class="row mb-5 pb-5">
       <?php foreach ($users as $user) : ?>
        <div class="col-sm-6">
            <div class="card my-2 bg-light">
               <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($user['firstName']).'  '.htmlspecialchars($user['lastName']); ?></h5>
                <p class="card-text"><?php echo htmlspecialchars($user['email']); ?></p>
               </div>
            </div>
        </div>
        
        <?php endforeach ?>
    </div> -->



    
    <?php
    include './inc/footer.php'
    ?>
</body>
</html>