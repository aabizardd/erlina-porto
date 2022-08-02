<div class="authincation h-100">
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Login Admin</h4>

                                <?=$this->session->flashdata('message')?>

                                <form action="<?=base_url('login')?>" method="POST">
                                    <div class="form-group">
                                        <label><strong>Email</strong></label>
                                        <input type="text" class="form-control" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Password</strong></label>
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                        <div class="form-group">

                                        </div>
                                        <div class="form-group">
                                            <a href="page-forgot-password.html">Forgot Password?</a>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block" style="display: none;"
                                        id="loader" disabled>
                                        <div class="spinner-border text-white" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </button>



                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block"
                                            onclick="clickFunction()" id="masuk" style="display: block;">Masuk</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

<script>
function clickFunction() {

    var loader = document.getElementById("loader");
    var masuk = document.getElementById("masuk");

    if (masuk.style.display === "block") {
        masuk.style.display = "none";
        loader.style.display = "block";
    } else {
        masuk.style.display = "block";
        loader.style.display = "none";
    }
}
</script>