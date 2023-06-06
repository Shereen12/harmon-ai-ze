@extends('main')
@section('content')

    <div class="lg:mt-4 p-4"> 
        <p class="text-blue-900 text-right font-cairo text-xl">
            الذكاء الاصطناعي ممكن يساعد في تحويل مجال التدبير الصوتي والترجمة. فبمساعدته، المدبلجين والمترجمين هينتجوا المحتوى الصوتي والمرئي بشكل سريع ودقيق، علشان بيتعرف على الأصوات واللهجات والألفاظ المستخدمة في الفيديو، و بعدها بتتحول  إلى ترجمة متوافقة مع اللغة المستهدفة.    </div>

    <div class="lg:m-4 lg:flex mb-4">
        <div class="lg:w-1/2 w-11/12  lg:h-64 h-max  border border-gray-300 rounded-lg p-4 m-4 bg-blue-900">
            <div class="relative top-1/4">
                <a class="underline underline-offset-8 text-white text-2xl" href="https://beta.elevenlabs.io/">Elevenlabs</a>
                <p class="mt-4 text-xl text-right font-cairo text-white">البرنامج الأكثر واقعية لتحويل النص إلى كلام واستنساخ الصوت. يجلب هذا الموقع الأصوات الأكثر إقناعًا وثراءً وواقعية للمبدعين والناشرين الباحثين عن الأدوات المثلى لسرد القصص</p>
            </div>
        </div>

        <div class="lg:w-1/2 w-11/12 lg:h-64 h-max border border-gray-300 rounded-lg p-4 m-4 bg-blue-900">
            <div class="relative top-1/4">
                <a class="underline underline-offset-8 text-2xl text-white" href="http://autocap.app.s3-website-us-east-1.amazonaws.com/index.html">Autocap</a>
                <p class="mt-4 text-right font-cairo text-xl text-white">التسميات التوضيحية التلقائية للفيديو ، يستخدم هذا التطبيق أحدث تقنيات التعرف على الصوت لنسخ الصوت من مقاطع الفيديو في أسرع وقت ممكن</p>
            </div>
        </div>
    </div>
@endsection
