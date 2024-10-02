=== RedSys Gateway for WooCommerce ===
Contributors: carazo, hornero
Donate link: http://paypal.me/codection
Tags: woocommerce, servired, redsys, credit card, martercard, visa, ecommerce
Requires at least: 3.5
Tested up to: 4.3.1
Stable tag: 1.1.9
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Integración para WooCommerce del sistema de pago por tarjeta Servired / RedSys / Sermepa.

== Description ==

> **RedSys Gateway for WooCommerce PRO**<br /><br />
> Desde el 23 de noviembre de 2015 este plugin dejará de funcionar. En estos posts te explicamos los motivos:  [Codection](http://codection.com/actualiza-tu-poocommerce-pro/) y [LinuxHispano](http://www.linuxhispano.net/2015/11/19/redsys-gateway-for-woocommerce-la-pasarela-redsys/). En resumen, porque el cifrado y protocolo con RedSys ha cambiado por completo.<br /><br />
> ¿Y ahora cómo puedo usar RedSys? desde Codection, la empresa que está detrás de éste y otros desarrollos, queremos ofrecerte **la mejor experiencia y funcionalidad añadida**. Por ello hemos preparado con mimo y detalle un plugin escrito desde cero, con los requisitos que muchos nos habéis pedido y con un soporte excepcional.<br /><br /> Actualiza ahora a [RedSys Gateway for WooCommerce PRO](http://codection.com/producto/redsys-gateway-for-woocommerce/) por **19,95 €**.

Con este plugin podemos usar pasarelas de pago de bancos españoles con WooCommerce. RedSys a día de hoy es el método más usado por la mayor parte de los bancos: Banco Santander, BBVA, La Caixa, ING, etc. El plugin incorpora un formulario de configuración para sólo tener que introducir los datos que nos ofrezcan desde el banco. Este formulario, tiene una validación incorporada para facilitar su uso y minimizar errores.

Algunas características interesantes:

*   El plugin automáticamente marca el pedido como completado si el pago se realiza de forma satisfactoria.
*   Preparado para internacionalización
*   WPML ready

Si quieres ver cómo funciona el plugin y cómo se configuran los datos del banco directamente en un vídeo, puedes hacerlo con este vídeo de <a href="https://www.youtube.com/watch?v=tFz7m9ls3XU">Webempresa en YouTube</a>.

[youtube https://www.youtube.com/watch?v=tFz7m9ls3XU]

The description of this plugin is in Spanish because of RedSys is a system from Spanish banks. If need anything about it in English, tell us directly at contacto AT codection DOT com.

== Installation ==

Puede instalarlo automáticamente desde Wordpress, o manualmente:

1. Descomprima el archivo, y copie la carpeta 'woocommerce-servired-integration-light' en su carpeta de plugins del servidor (/wp-content/plugins/).
1. Active el plugin desde el menú de Plugins.

== Preguntas frecuentes (FAQs) ==

= Configuración =

1. Nos aseguramos en Plugins que este plugin está activado
2. Nos dirigimos al menú, concretamente a WooCommerce -> Ajustes -> Finalizar compra, arriba veremos RedSys/Servired, hacemos clic sobre ese enlace
3. Rellenamos el formulario
Si tienes dudas con la configuración escríbenos a <a href="mailto:contacto@codection.com">contacto@codection.com</a> o mira este vídeo de <a href="https://www.youtube.com/watch?v=tFz7m9ls3XU">Webempresa en YouTube</a>.

= ¿Cómo consigo una pasarela de pago para que mis clientes paguen con tarjeta? =
Debe hablar este tema directamente con su banco y asegurarse que le ofrecen una pasarela del tipo ReSys o Sermepa o Servired. Una vez contratada la pasarela le enviarán los datos necesarios, los introducierá en el formulario de configuración y el plugin estará listo para funcionar.

Lea detenidamente las condiciones de la pasarela y aparte, también el correo que le envíen, los bancos suelen activar las pasarelas en pruebas para posteriormente pasarlas a producción.

== Screenshots ==

1. Formulario de datos de la configuración de WooCommerce
2. Pasarela de pago en el front-end en la selección del proceso de pago.

== Changelog ==

= 1.1.9 =
* Más modificaciones anuncio por cambio de fecha

= 1.1.8 =
* Modificación anuncio

= 1.1.7 =
* Anuncio cupón descuento

= 1.1.6 =
* Aviso de disponibilidad de RedSys Gateway For WooCommerce Pro con soporte para SHA-256 en RedSys

= 1.1.5 =
* Ahora es posible elegir entre tarjetas de crédito y iupay o sólo tarjetas de crédito

= 1.1.4 =
* Se ha incluido un condicional para que el plugin no dé error si WooCommerce se desactiva. Gracias a erseco (https://wordpress.org/support/topic/controlar-desactivacion-de-woocommerce?replies=2#post-7465871)

= 1.1.3 =
* Enlace para donaciones incluido y el otro enlace para donaciones actualizado

= 1.1.2 =
* Traducciones actualizadas

= 1.1.1 =
* Error arreglado

= 1.1 =
* Tras completar el pago de forma exitosa ahora se hacen dos acciones más: se actualiza el stock y se vacía el carrito de la compra

= 1.0.1 =
* Añadimos vídeo de funcionamiento del plugin gracias a Webempresa
* RedSys ahora es el tipo de pasarela por defecto
* Cambiamos formato de versiones

= 1.00 =
* Saltamos a versión 1.00 por estabilidad del plugin y por nuevas características
* Se ha introducido la opción de elegir qué hacer con el pedido tras recibir el pago: si marcarlo siempre como procesando, siempre como pagado o marcarlo como procesando o pagado en función a la presencia de productos virtuales y/o descargables

= 0.94 =
* Más arreglos de lo anterior

= 0.93 =
* Recogida de respuesta IPN arreglada

= 0.92 =
* Más arreglos en créditos y textos.
* Banner modificado

= 0.91 =
* Arreglados créditos, textos y agregadas imágenes.

= 0.9 =
* Versión inicial.
