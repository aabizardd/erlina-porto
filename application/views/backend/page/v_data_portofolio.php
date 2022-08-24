<?php $this->load->view('backend/page/v_navbar')?>

<!--**********************************
            Content body start
        ***********************************-->

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span>Kelola Data Portofolio</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Portofolio</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <?=$this->session->flashdata('message');?>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Portofolio</h4>

                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target=".bd-example-modal-lg" onclick="updatemethod('add')">Tambah Data
                            Portofolio</button>

                        <!-- <button class="btn btn-primary">Tambah Data Portofolio</button> -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Judul Portofolio</th>
                                        <th>Tag</th>
                                        <th>Link</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($porto as $p): ?>

                                    <tr>
                                        <td>
                                            <img src="<?=base_url('assets/frontend/images/portofolio/' . $p->image);?>"
                                                class="rounded d-block" width="100" height="100">
                                        </td>
                                        <td><?=$p->title?></td>
                                        <td><?=$p->tag?></td>
                                        <td>
                                            <a href="<?=$p->link?>" target="_blank" class="btn btn-dark">
                                                Lihat Porto
                                            </a>

                                        </td>
                                        <td><?=$p->description?></td>
                                        <td>

                                            <button class="btn btn-warning mb-2 updatePorto" data-toggle="modal"
                                                data-target=".bd-example-modal-lg" data-id="<?=$p->id?>"
                                                data-title="<?=$p->title?>" data-tag="<?=$p->tag?>"
                                                data-description="<?=$p->description?>" data-image="<?=$p->image?>"
                                                data-link="<?=$p->link?>">Edit</button>
                                            <a href="<?=base_url('AdminController/hapus_porto/' . $p->id)?>"
                                                class="btn btn-danger mb-2">Hapus</a>

                                        </td>

                                    </tr>

                                    <?php endforeach?>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--**********************************
            Content body end
        ***********************************-->


<?php $this->load->view('backend/page/v_footer_admin')?>

<!--**********************************
           Support ticket button start
        ***********************************-->

<!--**********************************
           Support ticket button end
        ***********************************-->


</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Portofolio</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>

            <form action="" method="POST" id="formporto" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?=base_url('assets/frontend/images/portofolio/default.png');?>"
                                class="rounded d-block img-preview" width="365" height="365" id="gambar">

                            <input type="hidden" name="id_porto" id="id_porto">
                            <input type="hidden" name="image_old" id="image_old">

                            <div class="form-group">


                                <div class="mt-3">

                                    <input type="file" class="form-control" name="foto_porto" id="foto_porto"
                                        aria-describedby="inputGroupFileAddon01" onchange="preview_img()">

                                </div>
                            </div>
                        </div>

                        <div class="col-6">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Judul Portofolio</label>
                                <input type="text" class="form-control" id="title" name="title" autocomplete="off"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tag</label>
                                <input type="text" class="form-control" id="tag" name="tag" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Deskripsi</label>
                                <textarea name="description" id="description" class="form-control"
                                    style="height: 150px;" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Link Portofolio</label>
                                <input type="text" class="form-control" id="link" name="link" autocomplete="off"
                                    required>
                            </div>




                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>


<script>
function preview_img() {

    const sampul = document.querySelector('#foto_porto');
    const sampulLabel = document.querySelector('.custom-file-label');
    const imgPreview = document.querySelector('.img-preview');

    sampul.textContent = sampul.files[0].name;

    const fileSampul = new FileReader();
    fileSampul.readAsDataURL(sampul.files[0]);

    fileSampul.onload = function(e) {
        imgPreview.src = e.target.result;
    }

}
</script>

<script>
function updatemethod(value) {

    // alert(value);

    if (value == "add") {
        document.getElementById("formporto").reset();

        $(".modal-body #gambar").attr("src", "<?=base_url('assets/frontend/images/portofolio/default.png');?>");

        $('form').attr('action', "<?=base_url('admin/add_porto')?>");

    }
}
</script>

<script>
$(document).on("click", ".updatePorto", function() {
    // alert('hai')
    document.getElementById("formporto").reset();
    $('form').attr('action', '<?=base_url('admin/update_porto')?>');

    var id = $(this).data('id');
    var title = $(this).data('title');
    var description = $(this).data('description');
    var tag = $(this).data('tag');
    var link = $(this).data('link');
    var image = $(this).data('image');

    // alert(id)


    $(".modal-body #id_porto").val(id);
    $(".modal-body #title").val(title);
    $(".modal-body #description").val(description);
    $(".modal-body #tag").val(tag);
    $(".modal-body #link").val(link);
    $(".modal-body #image_old").val(image);
    $(".modal-body #gambar").attr("src", "<?=base_url('assets/frontend/images/portofolio/');?>" + image);


});
</script>