<?php
/**
 * template raised
 */
?>
<div class="donate_campaign_goal_raised">
	<div class="campaign_raised" data-raised="<?php echo esc_attr( donate_total_campagin() ) ?>"><?php printf( '%s', donate_price( donate_total_campagin() ) ) ?></div>
	<div class="campaign_goal" data-goal="<?php echo esc_attr( donate_goal_campagin() ) ?>"><?php printf( '%s', donate_price( donate_goal_campagin() ) ) ?></div>
</div>