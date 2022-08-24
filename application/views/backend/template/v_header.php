<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Erlina.UI - Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/admin/')?>images/favicon.png">


    <!-- Datatable -->
    <link href="<?=base_url('assets/admin/')?>vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">



    <!-- Favicon icon -->
    <link rel="stylesheet" href="<?=base_url('assets/admin/')?>vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/admin/')?>vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="<?=base_url('assets/admin/')?>vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">

    <link href="<?=base_url('assets/admin/')?>css/style.css" rel="stylesheet">



</head>

<body class="h-100" <?=$this->uri->segment(1) != "admin" ? 'style="background-color: #1D1E21;"' : ''?>>