<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Person",
      "name": "Jessica Gómez",
      "gender": "Female",
      "homeLocation": "Gijón",
      "jobTitle": "Writer",
      "hasOccupation": {
        "@type": "Occupation",
        "name": "Writer"
        }
    }
</script>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Jessica Gómez. Sitio oficial de la autora",
      "applicationCategory": "Blog",
      "author": {
            "@type": "Person",
            "name": "Ariel González Fernández",
            "birthDate": "1998-02-21",
            "birthPlace": {
                "@type": "Place",
                "address": "Avilés, Asturias, España"
            },
            "jobTitle": "Web developer"
        }
    }
</script>

<?php 
    include get_template_directory() . '/components/portada/portada.php';
    include get_template_directory() . '/components/bloque-libros/bloque-libros.php';
	include get_template_directory() . '/components/bloque-colaboraciones/bloque-colaboraciones.php';
    include get_template_directory() . '/components/featured-articles/featured-articles.php';
?>