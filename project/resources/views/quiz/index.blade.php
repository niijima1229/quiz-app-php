<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    </style>
    <title>東京地名クイズ</title>
</head>

<body>
    <div class="w-full">
        <main class="w-fit mx-auto mt-8">
            @foreach ($questions as $question)
                <h2 class="text-2xl font-bold mt-8">{{ $loop->iteration }}. この地名はなんと読む？</h2>
                <div class="text-center">
                    <img src="{{ $question->img_link }}" alt="問題の写真" class="margin-0">
                </div>
                @foreach ($question->choices as $choice)
                    <div class="border border-slate-200 mb-4 p-3 question_{{ $question->id }}_choice @if ($choice->is_correct) question_{{ $question->id }}_answer @endif"
                        id="question_{{ $question->id }}_choice_{{ $choice->id }}"
                        onclick="show_result({{ $question->id }}, {{ $choice->is_correct }}, {{ $choice->id }})">
                        <span class="font-semibold">{{ $choice->name }}</span>
                    </div>
                @endforeach
                <div class="bg-slate-100 p-3 hidden" id="result_box_{{ $question->id }}">
                    <span class="font-semibold border-b-4" id="result_{{ $question->id }}"></span>
                    <p class="mt-2">正解は{{ $question->answer }}です！</p>
                </div>
            @endforeach
        </main>
    </div>
</body>
<script>
    function show_result(id, is_correct, choice_id) {
        const result_box = document.getElementById('result_box_' + id)
        const result_text = document.getElementById('result_' + id)
        const choices = document.getElementsByClassName('question_' + id + '_choice')
        if (is_correct) {
            result_text.innerText = "正解"
            result_text.classList.add('border-sky-500')
        } else {
            result_text.innerText = "不正解"
            result_text.classList.add('border-red-500')
            document.getElementById('question_' + id + '_choice_' + choice_id).classList.add('bg-red-500', 'text-white')
        }
        document.getElementsByClassName('question_' + id + '_answer')[0].classList.add('bg-sky-500', 'text-white')
        result_box.classList.remove('hidden')

        // 二重クリック防止
        for (let i = 0; i < choices.length; i++) {
            choices[i].classList.add('pointer-events-none')
        }
    }
</script>

</html>
