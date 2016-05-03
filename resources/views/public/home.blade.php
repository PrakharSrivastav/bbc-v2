@extends("public.layout")
@section('css')
<link type="text/css" rel="stylesheet" href="{{url('css/owl.css')}}"  media="screen,projection"/>
@stop
@section('content')
<div class="col s12 " id="top">
    <div class="margin-top-40 center-align ">
        <br /><br />
        <h1 class="blue-text text-lighten-1 light padding-top-40">Let your books relive</h1>
        <br />
        <h5 class="white-text light padding-top-40"> Share a book, meet new people, share some stories</h5>
        <br /><br />
        <a class="margin-top-40 btn-large light blue white-text page-items" href='#about'>Click To Know More</a>
    </div>
    <div class="clearfix"></div>
</div>
<div class="col s12 light blue padding-top-20"  id="about">
    <h2 class="center-align light white-text">About</h2>
    <div class="center-align light flow-text white-text">
        Book Barter Club is an online book club that helps you exchange, borrow and lend books with other book lover in your neighbourhood for free. It's really easy to use and you can get started in 4 easy steps.
    </div>
    <div class="row center-align padding-top-20">
        <ul class="collection white col s12 m6 push-m3">
            <li class="collection-item "><a href="http://test.bookbarterclub.com/register" class="red-text text-darken-2">Register </a> yourself on [ Book Barter Club ].</li>
            <li class="collection-item ">Save your best address.</li>
            <li class="collection-item ">Search for your favourite title.</li>
            <li class="collection-item ">Meet other book owners around you and barter your books.</li>
        </ul>
    </div>
    <div class="row white-text">
        <!-- red darken-2 grey-text text-lighten-4 -->
        <div class="center-align light padding-5">Recently Added Books</div>
        <div id="owl-demo" style="padding:10px 8px 0px 8px">
            <div class="item col s12 l12" style="margin-left:-8px">
                <div class="card hoverable orange lighten-2">
                    <div class="card-image">
                        <img class="activator" height="200px" src="http://books.google.no/books/content?id=RIBz9x6BPZkC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;imgtk=AFLRE70oO-Bjjc9Hi4Kw7CRRzgLPjT7jdqtJZ_H7f-T2Leuz1183aTOpj3p4UG6A9CDSl-ToxTXZdf4Cy9bbCWzXWKuE9RNKjVRrd2MjCX1XdGlXKMQfmJnXSVOXWH2l6ets_uiC2lJ2&amp;source=gbs_api">
                    </div>
                </div>
            </div>
            <div class="item col s12 l12" style="margin-left:-8px">
                <div class="card hoverable orange lighten-2">
                    <div class="card-image">
                        <img class="activator" height="200px" src="http://books.google.no/books/content?id=Kk-LAEHExtkC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;imgtk=AFLRE726ObmJ6A2_cPcZt0D0iKRNN6tdUTmK-dtS9eAxkfRrwth9K4VJB1uWr1g97-xx_EH0r-9xKpSigrHHBiywJ8GfohWDe2m8Qq_s4TD2B1izOUwwIN1OtzHMLjEqNkJGlANp54ld&amp;source=gbs_api">
                    </div>
                </div>
            </div>
            <div class="item col s12 l12" style="margin-left:-8px">
                <div class="card hoverable orange lighten-2">
                    <div class="card-image">
                        <img class="activator" height="200px" src="http://books.google.no/books/content?id=MXmr4Kgw8cEC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;imgtk=AFLRE73nT6VOCa39uv3eiA1lqSgxMD5govtDNeBR_T6nQ4bPAd5z9mcxEMT3suTbtbZGrFi-Kh5PujDmzAZ5M64fvaCNRLNvdMAP-a-0boDpJB-vdYlJ_mmxEGnVpGlw-Sm5JHtIT-nW&amp;source=gbs_api">
                    </div>
                </div>
            </div>
            <div class="item col s12 l12" style="margin-left:-8px">
                <div class="card hoverable orange lighten-2">
                    <div class="card-image">
                        <img class="activator" height="200px" src="http://books.google.no/books/content?id=e6hlo6lhPIMC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;imgtk=AFLRE73ptZBj5oCK2hvFGZfEjB-r1df2o68Vueqdz5jTUNqMGSpd2izBVIlP5OHthMPUpMAKIlmn8M8isWSNOzOxnlISNTcKAslJhOqycLPsy9xiksjOUmEgsZ1S4x-YNC4GE35_YuSl&amp;source=gbs_api">
                    </div>
                </div>
            </div>
            <div class="item col s12 l12" style="margin-left:-8px">
                <div class="card hoverable orange lighten-2">
                    <div class="card-image">
                        <img class="activator" height="200px" src="http://books.google.no/books/content?id=zd3yIaoBjrMC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;imgtk=AFLRE73AsoBXzrw2hnwqe8QLEOEO5CbGadGusbNBU3Em8T86YP29w6cB4SWPN_9eP7otdyKeU2K7hnNddwS0kej1kexjC1l2sJHK2GyEtWcdRkKp5Qxe06r1oENpOT4DELp1SzmBliL4&amp;source=gbs_api">
                    </div>
                </div>
            </div>
            <div class="item col s12 l12" style="margin-left:-8px">
                <div class="card hoverable orange lighten-2">
                    <div class="card-image">
                        <img class="activator" height="200px" src="http://books.google.no/books/content?id=dOJApdox-xoC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;imgtk=AFLRE70n6q7qqjJJ9YGVk6T_YeIuFkiTdskLIh1Hio13rRkirhy566u6kLBbeofIlRB1BySZ9txkBseqiL3PTMawhiWGo3BqoGa5-NyEFkavRvqrrDkCBsmtR_gNu4Or4h_98mGOcLkU&amp;source=gbs_api">
                    </div>
                </div>
            </div>
            <div class="item col s12 l12" style="margin-left:-8px">
                <div class="card hoverable orange lighten-2">
                    <div class="card-image">
                        <img class="activator" height="200px" src="http://books.google.no/books/content?id=zd3yIaoBjrMC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;imgtk=AFLRE73AsoBXzrw2hnwqe8QLEOEO5CbGadGusbNBU3Em8T86YP29w6cB4SWPN_9eP7otdyKeU2K7hnNddwS0kej1kexjC1l2sJHK2GyEtWcdRkKp5Qxe06r1oENpOT4DELp1SzmBliL4&amp;source=gbs_api">
                    </div>
                </div>
            </div>
            <div class="item col s12 l12" style="margin-left:-8px">
                <div class="card hoverable orange lighten-2">
                    <div class="card-image">
                        <img class="activator" height="200px" src="http://books.google.no/books/content?id=RIBz9x6BPZkC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;imgtk=AFLRE70oO-Bjjc9Hi4Kw7CRRzgLPjT7jdqtJZ_H7f-T2Leuz1183aTOpj3p4UG6A9CDSl-ToxTXZdf4Cy9bbCWzXWKuE9RNKjVRrd2MjCX1XdGlXKMQfmJnXSVOXWH2l6ets_uiC2lJ2&amp;source=gbs_api">
                    </div>
                </div>
            </div>
            <div class="item col s12 l12" style="margin-left:-8px">
                <div class="card hoverable orange lighten-2">
                    <div class="card-image">
                        <img class="activator" height="200px" src="http://books.google.no/books/content?id=Kk-LAEHExtkC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;imgtk=AFLRE726ObmJ6A2_cPcZt0D0iKRNN6tdUTmK-dtS9eAxkfRrwth9K4VJB1uWr1g97-xx_EH0r-9xKpSigrHHBiywJ8GfohWDe2m8Qq_s4TD2B1izOUwwIN1OtzHMLjEqNkJGlANp54ld&amp;source=gbs_api">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col s12 white no-margin" id="how">
    <div class="row padding-bottom-35">
        <h1 class="grey-text center-align light padding-top-20">How It Works !!</h1>
        <h5 class="grey-text center-align padding-top-20 ligh flow-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        </h5>
        <br />
        <div class="col s12 m3 push-m2">
            <a class="waves-effect margin-top-40 waves-light btn-large blue page-items" href='#about'>Search Books by Title</a>
        </div>
        <div class="col s12 m3 push-m5">
            <a class="waves-effect margin-top-40 waves-light btn-large blue page-items" href='#about'>Search Books near you</a>
        </div>
        <br /><br />
    </div>
    <div class="clearfix"></div>
</div>
@endsection

@section('javascript')
<script type="text/javascript" src="{{url('js/owl.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/public.js')}}"></script>
@stop