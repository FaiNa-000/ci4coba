 <?= $this->extend('layout/template'); ?>

 <?= $this->section('content'); ?>
 <!--<div class="container">
    <div class="row">
        <div class="col">

            <h1>Hello, world!</h1>

        </div>
    </div>
</div>-->


 <style>
     .info-panel {
         height: 200px;
         color: black;
         position: relative;
         margin: 20px;
     }
 </style>



 <div class="container">
     <div class="row space">
         <div class="col-lg-6">
             <h1 class="display-4">Keep your work <span>healthy!</span></h1>
             <?php if (logged_in()) : ?>

             <?php else : ?>
                 <a class="btn btn-warning tombol mt-2" href="<?= base_url('/register'); ?>"><b>SIGN UP FOR FREE!</b></a>
             <?php endif; ?>
         </div>
         <div class="col-lg-5">
             <img src="/img/workingspace.jpg" alt="workingspace" class="img-fluid">
         </div>

     </div>
 </div>


 <?= $this->endSection(); ?>