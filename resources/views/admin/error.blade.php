@extends('admin.layout')
@section('error')
<div class="wrapper wrapper-full-page">
    <div class="page-header error-page header-filter" style="background-image: url('../../assets/img/clint-mckoy.jpg')">
        <!--   you can change the color of the filter page using: data-color="blue | green | orange | red | purple" -->
        <div class="content-center">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title">404</h1>
                    <h2>Page not found :(</h2>
                    <h4>Ooooups! Looks like you got lost.</h4>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com/">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="https://www.creative-tim.com/presentation">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="https://www.creative-tim.com/blog">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by
                    <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
                </div>
            </div>
        </footer>
    </div>
</div>
    @endsection
@include('admin.footer)