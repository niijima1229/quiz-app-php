<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>東京地名クイズ</title>
</head>

<body>
    @foreach ($questions as $question)
        <h2>{{ $loop->iteration }}. この地名はなんと読む？</h2>
        <img src="{{ $question->img_link }}" alt="問題の写真">
        @foreach ($question->choices as $choice)
            <div>
                <span>{{ $choice->name }}</span>
            </div>
        @endforeach
    @endforeach
</body>

</html>
