<?php
$image_meal_one=get_field('image_meal_one');
$image_meal_two=get_field('image_meal_two');
$image_meal_three=get_field('image_meal_three');
$image_meal_four=get_field('image_meal_four');
$image_meal_five=get_field('image_meal_five');
$image_meal_six=get_field('image_meal_six');
$image_meal_seven=get_field('image_meal_seven');
$image_meal_eight=get_field('image_meal_eight');
?>

<section class="section-meals">
    <ul class="meals-showcase clearboth">
        <li>
            <figure class="meal-photo">
                <img src="<?php echo $image_meal_one['url'];?>" alt="<?php echo $image_meal_one['alt'];?>">
            </figure>
        </li>
        <li>
            <figure class="meal-photo">
                <img src="<?php echo $image_meal_two['url'];?>" alt="<?php echo $image_meal_two['alt'];?>">
            </figure>
        </li>
        <li>
            <figure class="meal-photo">
                <img src="<?php echo $image_meal_three['url'];?>" alt="<?php echo $image_meal_three['alt'];?>">
            </figure>
        </li>
        <li>
            <figure class="meal-photo">
                <img src="<?php echo $image_meal_four['url'];?>" alt="<?php echo $image_meal_four['alt'];?>">
            </figure>
        </li>
    </ul>
    <ul class="meals-showcase clearboth">
        <li>
            <figure class="meal-photo">
                <img src="<?php echo $image_meal_five['url'];?>" alt="<?php echo $image_meal_five['alt'];?>">
            </figure>
        </li>
        <li>
            <figure class="meal-photo">
                <img src="<?php echo $image_meal_six['url'];?>" alt="<?php echo $image_meal_six['alt'];?>">
            </figure>
        </li>
        <li>
            <figure class="meal-photo">
                <img src="<?php echo $image_meal_seven['url'];?>" alt="<?php echo $image_meal_seven['alt'];?>">
            </figure>
        </li>
        <li>
            <figure class="meal-photo">
                <img src="<?php echo $image_meal_eight['url'];?>" alt="<?php echo $image_meal_eight['alt'];?>">
            </figure>
        </li>
    </ul>
</section>