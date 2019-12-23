<footer>

    <div class="container">

        <div class="text-center">
            <div class="payment-methods mb-4">
                <img src="{{asset('front/images/payment.png')}}" alt="" class="img-fluid">
            </div>
            @php
             $footer_sections = \App\Models\ContentSection::where('type', 'footer')->orderBy('order', 'asc')
            ->select('content_sections.id','content_sections.columns')
            ->get();
            @endphp
            @foreach($footer_sections as $section)
                <?php $contents_data = \App\Models\ContentSectionTranslation::where('content_section_id' , $section['id'])->where('locale',\app()->getLocale())->get();?>

                <ul class="footer-nav list-inline ">
                    @foreach($contents_data as $single_content)
                        <li class="list-inline-item"><a href=""> {{strip_tags($single_content['content'])}} </a></li>
                    @endforeach

                </ul>
            @endforeach

        </div>


    </div>
    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p><a href="https://www.serv5.com"> {{_i('Serv5 Programming')}}
                        </a></p>

                </div>
                <div class="col-md-6">
                    <p class="cr">{{_i('all rights are save')}} © {{date('Y')}} </p>

                </div>
            </div>


        </div>
    </div>

</footer>
