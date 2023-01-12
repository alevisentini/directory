<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Entity</title>
</head>
<body>
    <h1>Entity</h1>
    @forelse ($entities as $entity)
        <p>{{ $entity }}</p>
    @empty
        <p>No entities found</p>
    @endforelse
</body>
</html>