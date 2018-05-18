<?php
$price_pro=get_field('price_pro');
$after_price_text_pro=get_field('after_price_text_pro');
$option_one_pro=get_field('option_one_pro');
$option_two_pro=get_field('option_two_pro');
$option_three_pro=get_field('option_three_pro');
$option_four_pro=get_field('option_four_pro');
$sign_up_link_pro=get_field('sign_up_link_pro');

$price_premium=get_field('price_premium');
$after_price_text_premium=get_field('after_price_text_premium');
$option_one_premium=get_field('option_one_premium');
$option_two_premium=get_field('option_two_premium');
$option_three_premium=get_field('option_three_premium');
$option_four_premium=get_field('option_four_premium');
$sign_up_link_premium=get_field('sign_up_link_premium');

$price_starter=get_field('price_starter');
$after_price_text_starter=get_field('after_price_text_starter');
$option_one_starter=get_field('option_one_starter');
$option_two_starter=get_field('option_two_starter');
$option_three_starter=get_field('option_three_starter');
$option_four_starter=get_field('option_four_starter');
$sign_up_link_starter=get_field('sign_up_link_starter');

?>
<section class="section-plans js-section-plan" id="signup">
    <div class="row">
        <h2>Start eating healthy today</h2>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="plan-box js-wp-2">
                <div>
                    <h3>Premium</h3>
                    <p class="plan-price">$<?php echo $price_premium;?><span> /month</span></p>
                    <p class="plan-price-meal"><?php echo $after_price_text_premium;?></p>

                </div>

                <div>
                    <ul>
                        <li>
                            <i class="ion-ios-checkmark-empty icon-small"></i><?php echo $option_one_premium;?>
                        </li>
                        <li>
                            <i class="ion-ios-checkmark-empty icon-small"></i><?php echo $option_two_premium;?>
                        </li>
                        <li>
                            <i class="ion-ios-checkmark-empty icon-small"></i><?php echo $option_three_premium;?>
                        </li>
                        <li>
                            <i class="ion-ios-checkmark-empty icon-small"></i><?php echo $option_four_premium;?>
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="<?php echo $sign_up_link_premium;?>" class="btn btn-full">Sign up now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="plan-box js-wp-2">
                <div>
                    <h3>Pro</h3>
                    <p class="plan-price">$<?php echo $price_pro;?><span> /month</span></p>
                    <p class="plan-price-meal"><?php echo $after_price_text_pro;?></p>

                </div>

                <div>
                    <ul>
                        <li>
                            <i class="ion-ios-checkmark-empty icon-small"></i><?php echo $option_one_pro;?>
                        </li>
                        <li>
                            <i class="ion-ios-checkmark-empty icon-small"></i><?php echo $option_two_pro;?>
                        </li>
                        <li>
                            <i class="ion-ios-checkmark-empty icon-small"></i><?php echo $option_three_pro;?>
                        </li>
                        <li>
                            <i class="ion-ios-checkmark-empty icon-small"></i><?php echo $option_four_pro;?>
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="<?php echo $sign_up_link_pro;?>" class="btn btn-ghost">Sign up now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="plan-box js-wp-2">
                <div>
                    <h3>Starter</h3>
                    <p class="plan-price">$<?php echo $price_starter;?><span> /meal</span></p>
                    <p class="plan-price-meal"><?php echo $after_price_text_starter;?></p>

                </div>

                <div>
                    <ul>
                        <li>
                            <i class="ion-ios-checkmark-empty icon-small"></i><?php echo $option_one_starter;?>
                        </li>
                        <li>
                            <i class="ion-ios-checkmark-empty icon-small"></i><?php echo $option_two_starter;?>
                        </li>
                        <li>
                            <i class="ion-ios-close-empty icon-small"><?php echo $option_three_starter;?></i>
                        </li>
                        <li>
                            <i class="ion-ios-checkmark-empty icon-small"></i><?php echo $option_four_starter;?>
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="<?php echo $sign_up_link_starter;?>" class="btn btn-ghost">Sign up now</a>
                </div>
            </div>
        </div>
    </div>
</section>