<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="<?= base_url('auth/register'); ?>">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                    
                    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                    
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address"  >
                  
                      <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="pass1" name="pass1" placeholder="Password">
                    
                    <?= form_error('pass1', '<small class="text-danger">', '</small>'); ?>
                    
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="pass1" name="pass2" placeholder="Repeat Password">
                    
                    <?= form_error('pass2', '<small class="text-danger">', '</small>'); ?>
                    
                  </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

