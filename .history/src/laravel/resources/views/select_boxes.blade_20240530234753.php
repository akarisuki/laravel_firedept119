<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Select Boxes</title>
</head>
<body>
    <div id="app">
        <script>
            var initialData = {
                prefectures: @json($prefectures),
                fireDepartments: @json($fireDepartments)
            };
        </script>
        <script src="{{ mix('js/app.js') }}"></script>
    </div>
</body>
</html>