<?php

namespace psrm\models;

class Donation extends Settings {
	const Group = 'donations';
	const StripeSecretKeyOptionName = 'stripe_secret_key';
	const StripePublicKeyOptionName = 'stripe_public_key';
	const CheckoutImageUrlOptionName = 'checkout_image_url';
	const AllowCustomAmountOptionName = 'allow_custom_amount';
	const CustomAmountFloorOptionName = 'custom_donation_floor';
	const EmailSuccessfulDonationOptionName = 'email_successful_donation';
	const StripeDashboardUrlOptionName = 'stripe_dashboard_url';
	const DonationAmounts = 'donation_amounts';
	const DonationFunds = 'donation_funds';
}
