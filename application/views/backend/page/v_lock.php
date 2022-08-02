<div class="authincation h-100">
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Account Locked</h4>

                                <?=$this->session->flashdata('message')?>

                                <form action="<?=base_url('unlock_admin')?>" method="POST">
                                    <div class="form-group">
                                        <label><strong>Password</strong></label>
                                        <input type="password"
                                            class="form-control <?=form_error('password') ? "is-invalid" : ""?>"
                                            name="password" value="<?=set_value('password')?>">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block" style="display: none;"
                                            id="loader" disabled>
                                            <div class="spinner-border text-white" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </button>

                                        <button type="submit" class="btn btn-primary btn-block"
                                            onclick="clickFunction()" id="unlock" style="display: block;">
                                            Unlock
                                        </button>
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
    var unlock = document.getElementById("unlock");

    if (unlock.style.display === "block") {
        unlock.style.display = "none";
        loader.style.display = "block";
    } else {
        unlock.style.display = "block";
        loader.style.display = "none";
    }
}
</script>