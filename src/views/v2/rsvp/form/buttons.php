<?php
/**
 * Block: RSVP
 * Form fields
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/tickets/v2/rsvp/form/buttons.php
 *
 * See more documentation about our Blocks Editor templating system.
 *
 * @link https://m.tri.be/1amp Help article for RSVP & Ticket template files.
 *
 * @since 4.12.3
 *
 * @version 5.0.0
 */

?>
<div class="tribe-tickets__rsvp-form-buttons">
	<?php $this->template( 'v2/rsvp/form/fields/cancel', [ 'rsvp' => $rsvp, 'going' => $going ] ); ?>
	<?php $this->template( 'v2/rsvp/form/fields/submit', [ 'rsvp' => $rsvp, 'going' => $going ] ); ?>
</div>
