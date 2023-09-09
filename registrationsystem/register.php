
<style>
  form div{
    box-shadow: 0 10px 16px 0 rgb(211 8 11 / 50%), 0 6px 20px 0 rgb(207 15 15 / 25%) !important;
}

</style>

<section class="cmspage mtb-40" style="background: linear-gradient(9deg,#a40808 0%,#b029298f 85%);">
    <div class="container">
      <div class="page-desc">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <h1>Register admin</h1>
           
             
            
            <form method="POST" action="database.php" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" name="full_name" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="E-Mail">
              </div>
              <div class="form-group">
                <input type="passwpord" name="pass" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="password" name="con_pass" class="form-control" placeholder="confirm password">
              </div>
              
              <div class="form-group">
                <!-- <button class="btn btn-success" type="submit">Submit</button> -->
                <input type="submit" class="btn" value="register">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>

