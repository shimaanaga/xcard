@extends('front.layout.index')

@section('content')

    <div class="user-page">
        <div class="container">
            <div class="privacy-policy">


                <div class="section-title">{{$cat->translate(app()->getLocale())->title}}</div>
                <div class="bg-gray p-4 ">
                    <div class="accordion" id="accordionExample">

                        @foreach($blogs as $blog)
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">

                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#blog{{$blog->id}}" aria-expanded="true" aria-controls="blog{{$blog->id}}">
{{--                                            <a href="{{url('blog/'.$blog->id)}}">--}}
                                                {{$blog->translate(app()->getLocale())->title}}
{{--                                            </a>--}}

                                        </button>
                                    </h2>
                                </div>

                                <div id="blog{{$blog->id}}" class="collapse @if($loop->first) show @endif" aria-labelledby="headingOne"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        {!! $blog->translate(app()->getLocale())->content !!}
                                    </div>
                                </div>
                            </div>

                        @endforeach


                    </div>

                </div>


            </div>
        </div>
    </div>






{{--    <div class="user-page">--}}
{{--        <div class="container">--}}
{{--            <div class="privacy-policy">--}}


{{--                <div class="section-title">{{$cat->translate(app()->getLocale())->title}}</div>--}}
{{--                <div class="bg-gray p-4 ">--}}
{{--                    <div class="accordion" id="accordionExample">--}}

{{--                        <div class="card">--}}
{{--                            <div class="card-header" id="headingOne">--}}
{{--                                <h2 class="mb-0">--}}
{{--                                    <button class="btn btn-link" type="button" data-toggle="collapse"--}}
{{--                                            data-target="#ww" aria-expanded="true" aria-controls="ww">--}}
{{--                                        الاتفاقية وشروط استخدام موقع فلاي دبي الإلكتروني--}}

{{--                                    </button>--}}
{{--                                </h2>--}}
{{--                            </div>--}}

{{--                            <div id="ww" class="collapse show" aria-labelledby="headingOne"--}}
{{--                                 data-parent="#accordionExample">--}}
{{--                                <div class="card-body">يرجى قراءة هذه الشروط والأحكام بعناية قبل استخدام هذا الموقع. وإذا لم تكن موافقاً على هذه الشروط--}}
{{--                                    والأحكام، يجب عليك التوقف عن استخدام هذا الموقع. ولدرء أي شكّ، ترتبط هذه الشروط والأحكام فقط بوصولك--}}
{{--                                    واستخدامك للموقع، كضيف أو مستخدم مسجّل، كما يخضع أي نشاط على هذا الموقع لـ: شروط النقل الخاصة بنا--}}
{{--                                    وتنطبق هذه الشروط إذا أجريت حجزاً معنا؛ سياستنا المتعلقة بالخصوصية. تحدد هذه السياسة الأحكام التي نستند--}}
{{--                                    إليها في معالجة وتخزين وإدارة أي بيانات شخصية نقوم بجمعها منك، أو التي توافق على تزويدنا بها؛--}}
{{--                                    سياستنا المتعلقة بالاستخدام المسموح به. تحدد هذه السياسة الاستخدامات المسموحة وأي نشاط أو استخدام--}}
{{--                                    محظور يتعلق بموقعنا. عند استخدامك لموقعنا، يجب عليك التقيّد بسياسة الاستخدام المسموح في كافة الأوقات؛--}}
{{--                                    سياستنا المتعلقة بملفات الكوكيز. تفسّر هذه السياسة استخدام ملفات الكوكيز على موقعنا والمعلومات ذات الصلة.--}}
{{--                                    قواعد برنامج سكاي واردز طيران الإمارات. سوف تنطبق هذه الشروط والأحكام إذا كنت عضوًا في برنامج سكاي واردز--}}
{{--                                    باستخدامك لهذا الموقع، فإنك تؤكد وتوافق وتقبل تماماً دون أي شرط وبما لا يقبل النقض كافة الأحكام والشروط--}}
{{--                                    الواردة هنا وأي إشعارات قانونية أو سياسات أو توجيهات ترتبط بـ (اتفاقية) الأحكام والشروط هذه.</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        @foreach($blogs as $blog)--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header" id="headingOne">--}}
{{--                                <h2 class="mb-0">--}}
{{--                                    <button class="btn btn-link" type="button" data-toggle="collapse"--}}
{{--                                            data-target="#mm" aria-expanded="true" aria-controls="mm">--}}
{{--                                        الاتفاقية وشروط استخدام موقع فلاي دبي الإلكتروني--}}

{{--                                    </button>--}}
{{--                                </h2>--}}
{{--                            </div>--}}

{{--                            <div id="mm" class="collapse show" aria-labelledby="headingOne"--}}
{{--                                 data-parent="#accordionExample">--}}
{{--                                <div class="card-body">يرجى قراءة هذه الشروط والأحكام بعناية قبل استخدام هذا الموقع. وإذا لم تكن موافقاً على هذه الشروط--}}
{{--                                    والأحكام، يجب عليك التوقف عن استخدام هذا الموقع. ولدرء أي شكّ، ترتبط هذه الشروط والأحكام فقط بوصولك--}}
{{--                                    واستخدامك للموقع، كضيف أو مستخدم مسجّل، كما يخضع أي نشاط على هذا الموقع لـ: شروط النقل الخاصة بنا--}}
{{--                                    وتنطبق هذه الشروط إذا أجريت حجزاً معنا؛ سياستنا المتعلقة بالخصوصية. تحدد هذه السياسة الأحكام التي نستند--}}
{{--                                    إليها في معالجة وتخزين وإدارة أي بيانات شخصية نقوم بجمعها منك، أو التي توافق على تزويدنا بها؛--}}
{{--                                    سياستنا المتعلقة بالاستخدام المسموح به. تحدد هذه السياسة الاستخدامات المسموحة وأي نشاط أو استخدام--}}
{{--                                    محظور يتعلق بموقعنا. عند استخدامك لموقعنا، يجب عليك التقيّد بسياسة الاستخدام المسموح في كافة الأوقات؛--}}
{{--                                    سياستنا المتعلقة بملفات الكوكيز. تفسّر هذه السياسة استخدام ملفات الكوكيز على موقعنا والمعلومات ذات الصلة.--}}
{{--                                    قواعد برنامج سكاي واردز طيران الإمارات. سوف تنطبق هذه الشروط والأحكام إذا كنت عضوًا في برنامج سكاي واردز--}}
{{--                                    باستخدامك لهذا الموقع، فإنك تؤكد وتوافق وتقبل تماماً دون أي شرط وبما لا يقبل النقض كافة الأحكام والشروط--}}
{{--                                    الواردة هنا وأي إشعارات قانونية أو سياسات أو توجيهات ترتبط بـ (اتفاقية) الأحكام والشروط هذه.</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        @endforeach--}}


{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}





@endsection
