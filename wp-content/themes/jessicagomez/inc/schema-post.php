<?php
function generateStructuredData($title, $description, $url, $image, $authorName, $authorUrl, $datePublished) {
    // Construcción del array para los datos estructurados
    $structuredData = [
        "@context" => "https://schema.org",
        "@type" => "BlogPosting",
        "mainEntityOfPage" => [
            "@type" => "WebPage",
            "@id" => $url,
        ],
        "headline" => $title,
        "description" => $description,
        "image" => $image,
        "author" => [
            "@type" => "Person",
            "name" => $authorName,
            "url" => $authorUrl,
        ],
        "datePublished" => $datePublished,
    ];

    // Convertir a JSON
    return json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}
?>
