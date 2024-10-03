</div><!-- zinnias-main-wrap -->
</div><!-- col-md-12 -->
</div><!-- row -->

<div class="footer-copy-right">
	footer
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<?php
				$avisos       = " | <a href='http://jessicagomezautora.com/aviso-legal-politica-de-privacidad/'> Aviso legal | </a> <a href='http://jessicagomezautora.com/politica-de-privacidad/'> Política de privacidad </a> | <a href='http://jessicagomezautora.com/politica-de-cookies/'> Política de cookies </a> | <a href='http://jessicagomezautora.com/condiciones-de-venta/'> Condiciones de venta </a> | <a href='http://jessicagomezautora.com/contacto/'> Contacto </a> " ;
				$copyright    = get_theme_mod( 'copy_right_text' ).$avisos;
				$allowed_tags = array(
					'strong' => array(),
					'a'      => array(
						'href'  => array(),
						'title' => array()
					)
				);
				echo wp_kses( $copyright, $allowed_tags ); ?>
			</div>
		</div>
	</div>
</div><!-- footer-copy-right -->

</div><!-- container -->

<?php wp_footer(); ?>
</body>
</html>