<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/favicon.ico') ?>">


    <title>D2M Application</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.css')?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/dist/css/sb-admin-2.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">

    <?php if (!empty($css_to_load)&&count($css_to_load) > 0) {
        foreach($css_to_load as $css){
            ?>
            <link href="<?php echo base_url('assets/' . $css . ''); ?>" rel="stylesheet" type="text/css"></link>
        <?php } } ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

        .cc-selector input{
            -webkit-appearance:none;
            -moz-appearance:none;
            appearance:none;
        }

        .cc-selector-2 input{
            position:absolute;
            z-index:999;
        }

        .splash{background-image:url(<?php echo base_url('assets/images/template/1Splash.png')?>);}
        .welcome{background-image:url(<?php echo base_url('assets/images/template/2Walkthrough.png')?>);}
        .login{background-image:url(<?php echo base_url('assets/images/template/3Login.png')?>);}
        .hamburger{background-image:url(<?php echo base_url('assets/images/template/4MenuProfile.png')?>);}
        .simple_list{background-image:url(<?php echo base_url('assets/images/template/5List.png')?>);}
        .formradio{background-image:url(<?php echo base_url('assets/images/template/6Form.png')?>);}
        .list_tab{background-image:url(<?php echo base_url('assets/images/template/7ListWithtab.png')?>);}

        .cc-selector-2 input:active +.drinkcard-cc, .cc-selector input:active +.drinkcard-cc{opacity: .9;}
        .cc-selector-2 input:checked +.drinkcard-cc, .cc-selector input:checked +.drinkcard-cc{
            -webkit-filter: none;
            -moz-filter: none;
            filter: none;
            border: 1px solid #55acee;
        }
        .drinkcard-cc{
            cursor:pointer;
            background-size:contain;
            background-repeat:no-repeat;
            display:inline-block;
            width:30em;
            height:33em;
            -webkit-transition: all 100ms ease-in;
            -moz-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
            -webkit-filter: brightness(0.5) grayscale(1) opacity(.7);
            -moz-filter: brightness(0.5) grayscale(1) opacity(.7);
            filter: brightness(0.5) grayscale(1) opacity(.7);
        }
        .drinkcard-cc:hover{
            -webkit-filter: brightness(1) grayscale(1) opacity(.9);
            -moz-filter: brightness(1) grayscale(1) opacity(.9);
            filter: brightness(1) grayscale(1) opacity(.9);
        }



        .tempimage{
            padding: 10px;
            border: solid 1px #e3e3e3;
        }
        .tempimage:hover{
            padding: 10px;
            border: solid 1px #e3e3e3;
        background: #e1e1e1;
        }


        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 10px;
            width: 10px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #4CAF50;
        }
    </style>

</head>
<body>