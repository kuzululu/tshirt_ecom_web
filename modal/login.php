<div class="modal fade" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">
      
      <div class="modal-header">
        <h1 class="modal-title fs-5">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form class="row pb-3 needs-validation" novalidate="" method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">
    
    <div class="col-md-12 mb-md-0 mb-3">
     <label class="fw-bolder">Username</label>
     <div class="input-group">
      <span class="input-group-text"><i class="text-success fa fa-user"></i></span>
      <input type="text" name="userReg" class="form-control" placeholder="e.g. username" required="" autofocus="">
     </div>
    </div>

    <div class="col-md-12 mb-md-0 mb-3">
     <label class="fw-bolder">Password</label>
     <div class="input-group">
      <span class="input-group-text"><i class="text-success fa fa-lock"></i></span>
      <input type="password" name="passReg" class="form-control togglePass" placeholder="e.g. password" required="">
     </div>
    </div>

    <div class="col-md-12 mt-md-3 mt-3 text-end">
     <input type="submit" id="btn-reg" name="btnLog" value="Login" class="btn btn-outline-primary">
    </div>
    
   </form>
      </div>
      
    </div>
  
  </div>

</div>
