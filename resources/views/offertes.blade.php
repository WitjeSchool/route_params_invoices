<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Offerte Details</h1>
    <p>Offertenummer: {{ $offerteNummer }}</p>
    <h2>Klantgegevens</h2>
    <ul>
        @if (array_key_exists($offerteNummer, $offertes))

            @foreach ($offertes[$offerteNummer] as $key => $value)
                <li><strong>{{ ucfirst($key) }}:</strong> {{ $value }}</li>
            @endforeach

        @else
            <li>Geen gegevens beschikbaar voor dit offertenummer.</li>
        @endif
    </ul>
</body>
</html>