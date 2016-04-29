<?php

namespace App\Awesome\Traits\Controllers\User;

use App\Category;

trait CompetitionTrait
{

    /**
     * Granted competitions that need a product upload.
     *
     * @var Collection
     */
    private $grantedForProduct;

    /**
     * To initialize attributes like contructor.
     */
    public function initialization()
    {
        $this->grantedForProduct = Category::where('name', 'Web Development Competition')
            ->orWhere('name', 'Fotografi')
            ->orWhere('name', 'Insta Video')->get();
    }

    /**
     * Ensure that the logged in user can access the page only when
     * at least he has been registered in some competition.
     *
     * @return string
     */
    public function atLeatHasBeenRegistered()
    {
        $rs = auth()->user()->category()->first();

        if ($rs == null) {
            alert()->error("Silahkan daftar kompetisi terlebih dahulu")->persistent("Close");

            return "/dashboard/competitions/register";
        }

        return "";
    }

    /**
     * Ensure that the logged in user can access the page only when
     * his registered competition contained in $grantedForProduct.
     *
     * @return bool
     */
    public function onlyGrantedCompetitions($user = null)
    {
        if ($user == null) {
            $user = auth()->user();
        }

        foreach($this->grantedForProduct as $G) {
            if ($user->hasCategory($G->name)) return true;
        }

        return false;
    }

}
