<?php

// Get Currency
function getCurrency()
{
    return "ريال";
}

// Get Currency Code
function getCurrencyCode()
{
    return "SAR";
}

// Get User Image
function getUserImage(\App\Models\User $user)
{
    if($user->image)
        return '<img src="'. asset($user->image) .'" />';
    else
        return '<img src="'. asset('assets/images/user.png') .'" />';
}
