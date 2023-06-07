@extends('main')
@section('content')

    <div class="lg:mt-4 p-4"> 
        <p class="text-blue-900 text-right font-cairo text-xl" style="direction: rtl;">
            الذكاء الاصطناعي دلوقتي بيسهل مهام مُهندسي البرمجة وبيوفر الوقت والجهد وبيساعد في عمليات البرمجة المختلفة، عن طريق إنشاء الاكواد بطريقة سريعة باستخدام تقنيات حديثة، فمثلًا بيقوم الذكاء الاصطناعي بإختبار الكود للتأكد من عدم وجود اي عيوب في المشروع، المواقع والبرامج التالية هتسهل عمل المبرمجين
.
        </p>
    </div>

    <div class="lg:m-4 lg:flex mb-4">
        <div class="lg:w-1/2 w-11/12 lg:h-80 h-max border border-gray-300 rounded-lg p-4 m-4 bg-blue-900">
            <div class="lg:relative lg:top-1/4">
                <a class="underline underline-offset-8 text-white text-2xl" href="https://www.useblackbox.io/">Blackbox</a>
                <p class="mt-4 text-xl text-right font-cairo text-white">مساعد الترميز المدعوم بالذكاء الاصطناعي عشان تقدر تكود عشر مرات أسرع وأفضل</p>
            </div>
        </div>

        <div class="lg:w-1/2 w-11/12 lg:h-80 h-max border border-gray-300 rounded-lg p-4 m-4 bg-blue-900">
            <div class="lg:relative lg:top-1/4">
                <a class="underline underline-offset-8 text-2xl text-white" href="https://github.com/features/copilot">GitHub Copilot</a>
                <p class="mt-4 text-right font-cairo text-xl text-white">مصمم لمساعدة المطورين على صياغة اكواد عالية الجودة بكفاءة أكبر</p>
            </div>
        </div>
    </div>
@endsection
