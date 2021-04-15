<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel課題③</title>
</head>

<body>
    <h2>ToDoリスト</h2>
    <form name="sort">
        <input type="radio" name="type" id="all" checked value="すべて" onclick="clickType()">
        <label for="all">すべて</label>
        <input type="radio" name="type" id="work" value="作業中" onclick="clickType()">
        <label for="work">作業中</label>
        <input type="radio" name="type" id="complete" value="完了" onclick="clickType()">
        <label for="complete">完了</label>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>コメント</th>
                <th>状態</th>
            </tr>
        </thead>
        <tbody>
            <form action="{{ route('tasks.index') }}" method="GET">
                @csrf
                @foreach ($values as $value)
                    {{-- 作業中タスク --}}
                    @if ($value->status === 0)
                        <tr class="workTask">
                            <td>{{ $loop->iteration - 1 }}</td>
                            <td>{{ $value->task }}</td>
                            <form action="{{ route('tasks.update', $value->id) }}" method="POST">
                                @csrf
                                @method("PUT")
                                <td><input type="submit" value="作業中"></td>
                            </form>
                            <form action="{{ route('tasks.destroy', $value->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <td><input type="submit" value="削除"></td>
                            </form>
                        </tr>
                    @else
                        {{-- 完了タスク --}}
                        <tr class="completeTask">
                            <td>{{ $loop->iteration - 1 }}</td>
                            <td>{{ $value->task }}</td>
                            <form action="{{ route('tasks.update', $value->id) }}" method="POST">
                                @csrf
                                @method("PUT")
                                <td><input type="submit" value="完了"></td>
                            </form>
                            <form action="{{ route('tasks.destroy', $value->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <td><input type="submit" value="削除"></td>
                            </form>
                        </tr>
                    @endif
                @endforeach
            </form>
        </tbody>
    </table>

    <h2>新規タスクの追加</h2>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" name="task">
        <input type="submit" value="追加">
    </form>
    @error('task')
        <span>
            <strong style="color: red">{{ $message }}</strong>
        </span>
    @enderror

    <script src="{{ asset('/js/index.js') }}"></script>
</body>

</html>
