@extends('layouts.app')
@section('content')

        <div class="container">
            <div class="tm-main-content">                    
                <section class="row tm-item-preview tm-margin-b-xl">
                    <div class="col-12">
                        <h2 class="tm-blue-text tm-margin-b-p">Our Team</h2>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-md-0 mb-5">         
                        <div class="mr-lg-5">
                            <p class="tm-margin-b-p">Pellentesque id ligula vitae velit eleifend ultrices. Aliquam erat orci, sollicitudin ut ipsum in, lobortis dignissim lacus. Sed mattis et risus nec sagittis. Integer ac purus et nulla placerat accumsan nec ut mauris.</p>
                            <p class="tm-margin-b-p">Duis pharetra neque nisi, id consequat magna fermentum id. Nam venenatis eu augue sed pellentesque. Cras ex elit, vulputate eu urna laoreet, dictum vehicula risus. Nulla quis enim dictum, eleifend felis sit amet, tincidunt lacus.</p>
                            <p>Proin condimentum enim eros, non posuere ipsum ornare rutrum. Integer nunc nibh, aliquam vitae magna eu.</p>                        
                        </div>                                       
                    </div>
                    <div class="col-md-6 col-sm-12 tm-highlight tm-small-pad">
                        <h2 class="tm-margin-b-p">Fusce pharetra gravida</h2>
                        <p class="tm-margin-b-p">Aliquam ipsum risus, pulvinar in lorem lobortis, porta fringilla tellus. Mauris ultrices mattis porttitor. Aenean in interdum metus.</p>
                        <p>Aliquam pulvinar at nisl ut cursus. Suspendisse pulvinar neque eget metus hendrerit pharetra. Phasellus vel neque vitae risus consectetur maximus quis non dolor.</p>
                    </div>
                </section>

                <div class="row tm-margin-b-ll">
                    <article class="col-12 col-sm-12 col-md-4 col-lg-4 mb-md-0 mb-5">
                        <div class="text-center tm-margin-b-30"><i class="fa tm-fa-6x fa-linode tm-blue-text"></i></div>
                        <header class="tm-margin-b-30"><h3 class="tm-blue-text tm-h3">Duis eget maximus</h3></header>
                        <p>Nam mollis placerat est, sed condimentum magna maximus non. Integer dictum cursus nisl, nec viverra enim maximus eget.</p>
                    </article>
                    <article class="col-12 col-sm-12 col-md-4 col-lg-4 mb-md-0 mb-5">
                        <div class="text-center tm-margin-b-30"><i class="fa tm-fa-6x fa-telegram tm-blue-text"></i></div>
                        <header class="tm-margin-b-30"><h3 class="tm-blue-text tm-h3">Aliquam porta dui #069</h3></header>
                        <p>Duis vulputate, sem id consequat suscipit, erat felis vehicula turpis, a lobortis dui velit non libero. In hac habitasse platea dictumst.</p>
                    </article>
                    <article class="col-12 col-sm-12 col-md-4 col-lg-4 mb-md-0 mb-5">
                        <div class="text-center tm-margin-b-30"><i class="fa tm-fa-6x fa-superpowers tm-blue-text"></i></div>
                        <header class="tm-margin-b-30"><h3 class="tm-blue-text tm-h3">Curabitur aliquam auctor</h3></header>
                        <p>Donec auctor turpis risus, et euismod sem mattis eget. Donec at lorem finibus, fermentum risus vel, facilisis justo.</p>
                    </article>
                </div>

                <div class="row tm-hightlight tm-margin-b-ll tm-highlight tm-small-pad">
                    <article class="col-12 col-sm-12 col-md-6 col-lg-6 tm-font-thin mb-md-0 mb-5">
                        <header class="tm-margin-b-30"><h3 class="tm-font-thin">Nam venenatis eu augue sed</h3></header>
                        <p>Cras ex elit, vulputate eu urna laoreet, dictum vehicula risus. Nulla quis enim dictum, eleifend felis sit amet, tincidunt lacus. Proin condimentum enim eros, non posuere ipsum ornare rutrum.</p>
                    </article>
                    <article class="col-12 col-sm-12 col-md-6 col-lg-6 tm-font-thin">
                        <header class="tm-margin-b-30"><h3 class="tm-green-text tm-font-thin">Integer dignissim lorem #CFC</h3></header>
                        <p>Curabitur non sodales lacus. Aenean sit amet lorem vitae nibh feugiat eleifend sed a odio. Morbi ultricies nunc et quam elementum, et finibus ipsum consectetur. Mauris tempor justo id suscipit.</p>
                    </article>
                </div>  

                <div class="row">
                    <article class="col-12">
                        <header class="tm-margin-b-30">
                            <h3 class="tm-blue-text">Nam venenatis eu augue sed</h3>
                        </header>
                        <p class="tm-margin-b-p">Morbi auctor euismod dictum. Morbi eu nibh in nulla interdum placerat. Donec pellentesque est at sem aliquam hendrerit. Cras condimentum erat a sapien cursus, vel auctor odio cursus. Aenean ac mauris at ex venenatis lobortis id in ante. Nunc tristique, augue facilisis consectetur laoreet, sapien odio sodales risus, vitae condimentum arcu tellus eget lorem.</p>
                            <p>Cras tincidunt aliquam libero quis vehicula. Phasellus efficitur mattis lectus, sed dictum nisi ullamcorper non. Proin orci lacus, elementum a volutpat vitae, commodo vitae justo. Donec gravida purus non urna convallis consequat. In pharetra mollis nisi ut convallis. Maecenas sit amet dolor et purus mattis gravida.</p>
                    </article>
                </div>               
                            
            </div>

            <footer>
                Copyright &copy; <span class="tm-current-year">2018</span> Shelf Company 
                
                - Designed by Tooplate
            </footer>    
        </div>
        <!-- load JS files -->
        <script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="{{asset('assets/js/popper.min.js')}}"></script>                <!-- Popper (https://popper.js.org/) -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>             <!-- Bootstrap (https://getbootstrap.com/) -->
        <script>     
       
            $(document).ready(function(){
                
                // Update the current year in copyright
                $('.tm-current-year').text(new Date().getFullYear());

            });
        </script>             

@endsection