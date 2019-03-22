    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce Site</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">

    <!-- Custom Css -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Karla', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            overflow-x: hidden;
        }

        table {
            table-layout: fixed;
            width: 100%;
        }

        th {
            background-color: cornflowerblue;
            color: white;
        }

        td {
            border: 1px solid #000;
            overflow-wrap: break-word;
            word-wrap: break-word;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            padding-bottom: 300px;
        }

        .m-b-md {
            margin-top: 150px;
            margin-bottom: 30px;
        }

        a.navbar-name {
            font-size: 20px;
            color: red;
            padding-right: 50px;
        }

        .navbar {
            width: 100%;
        }

        .footer {
            width: 100%;
            height: 30%;
            background-color: lightblue;
            text-align: center;
            padding-top: 5%;
            padding-bottom: 5%;
        }

        p {
          color: black;
        }

        .col-centered{
            float: none;
            margin: 0 auto;
        }

        a.btn:hover {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
        }
        a.btn {
            -webkit-transform: scale(0.8);
            -moz-transform: scale(0.8);
            -o-transform: scale(0.8);
            -webkit-transition-duration: 0.5s;
            -moz-transition-duration: 0.5s;
            -o-transition-duration: 0.5s;
        }

    </style>
