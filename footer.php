<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper pt-0 pb-0" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<h2>Official Sponsors</h2>
					<div class="container">
						<ul class="sponsor-list text-center">
							<li>
								<a href="http://www.thegreatoutdoorsmarine.com/">
									<img src="/wp-content/themes/wvbassnation/images/greatOutdoors.png" alt="The Great OUtdoors Marine" />
								</a>
							</li>
							<li>
								<a href="http://mccallsmarine.com/">
									<img src="/wp-content/themes/wvbassnation/images/McCallsMarinelogo.png" alt="McCall's Marine" />
								</a>
							</li>
							<li>
								<img src="/wp-content/themes/wvbassnation/images/TDsShakyHeads.png" alt="TD's Shaky Heads" />
							</li>
							<li>
								<a href="http://www.parmarstores.com/">
									<img src="/wp-content/themes/wvbassnation/images/ParMar.png" alt="TDs Shaky Heads" />
								</a>
							</li>
							<li>
								<a href="https://www.facebook.com/304LURES">
									<img src="/wp-content/themes/wvbassnation/images/304Lures.png" alt="304 Lures" />
								</a>
							</li>
							<li>
								<a href="http://www.mountainstatewaste.com/">
									<img src="/wp-content/themes/wvbassnation/images/MtnStateWaste.png" alt="Mountain State Waste" />
								</a>
							</li>
							<li>
								<img src="/wp-content/themes/wvbassnation/images/MARIONCOUNTYSEAL.png" alt="Marion County Seal" />
							</li>
						</ul>
					</div>

					<h2>Supporting Sponsors</h2>
					<div class="container">
						<ul class="sponsor-list text-center">
							<li>
								<img src="/wp-content/themes/wvbassnation/images/Express-One.png" alt="Express One" />
							</li>
						</ul>
					</div>

					<h2>National Sponsors</h2>
					<div class="container">
						<ul class="sponsor-list text-center">
							<li>
								<a href="http://www.bassmaster.com/team">
									<img src="/wp-content/themes/wvbassnation/images/BassMaster.png" alt="Bassmaster Team Championship" />
								</a>
							</li>
							<li>
								<a href="https://www.basspro.com/">
									<img src="/wp-content/themes/wvbassnation/images/BassProShops.png" alt="Bass Pro Shops" />
								</a>
							</li>
							<li>
								<a href="http://www.tritonboats.com/">
									<img src="/wp-content/themes/wvbassnation/images/Triton.png" alt="Bass Pro Shops" />
								</a>
							</li>
							<li>
								<a href="http://www.toyota.com/tundra/#!/Welcome">
									<img src="/wp-content/themes/wvbassnation/images/ToyotaTrucks.png" alt="Toyota Tundra" />
								</a>
							</li>
							<li>
								<a href="https://www.humminbird.com/freshwater/home/">
									<img src="/wp-content/themes/wvbassnation/images/Humminbird.png" alt="Hummin Bird" />
								</a>
							</li>
							<li>
								<a href="https://skeeterboats.com/About-Skeeter.php?content=sales_event">
									<img src="/wp-content/themes/wvbassnation/images/realMoney.png" alt="Skeeter Performance Fishing Boats Real Money" />
								</a>
							</li>
							<li>
								<a href="https://www.mercurymarine.com/en/us/">
									<img src="/wp-content/themes/wvbassnation/images/MercuryMarine.jpeg" alt="Mercury Marine" />
								</a>
							</li>
							<li>
								<a href="https://www.minnkotamotors.com/">
									<img src="/wp-content/themes/wvbassnation/images/minnkota.png" alt="Mercury Marine" />
								</a>
							</li>
							<li>
								<a href="http://www.motorguide.com/">
									<img src="/wp-content/themes/wvbassnation/images/MotorGuide.png" alt="Motor Guide" />
								</a>
							</li>
							<li>
								<a href="https://aftco.com/">
									<img src="/wp-content/themes/wvbassnation/images/AFTCO.png" alt="AFTCO" />
								</a>
							</li>
						</ul>
					</div>
				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->
	<div class="tagline">
		<div class="container">
			<p>&copy; B.A.S.S. Nation of West Virginia</p>
			<p class="goattech mb-0">Site by <a href="http://goattech.co">GoatTech, LLC</a></p>
		</div>
	</div>
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
