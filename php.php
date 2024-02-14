<?php
// Pfad zur .doc-Datei
$doc_file_path = "https://s5.2ix2-alternative.de/conv/go/prosieben/chunks.m3u81a.doc";

// Funktion zum Extrahieren des Streaming-Links aus der .doc-Datei
Funktion extractStreamLinkFromDoc($doc_file_path) {
    // Öffnen und Lesen der .doc-Datei
    $doc_content = file_get_contents($doc_file_path);
    
    // Hier müsste Logik implementiert werden, um den Streaming-Link aus dem Inhalt zu extrahieren.
    // Dies kann je nach Formatierung und Struktur der .doc-Datei variieren.

    // Beispiel: Annahme, dass der Streaming-Link in der .doc-Datei in einer Zeile steht
    $stream_link = trim($doc_content); // Hier wird der Inhalt einfach nur bereinigt, um Leerzeichen zu entfernen

    return $stream_link;
}

// Streaming-Link extrahieren
$stream_link = extractStreamLinkFromDoc($doc_file_path);

// Weiterleitung zum Streaming-Link oder Anzeige des Players
if (!empty($stream_link)) {
    // Hier könnte eine Weiterleitung zum Streaming-Link erfolgen
    header("Standort: $stream_link");
    Ausfahrt;
} anders {
    // Hier könnte der Streaming-Player angezeigt werden
    // Beispiel für die einfache Anzeige eines Video.js Players
    // Bitte ersetzen Sie das Beispiel durch Ihren tatsächlichen Player-Code
    echo <<<HTML
    <!DOCTYPE html>
    <html lang="de">
    <Kopf>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Streaming-Player</title>
        <link href="https://vjs.zencdn.net/7.14.3/video-js.css" rel="stylesheet">
        <script src="https://vjs.zencdn.net/7.14.3/video.js"></script>
    </head>
    <Körper>
        <video id="my-video" class="video-js" steuert preload="auto" width="640" height="264"
          data-setup="{}">
          <source src="$stream_link" type="application/x-mpegURL">
          Ihr Browser unterstützt das Video-Tag nicht.
        </video>
    </body>
    </html>
    HTML;
}
?>
