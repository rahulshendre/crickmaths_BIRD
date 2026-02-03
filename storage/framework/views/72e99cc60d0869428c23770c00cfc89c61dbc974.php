
<?php $__env->startSection('content'); ?>
<style type="text/css">
  .form-style3 label {
    font-weight: 400;
    font-family: "Baloo Da 2", sans-serif !important;
}
    .header-layout1{
        display: none;
    }
.registermargin{
        margin-top: 4%;
    }
    .loginimageone{
        width: 60% !important;
    }
    .align-self-center {
    align-self: flex-start !important;
    margin-top: 5%;
}

.space-top {
    padding-top: 40px;
 padding-bottom: 40px;
}

/* Custom CSS for success message */
.text-success {
    color: green;
    font-weight: bold;
}


.vs-btn{
color: #fff;
}
.form-style3 {
    
    padding: 30px 30px 30px 30px !important;
  
}

.text-success {
    color: green;
    font-weight: bold;
}

</style>

    <section class="space-top" data-bg-src="assets/img/bg/bg-con-1-1.png">
        <div class="container registermargin">
            <div class="row">
               
                <div class="col-xl col-xxl-6 align-self-center">
                    <h2 class="sec-title mb-3">Proceed To Play</h2>
                                 <?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
                   <!--  <div class="row">
                        <div class="col-sm-6">
                            <div class="list-style1">
                                <ul class="list-unstyled mb-0">
                                    <li>Cricket Fun and learning</li>
                                    <li>Track student progress</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="list-style1">
                                <ul class="list-unstyled">
                                    <li>Maths Cricket Magic</li>
                                    <li>Join millions of students</li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                 <form method="POST" class="form-style3" action="<?php echo e(route('playnow')); ?>">
    <?php echo csrf_field(); ?>   

    <!-- Username Input -->
    <div class="row mb-3">
        <label for="username" class="col-md-4 col-form-label text-md-end">Create/Enter User Name</label>

        <div class="col-md-6">
<input id="username" pattern="^[a-zA-Z0-9]+$" type="text" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="username" value="<?php echo e(old('username')); ?>" required autocomplete="username" autofocus onkeyup="checkUsernameExistence()">

            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>

    <!-- Message for already registered username -->
    <div id="username-message" class="row mb-3" style="display: none;">
        <div class="col-md-6 offset-md-4">
            <span class="text-success" id="username-status">
                Username is already registered, please enter the password or else enter another username.
            </span>
        </div>
    </div>

    <!-- Password Input -->
    <div class="row mb-3">
        <label for="password" class="col-md-4 col-form-label text-md-end">Create/Enter Password</label>

        <div class="col-md-6">
            <input id="password" pattern="\S+" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required>

            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn vs-btn">
                Proceed
            </button>
        </div>
    </div>
</form>


                </div>
           
            </div>
        </div>
    </section>
    <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/vendor/jquery-3.6.0.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
   <script>
  $(".editor").on('keyup  mouseover',function(e) {
    var myEditor = document.querySelector('.editor')
    var html = myEditor.children[0].innerHTML;
    $('.new-editor').val(html);
  });

  <?php if(Session::has('message')): ?>
  var type = "<?php echo e(Session::get('alert-type', 'info')); ?>";
  switch(type){
    case 'info':
    toastr.info("<?php echo e(Session::get('message')); ?>");
    break;
    case 'warning':
    toastr.warning("<?php echo e(Session::get('message')); ?>");
    break;
    case 'success':
    toastr.success("<?php echo e(Session::get('success')); ?>");
    break;
    case 'error':
    toastr.error("<?php echo e(Session::get('message')); ?>");
    break;
  }
  <?php endif; ?>

</script>

<script>
    function checkUsernameExistence() {
        var usernameInput = document.getElementById("username").value;
        var messageDiv = document.getElementById("username-message");

        // Only check when the username length is greater than 2 characters
        if (usernameInput.length > 2) {
            // Make an AJAX request to check if the username exists
            fetch(`<?php echo e(config('app.baseURL')); ?>/check-username/${usernameInput}`)
                .then(response => response.json())
                .then(data => {
                    if (data.exists) {
                        messageDiv.style.display = "block"; // Show the message if username exists
                    } else {
                        messageDiv.style.display = "none"; // Hide the message if username doesn't exist
                    }
                })
                .catch(error => console.error('Error checking username:', error));
        } else {
            messageDiv.style.display = "none"; // Hide the message if username length <= 2
        }
    }
</script>

<script>
    document.getElementById('username').addEventListener('input', function() {
        this.value = this.value.replace(/[^a-zA-Z0-9]/g, ''); // Remove all non-alphanumeric characters
    });
</script>


<script>
    document.getElementById('username').addEventListener('input', function() {
        this.value = this.value.replace(/\s/g, '');
    });
</script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rahulshendre/Desktop/Coding/PlanetRead/Crickmath/cricmaths_web/resources/views/auth/login.blade.php ENDPATH**/ ?>