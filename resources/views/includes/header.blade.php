<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<style>
    .container-fluid {
        padding: 0px 50px 0px 50px;
    }
    /* navbar-auth */
    .navbar-auth {
        top: 0;
        z-index: 3;
        width: 100%;
        height: 75px;
        position: sticky;
        background-color: #F9A826;
    }
    .package-navbar {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .logo-navbar {
        color: #ffffff;
    }
    .active-a {
        color: #ffffff;
        background-color: #21E1E1;
        position: relative;
        z-index: 2;
    }
    .active-a::before {
        content: "";
        top: 0px;
        left: 0px;
        width: 0%;
        height: 10%;
        border-radius: 5px;
        position: absolute;
        background-color: #F9A826;
        transition: 500ms;
    }
    .active-a:hover:before {
        width: 100%;
        color: #ffffff;
        transition: 500ms;
        z-index: 1;
    }
    .active-a:hover {
        color: #ffffff;
        background-color: #21E1E1;
    }
    .card-header {
        height: 75px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #F9A826;
    }
    /* landing page */
    .paragraph-content {
        letter-spacing: 1px;
        line-height: 40px;
    }
    /* people page */
    .border-blue {
        border: 5px solid #21E1E1;
    }
    .background-default {
        background-color: #F9A826;
    }
    .people-title {
        opacity: 0;
        transition: 600ms;
    }
    .place-img:hover .people-title {
        opacity: 1;
        transition: 600ms;
    }
    .place-img::before {
        content: "";
        width: 97%;
        height: 0px;
        position: absolute;
        background-color: #F9A826;
        bottom: 0px;
        opacity: 0;
        transition: 500ms;
    }
    .place-img:hover:before {
        height: 35%;
        opacity: 0.7;
        bottom: 0px;
        transition: 500ms;
        background-color: #F9A826;
    }

    /* Footer */
    .footer-content {
        width: 100%;
        padding-top: 20px;
        padding-bottom: 20px;
        background-color: #21E1E1;
    }
</style>
<title>Boarding House</title>
